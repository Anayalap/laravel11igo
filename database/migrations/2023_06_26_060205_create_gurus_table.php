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
        Schema::create('guru', function (Blueprint $table) {
            // $table->id();
            $table->char('id_guru', 10);
            $table->string('nama_guru', 100);
            $table->enum('gender', ['M','F']);
            $table->string('alamat', 100);
            $table->char('phone', 20);
            $table->primary('id_guru');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guru');
    }
};
