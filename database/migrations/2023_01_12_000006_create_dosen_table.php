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
            $table->id();
            $table->foreignId('id_jur')->constrained('jurusan', 'id');//fk
            $table->foreignId('id_fak')->constrained('fakultas', 'id');//fk
            $table->string('nip', 100);
            $table->string('nama_dosen', 200);
            $table->string('jenis_kelamin', 5);
            $table->string('alamat', 255);
            $table->string('email', 200);
            $table->string('status_pa', 10);
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
            $table->dropForeign(['id_jur']);
            $table->dropForeign(['id_fak']);
        });

        Schema::dropIfExists('dosen');
    }
};
