<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AnggotaPosyandu extends Model
{
    protected $table = 'anggota_posyandu';
    
    protected $fillable = [
        'posyandu_id',
        'nama',
        'alamat',
        'tanggal_lahir',
        'jenis_kelamin',
        'nama_ibu',
        'nama_ayah', 
        'berat_badan_lahir',
        'tinggi_badan_lahir',
        'telepon',
        'jabatan',
        'gender'
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
        'berat_badan_lahir' => 'decimal:2',
        'tinggi_badan_lahir' => 'decimal:2'
    ];

    /**
     * Relasi ke tabel posyandu
     */
    public function posyandu(): BelongsTo
    {
        return $this->belongsTo(Posyandu::class, 'posyandu_id');
    }

    /**
     * Accessor untuk gender_label
     */
    public function getGenderLabelAttribute(): string
    {
        return $this->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan';
    }

    /**
     * Accessor untuk jabatan default
     */
    public function getJabatanAttribute($value): string
    {
        return $value ?? 'Anggota';
    }
}