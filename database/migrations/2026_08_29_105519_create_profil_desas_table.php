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
        Schema::table('profil_desas', function (Blueprint $table) {

            $table->string('nama_desa')
                ->nullable()
                ->after('id');

            $table->text('deskripsi')
                ->nullable()
                ->after('nama_desa');

            $table->string('alamat')
                ->nullable()
                ->after('misi');

            $table->string('telepon')
                ->nullable()
                ->after('alamat');

            $table->string('email')
                ->nullable()
                ->after('telepon');

            $table->string('website')
                ->nullable()
                ->after('email');

            $table->string('foto')
                ->nullable()
                ->after('website');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profil_desas', function (Blueprint $table) {

            $table->dropColumn([
                'nama_desa',
                'deskripsi',
                'alamat',
                'telepon',
                'email',
                'website',
                'foto',
            ]);

        });
    }
};