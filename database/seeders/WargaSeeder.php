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
        // Pastikan ada data posyandu
        if (Posyandu::count() === 0) {
            $this->call(PosyanduSeeder::class);
        }

        // Buat 100 data warga
        Warga::factory()->count(100)->create();
        
        $this->command->info('✅ Berhasil membuat 100 data warga!');
        $this->command->info('📊 Total Posyandu: ' . Posyandu::count());
        $this->command->info('👥 Total Warga: ' . Warga::count());
    }
}