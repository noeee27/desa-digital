<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Berita;

class BeritaController extends Controller
{
    /**
     * Menampilkan daftar berita yang sudah dipublikasikan.
     */
    public function index()
    {
        $beritas = Berita::where('status', 'published')
            ->latest()
            ->get();

        return view('user.berita.index', compact('beritas'));
    }

    /**
     * Menampilkan detail berita.
     */
    public function show(Berita $berita)
    {
        // Berita draft tidak boleh diakses publik.
        abort_if($berita->status !== 'published', 404);

        return view('user.berita.show', compact('berita'));
    }
}