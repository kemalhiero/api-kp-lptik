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
        Schema::create('dosen_pengampu', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nip')->constrained('dosen', 'nip');//fk
            $table->foreignId('kelas_id')->constrained('kelas', 'id');//fk
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dosen_pengampu', function (Blueprint $table) {
            $table->dropForeign(['nip', 'kelas_id']);
        });

        Schema::dropIfExists('dosen_pengampu');
    }
};
