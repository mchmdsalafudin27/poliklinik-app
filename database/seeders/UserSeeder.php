<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        if (!User::where('email', 'admin@gmail.com')->exists()) {
            User::create([
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'role' => 'admin',
                'alamat' => 'Alamat Admin',
                'no_ktp' => '1234567890123456',
                'no_hp' => '081234567890',
            ]);
        }

        // Dokter
        if (!User::where('email', 'dokter@gmail.com')->exists()) {
            User::create([
                'name' => 'Dokter Umum',
                'email' => 'dokter@gmail.com',
                'password' => Hash::make('dokter'),
                'role' => 'dokter',
                'alamat' => 'Alamat Dokter',
                'no_ktp' => '6543210987654321',
                'no_hp' => '081234567891',
            ]);
        }

        // Pasien
        if (!User::where('email', 'pasien@gmail.com')->exists()) {
            User::create([
                'name' => 'Pasien Satu',
                'email' => 'pasien@gmail.com',
                'password' => Hash::make('pasien'),
                'role' => 'pasien',
                'alamat' => 'Alamat Pasien',
                'no_ktp' => '1111222233334444',
                'no_hp' => '081234567892',
            ]);
        }
    }
}
