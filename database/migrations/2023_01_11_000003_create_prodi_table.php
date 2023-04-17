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
        Schema::create('prodi', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama_jur', 100);
            $table->string('jenjang', 10);
            $table->foreignUuid('fakultas_id')->constrained('fakultas', 'uuid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prodi', function (Blueprint $table) {
            $table->dropForeign(['fakultas_id']);
        });

        Schema::dropIfExists('prodi');
    }
};
