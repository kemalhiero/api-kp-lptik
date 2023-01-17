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
            $table->id();
            $table->foreignId('id_mhs')->constrained('mahasiswa', 'id');//fk
            $table->foreignId('id_mk')->constrained('mata_kuliah', 'id');//fk
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
            $table->dropForeign(['id_mk']);
        });

        Schema::dropIfExists('khs');
    }
};
