<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Unit;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        $lokasi = Lokasi::all();
        $unit = Unit::orderby('lokasi_id')->get();
        return view('dashboard.unit.index', compact('lokasi','unit'));
    }
    public function add(Request $request)
    {
        $validated = $request->validate([
        'lokasi_id' => 'required',
        'nama' => 'required',
        'jenis' => 'required',
        'tipe' => 'required',
        ]);

        $insert = new Unit();
        $insert->lokasi_id = $request->lokasi_id;
        $insert->nama = $request->nama;
        $insert->jenis = $request->jenis;
        $insert->tipe = $request->tipe;
        $insert->user_id = auth()->user()->id;
        $insert->save();

        $log = new Log;
        $log->user=auth()->user()->id;
        $log->action = "Menambah data Unit ".$request->nama;
        $log->raw = $request;
        $log->save();
        return redirect('/unit')->with(['message' => 'Data Unit berhasil ditambah']);
    }
    public function edit(Request $request)
    {
        $validated = $request->validate([
        'lokasi_id' => 'required',
        'nama' => 'required',
        'jenis' => 'required',
        'tipe' => 'required',
        ]);

        $update = Unit::find($request->id);
        $update->lokasi_id = $request->lokasi_id;
        $update->nama = $request->nama;
        $update->jenis = $request->jenis;
        $update->tipe = $request->tipe;
        $update->user_id = auth()->user()->id;
        $update->save();

        $log = new Log;
        $log->user=auth()->user()->id;
        $log->action = "Edit data Unit ".$request->nama;
        $log->raw = $request;
        $log->save();
        return redirect('/unit')->with(['message' => 'Data Unit berhasil diedit']);
    }
    public function delete(Request $request)
    {
    Unit::destroy($request->id);

    $log = new Log;
    $log->user=auth()->user()->id;
    $log->action = "Menghapus data Unit ".$request->nama;
    $log->raw = $request;
    $log->save();
    return redirect('/unit')->with(['message' => 'Data Unit berhasil dihapus']);
    }
}
