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
        Schema::create('bimbingan', function (Blueprint $table) {
            $table->id('id_bimbingan');
            $table->foreignId('id_dosen')->constrained('dosen', 'id_dosen');//fk
            $table->foreignId('id_jur')->constrained('mahasiswa', 'id_jur');//fk
            $table->foreignId('id_fak')->constrained('mahasiswa', 'id_fak');//fk
            $table->foreignId('id_mhs')->constrained('mahasiswa', 'id_mhs');//fk
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
        Schema::table('bimbingan', function (Blueprint $table) {
            $table->dropForeign(['id_dosen']);
            $table->dropForeign(['id_jur']);
            $table->dropForeign(['id_fak']);
            $table->dropForeign(['id_mhs']);
        });

        Schema::dropIfExists('bimbingan');
    }
};
