<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DosenModel;

class DosenAuth extends Controller
{
    public function login_view()
    {
        return view('pages.dosen.login');
    }

    public function cekLogin(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'password' => 'required'
        ]);

        $dosen = DosenModel::where('nip', $request->nip)->first();

        if (!$dosen) {
            return back()->withErrors([
                'login' => 'NIP atau Password salah!!'
            ])->withInput();
        }

        session(['table' => 'dosen', 'id' => $dosen->nip]);
        return redirect()->route('dashboard');
    }
}
