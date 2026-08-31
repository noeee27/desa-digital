<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UmkmController extends Controller
{
    /**
     * Menampilkan daftar UMKM
     */
    public function index()
    {
        $umkms = Umkm::latest()->get();

        return view('admin.umkm.index', compact('umkms'));
    }

    /**
     * Menampilkan form tambah UMKM
     */
    public function create()
    {
        return view('admin.umkm.create');
    }

    /**
     * Menyimpan UMKM baru
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_usaha' => ['required', 'string', 'max:255'],
            'kategori' => ['required', 'string', 'max:100'],
            'nama_pemilik' => ['required', 'string', 'max:255'],
            'deskripsi' => ['nullable', 'string'],
            'no_hp' => ['required', 'string', 'max:20'],
            'whatsapp' => ['nullable', 'string', 'max:20'],
            'alamat' => ['nullable', 'string'],
            'maps_url' => ['nullable', 'url', 'max:500'],
            'foto' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048'
            ],
            'status' => ['required', 'in:active,inactive'],
        ]);

        /*
        |--------------------------------------------------------------------------
        | Upload Foto
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')
                ->store('umkm', 'public');
        }

        /*
        |--------------------------------------------------------------------------
        | Simpan Data
        |--------------------------------------------------------------------------
        */

        Umkm::create($validated);

        return redirect()
            ->route('umkm.index')
            ->with('success', 'Data UMKM berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail UMKM
     */
    public function show(Umkm $umkm)
    {
        return view('admin.umkm.show', compact('umkm'));
    }

    /**
     * Menampilkan form edit UMKM
     */
    public function edit(Umkm $umkm)
    {
        return view('admin.umkm.edit', compact('umkm'));
    }

    /**
     * Memperbarui data UMKM
     */
    public function update(Request $request, Umkm $umkm)
    {
        $validated = $request->validate([
            'nama_usaha' => ['required', 'string', 'max:255'],
            'kategori' => ['required', 'string', 'max:100'],
            'nama_pemilik' => ['required', 'string', 'max:255'],
            'deskripsi' => ['nullable', 'string'],
            'no_hp' => ['required', 'string', 'max:20'],
            'whatsapp' => ['nullable', 'string', 'max:20'],
            'alamat' => ['nullable', 'string'],
            'maps_url' => ['nullable', 'url', 'max:500'],
            'foto' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048'
            ],
            'status' => ['required', 'in:active,inactive'],
        ]);

        /*
        |--------------------------------------------------------------------------
        | Upload Foto Baru
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('foto')) {

            // Hapus foto lama jika ada
            if (
                $umkm->foto &&
                Storage::disk('public')->exists($umkm->foto)
            ) {
                Storage::disk('public')->delete($umkm->foto);
            }

            // Simpan foto baru
            $validated['foto'] = $request->file('foto')
                ->store('umkm', 'public');
        }

        /*
        |--------------------------------------------------------------------------
        | Update Data
        |--------------------------------------------------------------------------
        */

        $umkm->update($validated);

        return redirect()
            ->route('umkm.show', $umkm)
            ->with('success', 'Data UMKM berhasil diperbarui.');
    }

   /**
     * Menghapus UMKM
     */
    public function destroy(Umkm $umkm)
    {
        // Hapus foto jika ada
        if ($umkm->foto && Storage::disk('public')->exists($umkm->foto)) {
            Storage::disk('public')->delete($umkm->foto);
        }

        // Hapus data UMKM
        $umkm->delete();

        return redirect()
            ->route('umkm.index')
            ->with('success', 'Data UMKM berhasil dihapus.');
    }
}