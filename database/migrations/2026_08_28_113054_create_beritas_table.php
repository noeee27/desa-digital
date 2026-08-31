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
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();

            // Informasi berita
            $table->string('judul');
            $table->string('slug')->unique();
            $table->string('kategori')->nullable();

            // Isi berita
            $table->longText('isi');

            // Foto utama berita
            $table->string('foto')->nullable();

            // Status publikasi
            $table->enum('status', [
                'draft',
                'published'
            ])->default('draft');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};