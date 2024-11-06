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

        if (!$admin || !$admin->verifKataSandi($request->password)) {
            return back()->withErrors([
                'login' => 'Email atau Password salah!!'
            ])->withInput();
        }

        session(['role' => 'admin']);
        return redirect('/dashboard');
    }
}
