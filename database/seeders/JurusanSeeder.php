<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JurusanModel;

class JurusanSeeder extends Seeder
{
    public function run()
    {
        JurusanModel::create([
            'id_jurusan' => '1',
            'jurusan' => 'Teknik Informatika',
        ]);
    }
}
