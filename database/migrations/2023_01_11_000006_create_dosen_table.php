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
            $table->string('nip', 100)->primary()->unique();
            $table->string('nama', 200);
            $table->string('jenis_kelamin', 10);
            $table->string('alamat', 255);
            $table->string('email', 200);
            $table->string('no_hp', 200);
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
