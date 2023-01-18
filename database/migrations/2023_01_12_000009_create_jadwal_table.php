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
            $table->id('id_jadwal');
            $table->foreignId('id_krs')->constrained('krs', 'id_krs');//fk
            $table->foreignId('id_ruang')->constrained('ruang', 'id_ruang');//fk
            $table->foreignId('id_mk')->constrained('mata_kuliah', 'id_mk');//fk
            $table->foreignId('id_dosen')->constrained('dosen', 'id_dosen');//fk
            $table->date('waktu', 100);
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
            $table->dropForeign(['id_krs']);;
        });

        Schema::dropIfExists('jadwal');
    }
};