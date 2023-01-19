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
        Schema::create('mahasiswa', function (Blueprint $table) {

            $table->id();
            $table->foreignId('id_jur')->constrained('jurusan', 'id');//fk
            $table->foreignId('id_fak')->constrained('fakultas', 'id');//fk
            $table->string('nim', 20)->unique();
            $table->string('nama_mahasiswa', 200);
            $table->string('jenis_kelamin', 5);
            $table->string('alamat', 255);
            $table->string('email', 250);
            $table->string('no_hp', 250);
            $table->string('status_mhs', 50);
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

        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->dropForeign(['id_jur']);
            $table->dropForeign(['id_fak']);
        });

        Schema::dropIfExists('mahasiswa');
    }
};
