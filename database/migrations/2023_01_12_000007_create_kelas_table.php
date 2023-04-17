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
        Schema::create('kelas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('periode_id')->constrained('periode', 'id');//fk
            $table->string('kode_ruang')->constrained('ruang', 'kode_ruang');//fk
            $table->string('kode_matkul')->constrained('matkul', 'kode_matkul');//fk
            $table->string('hari', 10);
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->string('nama_kelas', 100);
            $table->unsignedTinyInteger('sks_matkul');
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
        Schema::table('kelas', function (Blueprint $table) {
            $table->dropForeign(['periode_id', 'kode_ruang', 'kode_matkul']);
        });

        Schema::dropIfExists('kelas');
    }
};
