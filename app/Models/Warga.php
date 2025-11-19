<?php
// app/Models/Warga.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    // Pastikan nama tabel sesuai
    protected $table = 'wargas';

    protected $fillable = [
        'nama',
        'nik',
        'usia',
        'jenis_kelamin', 
        'alamat',
        'posyandu_id', // Pastikan ini ada
        'status',
    ];

    protected $casts = [
        'usia' => 'integer',
    ];

    /**
     * Get the posyandu that owns the warga.
     */
    public function posyandu()
    {
        return $this->belongsTo(Posyandu::class, 'posyandu_id');
    }
}