<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProfilDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    /**
     * Menampilkan halaman pengaturan profil desa.
     */
    public function index()
    {
        // Ambil data profil desa pertama
        $profil = ProfilDesa::first();

        // Jika belum ada data, buat data kosong
        // agar form admin tetap bisa ditampilkan.
        if (!$profil) {
            $profil = new ProfilDesa([
                'nama_desa' => '',
                'deskripsi' => '',
                'visi' => '',
                'misi' => '',
                'alamat' => '',
                'telepon' => '',
                'email' => '',
                'website' => '',
            ]);
        }

        return view('admin.profile.index', compact('profil'));
    }


    /**
     * Menyimpan perubahan profil desa.
     */
    public function update(Request $request)
    {
        // ==========================
        // VALIDASI
        // ==========================

        $validated = $request->validate([
            'nama_desa' => 'required|string|max:255',

            'deskripsi' => 'nullable|string',

            'visi' => 'required|string',

            'misi' => 'required|string',

            'alamat' => 'nullable|string|max:500',

            'telepon' => 'nullable|string|max:50',

            'email' => 'nullable|email|max:255',

            'website' => 'nullable|string|max:255',

            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ], [
            'nama_desa.required' => 'Nama desa wajib diisi.',

            'visi.required' => 'Visi desa wajib diisi.',

            'misi.required' => 'Misi desa wajib diisi.',

            'email.email' => 'Format email tidak valid.',

            'foto.image' => 'File harus berupa gambar.',

            'foto.mimes' => 'Format foto harus JPG, JPEG, PNG, atau WEBP.',

            'foto.max' => 'Ukuran foto maksimal 2 MB.',
        ]);


        // ==========================
        // AMBIL / BUAT DATA PROFIL
        // ==========================

        $profil = ProfilDesa::first();

        if (!$profil) {
            $profil = new ProfilDesa();
        }


        // ==========================
        // FOTO DESA
        // ==========================

        if ($request->hasFile('foto')) {

            // Hapus foto lama
            if (
                $profil->foto &&
                Storage::disk('public')->exists($profil->foto)
            ) {
                Storage::disk('public')->delete($profil->foto);
            }

            // Simpan foto baru
            $validated['foto'] = $request
                ->file('foto')
                ->store('profil', 'public');
        }


        // ==========================
        // SIMPAN DATA
        // ==========================

        $profil->fill($validated);

        $profil->save();


        // ==========================
        // KEMBALI KE HALAMAN ADMIN
        // ==========================

        return redirect()
            ->route('admin.profil.index')
            ->with(
                'success',
                'Profil Desa berhasil diperbarui.'
            );
    }
}