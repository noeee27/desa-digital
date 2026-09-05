<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use App\Models\Wisata;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\ProfilDesa;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman beranda user.
     */
    public function index()
    {
        // ==========================
        // PROFIL DESA
        // ==========================

        $profil = ProfilDesa::first();


        // ==========================
        // UMKM AKTIF
        // ==========================

        $umkms = Umkm::where('status', 'active')
            ->latest()
            ->get();


        // ==========================
        // WISATA & JASA AKTIF
        // ==========================

        $wisatas = Wisata::where('status', 'active')
            ->latest()
            ->get();


        // ==========================
        // BERITA PUBLISHED
        // ==========================

        $beritas = Berita::where('status', 'published')
            ->latest()
            ->get();


        // ==========================
        // GALERI PUBLISHED
        // ==========================

        $galeris = Galeri::where('status', 'published')
            ->latest()
            ->get();


        // ==========================
        // TAMPILKAN HOME
        // ==========================

        return view('user.home', compact(
            'profil',
            'umkms',
            'wisatas',
            'beritas',
            'galeris'
        ));
    }
}