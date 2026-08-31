<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $umkm->nama_usaha }} - Desa Digital</title>

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
                        Detail informasi usaha masyarakat desa.
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
                        Detail UMKM
                    </span>

                </div>


                <div class="mx-auto max-w-5xl">

                    {{-- Header Detail --}}
                    <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

                        <div>

                            <div class="flex items-center gap-3">

                                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-100 text-green-700">
                                    <i data-lucide="store" class="h-6 w-6"></i>
                                </div>

                                <div>

                                    <h1 class="text-2xl font-bold text-gray-900">
                                        {{ $umkm->nama_usaha }}
                                    </h1>

                                    <p class="text-sm text-gray-500">
                                        Detail informasi usaha masyarakat desa.
                                    </p>

                                </div>

                            </div>

                        </div>


                        {{-- Tombol Edit --}}
                        <a
                            href="{{ route('umkm.edit', $umkm) }}"
                            class="inline-flex items-center justify-center gap-2 rounded-xl bg-green-700 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-green-800"
                        >
                            <i data-lucide="pencil" class="h-4 w-4"></i>
                            Edit UMKM
                        </a>

                    </div>


                    <div class="grid gap-6 lg:grid-cols-3">

                        {{-- FOTO --}}
                        <div class="lg:col-span-1">

                            <div class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-200">

                                @if ($umkm->foto)

                                    <img
                                        src="{{ asset('storage/' . $umkm->foto) }}"
                                        alt="{{ $umkm->nama_usaha }}"
                                        class="h-72 w-full object-cover"
                                    >

                                @else

                                    <div class="flex h-72 items-center justify-center bg-green-50 text-green-600">

                                        <div class="text-center">

                                            <i data-lucide="store" class="mx-auto h-16 w-16"></i>

                                            <p class="mt-3 text-sm font-medium">
                                                Belum ada foto
                                            </p>

                                        </div>

                                    </div>

                                @endif

                            </div>

                        </div>


                        {{-- INFORMASI --}}
                        <div class="lg:col-span-2">

                            <div class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-200">

                                <div class="border-b border-gray-200 px-6 py-5">

                                    <h2 class="font-semibold text-gray-900">
                                        Informasi Usaha
                                    </h2>

                                </div>


                                <div class="grid gap-6 p-6 sm:grid-cols-2">

                                    {{-- Kategori --}}
                                    <div>

                                        <p class="text-sm text-gray-500">
                                            Kategori
                                        </p>

                                        <p class="mt-1 font-medium text-gray-900">
                                            {{ $umkm->kategori }}
                                        </p>

                                    </div>


                                    {{-- Pemilik --}}
                                    <div>

                                        <p class="text-sm text-gray-500">
                                            Nama Pemilik
                                        </p>

                                        <p class="mt-1 font-medium text-gray-900">
                                            {{ $umkm->nama_pemilik }}
                                        </p>

                                    </div>


                                    {{-- Status --}}
                                    <div>

                                        <p class="text-sm text-gray-500">
                                            Status
                                        </p>

                                        @if ($umkm->status === 'active')

                                            <span class="mt-1 inline-flex items-center gap-2 rounded-full bg-green-100 px-3 py-1 text-sm font-medium text-green-700">
                                                <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                                                Aktif
                                            </span>

                                        @else

                                            <span class="mt-1 inline-flex items-center gap-2 rounded-full bg-gray-100 px-3 py-1 text-sm font-medium text-gray-600">
                                                <span class="h-1.5 w-1.5 rounded-full bg-gray-500"></span>
                                                Nonaktif
                                            </span>

                                        @endif

                                    </div>


                                    {{-- Alamat --}}
                                    <div>

                                        <p class="text-sm text-gray-500">
                                            Alamat
                                        </p>

                                        <p class="mt-1 font-medium text-gray-900">
                                            {{ $umkm->alamat ?: '-' }}
                                        </p>

                                    </div>


                                    {{-- Deskripsi --}}
                                    <div class="sm:col-span-2">

                                        <p class="text-sm text-gray-500">
                                            Deskripsi Usaha
                                        </p>

                                        <p class="mt-1 leading-relaxed text-gray-900">
                                            {{ $umkm->deskripsi ?: 'Belum ada deskripsi usaha.' }}
                                        </p>

                                    </div>

                                </div>

                            </div>


                            {{-- KONTAK --}}
                            <div class="mt-6 overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-200">

                                <div class="border-b border-gray-200 px-6 py-5">

                                    <h2 class="font-semibold text-gray-900">
                                        Informasi Kontak
                                    </h2>

                                </div>


                                <div class="grid gap-4 p-6 sm:grid-cols-2">

                                    {{-- Telepon --}}
                                    <a
                                        href="tel:{{ $umkm->no_hp }}"
                                        class="flex items-center gap-3 rounded-xl border border-gray-200 p-4 transition hover:border-green-300 hover:bg-green-50"
                                    >

                                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-green-100 text-green-700">
                                            <i data-lucide="phone" class="h-5 w-5"></i>
                                        </div>

                                        <div>

                                            <p class="text-xs text-gray-500">
                                                Nomor HP
                                            </p>

                                            <p class="font-medium text-gray-900">
                                                {{ $umkm->no_hp }}
                                            </p>

                                        </div>

                                    </a>


                                    {{-- WhatsApp --}}
                                    @if ($umkm->whatsapp)

                                        <a
                                            href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $umkm->whatsapp) }}"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            class="flex items-center gap-3 rounded-xl border border-gray-200 p-4 transition hover:border-green-300 hover:bg-green-50"
                                        >

                                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-green-100 text-green-700">
                                                <i data-lucide="message-circle" class="h-5 w-5"></i>
                                            </div>

                                            <div>

                                                <p class="text-xs text-gray-500">
                                                    WhatsApp
                                                </p>

                                                <p class="font-medium text-gray-900">
                                                    {{ $umkm->whatsapp }}
                                                </p>

                                            </div>

                                        </a>

                                    @endif


                                    {{-- Maps --}}
                                    @if ($umkm->maps_url)

                                        <a
                                            href="{{ $umkm->maps_url }}"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            class="flex items-center gap-3 rounded-xl border border-gray-200 p-4 transition hover:border-green-300 hover:bg-green-50 sm:col-span-2"
                                        >

                                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-green-100 text-green-700">
                                                <i data-lucide="map-pin" class="h-5 w-5"></i>
                                            </div>

                                            <div>

                                                <p class="text-xs text-gray-500">
                                                    Lokasi
                                                </p>

                                                <p class="font-medium text-gray-900">
                                                    Lihat lokasi di Google Maps
                                                </p>

                                            </div>

                                        </a>

                                    @endif

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- Back --}}
                    <div class="mt-6">

                        <a
                            href="{{ route('umkm.index') }}"
                            class="inline-flex items-center gap-2 text-sm font-medium text-gray-600 transition hover:text-green-700"
                        >
                            <i data-lucide="arrow-left" class="h-4 w-4"></i>
                            Kembali ke Data UMKM
                        </a>

                    </div>

                </div>

            </div>

        </main>

    </div>

</body>

</html>