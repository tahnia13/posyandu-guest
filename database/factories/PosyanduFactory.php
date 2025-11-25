<?php
// database/factories/PosyanduFactory.php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PosyanduFactory extends Factory
{
    private $namaPosyandu = [
        'Melati', 'Mawar', 'Anggrek', 'Tulip', 'Kamboja', 'Seroja', 'Cempaka', 'Kenanga', 'Flamboyan', 'Teratai',
        'Bougenville', 'Alamanda', 'Krisan', 'Lavender', 'Sakura', 'Dahlia', 'Lily', 'Orchid', 'Sunflower', 'Rose',
        'Jasmine', 'Lotus', 'Magnolia', 'Peony', 'Violet', 'Daisy', 'Iris', 'Marigold', 'Poppy', 'Zinnia',
        'Aster', 'Begonia', 'Carnation', 'Freesia', 'Gardenia', 'Hibiscus', 'Hyacinth', 'Lilac', 'Narcissus', 'Oleander',
        'Azalea', 'Camellia', 'Daffodil', 'Geranium', 'Hydrangea', 'Lavender', 'Pansy', 'Petunia', 'Snapdragon', 'Tulip',
        'Bluebell', 'Buttercup', 'Crocus', 'Dandelion', 'Forgetmenot', 'Honeysuckle', 'Ivy', 'Juniper', 'Kale', 'Lemon',
        'Mint', 'Nasturtium', 'Olive', 'Palm', 'Quince', 'Rosemary', 'Sage', 'Thyme', 'Umbrella', 'Vanilla',
        'Willow', 'Xeranthemum', 'Yucca', 'Zephyr', 'Acacia', 'Bamboo', 'Cedar', 'Dogwood', 'Elm', 'Fig',
        'Ginkgo', 'Hawthorn', 'Ilex', 'Jacaranda', 'Kiwi', 'Larch', 'Maple', 'Nettle', 'Oak', 'Pine',
        'Redwood', 'Sequoia', 'Tamarind', 'Ulmus', 'Viburnum', 'Walnut', 'Xylosma', 'Yew', 'Zelkova', 'Apel'
    ];

    private static $counter = 0;

    public function definition()
    {
        $kecamatan = [
            'Jakarta Pusat', 'Jakarta Selatan', 'Jakarta Timur', 'Jakarta Barat', 'Jakarta Utara',
            'Bogor', 'Depok', 'Tangerang', 'Bekasi', 'Bandung', 'Surabaya', 'Medan', 'Semarang', 'Makassar'
        ];

        $nama = $this->namaPosyandu[self::$counter % count($this->namaPosyandu)];
        $nomor = floor(self::$counter / count($this->namaPosyandu)) + 1;
        
        self::$counter++;

        return [
            'nama' => 'Posyandu ' . $nama . ($nomor > 1 ? ' ' . $nomor : ''),
            'alamat' => 'Jl. ' . $nama . ' No. ' . $this->faker->numberBetween(1, 200) . ', ' . $this->faker->randomElement($kecamatan),
            'jadwal' => $this->faker->randomElement(['07:00-10:00', '08:00-11:00', '09:00-12:00']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}