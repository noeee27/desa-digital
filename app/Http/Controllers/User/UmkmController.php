<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Umkm;
use App\Models\ProfilDesa;

class UmkmController extends Controller
{
    public function index()
    {
        $profil = ProfilDesa::first();

        $umkms = Umkm::where('status', 'active')
            ->latest()
            ->get();

        return view('user.umkm.index', compact(
            'profil',
            'umkms'
        ));
    }

    public function show(Umkm $umkm)
    {
        if ($umkm->status !== 'active') {
            abort(404);
        }

        $profil = ProfilDesa::first();

        return view('user.umkm.show', compact(
            'profil',
            'umkm'
        ));
    }
}