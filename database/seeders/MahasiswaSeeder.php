<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MahasiswaModel;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        MahasiswaModel::create([
            'nim' => '1234567890',
            'nama_pengguna' => 'anandakasuma',
            'nama_lengkap' => 'Ananda Kasuma',
            'email' => 'anandakasuma@gmail.com',
            'password' => 'password',
            'id_kelas' => '1',
        ]);
    }
}

