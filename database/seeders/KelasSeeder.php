<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KelasModel;

class KelasSeeder extends Seeder
{
    public function run()
    {
        KelasModel::create([
            'id_kelas' => '1',
            'kelas' => '3C-TRPL',
            'id_prodi' => '1',
        ]);
    }
}
