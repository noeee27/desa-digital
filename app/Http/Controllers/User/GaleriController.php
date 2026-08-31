<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Galeri;

class GaleriController extends Controller
{
    /**
     * Menampilkan daftar galeri.
     */
    public function index()
    {
        $galeris = Galeri::where('status', 'published')
            ->latest()
            ->get();

        return view('user.galeri.index', compact('galeris'));
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

        return view(
            'user.galeri.show',
            compact('galeri')
        );
    }
}