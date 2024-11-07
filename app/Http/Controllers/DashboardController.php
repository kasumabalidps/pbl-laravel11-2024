<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use App\Models\MahasiswaModel;
use App\Models\DosenModel;

class DashboardController extends Controller
{
    private function getUserNameByRole($id, $role)
    {
        $models = [
            'admin' => AdminModel::class,
            'mahasiswa' => MahasiswaModel::class,
            'dosen' => DosenModel::class
        ];

        $model = $models[$role] ?? null;
        $user = $model ? $model::find($id) : null;

        return $user ? $user->nama_pengguna : 'Tidak Ditemukan';
    }

    public function dashboard_view()
    {
        $this->setRoleFromSession();

        if (!$this->isValidRole(session('role'))) {
            return redirect('/');
        }

        $nama = $this->getUserNameByRole(session('id'), session('role'));

        return view('pages.dashboard', ['nama' => $nama]);
    }

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }

    public function settings()
    {
        $nama = $this->getUserNameByRole(session('id'), session('role'));
        
        return view('pages.settings', ['nama' => $nama]);
    }

    private function setRoleFromSession()
    {
        $table = session('table');
        if ($this->isValidRole($table)) {
            session(['role' => $table]);
        }
    }

    private function isValidRole($role)
    {
        return in_array($role, ['admin', 'mahasiswa', 'dosen']);
    }
}