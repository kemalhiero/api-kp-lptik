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
            $table->foreignId('id_krs')->constrained('krs', 'id_krs');//fk
            $table->foreignId('id_mhs')->constrained('krs', 'id_mhs');//fk
            $table->foreignId('kode_jur')->constrained('krs', 'kode_jur');//fk
            $table->foreignId('kode_fak')->constrained('krs', 'kode_fak');//fk
            $table->foreignId('id_mk')->constrained('krs', 'id_mk');//fk
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
            $table->dropForeign(['id_krs']);
            $table->dropForeign(['id_mhs']);
            $table->dropForeign(['kode_jur']);
            $table->dropForeign(['kode_fak']);
            $table->dropForeign(['id_mk']);
        });

        Schema::dropIfExists('khs');
    }
};
