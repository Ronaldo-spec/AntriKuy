<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AntrianController extends Controller
{
    public function index()
    {
        $user = Auth::user()->with('pasien')->first();
        return view('ambilantrian', compact('user'));
    }
}
