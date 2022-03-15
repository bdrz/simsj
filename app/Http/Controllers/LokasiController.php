<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    public function index()
    {
        $lokasi = Lokasi::all();
        return view('dashboard.lokasi.index', compact('lokasi'));
    }
    public function add(Request $request)
    {
        $validated = $request->validate([
        'nama' => 'required',
        ]);
        $lokasi = new Lokasi();
        $lokasi->nama = $request->nama;
        $lokasi->user_id = auth()->user()->id;
        $lokasi->save();

        $log = new Log;
        $log->user=auth()->user()->id;
        $log->action = "Menambah data Lokasi ".$request->nama;
        $log->raw = $request;
        $log->save();
        return redirect('/lokasi')->with(['message' => 'Data Lokasi berhasil ditambah']);
    }
    public function edit(Request $request)
    {
        $validated = $request->validate([
        'nama' => 'required',
        ]);
        $lokasi = Lokasi::find($request->id);
        $lokasi->nama = $request->nama;
        $lokasi->save();

        $log = new Log;
        $log->user=auth()->user()->id;
        $log->action = "Edit data Lokasi ".$request->nama;
        $log->raw = $request;
        $log->save();
        return redirect('/lokasi')->with(['message' => 'Data Lokasi berhasil diupdate']);
    }

    public function delete(Request $request)
    {
        Lokasi::destroy($request->id);

        $log = new Log;
        $log->user=auth()->user()->id;
        $log->action = "Menghapus data Lokasi ".$request->nama;
        $log->raw = $request;
        $log->save();
        return redirect('/lokasi')->with(['message' => 'Data Lokasi berhasil dihapus']);
    }

}
