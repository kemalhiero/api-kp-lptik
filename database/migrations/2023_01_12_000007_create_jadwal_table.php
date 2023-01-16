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
            $table->foreignId('id_ruang')->constrained('ruang', 'id_ruang');//fk
            $table->foreignId('id_mk')->constrained('mata_kuliah', 'id_mk');//fk
            $table->foreignId('id_dosen')->constrained('dosen', 'id_dosen');//fk
            $table->foreignId('id_jur')->constrained('dosen', 'id_jur');//fk
            $table->foreignId('id_fak')->constrained('dosen', 'id_fak');//fk
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
            $table->dropForeign(['id_jur']);
            $table->dropForeign(['id_fak']);
        });

        Schema::dropIfExists('jadwal');
    }
};
