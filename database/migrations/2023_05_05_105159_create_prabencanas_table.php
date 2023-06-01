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
        Schema::create('prabencanas', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('deskripsi_prabencana');
            $table->string('gambar_prabencana');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prabencanas');
    }
};
