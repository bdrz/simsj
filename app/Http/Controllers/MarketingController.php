<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Leader;
use App\Models\Marketing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MarketingController extends Controller
{
    public function tambah()
    {
        $leader = Leader::all();
        return view('dashboard.marketing.tambah', compact('leader'));
    }
    public function add(Request $request)
    {
        $validated = $request->validate([
        'leader' => 'required',
        'nik' => 'required|unique:member,nik',
        'nama' => 'required',
        'hp' => 'required',
        ]);
        
        if ($request->ktp) {
            $name = 'ktp_'.$request->nik.'.'.$request->ktp->getClientOriginalExtension();
            $path = 'data/marketing/'.$request->nik;
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
            $path = 'data/marketing/'.$request->nik;
            $fullpath = 'public/'.$path.'/'.$name;
            Storage::disk('public')->putFileAs($path, ($request->npwp), $name);
            $npwp_upload = true;
            $npwp_path = $fullpath;
        }else {
            $npwp_upload = false;
            $npwp_path = NULL;
        }

        $insert = new Marketing;
        $insert->leader_id = $request->leader;
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
        $log->action = "Menambahkan Marketing baru ".$request->nik." - ".$request->nama;
        $log->raw = $request;
        $log->save();

        return redirect('/marketing/profile/' . $insert->id)->with(['message' => 'Data Marketing berhasil ditambah']);
    }
    public function profile($id)
    {
        $profile = Marketing::where('id',$id)->first();
        return view('dashboard.marketing.profile', compact('profile'));
    }
    public function list()
    {
        $member = Marketing::all();
        return view('dashboard.marketing.list', compact('member'));
    }
    public function delete(Request $request)
    {
        Marketing::destroy($request->id);
        $log = new Log;
        $log->user=auth()->user()->id;
        $log->action = "Menghapus data Marketing ".$request->nik." - ".$request->nama;
        $log->raw = $request;
        $log->save();
        return redirect('/marketing/list')->with(['message' => 'Data Marketing '.$request->nama.' berhasil dihapus']);
    }
    public function edit($id)
    {
        $profile = Marketing::where('id',$id)->first();
        $leader = Leader::all();
        return view('dashboard.marketing.edit', compact('profile','leader'));
    }
    public function edit_proses(Request $request)
    {
        $update = Marketing::find($request->id);
        $update->leader_id = $request->leader;
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
        $path = 'data/marketing/'.$request->nik;
        $fullpath = 'public/'.$path.'/'.$name;
        Storage::disk('public')->putFileAs($path, ($request->ktp), $name);
        $update = Marketing::find($request->id);
        $update->ktp_upload = true;
        $update->ktp_path = $fullpath;
        $update->save();
        }

        if ($request->npwp) {
        $name = 'npwp_'.$request->nik.'.'.$request->npwp->getClientOriginalExtension();
        $path = 'data/marketing/'.$request->nik;
        $fullpath = 'public/'.$path.'/'.$name;
        Storage::disk('public')->putFileAs($path, ($request->npwp), $name);
        $update = Marketing::find($request->id);
        $update->npwp_upload = true;
        $update->npwp_path = $fullpath;
        $update->save();
        }

        $log = new Log;
        $log->user=auth()->user()->id;
        $log->action = "Edit data Marketing".$request->nik." - ".$request->nama;
        $log->raw = $request;
        $log->save();

        return redirect('/marketing/profile/' . $request->id)->with(['message' => 'Data Marketing berhasil diubah']);
    }
}
