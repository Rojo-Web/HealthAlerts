<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'cedula' => '111111',
            'name' => 'admin',
            'celular' => '00000000',
            'email' => 'admin@gmail.com',
            'password' => '123456789',
            'rol_id' => 'Admin'
        ]);
    }
}
