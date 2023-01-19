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
        Schema::create('semester', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_mhs')->constrained('mahasiswa', 'id');//fk
            $table->string('semester', 50);
            $table->string('jumlah_sks', 50);
            $table->string('ips', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('semester', function (Blueprint $table) {
            $table->dropForeign(['id_mhs']);
        });

        Schema::dropIfExists('semester');
    }
};
