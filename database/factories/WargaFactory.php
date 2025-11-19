<?php
// database/factories/WargaFactory.php

namespace Database\Factories;

use App\Models\Posyandu;
use Illuminate\Database\Eloquent\Factories\Factory;

class WargaFactory extends Factory
{
    private static $nikCounter = 3201010101010001; // Counter untuk NIK unik

    public function definition()
    {
        $jenisKelamin = $this->faker->randomElement(['Laki-laki', 'Perempuan']);
        
        return [
            'nama' => $this->faker->name($jenisKelamin === 'Laki-laki' ? 'male' : 'female'),
            'nik' => (string) self::$nikCounter++, // NIK unik incremental
            'usia' => $this->faker->numberBetween(1, 80),
            'jenis_kelamin' => $jenisKelamin,
            'alamat' => $this->faker->address(),
            'posyandu_id' => Posyandu::inRandomOrder()->first()->id,
            'status' => $this->faker->randomElement(['aktif', 'tidak_aktif']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}