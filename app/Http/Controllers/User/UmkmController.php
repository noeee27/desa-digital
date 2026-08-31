<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Umkm;

class UmkmController extends Controller
{
    /**
     * Menampilkan daftar UMKM untuk masyarakat.
     */
    public function index()
    {
        $umkms = Umkm::where('status', 'active')
            ->latest()
            ->get();

        return view('user.umkm.index', compact('umkms'));
    }

    /**
     * Menampilkan detail UMKM.
     */
    public function show(Umkm $umkm)
    {
        // Hanya UMKM aktif yang dapat dilihat publik
        if ($umkm->status !== 'active') {
            abort(404);
        }

        return view('user.umkm.show', compact('umkm'));
    }
}