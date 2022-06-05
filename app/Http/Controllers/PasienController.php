<?php

namespace App\Http\Controllers;

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
    public function edit()
    {
        $nik = Auth::user()->id_pasien;
        $users = Pasien::where('nik', '=', $nik)->first();
        return view('editdata', compact('users'));
    }

    public function update(Request $request, $id)
    {
        //
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
        return redirect()->route('editprofil');
    }
}
