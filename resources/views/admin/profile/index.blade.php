<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profil Desa - Admin Desa Digital</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-800">

<div class="min-h-screen flex">

    {{-- =====================================================
        SIDEBAR
    ====================================================== --}}

    <aside class="hidden md:flex md:w-64 md:flex-col bg-green-900 text-white">

        {{-- LOGO --}}
        <div class="flex h-20 items-center gap-3 px-6 border-b border-green-800">

            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-green-600">
                <i data-lucide="landmark" class="h-5 w-5"></i>
            </div>

            <div>
                <h1 class="font-bold">
                    Desa Digital
                </h1>

                <p class="text-xs text-green-300">
                    Panel Administrasi
                </p>
            </div>

        </div>


        {{-- MENU --}}
        <nav class="flex-1 space-y-1 px-3 py-6">

            {{-- DASHBOARD --}}
            <a
                href="{{ route('admin.dashboard') }}"
                class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
            >
                <i data-lucide="layout-dashboard" class="h-5 w-5"></i>

                <span>
                    Dashboard
                </span>
            </a>


            {{-- UMKM --}}
            <a
                href="{{ route('umkm.index') }}"
                class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
            >
                <i data-lucide="store" class="h-5 w-5"></i>

                <span>
                    UMKM
                </span>
            </a>


            {{-- WISATA & JASA --}}
            <a
                href="{{ route('wisata.index') }}"
                class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
            >
                <i data-lucide="map" class="h-5 w-5"></i>

                <span>
                    Wisata & Jasa
                </span>
            </a>


            {{-- BERITA --}}
            <a
                href="{{ route('berita.index') }}"
                class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
            >
                <i data-lucide="newspaper" class="h-5 w-5"></i>

                <span>
                    Berita
                </span>
            </a>


            {{-- GALERI --}}
            <a
                href="{{ route('galeri.index') }}"
                class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
            >
                <i data-lucide="images" class="h-5 w-5"></i>

                <span>
                    Galeri
                </span>
            </a>


            {{-- PROFIL DESA --}}
            <a
                href="{{ route('admin.profil.index') }}"
                class="flex items-center gap-3 rounded-xl bg-green-700 px-4 py-3 text-sm font-medium text-white"
            >
                <i data-lucide="building-2" class="h-5 w-5"></i>

                <span>
                    Profil Desa
                </span>
            </a>

        </nav>


        {{-- LOGOUT --}}
        <div class="border-t border-green-800 p-4">

            <form
                action="{{ route('admin.logout') }}"
                method="POST"
            >

                @csrf

                <button
                    type="submit"
                    class="flex w-full items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
                >

                    <i data-lucide="log-out" class="h-5 w-5"></i>

                    <span>
                        Logout
                    </span>

                </button>

            </form>

        </div>

    </aside>


    {{-- =====================================================
        MAIN CONTENT
    ====================================================== --}}

    <main class="flex-1 min-w-0">

        {{-- HEADER --}}
        <header class="flex h-20 items-center justify-between border-b border-gray-200 bg-white px-6">

            <div>

                <h2 class="text-xl font-bold text-gray-900">
                    Profil Desa
                </h2>

                <p class="text-sm text-gray-500">
                    Kelola informasi profil desa
                </p>

            </div>


            {{-- ADMIN --}}
            <div class="flex items-center gap-3">

                <div class="hidden text-right sm:block">

                    <p class="text-sm font-semibold text-gray-900">
                        {{ auth()->user()->name }}
                    </p>

                    <p class="text-xs text-gray-500">
                        Administrator
                    </p>

                </div>

                <div class="flex h-10 w-10 items-center justify-center rounded-full bg-green-100 font-semibold text-green-700">

                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                </div>

            </div>

        </header>


        {{-- =====================================================
            CONTENT
        ====================================================== --}}

        <div class="p-6">

            {{-- TITLE --}}
            <div class="mb-6">

                <h1 class="text-2xl font-bold text-gray-900">
                    Kelola Profil Desa
                </h1>

                <p class="mt-1 text-sm text-gray-500">
                    Perbarui informasi profil desa yang ditampilkan kepada masyarakat.
                </p>

            </div>


            {{-- =====================================================
                SUCCESS MESSAGE
            ====================================================== --}}

            @if(session('success'))

                <div class="mb-6 flex items-center gap-3 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">

                    <i data-lucide="check-circle" class="h-5 w-5"></i>

                    <span>
                        {{ session('success') }}
                    </span>

                </div>

            @endif


            {{-- =====================================================
                ERROR MESSAGE
            ====================================================== --}}

            @if($errors->any())

                <div class="mb-6 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">

                    <div class="flex items-center gap-2 font-semibold">

                        <i data-lucide="circle-alert" class="h-5 w-5"></i>

                        <span>
                            Terdapat kesalahan
                        </span>

                    </div>

                    <ul class="mt-2 list-disc pl-6">

                        @foreach($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif


            {{-- =====================================================
                FORM
            ====================================================== --}}

            <form
                action="{{ route('admin.profil.update') }}"
                method="POST"
                enctype="multipart/form-data"
                class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-200"
            >

                @csrf

                @method('PUT')


                {{-- =================================================
                    HEADER FORM
                ================================================== --}}

                <div class="border-b border-gray-100 px-6 py-5">

                    <div class="flex items-center gap-3">

                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-green-100 text-green-600">

                            <i data-lucide="building-2" class="h-5 w-5"></i>

                        </div>

                        <div>

                            <h2 class="font-bold text-gray-900">
                                Informasi Profil Desa
                            </h2>

                            <p class="text-sm text-gray-500">
                                Kelola informasi desa yang ditampilkan kepada masyarakat.
                            </p>

                        </div>

                    </div>

                </div>


                {{-- =================================================
                    FORM BODY
                ================================================== --}}

                <div class="space-y-8 p-6">


                    {{-- =================================================
                        INFORMASI DASAR
                    ================================================== --}}

                    <section>

                        <div class="mb-5">

                            <h3 class="text-base font-bold text-gray-900">
                                Informasi Dasar
                            </h3>

                            <p class="mt-1 text-sm text-gray-500">
                                Informasi umum mengenai desa.
                            </p>

                        </div>


                        <div class="space-y-5">


                            {{-- NAMA DESA --}}
                            <div>

                                <label
                                    for="nama_desa"
                                    class="mb-2 block text-sm font-semibold text-gray-900"
                                >
                                    Nama Desa
                                    <span class="text-red-500">*</span>
                                </label>

                                <input
                                    type="text"
                                    id="nama_desa"
                                    name="nama_desa"
                                    value="{{ old('nama_desa', $profil?->nama_desa) }}"
                                    placeholder="Masukkan nama desa"
                                    required
                                    class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm text-gray-800 outline-none transition focus:border-green-500 focus:ring-2 focus:ring-green-100"
                                >

                            </div>


                            {{-- DESKRIPSI --}}
                            <div>

                                <label
                                    for="deskripsi"
                                    class="mb-2 block text-sm font-semibold text-gray-900"
                                >
                                    Deskripsi Desa
                                </label>

                                <textarea
                                    id="deskripsi"
                                    name="deskripsi"
                                    rows="4"
                                    placeholder="Masukkan deskripsi singkat mengenai desa..."
                                    class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm text-gray-800 outline-none transition focus:border-green-500 focus:ring-2 focus:ring-green-100"
                                >{{ old('deskripsi', $profil?->deskripsi) }}</textarea>

                            </div>


                            {{-- ALAMAT --}}
                            <div>

                                <label
                                    for="alamat"
                                    class="mb-2 block text-sm font-semibold text-gray-900"
                                >
                                    Alamat Desa
                                </label>

                                <textarea
                                    id="alamat"
                                    name="alamat"
                                    rows="3"
                                    placeholder="Masukkan alamat desa..."
                                    class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm text-gray-800 outline-none transition focus:border-green-500 focus:ring-2 focus:ring-green-100"
                                >{{ old('alamat', $profil?->alamat) }}</textarea>

                            </div>


                            {{-- TELEPON --}}
                            <div>

                                <label
                                    for="telepon"
                                    class="mb-2 block text-sm font-semibold text-gray-900"
                                >
                                    Nomor Telepon
                                </label>

                                <input
                                    type="text"
                                    id="telepon"
                                    name="telepon"
                                    value="{{ old('telepon', $profil?->telepon) }}"
                                    placeholder="Contoh: 081234567890"
                                    class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm text-gray-800 outline-none transition focus:border-green-500 focus:ring-2 focus:ring-green-100"
                                >

                            </div>


                            {{-- EMAIL --}}
                            <div>

                                <label
                                    for="email"
                                    class="mb-2 block text-sm font-semibold text-gray-900"
                                >
                                    Email
                                </label>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    value="{{ old('email', $profil?->email) }}"
                                    placeholder="Contoh: desa@gmail.com"
                                    class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm text-gray-800 outline-none transition focus:border-green-500 focus:ring-2 focus:ring-green-100"
                                >

                            </div>


                            {{-- WEBSITE --}}
                            <div>

                                <label
                                    for="website"
                                    class="mb-2 block text-sm font-semibold text-gray-900"
                                >
                                    Website
                                </label>

                                <input
                                    type="text"
                                    id="website"
                                    name="website"
                                    value="{{ old('website', $profil?->website) }}"
                                    placeholder="Contoh: desadigital.id"
                                    class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm text-gray-800 outline-none transition focus:border-green-500 focus:ring-2 focus:ring-green-100"
                                >

                            </div>

                        </div>

                    </section>


                    {{-- PEMISAH --}}
                    <div class="border-t border-gray-100"></div>


                    {{-- =================================================
                        VISI & MISI
                    ================================================== --}}

                    <section>

                        <div class="mb-5">

                            <h3 class="text-base font-bold text-gray-900">
                                Visi & Misi
                            </h3>

                            <p class="mt-1 text-sm text-gray-500">
                                Visi dan misi yang akan ditampilkan pada halaman Profil Desa.
                            </p>

                        </div>


                        <div class="space-y-5">


                            {{-- VISI --}}
                            <div>

                                <label
                                    for="visi"
                                    class="mb-2 block text-sm font-semibold text-gray-900"
                                >
                                    Visi Desa
                                    <span class="text-red-500">*</span>
                                </label>

                                <textarea
                                    id="visi"
                                    name="visi"
                                    rows="6"
                                    required
                                    placeholder="Masukkan visi desa..."
                                    class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm text-gray-800 outline-none transition focus:border-green-500 focus:ring-2 focus:ring-green-100"
                                >{{ old('visi', $profil?->visi) }}</textarea>

                            </div>


                            {{-- MISI --}}
                            <div>

                                <label
                                    for="misi"
                                    class="mb-2 block text-sm font-semibold text-gray-900"
                                >
                                    Misi Desa
                                    <span class="text-red-500">*</span>
                                </label>

                                <textarea
                                    id="misi"
                                    name="misi"
                                    rows="9"
                                    required
                                    placeholder="Masukkan misi desa..."
                                    class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm text-gray-800 outline-none transition focus:border-green-500 focus:ring-2 focus:ring-green-100"
                                >{{ old('misi', $profil?->misi) }}</textarea>

                                <p class="mt-2 text-xs text-gray-500">
                                    Jika memiliki beberapa misi, tuliskan setiap misi pada baris baru.
                                </p>

                            </div>

                        </div>

                    </section>


                    {{-- PEMISAH --}}
                    <div class="border-t border-gray-100"></div>


                    {{-- =================================================
                        FOTO DESA
                    ================================================== --}}

                    <section>

                        <div class="mb-5">

                            <h3 class="text-base font-bold text-gray-900">
                                Foto Desa
                            </h3>

                            <p class="mt-1 text-sm text-gray-500">
                                Foto desa yang akan digunakan pada halaman profil.
                            </p>

                        </div>


                        {{-- UPLOAD --}}
                        <div>

                            <label
                                for="foto"
                                class="mb-2 block text-sm font-semibold text-gray-900"
                            >
                                Upload Foto
                            </label>

                            <input
                                type="file"
                                id="foto"
                                name="foto"
                                accept=".jpg,.jpeg,.png,.webp"
                                class="block w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm text-gray-700 file:mr-4 file:rounded-lg file:border-0 file:bg-green-50 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-green-700 hover:file:bg-green-100"
                            >

                            <p class="mt-2 text-xs text-gray-500">
                                Format JPG, JPEG, PNG, atau WEBP. Maksimal 2 MB.
                            </p>

                        </div>


                        {{-- FOTO LAMA --}}
                        @if($profil?->foto)

                            <div class="mt-5">

                                <p class="mb-2 text-sm font-semibold text-gray-900">
                                    Foto Saat Ini
                                </p>

                                <img
                                    src="{{ asset('storage/' . $profil->foto) }}"
                                    alt="Foto Desa"
                                    class="h-48 w-full max-w-md rounded-xl object-cover ring-1 ring-gray-200"
                                >

                            </div>

                        @endif

                    </section>


                </div>


                {{-- =================================================
                    FORM FOOTER
                ================================================== --}}

                <div class="flex flex-col gap-3 border-t border-gray-100 bg-gray-50 px-6 py-5 sm:flex-row sm:justify-end">


                    {{-- LIHAT PROFIL --}}
                    <a
                        href="{{ route('user.profil') }}"
                        target="_blank"
                        class="inline-flex items-center justify-center gap-2 rounded-xl border border-gray-300 bg-white px-5 py-3 text-sm font-semibold text-gray-700 transition hover:bg-gray-100"
                    >

                        <i data-lucide="external-link" class="h-4 w-4"></i>

                        Lihat Profil

                    </a>


                    {{-- SIMPAN --}}
                    <button
                        type="submit"
                        class="inline-flex items-center justify-center gap-2 rounded-xl bg-green-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-green-700"
                    >

                        <i data-lucide="save" class="h-4 w-4"></i>

                        Simpan Perubahan

                    </button>

                </div>

            </form>

        </div>

    </main>

</div>


{{-- =====================================================
    LUCIDE ICON
====================================================== --}}

<script>

    document.addEventListener('DOMContentLoaded', function () {

        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }

    });

</script>

</body>

</html>