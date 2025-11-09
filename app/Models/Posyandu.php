<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posyandu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'jadwal',
    ];

    protected $casts = [
        'jadwal' => 'string',
    ];

    // Const untuk pilihan jadwal (format jam saja)
    const JADWAL_OPTIONS = [
        '07:00-10:00' => '07:00 - 10:00',
        '08:00-11:00' => '08:00 - 11:00', 
        '09:00-12:00' => '09:00 - 12:00',
        '13:00-16:00' => '13:00 - 16:00',
        '14:00-17:00' => '14:00 - 17:00',
        '15:00-18:00' => '15:00 - 18:00',
        '17:00-20:00' => '17:00 - 20:00',
        '18:00-21:00' => '18:00 - 21:00',
    ];

    public function wargas()
    {
        return $this->hasMany(Warga::class);
    }
}