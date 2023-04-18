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
            $table->string('nip', 20)->primary();
            $table->string('nama', 200);
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('alamat', 255);
            $table->string('email', 100);
            $table->string('no_hp', 15);
            $table->boolean('status_pa');
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
        Schema::dropIfExists('dosen');
    }
};
