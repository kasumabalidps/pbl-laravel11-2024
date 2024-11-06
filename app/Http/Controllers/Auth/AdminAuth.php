<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminModel;

class AdminAuth extends Controller
{
    public function login_view()
    {
        return view('pages.admin.login');
    }

    public function cekLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $admin = AdminModel::where('email', $request->email)->first();
        $table = 'admin';

        if (!$admin || !$admin->verifKataSandi($request->password)) {
            return back()->withErrors([
                'login' => 'Email atau Password salah!!'
            ])->withInput();
        }

        session(['table' => $table, 'id' => $admin->id]);
        return redirect('/dashboard');
    }
}
