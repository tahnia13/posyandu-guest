<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('posyandus', function (Blueprint $table) {
            $table->enum('jadwal', [
                '07:00-10:00',
                '08:00-11:00', 
                '09:00-12:00',
                '13:00-16:00',
                '14:00-17:00',
                '15:00-18:00',
                '17:00-20:00',
                '18:00-21:00'
            ])->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('posyandus', function (Blueprint $table) {
            $table->string('jadwal')->nullable()->change();
        });
    }
};