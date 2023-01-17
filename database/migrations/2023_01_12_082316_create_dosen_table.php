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
        Schema::create('dosen', function (Blueprint $table) {
            $table->id('id_dosen');
            $table->foreignId('kode_jur')->constrained('jurusan', 'kode_jur');//fk
            $table->foreignId('kode_fak')->constrained('fakultas', 'kode_fak');//fk
            $table->string('nip', 100);
            $table->string('nama_dosen', 200);
            $table->string('jenis_kelamin', 20);
            $table->string('alamat', 255);
            $table->string('email', 200);
            $table->string('status_pa', 200);
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
        Schema::table('dosen', function (Blueprint $table) {
            $table->dropForeign(['kode_jur']);
            $table->dropForeign(['kode_fak']);
        });

        Schema::dropIfExists('dosen');
    }
};
