<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index()
    {
        $log = Log::latest()->limit(100)->get();
        return view('dashboard.log.index',compact('log'));
    }
}
