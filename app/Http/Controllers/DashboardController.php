<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;

class DashboardController extends Controller
{
    public function dashboard_view()
    {
        // Set role berdasarkan table di session
        $table = session('table');
        if (in_array($table, ['admin', 'mahasiswa', 'dosen'])) {
            session(['role' => $table]);
        }

        // Redirect jika role tidak valid
        if (!in_array(session('role'), ['admin', 'mahasiswa', 'dosen'])) {
            return redirect('/');
        }

        // Ambil data user berdasarkan role
        $id = session('id');
        $nama = 'Tidak Ditemukan';
        $role = session('role');

        if ($role === 'admin') {
            $admin = AdminModel::find($id);
            if ($admin) {
                $nama = $admin->nama_pengguna;
            }
        } elseif ($role === 'mahasiswa') {
            $mahasiswa = AdminModel::find($id);
            if ($mahasiswa) {
                $nama = $mahasiswa->nama_pengguna;
            }
        } elseif ($role === 'dosen') {
            $dosen = AdminModel::find($id);
            if ($dosen) {
                $nama = $dosen->nama_pengguna;
            }
        }

        return view('pages.dashboard', ['nama' => $nama]);
    }

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }

    public function settings()
    {
        return view('pages.settings');
    }

    
}
