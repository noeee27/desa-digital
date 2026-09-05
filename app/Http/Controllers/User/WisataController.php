<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Wisata;
use App\Models\ProfilDesa;

class WisataController extends Controller
{
    /**
     * Menampilkan daftar wisata dan jasa yang aktif.
     */
    public function index()
    {
        $profil = ProfilDesa::first();

        $wisatas = Wisata::where('status', 'active')
            ->latest()
            ->get();

        return view('user.wisata.index', compact(
            'profil',
            'wisatas'
        ));
    }

    /**
     * Menampilkan detail wisata / jasa.
     */
    public function show(Wisata $wisata)
    {
        // Hanya wisata/jasa yang aktif yang bisa dilihat user
        if ($wisata->status !== 'active') {
            abort(404);
        }

        $profil = ProfilDesa::first();

        return view('user.wisata.show', compact(
            'profil',
            'wisata'
        ));
    }
}