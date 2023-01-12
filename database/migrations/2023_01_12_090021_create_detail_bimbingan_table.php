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
            $table->foreignId('id_dosen');//fk
            $table->foreignId('kode_jur');//fk
            $table->foreignId('kode_fak');//fk
            $table->foreignId('id_mhs');//fk
            $table->foreignId('id_stat');//fk
            $table->foreignId('id_pa');//fk
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
        Schema::dropIfExists('detail_bimbingan');
    }
};
