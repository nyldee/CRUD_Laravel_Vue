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
        Schema::create('bukus', function (Blueprint $table) {
            // $table->id();
            $table->timestamps();
            $table->string('isbn')->primary(); // Kolom ISBN sebagai Primary Key
            $table->string('judul');          // Kolom judul sebagai string
            $table->string('pengarang');      // Kolom pengarang sebagai string
            $table->integer('tahun');         // Kolom tahun sebagai integer
        });

        // Schema::create('buku', function (Blueprint $table) {
        //     $table->string('isbn')->primary(); // Kolom ISBN sebagai Primary Key
        //     $table->string('judul');          // Kolom judul sebagai string
        //     $table->string('pengarang');      // Kolom pengarang sebagai string
        //     $table->integer('tahun');         // Kolom tahun sebagai integer
        // });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
        // Schema::dropIfExists('buku');
    }
};
