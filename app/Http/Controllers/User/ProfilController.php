<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ProfilDesa;

class ProfilController extends Controller
{
    /**
     * Menampilkan halaman profil desa.
     */
    public function index()
    {
        // Mengambil data profil desa
        $profil = ProfilDesa::first();

        // Mengirim data ke halaman user
        return view('user.profil', compact('profil'));
    }
}