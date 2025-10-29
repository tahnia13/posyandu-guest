<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Posyandu extends Model
{
    protected $table = 'posyandu';
    
    protected $fillable = [
        'nama_posyandu',
        'penanggung_jawab',
        'gender_penanggung_jawab', 
        'umur_penanggung_jawab',
        'alamat',
        'alamat_lengkap',
        'rt', 
        'rw', 
        'kelurahan', 
        'kecamatan', 
        'kontak', 
        'media_sosial', 
        'jam_operasional', 
        'deskripsi'
    ];

    protected $casts = [
        'umur_penanggung_jawab' => 'integer'
    ];

    /**
     * Relasi ke tabel anggota_posyandu
     */
    public function anggota(): HasMany
    {
        return $this->hasMany(AnggotaPosyandu::class, 'posyandu_id');
    }

    /**
     * Accessor untuk gender label penanggung jawab
     */
    public function getGenderPenanggungJawabLabelAttribute(): string
    {
        return $this->gender_penanggung_jawab == 'L' ? 'Laki-laki' : 'Perempuan';
    }
}