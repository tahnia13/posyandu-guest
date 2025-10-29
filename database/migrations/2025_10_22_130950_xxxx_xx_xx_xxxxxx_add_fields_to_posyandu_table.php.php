<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('posyandu', function (Blueprint $table) {
            // Tambahkan field baru
            $table->string('penanggung_jawab')->nullable()->after('nama_posyandu');
            $table->enum('gender_penanggung_jawab', ['L', 'P'])->nullable()->after('penanggung_jawab');
            $table->integer('umur_penanggung_jawab')->nullable()->after('gender_penanggung_jawab');
            $table->text('alamat_lengkap')->nullable()->after('alamat');
        });
    }

    public function down()
    {
        Schema::table('posyandu', function (Blueprint $table) {
            $table->dropColumn(['penanggung_jawab', 'gender_penanggung_jawab', 'umur_penanggung_jawab', 'alamat_lengkap']);
        });
    }
};