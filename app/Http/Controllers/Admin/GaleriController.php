<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Menampilkan daftar galeri.
     */
    public function index()
    {
        $galeris = Galeri::latest()->get();

        return view('admin.galeri.index', compact('galeris'));
    }


    /**
     * Menampilkan form tambah galeri.
     */
    public function create()
    {
        return view('admin.galeri.create');
    }


    /**
     * Menyimpan galeri baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => [
                'required',
                'string',
                'max:255'
            ],

            'deskripsi' => [
                'nullable',
                'string'
            ],

            'kategori' => [
                'nullable',
                'string',
                'max:100'
            ],

            'foto' => [
                'required',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:5120'
            ],

            'status' => [
                'required',
                'in:published,draft'
            ],
        ]);


        // ==========================
        // UPLOAD FOTO
        // ==========================

        $validated['foto'] = $request
            ->file('foto')
            ->store('galeri', 'public');


        // ==========================
        // SIMPAN DATABASE
        // ==========================

        Galeri::create($validated);


        return redirect()
            ->route('galeri.index')
            ->with(
                'success',
                'Foto galeri berhasil ditambahkan.'
            );
    }


    /**
     * Menampilkan detail galeri.
     */
    public function show(Galeri $galeri)
    {
        return view(
            'admin.galeri.show',
            compact('galeri')
        );
    }


    /**
     * Menampilkan form edit galeri.
     */
    public function edit(Galeri $galeri)
    {
        return view(
            'admin.galeri.edit',
            compact('galeri')
        );
    }


    /**
     * Memperbarui galeri.
     */
    public function update(
        Request $request,
        Galeri $galeri
    ) {
        $validated = $request->validate([
            'judul' => [
                'required',
                'string',
                'max:255'
            ],

            'deskripsi' => [
                'nullable',
                'string'
            ],

            'kategori' => [
                'nullable',
                'string',
                'max:100'
            ],

            'foto' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:5120'
            ],

            'status' => [
                'required',
                'in:published,draft'
            ],
        ]);


        // ==========================
        // GANTI FOTO
        // ==========================

        if ($request->hasFile('foto')) {

            // Hapus foto lama
            if (
                $galeri->foto &&
                Storage::disk('public')->exists(
                    $galeri->foto
                )
            ) {
                Storage::disk('public')->delete(
                    $galeri->foto
                );
            }


            // Upload foto baru
            $validated['foto'] = $request
                ->file('foto')
                ->store('galeri', 'public');
        }


        // ==========================
        // UPDATE DATABASE
        // ==========================

        $galeri->update($validated);


        return redirect()
            ->route('galeri.index')
            ->with(
                'success',
                'Foto galeri berhasil diperbarui.'
            );
    }


    /**
     * Menghapus galeri.
     */
    public function destroy(Galeri $galeri)
    {
        // Hapus file foto
        if (
            $galeri->foto &&
            Storage::disk('public')->exists(
                $galeri->foto
            )
        ) {
            Storage::disk('public')->delete(
                $galeri->foto
            );
        }


        // Hapus data database
        $galeri->delete();


        return redirect()
            ->route('galeri.index')
            ->with(
                'success',
                'Foto galeri berhasil dihapus.'
            );
    }
}