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
            $table->string('nim', 20)->primary()->unique();
            $table->string('nama_mahasiswa', 200);
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('alamat', 255);
            $table->string('email', 100);
            $table->string('no_hp', 15);
            $table->enum('status_mhs', ['aktif', 'nonaktif']);
            $table->foreignUuid('prodi_id')->constrained('prodi', 'id');//fk
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
            $table->dropForeign(['prodi_id']);
        });

        Schema::dropIfExists('mahasiswa');
    }
};
