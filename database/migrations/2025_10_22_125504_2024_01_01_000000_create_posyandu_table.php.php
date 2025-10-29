<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Ganti isi migration create_posyandu_table dengan ini
public function up()
{
    Schema::create('posyandu', function (Blueprint $table) {
        $table->id();
        $table->string('nama_posyandu');
        $table->string('penanggung_jawab')->nullable();
        $table->enum('gender_penanggung_jawab', ['L', 'P'])->nullable();
        $table->integer('umur_penanggung_jawab')->nullable();
        $table->string('alamat');
        $table->text('alamat_lengkap')->nullable();
        $table->string('rt', 3);
        $table->string('rw', 3);
        $table->string('kelurahan');
        $table->string('kecamatan');
        $table->string('kontak', 20);
        $table->string('media_sosial')->nullable();
        $table->string('jam_operasional')->nullable();
        $table->text('deskripsi')->nullable();
        $table->timestamps();
    });
}
};