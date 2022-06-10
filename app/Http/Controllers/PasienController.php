<?php

namespace App\Http\Controllers;

use App\Models\Bpjs;
use Illuminate\Http\Request;
use App\Models\Pasien;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;

class PasienController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function view()
    {
        $users = Auth::user();
        $user = Pasien::where('id', $users->id_pasien)->first();
        return view('viewprofil', compact('users', 'user'));
    }

    public function edit()
    {
        $user = Auth::user();
        $users = Pasien::where('id', $user->id_pasien)->first();
        return view('editdata', compact('users'));
    }

    public function update(Request $request)
    {

        if ($request->input('kelas') == 'regular') {
            $request->validate([
                'nik' => 'required',
                'kelas' => 'required',
                'nama_lengkap' => 'required',
                'alamat' => 'required',
                'jenis_kelamin' => 'required',
                'no_hp' => 'required',
                'tempat_lahir' => 'required',
                'tgl_lahir' => 'required',
            ]);
            $id = Auth::user()->id_pasien;
            $pasien = Pasien::where('id', $id)->first();
            $pasien->nik = $request->nik;
            $pasien->kelas = $request->kelas;
            $pasien->nama_lengkap = $request->nama_lengkap;
            $pasien->alamat = $request->alamat;
            $pasien->jenis_kelamin = $request->jenis_kelamin;
            $pasien->no_hp = $request->no_hp;
            $pasien->tempat_lahir = $request->tempat_lahir;
            $pasien->tgl_lahir = $request->tgl_lahir;
            $pasien->save();

            if ($pasien) {
                Alert::success('Success', 'Update Data Berhasil!!!');
            } else {
                Alert::error('Error', 'Gagal Update Data!!!');
            }
        } else if ($request->input('kelas') == 'bpjs') {
            $request->validate([
                'nik' => 'required',
                'kelas' => 'required',
                'nama_lengkap' => 'required',
                'alamat' => 'required',
                'jenis_kelamin' => 'required',
                'no_hp' => 'required',
                'tempat_lahir' => 'required',
                'tgl_lahir' => 'required',
                'nomor_bpjs' => 'required',
                'tingkat_faskes' => 'required'
            ]);

            $id = Auth::user()->id_pasien;
            $pasien = Pasien::where('id', $id)->first();
            $pasien->nik = $request->nik;
            $pasien->kelas = $request->kelas;
            $pasien->nama_lengkap = $request->nama_lengkap;
            $pasien->alamat = $request->alamat;
            $pasien->jenis_kelamin = $request->jenis_kelamin;
            $pasien->no_hp = $request->no_hp;
            $pasien->tempat_lahir = $request->tempat_lahir;
            $pasien->tgl_lahir = $request->tgl_lahir;
            $pasien->nomor_bpjs = $request->nomor_bpjs;
            $pasien->tingkat_faskes = $request->tingkat_faskes;
            $pasien->save();


            if ($pasien) {
                Alert::success('Success', 'Update Data Berhasil!');
            } else {
                Alert::error('Error', 'Gagal Update Data!');
            }
        };

        return redirect()->route('pasien.viewprofil');
    }
    public function addbpjs(Request $request)
    {
        # code...
        return redirect()->route('pasien.viewprofil');
    }

    public function editprofil()
    {
        $users = Auth::user();
        return view('editprofil', compact('users'));
    }

    public function updateprofil(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }

        $user = Auth::user();
        $user->update($input);
        Alert::success('Success', 'Update Detail Akun Berhasil!!.');
        return redirect()->route('pasien.editprofil');
    }
}
