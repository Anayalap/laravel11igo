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
        Schema::create('siswa', function (Blueprint $table) {
            // $table->id();
            $table->char('id_siswa', 10);
            $table->string('nama_siswa', 100);
            $table->enum('gender', ['M','F']);
            $table->string('alamat', 100);
            $table->char('phone', 20);
            $table->primary('id_siswa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
