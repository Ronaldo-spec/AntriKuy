<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AntrianController extends Controller
{
    public function index()
    {
        $user = Auth::user()->with('pasien')->first();
        $date = Carbon::now();
        return view('ambilantrian', compact('user'));
    }
}
