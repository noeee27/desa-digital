<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah UMKM - Desa Digital</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-800">

    <div class="min-h-screen flex">

        {{-- SIDEBAR --}}
        <aside class="hidden w-64 shrink-0 bg-green-900 text-white md:flex md:flex-col">

            {{-- Logo --}}
            <div class="flex h-20 items-center gap-3 border-b border-green-800 px-6">

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


            {{-- Navigation --}}
            <nav class="flex-1 space-y-1 px-3 py-6">

                <a
                    href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
                >
                    <i data-lucide="layout-dashboard" class="h-5 w-5"></i>
                    Dashboard
                </a>


                <a
                    href="{{ route('umkm.index') }}"
                    class="flex items-center gap-3 rounded-xl bg-green-700 px-4 py-3 text-sm font-medium"
                >
                    <i data-lucide="store" class="h-5 w-5"></i>
                    UMKM
                </a>


                <a
                    href="#"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
                >
                    <i data-lucide="car-front" class="h-5 w-5"></i>
                    Wisata & Jasa
                </a>


                <a
                    href="#"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
                >
                    <i data-lucide="newspaper" class="h-5 w-5"></i>
                    Berita
                </a>


                <a
                    href="#"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
                >
                    <i data-lucide="images" class="h-5 w-5"></i>
                    Galeri
                </a>


                <a
                    href="#"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
                >
                    <i data-lucide="building-2" class="h-5 w-5"></i>
                    Profil Desa
                </a>

            </nav>


            {{-- Logout --}}
            <div class="border-t border-green-800 p-4">

                <form method="POST" action="{{ route('admin.logout') }}">

                    @csrf

                    <button
                        type="submit"
                        class="flex w-full items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
                    >
                        <i data-lucide="log-out" class="h-5 w-5"></i>
                        Logout
                    </button>

                </form>

            </div>

        </aside>


        {{-- MAIN --}}
        <main class="min-w-0 flex-1">

            {{-- TOPBAR --}}
            <header class="flex h-20 items-center justify-between border-b border-gray-200 bg-white px-6">

                <div>

                    <h2 class="text-xl font-bold text-gray-900">
                        UMKM
                    </h2>

                    <p class="text-sm text-gray-500">
                        Tambahkan informasi usaha masyarakat desa.
                    </p>

                </div>


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


            {{-- CONTENT --}}
            <div class="p-6">

                {{-- Breadcrumb --}}
                <div class="mb-6 flex items-center gap-2 text-sm">

                    <a
                        href="{{ route('umkm.index') }}"
                        class="text-gray-500 transition hover:text-green-700"
                    >
                        UMKM
                    </a>

                    <i data-lucide="chevron-right" class="h-4 w-4 text-gray-400"></i>

                    <span class="font-medium text-gray-900">
                        Tambah UMKM
                    </span>

                </div>


                {{-- Form Card --}}
                <div class="mx-auto max-w-4xl">

                    <div class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-200">

                        {{-- Header --}}
                        <div class="border-b border-gray-200 px-6 py-5">

                            <div class="flex items-center gap-3">

                                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-green-100 text-green-700">

                                    <i data-lucide="store" class="h-5 w-5"></i>

                                </div>

                                <div>

                                    <h1 class="text-lg font-bold text-gray-900">
                                        Tambah UMKM
                                    </h1>

                                    <p class="text-sm text-gray-500">
                                        Masukkan informasi usaha masyarakat desa.
                                    </p>

                                </div>

                            </div>

                        </div>


                        {{-- Form --}}
                        <form
                            method="POST"
                            action="{{ route('umkm.store') }}"
                            enctype="multipart/form-data"
                            class="p-6"
                        >

                            @csrf


                            {{-- Informasi Usaha --}}
                            <div class="mb-8">

                                <div class="mb-5">

                                    <h2 class="text-base font-semibold text-gray-900">
                                        Informasi Usaha
                                    </h2>

                                    <p class="mt-1 text-sm text-gray-500">
                                        Informasi dasar mengenai usaha.
                                    </p>

                                </div>


                                <div class="grid gap-5 md:grid-cols-2">

                                    {{-- Nama Usaha --}}
                                    <div class="md:col-span-2">

                                        <label
                                            for="nama_usaha"
                                            class="mb-2 block text-sm font-medium text-gray-700"
                                        >
                                            Nama Usaha
                                            <span class="text-red-500">*</span>
                                        </label>

                                        <input
                                            id="nama_usaha"
                                            type="text"
                                            name="nama_usaha"
                                            value="{{ old('nama_usaha') }}"
                                            placeholder="Contoh: Warung Makan Sederhana"
                                            required
                                            class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm outline-none transition placeholder:text-gray-400 focus:border-green-600 focus:ring-2 focus:ring-green-100"
                                        >

                                        @error('nama_usaha')
                                            <p class="mt-1 text-sm text-red-600">
                                                {{ $message }}
                                            </p>
                                        @enderror

                                    </div>


                                    {{-- Kategori --}}
                                    <div>

                                        <label
                                            for="kategori"
                                            class="mb-2 block text-sm font-medium text-gray-700"
                                        >
                                            Kategori
                                            <span class="text-red-500">*</span>
                                        </label>

                                        <select
                                            id="kategori"
                                            name="kategori"
                                            required
                                            class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm outline-none transition focus:border-green-600 focus:ring-2 focus:ring-green-100"
                                        >

                                            <option value="">
                                                Pilih kategori
                                            </option>

                                            <option value="Kuliner" @selected(old('kategori') === 'Kuliner')>
                                                Kuliner
                                            </option>

                                            <option value="Kerajinan" @selected(old('kategori') === 'Kerajinan')>
                                                Kerajinan
                                            </option>

                                            <option value="Pertanian" @selected(old('kategori') === 'Pertanian')>
                                                Pertanian
                                            </option>

                                            <option value="Perdagangan" @selected(old('kategori') === 'Perdagangan')>
                                                Perdagangan
                                            </option>

                                            <option value="Jasa" @selected(old('kategori') === 'Jasa')>
                                                Jasa
                                            </option>

                                            <option value="Lainnya" @selected(old('kategori') === 'Lainnya')>
                                                Lainnya
                                            </option>

                                        </select>

                                        @error('kategori')
                                            <p class="mt-1 text-sm text-red-600">
                                                {{ $message }}
                                            </p>
                                        @enderror

                                    </div>


                                    {{-- Pemilik --}}
                                    <div>

                                        <label
                                            for="nama_pemilik"
                                            class="mb-2 block text-sm font-medium text-gray-700"
                                        >
                                            Nama Pemilik
                                            <span class="text-red-500">*</span>
                                        </label>

                                        <input
                                            id="nama_pemilik"
                                            type="text"
                                            name="nama_pemilik"
                                            value="{{ old('nama_pemilik') }}"
                                            placeholder="Nama pemilik usaha"
                                            required
                                            class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm outline-none transition placeholder:text-gray-400 focus:border-green-600 focus:ring-2 focus:ring-green-100"
                                        >

                                        @error('nama_pemilik')
                                            <p class="mt-1 text-sm text-red-600">
                                                {{ $message }}
                                            </p>
                                        @enderror

                                    </div>


                                    {{-- Deskripsi --}}
                                    <div class="md:col-span-2">

                                        <label
                                            for="deskripsi"
                                            class="mb-2 block text-sm font-medium text-gray-700"
                                        >
                                            Deskripsi Usaha
                                        </label>

                                        <textarea
                                            id="deskripsi"
                                            name="deskripsi"
                                            rows="4"
                                            placeholder="Jelaskan secara singkat usaha yang dijalankan..."
                                            class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm outline-none transition placeholder:text-gray-400 focus:border-green-600 focus:ring-2 focus:ring-green-100"
                                        >{{ old('deskripsi') }}</textarea>

                                        @error('deskripsi')
                                            <p class="mt-1 text-sm text-red-600">
                                                {{ $message }}
                                            </p>
                                        @enderror

                                    </div>

                                </div>

                            </div>


                            {{-- Kontak --}}
                            <div class="mb-8 border-t border-gray-200 pt-8">

                                <div class="mb-5">

                                    <h2 class="text-base font-semibold text-gray-900">
                                        Informasi Kontak
                                    </h2>

                                    <p class="mt-1 text-sm text-gray-500">
                                        Kontak yang dapat digunakan masyarakat atau wisatawan.
                                    </p>

                                </div>


                                <div class="grid gap-5 md:grid-cols-2">

                                    {{-- No HP --}}
                                    <div>

                                        <label
                                            for="no_hp"
                                            class="mb-2 block text-sm font-medium text-gray-700"
                                        >
                                            Nomor HP
                                            <span class="text-red-500">*</span>
                                        </label>

                                        <div class="relative">

                                            <i
                                                data-lucide="phone"
                                                class="absolute left-4 top-1/2 h-4 w-4 -translate-y-1/2 text-gray-400"
                                            ></i>

                                            <input
                                                id="no_hp"
                                                type="text"
                                                name="no_hp"
                                                value="{{ old('no_hp') }}"
                                                placeholder="08xxxxxxxxxx"
                                                required
                                                class="w-full rounded-xl border border-gray-300 py-3 pl-11 pr-4 text-sm outline-none transition placeholder:text-gray-400 focus:border-green-600 focus:ring-2 focus:ring-green-100"
                                            >

                                        </div>

                                        @error('no_hp')
                                            <p class="mt-1 text-sm text-red-600">
                                                {{ $message }}
                                            </p>
                                        @enderror

                                    </div>


                                    {{-- WhatsApp --}}
                                    <div>

                                        <label
                                            for="whatsapp"
                                            class="mb-2 block text-sm font-medium text-gray-700"
                                        >
                                            Nomor WhatsApp
                                        </label>

                                        <div class="relative">

                                            <i
                                                data-lucide="message-circle"
                                                class="absolute left-4 top-1/2 h-4 w-4 -translate-y-1/2 text-gray-400"
                                            ></i>

                                            <input
                                                id="whatsapp"
                                                type="text"
                                                name="whatsapp"
                                                value="{{ old('whatsapp') }}"
                                                placeholder="08xxxxxxxxxx"
                                                class="w-full rounded-xl border border-gray-300 py-3 pl-11 pr-4 text-sm outline-none transition placeholder:text-gray-400 focus:border-green-600 focus:ring-2 focus:ring-green-100"
                                            >

                                        </div>

                                        @error('whatsapp')
                                            <p class="mt-1 text-sm text-red-600">
                                                {{ $message }}
                                            </p>
                                        @enderror

                                    </div>


                                    {{-- Alamat --}}
                                    <div class="md:col-span-2">

                                        <label
                                            for="alamat"
                                            class="mb-2 block text-sm font-medium text-gray-700"
                                        >
                                            Alamat
                                        </label>

                                        <div class="relative">

                                            <i
                                                data-lucide="map-pin"
                                                class="absolute left-4 top-4 h-4 w-4 text-gray-400"
                                            ></i>

                                            <textarea
                                                id="alamat"
                                                name="alamat"
                                                rows="3"
                                                placeholder="Alamat lengkap usaha"
                                                class="w-full rounded-xl border border-gray-300 py-3 pl-11 pr-4 text-sm outline-none transition placeholder:text-gray-400 focus:border-green-600 focus:ring-2 focus:ring-green-100"
                                            >{{ old('alamat') }}</textarea>

                                        </div>

                                        @error('alamat')
                                            <p class="mt-1 text-sm text-red-600">
                                                {{ $message }}
                                            </p>
                                        @enderror

                                    </div>


                                    {{-- Maps --}}
                                    <div class="md:col-span-2">

                                        <label
                                            for="maps_url"
                                            class="mb-2 block text-sm font-medium text-gray-700"
                                        >
                                            Link Google Maps
                                        </label>

                                        <div class="relative">

                                            <i
                                                data-lucide="map"
                                                class="absolute left-4 top-1/2 h-4 w-4 -translate-y-1/2 text-gray-400"
                                            ></i>

                                            <input
                                                id="maps_url"
                                                type="url"
                                                name="maps_url"
                                                value="{{ old('maps_url') }}"
                                                placeholder="https://maps.google.com/..."
                                                class="w-full rounded-xl border border-gray-300 py-3 pl-11 pr-4 text-sm outline-none transition placeholder:text-gray-400 focus:border-green-600 focus:ring-2 focus:ring-green-100"
                                            >

                                        </div>

                                        @error('maps_url')
                                            <p class="mt-1 text-sm text-red-600">
                                                {{ $message }}
                                            </p>
                                        @enderror

                                    </div>

                                </div>

                            </div>


                            {{-- Foto --}}
                            <div class="mb-8 border-t border-gray-200 pt-8">

                                <div class="mb-5">

                                    <h2 class="text-base font-semibold text-gray-900">
                                        Foto Usaha
                                    </h2>

                                    <p class="mt-1 text-sm text-gray-500">
                                        Tambahkan foto agar usaha lebih mudah dikenali.
                                    </p>

                                </div>


                                <div>

                                    <label
                                        for="foto"
                                        class="mb-2 block text-sm font-medium text-gray-700"
                                    >
                                        Foto UMKM
                                    </label>

                                    <div class="rounded-xl border-2 border-dashed border-gray-300 p-6 text-center transition hover:border-green-500">

                                        <i
                                            data-lucide="image-plus"
                                            class="mx-auto h-10 w-10 text-gray-400"
                                        ></i>

                                        <p class="mt-3 text-sm font-medium text-gray-700">
                                            Pilih foto usaha
                                        </p>

                                        <p class="mt-1 text-xs text-gray-500">
                                            JPG, JPEG, atau PNG
                                        </p>

                                        <input
                                            id="foto"
                                            type="file"
                                            name="foto"
                                            accept="image/jpeg,image/png,image/jpg"
                                            class="mx-auto mt-4 block w-full max-w-sm text-sm text-gray-500"
                                        >

                                    </div>

                                    @error('foto')
                                        <p class="mt-1 text-sm text-red-600">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                </div>

                            </div>


                            {{-- Status --}}
                            <div class="border-t border-gray-200 pt-8">

                                <div class="grid gap-5 md:grid-cols-2">

                                    <div>

                                        <label
                                            for="status"
                                            class="mb-2 block text-sm font-medium text-gray-700"
                                        >
                                            Status
                                        </label>

                                        <select
                                            id="status"
                                            name="status"
                                            class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm outline-none transition focus:border-green-600 focus:ring-2 focus:ring-green-100"
                                        >

                                            <option
                                                value="active"
                                                @selected(old('status', 'active') === 'active')
                                            >
                                                Aktif
                                            </option>

                                            <option
                                                value="inactive"
                                                @selected(old('status') === 'inactive')
                                            >
                                                Nonaktif
                                            </option>

                                        </select>

                                        @error('status')
                                            <p class="mt-1 text-sm text-red-600">
                                                {{ $message }}
                                            </p>
                                        @enderror

                                    </div>

                                </div>

                            </div>


                            {{-- Buttons --}}
                            <div class="mt-8 flex flex-col-reverse gap-3 border-t border-gray-200 pt-6 sm:flex-row sm:justify-end">

                                <a
                                    href="{{ route('umkm.index') }}"
                                    class="inline-flex items-center justify-center gap-2 rounded-xl border border-gray-300 px-5 py-3 text-sm font-semibold text-gray-700 transition hover:bg-gray-50"
                                >
                                    <i data-lucide="arrow-left" class="h-4 w-4"></i>
                                    Batal
                                </a>


                                <button
                                    type="submit"
                                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-green-700 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-green-800"
                                >
                                    <i data-lucide="save" class="h-4 w-4"></i>
                                    Simpan UMKM
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </main>

    </div>

</body>

</html>