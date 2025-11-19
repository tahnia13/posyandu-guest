<?php
// database/seeders/DatabaseSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PosyanduSeeder::class, // 10 data posyandu
            WargaSeeder::class,    // 10 data warga
        ]);
    }
}