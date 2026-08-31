<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WisataController extends Controller
{
    /**
     * Menampilkan daftar wisata dan jasa.
     */
    public function index()
    {
        $wisatas = Wisata::latest()->get();

        return view('admin.wisata.index', compact('wisatas'));
    }

    /**
     * Menampilkan form tambah wisata dan jasa.
     */
    public function create()
    {
        return view('admin.wisata.create');
    }

    /**
     * Menyimpan data wisata dan jasa baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'kategori' => ['required', 'string', 'max:100'],
            'deskripsi' => ['nullable', 'string'],
            'alamat' => ['nullable', 'string'],
            'maps_url' => ['nullable', 'url', 'max:500'],
            'no_hp' => ['nullable', 'string', 'max:20'],
            'whatsapp' => ['nullable', 'string', 'max:20'],
            'harga' => ['nullable', 'string', 'max:100'],
            'foto' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048'
            ],
            'status' => ['required', 'in:active,inactive'],
        ]);

        // Upload foto
        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')
                ->store('wisata', 'public');
        }

        Wisata::create($validated);

        return redirect()
            ->route('wisata.index')
            ->with('success', 'Data wisata & jasa berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail wisata / jasa.
     */
    public function show(Wisata $wisatum)
    {
        return view('admin.wisata.show', compact('wisatum'));
    }

    /**
     * Menampilkan form edit wisata dan jasa.
     */
    public function edit(Wisata $wisatum)
    {
        return view('admin.wisata.edit', compact('wisatum'));
    }

    /**
     * Memperbarui data wisata dan jasa.
     */
    public function update(Request $request, Wisata $wisatum)
    {
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'kategori' => ['required', 'string', 'max:100'],
            'deskripsi' => ['nullable', 'string'],
            'alamat' => ['nullable', 'string'],
            'maps_url' => ['nullable', 'url', 'max:500'],
            'no_hp' => ['nullable', 'string', 'max:20'],
            'whatsapp' => ['nullable', 'string', 'max:20'],
            'harga' => ['nullable', 'string', 'max:100'],
            'foto' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048'
            ],
            'status' => ['required', 'in:active,inactive'],
        ]);

        // Jika upload foto baru
        if ($request->hasFile('foto')) {

            // Hapus foto lama
            if (
                $wisatum->foto &&
                Storage::disk('public')->exists($wisatum->foto)
            ) {
                Storage::disk('public')->delete($wisatum->foto);
            }

            // Simpan foto baru
            $validated['foto'] = $request->file('foto')
                ->store('wisata', 'public');
        }

        $wisatum->update($validated);

        return redirect()
            ->route('wisata.show', $wisatum)
            ->with('success', 'Data wisata & jasa berhasil diperbarui.');
    }

    /**
     * Menghapus data wisata dan jasa.
     */
    public function destroy(Wisata $wisatum)
    {
        // Hapus foto dari storage
        if (
            $wisatum->foto &&
            Storage::disk('public')->exists($wisatum->foto)
        ) {
            Storage::disk('public')->delete($wisatum->foto);
        }

        // Hapus data dari database
        $wisatum->delete();

        return redirect()
            ->route('wisata.index')
            ->with('success', 'Data wisata & jasa berhasil dihapus.');
    }
}