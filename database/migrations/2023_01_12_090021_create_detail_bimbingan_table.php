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
        Schema::create('detail_bimbingan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_dosen')->constrained('dosen', 'id_dosen');//fk
            $table->date('waktu', 100);
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
        Schema::table('detail_bimbingan', function (Blueprint $table) {
            $table->dropForeign(['id_dosen']);
            $table->dropForeign(['id_mhs']);
        });

        Schema::dropIfExists('detail_bimbingan');
    }
};
