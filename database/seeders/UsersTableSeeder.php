<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama'    => "Administrator Mapmi",
            'nik' => "1219000000000000",
            'nohp' => "082300000000",
            'email'    => 'adminmapmi@gmail.com',
            'password'    => bcrypt('admin2023'),
            'role' => "1",
            'status' => "1",
        ]);
    }
}
