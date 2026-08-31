<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Menampilkan daftar berita.
     */
    public function index()
    {
        $beritas = Berita::latest()->get();

        return view('admin.berita.index', compact('beritas'));
    }

    /**
     * Menampilkan form tambah berita.
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Menyimpan berita baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'kategori' => ['required', 'string', 'max:100'],
            'isi' => ['required', 'string'],
            'foto' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048'
            ],
            'status' => [
                'required',
                'in:published,draft'
            ],
        ]);

        /*
        |--------------------------------------------------------------------------
        | Membuat slug otomatis dan unik
        |--------------------------------------------------------------------------
        */

        $slug = Str::slug($validated['judul']);

        $originalSlug = $slug;
        $count = 1;

        while (Berita::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        $validated['slug'] = $slug;

        /*
        |--------------------------------------------------------------------------
        | Upload Foto
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('foto')) {

            $validated['foto'] = $request
                ->file('foto')
                ->store('berita', 'public');
        }

        /*
        |--------------------------------------------------------------------------
        | Simpan ke Database
        |--------------------------------------------------------------------------
        */

        Berita::create($validated);

        return redirect()
            ->route('berita.index')
            ->with(
                'success',
                'Berita berhasil ditambahkan.'
            );
    }

    /**
     * Menampilkan detail berita.
     */
    public function show(Berita $beritum)
    {
        return view(
            'admin.berita.show',
            compact('beritum')
        );
    }

    /**
     * Menampilkan form edit berita.
     */
    public function edit(Berita $beritum)
    {
        return view(
            'admin.berita.edit',
            compact('beritum')
        );
    }

    /**
     * Memperbarui berita.
     */
    public function update(
        Request $request,
        Berita $beritum
    ) {
        $validated = $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'kategori' => ['required', 'string', 'max:100'],
            'isi' => ['required', 'string'],
            'foto' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048'
            ],
            'status' => [
                'required',
                'in:published,draft'
            ],
        ]);

        /*
        |--------------------------------------------------------------------------
        | Buat slug baru jika judul berubah
        |--------------------------------------------------------------------------
        */

        $slug = Str::slug($validated['judul']);

        $originalSlug = $slug;
        $count = 1;

        while (
            Berita::where('slug', $slug)
                ->where('id', '!=', $beritum->id)
                ->exists()
        ) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        $validated['slug'] = $slug;

        /*
        |--------------------------------------------------------------------------
        | Ganti Foto Jika Ada Foto Baru
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('foto')) {

            if (
                $beritum->foto &&
                Storage::disk('public')->exists(
                    $beritum->foto
                )
            ) {
                Storage::disk('public')->delete(
                    $beritum->foto
                );
            }

            $validated['foto'] = $request
                ->file('foto')
                ->store('berita', 'public');
        }

        /*
        |--------------------------------------------------------------------------
        | Update Database
        |--------------------------------------------------------------------------
        */

        $beritum->update($validated);

        return redirect()
            ->route('berita.show', $beritum)
            ->with(
                'success',
                'Berita berhasil diperbarui.'
            );
    }

    /**
     * Menghapus berita.
     */
    public function destroy(Berita $beritum)
    {
        /*
        |--------------------------------------------------------------------------
        | Hapus Foto
        |--------------------------------------------------------------------------
        */

        if (
            $beritum->foto &&
            Storage::disk('public')->exists(
                $beritum->foto
            )
        ) {
            Storage::disk('public')->delete(
                $beritum->foto
            );
        }

        /*
        |--------------------------------------------------------------------------
        | Hapus Data
        |--------------------------------------------------------------------------
        */

        $beritum->delete();

        return redirect()
            ->route('berita.index')
            ->with(
                'success',
                'Berita berhasil dihapus.'
            );
    }
}