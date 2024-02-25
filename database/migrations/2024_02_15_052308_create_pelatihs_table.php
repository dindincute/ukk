<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pelatihs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelatih');
            $table->string('deskripsi');
            $table->string('image');
            $table->timestamps();
        });
        Schema::table('kelas', function (Blueprint $table) {
			$table->foreignId('id_pelatihs')->references('id')->on('pelatihs');
		});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelatihs');
    }
};
