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
            $table->string('nim')->constrained('mahasiswa', 'nim');//fk
            $table->foreignUuid('kelas_id')->constrained('kelas');//fk
            $table->string('nilai', 10)->nullable();
            $table->string('semester_mhs', 50);
            $table->enum('status', ['setuju', 'tdk_setuju'])->nullable();
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
