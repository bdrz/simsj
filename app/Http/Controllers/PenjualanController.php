<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Leader;
use App\Models\Lokasi;
use App\Models\Marketing;
use App\Models\Member;
use App\Models\Metode;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function tambah()
    {
        $member = Member::all();
        $lokasi = Lokasi::all();
        $unit = Unit::all();
        $leader = Leader::all();
        $metode = Metode::all();
        return view('dashboard.penjualan.tambah', compact('member','lokasi','leader','metode'));
        //return view('dashboard.under');
    }
    public function getunit(Request $request)
    {
        $result = Unit::where('lokasi_id',$request->id)->pluck('id','nama');
        return response()->json($result);
    }
    public function getmarketing(Request $request)
    {
        $result = Marketing::where('leader_id',$request->id)->pluck('id','nama');
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
