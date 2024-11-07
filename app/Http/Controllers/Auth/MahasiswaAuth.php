<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MahasiswaModel;

class MahasiswaAuth extends Controller
{
    public function login_view()
    {
        return view('pages.mahasiswa.login');
    }

    public function cekLogin(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'password' => 'required'
        ]);

        $mahasiswa = MahasiswaModel::where('nim', $request->nim)->first();

        if (!$mahasiswa) {
            return back()->withErrors([
                'login' => 'NIM atau Password salah!!'
            ])->withInput();
        }

        session(['table' => 'mahasiswa', 'id' => $mahasiswa->nim]);
        return redirect('/dashboard');
    }

}
