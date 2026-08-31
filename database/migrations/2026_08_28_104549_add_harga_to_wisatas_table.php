<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Menambahkan kolom harga ke tabel wisatas.
     */
    public function up(): void
    {
        Schema::table('wisatas', function (Blueprint $table) {
            $table->string('harga', 100)->nullable()->after('whatsapp');
        });
    }

    /**
     * Menghapus kolom harga.
     */
    public function down(): void
    {
        Schema::table('wisatas', function (Blueprint $table) {
            $table->dropColumn('harga');
        });
    }
};