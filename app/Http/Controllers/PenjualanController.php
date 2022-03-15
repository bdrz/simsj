<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Lokasi;
use App\Models\Member;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function tambah()
    {
        $member = Member::all();
        $lokasi = Lokasi::all();
        $unit = Unit::all();
        return view('dashboard.penjualan.tambah', compact('member','lokasi'));
    }
    public function getunit(Request $request)
    {
        $result = Unit::where('lokasi_id',$request->id)->pluck('id','nama');
        return response()->json($result);
    }
    public function getmember(Request $request)
    {
        $result = Member::where('id',$request->id)->first();
        return response()->json($result);
    }
    public function proses(Request $request)
    {
        return $request;
    }
}
