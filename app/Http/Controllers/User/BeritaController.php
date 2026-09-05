<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\ProfilDesa;

class BeritaController extends Controller
{
    /**
     * Menampilkan daftar berita yang sudah dipublikasikan.
     */
    public function index()
    {
        $profil = ProfilDesa::first();

        $beritas = Berita::where('status', 'published')
            ->latest()
            ->get();

        return view('user.berita.index', compact(
            'profil',
            'beritas'
        ));
    }

    /**
     * Menampilkan detail berita.
     */
    public function show(Berita $berita)
    {
        // Berita draft tidak boleh diakses publik.
        abort_if($berita->status !== 'published', 404);

        $profil = ProfilDesa::first();

        return view('user.berita.show', compact(
            'profil',
            'berita'
        ));
    }
}