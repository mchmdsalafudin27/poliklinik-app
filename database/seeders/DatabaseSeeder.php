<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PoliSeeder::class, // Seeder untuk poli dulu
            UserSeeder::class, // Baru kemudian user
            JadwalPeriksaSeeder::class, // Lalu jadwal
            // Tambahkan seeder lainnya jika perlu
        ]);
    }
}