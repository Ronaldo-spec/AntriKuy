<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poli;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('landing');
    }
    public function caripoli(Request $request)
    {
        $mahasiswas = Mahasiswa::where([
            ['nama', '!=', Null],
            [
                function ($query) use ($request) {
                    if (($search = $request->search)) {
                        $query->orWhere('nama', 'LIKE', '%' . $search . '%')->get();
                    }
                }
            ]
        ])
            ->first();

        return view('mahasiswas.index', compact('mahasiswas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
