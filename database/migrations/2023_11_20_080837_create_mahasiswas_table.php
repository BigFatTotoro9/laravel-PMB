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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('agama');
            $table->string('jenis_kelamin');
            $table->string('no_hp');
            $table->string('asal_sma');
            $table->year('tahun_lulus');
            $table->string('alamat');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('desa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
