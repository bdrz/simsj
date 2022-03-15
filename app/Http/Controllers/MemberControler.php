<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

class MemberControler extends Controller
{
    public function tambah()
    {
        return view('dashboard.member.tambah');
    }
    public function add(Request $request)
    {
        $validated = $request->validate([
        'nik' => 'required|unique:member,nik',
        'nama' => 'required',
        'tempat_lahir' => 'required',
        'tgl_lahir' => 'required',
        'alamat' => 'required',
        'pekerjaan' => 'required',
        'hp' => 'required',
        ]);

        

        if ($request->ktp) {
            $name = 'ktp_'.$request->nik.'.'.$request->ktp->getClientOriginalExtension();
            $path = 'data/user/'.$request->nik;
            $fullpath = 'public/'.$path.'/'.$name;
            Storage::disk('public')->putFileAs($path, ($request->ktp), $name);
            $ktp_upload = true;
            $ktp_path = $fullpath; 
        }else {
            $ktp_upload = false;
            $ktp_path = NULL;
        }
        if ($request->kk) {
            $name = 'kk_'.$request->nik.'.'.$request->kk->getClientOriginalExtension();
            $path = 'data/user/'.$request->nik;
            $fullpath = 'public/'.$path.'/'.$name;
            Storage::disk('public')->putFileAs($path, ($request->kk), $name);
            $kk_upload = true;
            $kk_path = $fullpath;
        }else {
            $kk_upload = false;
            $kk_path = NULL;
        }
        if ($request->npwp) {
            $name = 'npwp_'.$request->nik.'.'.$request->npwp->getClientOriginalExtension();
            $path = 'data/user/'.$request->nik;
            $fullpath = 'public/'.$path.'/'.$name;
            Storage::disk('public')->putFileAs($path, ($request->npwp), $name);
            $npwp_upload = true;
            $npwp_path = $fullpath;
        }else {
            $npwp_upload = false;
            $npwp_path = NULL;
        }

        $member = new Member;
        $member->nik = $request->nik;
        $member->nama = $request->nama;
        $member->hp = $request->hp;
        $member->nomor_npwp = $request->nomor_npwp;
        $member->jenis_kelamin = $request->jenis_kelamin;
        $member->tempat_lahir = $request->tempat_lahir;
        $member->tgl_lahir = $request->tgl_lahir;
        $member->alamat = $request->alamat;
        $member->agama = $request->agama;
        $member->pekerjaan = $request->pekerjaan;
        $member->kewarganegaraan = $request->kewarganegaraan;
        $member->ktp_upload = $ktp_upload;
        $member->ktp_path = $ktp_path;
        $member->kk_upload = $kk_upload;
        $member->kk_path = $kk_path;
        $member->npwp_upload = $npwp_upload;
        $member->npwp_path = $npwp_path;
        $member->save();


        $log = new Log;
        $log->user=auth()->user()->id;
        $log->action = "Menambahkan User baru ".$request->nik." - ".$request->nama;
        $log->raw = $request;
        $log->save();
        
        return redirect('/user/profile/' . $member->id)->with(['message' => 'Data user berhasil ditambah']);
    }
    public function profile($id)
    {
        $profile = Member::where('id',$id)->first();
        return view('dashboard.member.profile', compact('profile'));
    }
    public function edit($id)
    {
        $profile = Member::where('id',$id)->first();
        return view('dashboard.member.edit', compact('profile'));
    }
    public function edit_proses(Request $request)
    {
        $member = Member::find($request->id);
        $member->nik = $request->nik;
        $member->nama = $request->nama;
        $member->hp = $request->hp;
        $member->nomor_npwp = $request->nomor_npwp;
        $member->jenis_kelamin = $request->jenis_kelamin;
        $member->tempat_lahir = $request->tempat_lahir;
        $member->tgl_lahir = $request->tgl_lahir;
        $member->alamat = $request->alamat;
        $member->agama = $request->agama;
        $member->pekerjaan = $request->pekerjaan;
        $member->kewarganegaraan = $request->kewarganegaraan;
        $member->save();

        if ($request->ktp) {
        $name = 'ktp_'.$request->nik.'.'.$request->ktp->getClientOriginalExtension();
        $path = 'data/'.$request->nik;
        $fullpath = 'public/'.$path.'/'.$name;
        Storage::disk('public')->putFileAs($path, ($request->ktp), $name);
        $member = Member::find($request->id);
        $member->ktp_upload = true;
        $member->ktp_path = $fullpath;
        $member->save();
        }

        if ($request->kk) {
        $name = 'kk_'.$request->nik.'.'.$request->kk->getClientOriginalExtension();
        $path = 'data/'.$request->nik;
        $fullpath = 'public/'.$path.'/'.$name;
        Storage::disk('public')->putFileAs($path, ($request->kk), $name);
        $member = Member::find($request->id);
        $member->kk_upload = true;
        $member->kk_path = $fullpath;
        $member->save();
        }

        if ($request->npwp) {
        $name = 'npwp_'.$request->nik.'.'.$request->npwp->getClientOriginalExtension();
        $path = 'data/'.$request->nik;
        $fullpath = 'public/'.$path.'/'.$name;
        Storage::disk('public')->putFileAs($path, ($request->npwp), $name);
        $member = Member::find($request->id);
        $member->npwp_upload = true;
        $member->npwp_path = $fullpath;
        $member->save();
        }

        $log = new Log;
        $log->user=auth()->user()->id;
        $log->action = "Edit data User".$request->nik." - ".$request->nama;
        $log->raw = $request;
        $log->save();

       return redirect('/user/profile/' . $request->id)->with(['message' => 'Data user berhasil diubah']);
    }

    public function list()
    {
    $member = Member::all();
    return view('dashboard.member.list', compact('member'));
    }

    public function delete(Request $request)
    {
        Member::destroy($request->id);
         $log = new Log;
         $log->user=auth()->user()->id;
         $log->action = "Menghapus data User".$request->nik." - ".$request->nama;
         $log->raw = $request;
         $log->save();
        return redirect('/user/list')->with(['message' => 'Data user'.$request->nama.'berhasil dihapus']);
    }

}
    
