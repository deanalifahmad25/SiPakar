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
        Schema::create('aturan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_aturan')->unique();
            $table->string('keputusan');
            $table->string('penyakit');
            $table->string('kriteria_gejala');  
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aturan');
    }
};
