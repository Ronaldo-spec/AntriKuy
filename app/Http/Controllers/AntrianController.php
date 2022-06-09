<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Poli;
use RealRashid\SweetAlert\Facades\Alert;

class AntrianController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $pasien =  Pasien::where('id', $user->id_pasien)->first();
        $poli = Poli::all();
        $antrian = Antrian::where('id_pasien', $pasien->id)->first();
        if ($antrian) {
            Alert::warning('Peringatan', 'Anda sudah mempunyai nomor antrian!!!');
            return view('ambilantrian', compact('user', 'poli', 'antrian'));
        } else {
            return view('ambilantrian', compact('user', 'poli', 'antrian'));
        }
    }
    public function create(Request $request)
    {
        $user = Auth::user()->id_pasien;
        $pasien = Pasien::where('id', $user)->first();
        $poli = $request->poli;
        $antri = Antrian::create([
            'id_pasien' => $user,
            'id_poli' => $poli
        ]);
        $antri->nomor_antrian = $antri->id;
        $antri->save();
        if ($antri) {
            Alert::success('Success', 'Berhasil Antre!!!');
        } else {
            Alert::error('Error', 'Gagal Antre!!!');
        }
        return redirect()->route('landing');
    }
    public function listantrian()
    {
        $antrian = Antrian::with('pasien', 'poli')->get();
        return view('lihatantrian', compact('antrian'));
    }
    public function indexantrian()
    {
        $antrian = Antrian::with('pasien', 'poli')->get();
        return view('admin.antrian.index', compact('antrian'));
    }
    public function ambilantrian($id)
    {
        $lama = Antrian::where('status', '=', 'proses')->first();
        if ($lama) {
            $lama->status = 'selesai';
            $lama->save();
        }
        $baru = Antrian::where('id', $id)->first();
        $baru->status = 'proses';
        $baru->save();

        if ($baru) {
            toast('Antrian berlanjut', 'info');
            return redirect()->route('antrian.index');
        } else {
            toast('Ada Kesalahan', 'error');
            return redirect()->route('antrian.index');
        }
    }
}
