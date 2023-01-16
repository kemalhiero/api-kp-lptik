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
        Schema::create('khs', function (Blueprint $table) {
            $table->id('id_khs');
            $table->foreignId('id_mhs')->constrained('mahasiswa', 'id_mhs');//fk
            $table->foreignId('id_jur')->constrained('mahasiswa', 'id_jur');//fk
            $table->foreignId('id_fak')->constrained('mahasiswa', 'id_fak');//fk
            $table->foreignId('id_mk')->constrained('mata_kuliah', 'id_mk');//fk
            $table->string('semester', 50);
            $table->string('nilai_angka', 100);
            $table->string('nilai_huruf', 100);
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
        Schema::table('khs', function (Blueprint $table) {
            $table->dropForeign(['id_mhs']);
            $table->dropForeign(['id_jur']);
            $table->dropForeign(['id_fak']);
            $table->dropForeign(['id_mk']);
        });

        Schema::dropIfExists('khs');
    }
};
