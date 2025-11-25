<?php
// database/seeders/PosyanduSeeder.php

namespace Database\Seeders;

use App\Models\Posyandu;
use Illuminate\Database\Seeder;

class PosyanduSeeder extends Seeder
{
    public function run()
    {
        // Buat 100 data posyandu
        Posyandu::factory()->count(100)->create();
        
        $this->command->info('✅ Berhasil membuat 100 data posyandu!');
    }
}