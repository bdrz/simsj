<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Traits\Timestamp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
    public function index()
    {
    $user = User::orderby('menuroles')->get();
    return view('dashboard.staff.index',compact('user'));
    }
    public function add(Request $request)
    {
     $url =
     "https://ui-avatars.com/api/?background=random&name=".$request->name;
     $contents = file_get_contents($url);
     $name = base64_encode($request->name).'.png';
     $path = 'data/akun_profie/'.$name;
     Storage::disk('public')->put('data/akun_profie/' . $name, $contents);
     
        $validated = $request->validate([
        'email' => 'required|unique:users,email',
        ]);

        $insert = new User;
        $insert->name = $request->name;
        $insert->email = $request->email;
        $insert->menuroles = $request->menuroles;
        $insert->path = $path;
        $insert->password = Hash::make($request->password);
        $insert->save();

        return redirect('/staff')->with(['message' => 'Akun berhasil ditambahkan']);
    }
    public function delete(Request $request)
    {
        User::destroy($request->id);
        return redirect('/staff')->with(['message' => 'Akun berhasil dihapus']);
    }
}
