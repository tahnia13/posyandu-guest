<?php
// database/seeders/DatabaseSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Buat 100 data posyandu
        $this->call(PosyanduSeeder::class);
        
        // Buat 100 data warga  
        $this->call(WargaSeeder::class);
    }
}