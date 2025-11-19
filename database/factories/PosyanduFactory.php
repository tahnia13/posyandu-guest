<?php
// database/factories/PosyanduFactory.php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PosyanduFactory extends Factory
{
    private $usedNames = []; // Untuk mencegah duplikasi nama

    public function definition()
    {
        $namaPosyandu = [
            'Melati', 'Mawar', 'Anggrek', 'Tulip', 'Kamboja', 
            'Seroja', 'Cempaka', 'Kenanga', 'Flamboyan', 'Teratai'
        ];

        $kecamatan = [
            'Jakarta Pusat', 'Jakarta Selatan', 'Jakarta Timur', 
            'Jakarta Barat', 'Jakarta Utara', 'Bogor', 'Depok',
            'Tangerang', 'Bekasi', 'Cibubur'
        ];

        // Ambil nama yang belum digunakan
        $availableNames = array_diff($namaPosyandu, $this->usedNames);
        $selectedName = $this->faker->randomElement($availableNames);
        
        // Tandai nama sebagai sudah digunakan
        $this->usedNames[] = $selectedName;

        return [
            'nama' => 'Posyandu ' . $selectedName,
            'alamat' => $this->faker->streetAddress() . ', ' . $this->faker->randomElement($kecamatan),
            'jadwal' => $this->faker->randomElement(['07:00-10:00', '08:00-11:00']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}