<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdminModel;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        AdminModel::truncate();

        AdminModel::create([
            'nama_pengguna' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => 'password123'
        ]);
    }
}
