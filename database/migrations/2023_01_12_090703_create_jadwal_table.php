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
        Schema::create('jadwal', function (Blueprint $table) {
            $table->foreignId('id_ruang')->constrained('ruang', 'id_ruang');//fk
            $table->foreignId('id_mk')->constrained('mata_kuliah', 'id_mk');//fk
            $table->foreignId('id_dosen')->constrained('dosen', 'id_dosen');//fk
            $table->foreignId('kode_jur')->constrained('dosen', 'kode_jur');//fk
            $table->foreignId('kode_fak')->constrained('dosen', 'kode_fak');//fk
            $table->string('waktu', 100);
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
        Schema::table('jadwal', function (Blueprint $table) {
            $table->dropForeign(['id_ruang']);
            $table->dropForeign(['id_mk']);
            $table->dropForeign(['id_dosen']);
            $table->dropForeign(['kode_jur']);
            $table->dropForeign(['kode_fak']);
        });

        Schema::dropIfExists('jadwal');
    }
};
