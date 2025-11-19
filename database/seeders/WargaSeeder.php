<?php
// database/seeders/WargaSeeder.php

namespace Database\Seeders;

use App\Models\Warga;
use App\Models\Posyandu;
use Illuminate\Database\Seeder;

class WargaSeeder extends Seeder
{
    public function run()
    {
        // Pastikan ada data posyandu terlebih dahulu
        if (Posyandu::count() === 0) {
            $this->call(PosyanduSeeder::class);
        }

        // Buat 10 data warga menggunakan factory
        Warga::factory()->count(10)->create();
    }
}