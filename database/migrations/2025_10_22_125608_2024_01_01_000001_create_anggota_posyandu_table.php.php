<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('anggota_posyandu', function (Blueprint $table) {
            $table->id();
            $table->foreignId('posyandu_id')->constrained('posyandu')->onDelete('cascade');
            $table->string('nama');
            $table->text('alamat');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('nama_ibu');
            $table->string('nama_ayah');
            $table->decimal('berat_badan_lahir', 5, 2);
            $table->decimal('tinggi_badan_lahir', 5, 2);
            $table->string('telepon')->nullable();
            $table->string('jabatan')->default('Anggota');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('anggota_posyandu');
    }
};