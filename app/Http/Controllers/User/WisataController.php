<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Wisata;

class WisataController extends Controller
{
    /**
     * Menampilkan daftar wisata dan jasa yang aktif.
     */
    public function index()
    {
        $wisatas = Wisata::where('status', 'active')
            ->latest()
            ->get();

        return view('user.wisata.index', compact('wisatas'));
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

        return view('user.wisata.show', compact('wisata'));
    }
}