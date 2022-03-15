<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Leader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LeaderControler extends Controller
{
    public function tambah()
    {
    return view('dashboard.leader.tambah');
    }
    public function add(Request $request)
    {
        $validated = $request->validate([
            'nik' => 'required|unique:member,nik',
            'nama' => 'required',
            'hp' => 'required',
        ]);

        if ($request->ktp) {
            $name = 'ktp_'.$request->nik.'.'.$request->ktp->getClientOriginalExtension();
            $path = 'data/leader/'.$request->nik;
            $fullpath = 'public/'.$path.'/'.$name;
            Storage::disk('public')->putFileAs($path, ($request->ktp), $name);
            $ktp_upload = true;
            $ktp_path = $fullpath;
        }else {
            $ktp_upload = false;
            $ktp_path = NULL;
        }
        if ($request->npwp) {
            $name = 'npwp_'.$request->nik.'.'.$request->npwp->getClientOriginalExtension();
            $path = 'data/leader/'.$request->nik;
            $fullpath = 'public/'.$path.'/'.$name;
            Storage::disk('public')->putFileAs($path, ($request->npwp), $name);
            $npwp_upload = true;
            $npwp_path = $fullpath;
        }else {
            $npwp_upload = false;
            $npwp_path = NULL;
        }

        $insert = new Leader();
        $insert->nik = $request->nik;
        $insert->nama = $request->nama;
        $insert->hp = $request->hp;
        $insert->alamat = $request->alamat;
        $insert->bank_rek = $request->bank_rek;
        $insert->no_rek = $request->no_rek;
        $insert->an_rek = $request->an_rek;
        $insert->ktp_upload = $ktp_upload;
        $insert->ktp_path = $ktp_path;
        $insert->npwp_upload = $npwp_upload;
        $insert->npwp_path = $npwp_path;
        $insert->user_id = auth()->user()->id;
        $insert->save();

        $log = new Log;
        $log->user=auth()->user()->id;
        $log->action = "Menambahkan Leader baru ".$request->nik." - ".$request->nama;
        $log->raw = $request;
        $log->save();

        return redirect('/leader/profile/' . $insert->id)->with(['message' => 'Data Leader berhasil ditambah']);
    }
    public function profile($id)
    {
    $profile = Leader::where('id',$id)->first();
    return view('dashboard.leader.profile', compact('profile'));
    } 
    
    public function edit($id)
    {
        $profile = Leader::where('id',$id)->first();
        return view('dashboard.leader.edit', compact('profile'));
    }
    
    public function edit_proses(Request $request)
    {
        $update = Leader::find($request->id);
        $update->nik = $request->nik;
        $update->nama = $request->nama;
        $update->hp = $request->hp;
        $update->alamat = $request->alamat;
        $update->bank_rek = $request->bank_rek;
        $update->no_rek = $request->no_rek;
        $update->an_rek = $request->an_rek;
        $update->save();


        if ($request->ktp) {
        $name = 'ktp_'.$request->nik.'.'.$request->ktp->getClientOriginalExtension();
        $path = 'data/leader/'.$request->nik;
        $fullpath = 'public/'.$path.'/'.$name;
        Storage::disk('public')->putFileAs($path, ($request->ktp), $name);
        $update = Leader::find($request->id);
        $update->ktp_path = $fullpath;
        $update->ktp_upload = true;
        $update->save();
        }

        if ($request->npwp) {
        $name = 'npwp_'.$request->nik.'.'.$request->npwp->getClientOriginalExtension();
        $path = 'data/leader/'.$request->nik;
        $fullpath = 'public/'.$path.'/'.$name;
        Storage::disk('public')->putFileAs($path, ($request->npwp), $name);
        $update = Leader::find($request->id);
        $update->npwp_upload = true;
        $update->npwp_path = $fullpath;
        $update->save();
        }

        $log = new Log;
        $log->user=auth()->user()->id;
        $log->action = "Edit data Leader".$request->nik." - ".$request->nama;
        $log->raw = $request;
        $log->save();

        return redirect('/leader/profile/' . $request->id)->with(['message' => 'Data Leader berhasil diubah']);
    } 
    public function list()
    {
        $member = Leader::all();
        return view('dashboard.leader.list', compact('member'));
    }
    public function delete(Request $request)
    {
        Leader::destroy($request->id);
        $log = new Log;
        $log->user=auth()->user()->id;
        $log->action = "Menghapus data Leader ".$request->nik." - ".$request->nama;
        $log->raw = $request;
        $log->save();
        return redirect('/leader/list')->with(['message' => 'Data Leader '.$request->nama.' berhasil dihapus']);
    }
    
}
