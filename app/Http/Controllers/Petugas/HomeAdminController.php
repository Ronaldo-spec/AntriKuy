<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\Antrian;

class HomeAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function index()
    {
        $totaluser = User::count();
        $totalpasien = Pasien::count();
        $totaldokter = Dokter::count();
        $totalantrian = Antrian::count();

        return view('admin.index', compact('totaluser', 'totalpasien', 'totaldokter', 'totalantrian'));
    }
}
