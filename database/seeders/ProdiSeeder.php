<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProdiModel;

class ProdiSeeder extends Seeder
{
    public function run()
    {
        ProdiModel::create([
            'id_prodi' => '1',
            'prodi' => 'Teknik Informatika',
            'id_jurusan' => '1',
        ]);
    }
}
