<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posyandu extends Model
{
    use HasFactory;

    protected $table = 'posyandus';

    protected $fillable = [
        'nama_posyandu',
        'alamat',
        'kelurahan',
        'kecamatan',
        'kota',
        'provinsi',
        'telepon',
        'email',
        'penanggung_jawab',
        'jam_operasional_buka',
        'jam_operasional_tutup',
        'fasilitas',
        'layanan',
        'latitude',
        'longitude',
        'gambar',
        'status'
    ];

    protected $casts = [
        'jam_operasional_buka' => 'datetime',
        'jam_operasional_tutup' => 'datetime',
    ];

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
}