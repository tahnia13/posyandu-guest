<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('posyandus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_posyandu');
            $table->text('alamat');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('telepon')->nullable();
            $table->string('email')->nullable();
            $table->string('penanggung_jawab');
            $table->time('jam_operasional_buka');
            $table->time('jam_operasional_tutup');
            $table->text('fasilitas')->nullable();
            $table->text('layanan')->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->string('gambar')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('posyandus');
    }
};
