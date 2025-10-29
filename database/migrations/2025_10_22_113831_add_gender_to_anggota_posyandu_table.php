<?php
// database/migrations/xxxx_xx_xx_xxxxxx_add_gender_to_anggota_posyandu_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('anggota_posyandu', function (Blueprint $table) {
            $table->enum('gender', ['L', 'P'])->after('jabatan')->nullable();
            $table->string('no_telepon')->nullable()->change();
            $table->string('alamat')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('anggota_posyandu', function (Blueprint $table) {
            $table->dropColumn('gender');
        });
    }
};