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
        Schema::create('umkms', function (Blueprint $table) {
            $table->id();

            $table->string('nama_usaha');
            $table->string('kategori');
            $table->string('nama_pemilik');

            $table->text('deskripsi')->nullable();

            $table->string('no_hp');
            $table->string('whatsapp')->nullable();

            $table->text('alamat')->nullable();
            $table->text('maps_url')->nullable();

            $table->string('foto')->nullable();

            $table->enum('status', ['active', 'inactive'])
                ->default('active');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkms');
    }
};