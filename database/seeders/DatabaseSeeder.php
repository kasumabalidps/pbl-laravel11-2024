<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            JurusanSeeder::class,
            ProdiSeeder::class,
            KelasSeeder::class,
            DosenSeeder::class,
            MahasiswaSeeder::class,
            AdminSeeder::class,
        ]);
    }
}
