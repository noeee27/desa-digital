<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migration.
     */
    public function up(): void
    {
        Schema::create('galeris', function (Blueprint $table) {
            $table->id();

            $table->string('judul');

            $table->text('deskripsi')->nullable();

            $table->string('foto');

            $table->string('kategori')->nullable();

            $table->enum('status', [
                'published',
                'draft'
            ])->default('published');

            $table->timestamps();
        });
    }

    /**
     * Membatalkan migration.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeris');
    }
};