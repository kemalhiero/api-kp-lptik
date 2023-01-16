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
            $table->foreignId('kode_jur')->constrained('mahasiswa', 'kode_jur');//fk
            $table->foreignId('kode_fak')->constrained('mahasiswa', 'kode_fak');//fk
            $table->foreignId('id_mk')->constrained('mata_kuliah', 'id_mk');//fk
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
            $table->dropForeign(['kode_jur']);
            $table->dropForeign(['kode_fak']);
            $table->dropForeign(['id_mk']);
        });

        Schema::dropIfExists('krs');
    }
};
