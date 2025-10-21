<?php

namespace Database\Seeders;

use App\Models\JadwalPeriksa;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalPeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil dokter dari database
        $dokter = User::where('email', 'dokter@gmail.com')->first();

        if ($dokter) {
            $jadwals = [
                [
                    'id_dokter' => $dokter->id,
                    'hari' => 'Senin',
                    'jam_mulai' => '08:00:00',
                    'jam_selesai' => '12:00:00',
                    // ✅ HAPUS kolom 'aktif'
                ],
                [
                    'id_dokter' => $dokter->id, 
                    'hari' => 'Rabu',
                    'jam_mulai' => '13:00:00',
                    'jam_selesai' => '17:00:00',
                    // ✅ HAPUS kolom 'aktif'
                ],
            ];

            foreach ($jadwals as $jadwal) {
                JadwalPeriksa::create($jadwal);
            }
        }
    }
}