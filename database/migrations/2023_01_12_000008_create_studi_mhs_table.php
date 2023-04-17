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
        Schema::create('studi_mhs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nim')->constrained('mahasiswa', 'nim');//fk
            $table->foreignId('kelas_id')->constrained('kelas', 'id');//fk
            $table->string('nilai', 10);
            $table->string('semester_mhs', 50);
            $table->enum('status', ['setuju', 'tdk_setuju']);
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
        Schema::table('studi_mhs', function (Blueprint $table) {
            $table->dropForeign(['nim', 'kelas_id']);
        });

        Schema::dropIfExists('studi_mhs');
    }
};
