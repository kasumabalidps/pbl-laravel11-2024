<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DosenModel;

class DosenSeeder extends Seeder
{
    public function run()
    {
        DosenModel::create([
            'nip' => '1234567890',
            'nama_pengguna' => 'dosen',
            'nama_lengkap' => 'Dosen',
            'email' => 'dosen@gmail.com',
            'password' => 'password123',
        ]);
    }
}

