<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use App\Models\ProfilDesa;

class GaleriController extends Controller
{
    /**
     * Menampilkan daftar galeri.
     */
    public function index()
    {
        $profil = ProfilDesa::first();

        $galeris = Galeri::where('status', 'published')
            ->latest()
            ->get();

        return view('user.galeri.index', compact(
            'profil',
            'galeris'
        ));
    }


    /**
     * Menampilkan detail galeri.
     */
    public function show(Galeri $galeri)
    {
        // Pastikan hanya galeri published
        if ($galeri->status !== 'published') {
            abort(404);
        }

        $profil = ProfilDesa::first();

        return view(
            'user.galeri.show',
            compact('profil', 'galeri')
        );
    }
}