<?php
// database/seeders/PosyanduSeeder.php

namespace Database\Seeders;

use App\Models\Posyandu;
use Illuminate\Database\Seeder;

class PosyanduSeeder extends Seeder
{
    public function run()
    {
        // Buat 10 data posyandu menggunakan factory
        Posyandu::factory()->count(10)->create();
    }
}