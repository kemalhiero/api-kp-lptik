<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('krs', function (Blueprint $table) {
            $table->id('id_krs');
            $table->foreignId('id_mhs')->constrained('mahasiswa', 'id_mhs');//fk
            $table->foreignId('id_jur')->constrained('mahasiswa', 'id_jur');//fk
            $table->foreignId('id_fak')->constrained('mahasiswa', 'id_fak');//fk
            $table->foreignId('id_mk')->constrained('mata_kuliah', 'id_mk');//fk
            $table->foreignId('id_jadwal')->constrained('jadwal', 'id_jadwal');//fk
            $table->foreignId('id_ruang')->constrained('jadwal', 'id_ruang');//fk
            $table->foreignId('id_dosen')->constrained('jadwal', 'id_dosen');//fk
            $table->string('semester', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('krs', function (Blueprint $table) {
            $table->dropForeign(['id_mhs']);
            $table->dropForeign(['id_jur']);
            $table->dropForeign(['id_fak']);
            $table->dropForeign(['id_mk']);
            $table->dropForeign(['id_jadwal']);
            $table->dropForeign(['id_ruang']);
            $table->dropForeign(['id_dosen']);
        });

        Schema::dropIfExists('krs');
    }
};
