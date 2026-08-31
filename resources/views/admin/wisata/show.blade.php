<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $wisatum->nama }} - Desa Digital</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gray-50 text-gray-900">

    <div class="flex min-h-screen">

        {{-- =========================================================
            SIDEBAR
        ========================================================== --}}
        <aside class="fixed inset-y-0 left-0 z-40 flex w-[247px] flex-col bg-green-900 text-white">

            {{-- Logo --}}
            <div class="flex h-[76px] items-center gap-3 border-b border-green-800 px-6">

                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-green-500">
                    <i data-lucide="landmark" class="h-5 w-5"></i>
                </div>

                <div>
                    <h1 class="text-base font-bold">
                        Desa Digital
                    </h1>

                    <p class="text-xs text-green-200">
                        Panel Administrasi
                    </p>
                </div>

            </div>


            {{-- Menu --}}
            <nav class="flex-1 px-3 py-5">

                {{-- Dashboard --}}
                <a
                    href="{{ route('admin.dashboard') }}"
                    class="mb-1 flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold text-white transition hover:bg-green-800"
                >
                    <i data-lucide="layout-dashboard" class="h-5 w-5"></i>
                    <span>Dashboard</span>
                </a>


                {{-- UMKM --}}
                <a
                    href="{{ route('umkm.index') }}"
                    class="mb-1 flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold text-white transition hover:bg-green-800"
                >
                    <i data-lucide="store" class="h-5 w-5"></i>
                    <span>UMKM</span>
                </a>


                {{-- Wisata & Jasa --}}
                <a
                    href="{{ route('wisata.index') }}"
                    class="mb-1 flex items-center gap-3 rounded-xl bg-green-700 px-4 py-3 text-sm font-semibold text-white shadow-sm"
                >
                    <i data-lucide="car-front" class="h-5 w-5"></i>
                    <span>Wisata & Jasa</span>
                </a>


                {{-- Berita --}}
                <a
                    href="#"
                    class="mb-1 flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold text-white transition hover:bg-green-800"
                >
                    <i data-lucide="newspaper" class="h-5 w-5"></i>
                    <span>Berita</span>
                </a>


                {{-- Galeri --}}
                <a
                    href="#"
                    class="mb-1 flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold text-white transition hover:bg-green-800"
                >
                    <i data-lucide="images" class="h-5 w-5"></i>
                    <span>Galeri</span>
                </a>


                {{-- Profil Desa --}}
                <a
                    href="#"
                    class="mb-1 flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold text-white transition hover:bg-green-800"
                >
                    <i data-lucide="building-2" class="h-5 w-5"></i>
                    <span>Profil Desa</span>
                </a>

            </nav>


            {{-- Logout --}}
            <div class="border-t border-green-800 p-3">

                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf

                    <button
                        type="submit"
                        class="flex w-full items-center gap-3 rounded-xl px-4 py-3 text-sm font-semibold text-white transition hover:bg-green-800"
                    >
                        <i data-lucide="log-out" class="h-5 w-5"></i>
                        <span>Logout</span>
                    </button>

                </form>

            </div>

        </aside>


        {{-- =========================================================
            MAIN CONTENT
        ========================================================== --}}
        <main class="ml-[247px] min-h-screen flex-1">

            {{-- =====================================================
                HEADER
            ====================================================== --}}
            <header class="flex h-[76px] items-center justify-between border-b border-gray-200 bg-white px-7">

                <div>

                    <h1 class="text-xl font-bold text-gray-900">
                        Wisata & Jasa
                    </h1>

                    <p class="mt-0.5 text-sm text-gray-500">
                        Detail informasi usaha masyarakat desa.
                    </p>

                </div>


                {{-- Admin --}}
                <div class="flex items-center gap-3">

                    <div class="text-right">

                        <p class="text-sm font-semibold text-gray-900">
                            Administrator Desa
                        </p>

                        <p class="text-xs text-gray-500">
                            Administrator
                        </p>

                    </div>

                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-green-100 text-sm font-bold text-green-700">
                        A
                    </div>

                </div>

            </header>


            {{-- =====================================================
                CONTENT
            ====================================================== --}}
            <div class="px-7 py-6">

                {{-- Breadcrumb --}}
                <div class="mb-7 flex items-center gap-2 text-sm">

                    <a
                        href="{{ route('wisata.index') }}"
                        class="text-gray-500 transition hover:text-green-700"
                    >
                        Wisata & Jasa
                    </a>

                    <i data-lucide="chevron-right" class="h-4 w-4 text-gray-400"></i>

                    <span class="font-semibold text-gray-900">
                        Detail Wisata & Jasa
                    </span>

                </div>


                {{-- =================================================
                    TITLE + EDIT BUTTON
                ================================================== --}}
                <div class="mb-7 flex items-center justify-between">

                    <div class="flex items-center gap-3">

                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-100 text-green-600">
                            <i data-lucide="map" class="h-6 w-6"></i>
                        </div>

                        <div>

                            <h2 class="text-2xl font-bold text-gray-900">
                                {{ $wisatum->nama }}
                            </h2>

                            <p class="text-sm text-gray-500">
                                Detail informasi wisata dan jasa masyarakat desa.
                            </p>

                        </div>

                    </div>


                    {{-- Edit --}}
                    <a
                        href="{{ route('wisata.edit', $wisatum) }}"
                        class="inline-flex items-center gap-2 rounded-xl bg-green-700 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-green-800"
                    >
                        <i data-lucide="pencil" class="h-4 w-4"></i>
                        Edit Wisata
                    </a>

                </div>


                {{-- =================================================
                    ALERT SUCCESS
                ================================================== --}}
                @if(session('success'))

                    <div class="mb-6 flex items-center gap-3 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">

                        <i data-lucide="circle-check" class="h-5 w-5"></i>

                        <span>
                            {{ session('success') }}
                        </span>

                    </div>

                @endif


                {{-- =================================================
                    GRID DETAIL
                ================================================== --}}
                <div class="grid grid-cols-1 gap-6 lg:grid-cols-[315px_1fr]">


                    {{-- =================================================
                        FOTO
                    ================================================== --}}
                    <div>

                        @if($wisatum->foto)

                            <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm">

                                <img
                                    src="{{ asset('storage/' . $wisatum->foto) }}"
                                    alt="{{ $wisatum->nama }}"
                                    class="h-[315px] w-full object-cover"
                                >

                            </div>

                        @else

                            <div class="flex h-[315px] items-center justify-center rounded-2xl border border-green-100 bg-green-50">

                                <div class="text-center">

                                    <div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-2xl bg-white text-green-500">

                                        <i data-lucide="map" class="h-9 w-9"></i>

                                    </div>

                                    <p class="text-sm font-semibold text-green-700">
                                        Belum ada foto
                                    </p>

                                </div>

                            </div>

                        @endif

                    </div>


                    {{-- =================================================
                        INFORMASI WISATA
                    ================================================== --}}
                    <div class="space-y-6">


                        {{-- Informasi Utama --}}
                        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm">

                            <div class="border-b border-gray-200 px-6 py-5">

                                <h3 class="text-base font-bold text-gray-900">
                                    Informasi Wisata & Jasa
                                </h3>

                            </div>


                            <div class="grid grid-cols-1 gap-6 px-6 py-6 md:grid-cols-2">


                                {{-- Nama --}}
                                <div>

                                    <p class="mb-1 text-sm text-gray-500">
                                        Nama Wisata / Jasa
                                    </p>

                                    <p class="font-semibold text-gray-900">
                                        {{ $wisatum->nama }}
                                    </p>

                                </div>


                                {{-- Kategori --}}
                                <div>

                                    <p class="mb-1 text-sm text-gray-500">
                                        Kategori
                                    </p>

                                    <span class="inline-flex items-center rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">
                                        {{ $wisatum->kategori }}
                                    </span>

                                </div>


                                {{-- Status --}}
                                <div>

                                    <p class="mb-1 text-sm text-gray-500">
                                        Status
                                    </p>

                                    @if($wisatum->status === 'active')

                                        <span class="inline-flex items-center gap-2 rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">

                                            <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>

                                            Aktif

                                        </span>

                                    @else

                                        <span class="inline-flex items-center gap-2 rounded-full bg-gray-100 px-3 py-1 text-xs font-semibold text-gray-600">

                                            <span class="h-1.5 w-1.5 rounded-full bg-gray-500"></span>

                                            Nonaktif

                                        </span>

                                    @endif

                                </div>


                                {{-- Lokasi --}}
                                <div>

                                    <p class="mb-1 text-sm text-gray-500">
                                        Lokasi
                                    </p>

                                    <p class="font-semibold text-gray-900">
                                        {{ $wisatum->alamat ?: '-' }}
                                    </p>

                                </div>


                                {{-- Deskripsi --}}
                                <div class="md:col-span-2">

                                    <p class="mb-1 text-sm text-gray-500">
                                        Deskripsi
                                    </p>

                                    <p class="leading-6 text-gray-900">
                                        {{ $wisatum->deskripsi ?: 'Belum ada deskripsi.' }}
                                    </p>

                                </div>


                                {{-- Maps --}}
                                @if($wisatum->maps_url)

                                    <div class="md:col-span-2">

                                        <a
                                            href="{{ $wisatum->maps_url }}"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            class="inline-flex items-center gap-2 text-sm font-semibold text-green-700 hover:text-green-800"
                                        >

                                            <i data-lucide="map-pin" class="h-4 w-4"></i>

                                            Lihat lokasi di Google Maps

                                            <i data-lucide="external-link" class="h-4 w-4"></i>

                                        </a>

                                    </div>

                                @endif

                            </div>

                        </div>


                        {{-- =================================================
                            INFORMASI KONTAK
                        ================================================== --}}
                        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm">

                            <div class="border-b border-gray-200 px-6 py-5">

                                <h3 class="text-base font-bold text-gray-900">
                                    Informasi Kontak
                                </h3>

                            </div>


                            <div class="grid grid-cols-1 gap-4 px-6 py-6 md:grid-cols-2">


                                {{-- Nomor HP --}}
                                <div class="flex items-center gap-3 rounded-xl border border-gray-200 p-4">

                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-green-100 text-green-600">

                                        <i data-lucide="phone" class="h-5 w-5"></i>

                                    </div>

                                    <div>

                                        <p class="text-xs text-gray-500">
                                            Nomor HP
                                        </p>

                                        @if($wisatum->no_hp)

                                            <a
                                                href="tel:{{ $wisatum->no_hp }}"
                                                class="font-semibold text-gray-900 hover:text-green-700"
                                            >
                                                {{ $wisatum->no_hp }}
                                            </a>

                                        @else

                                            <p class="font-semibold text-gray-900">
                                                -
                                            </p>

                                        @endif

                                    </div>

                                </div>


                                {{-- WhatsApp --}}
                                <div class="flex items-center gap-3 rounded-xl border border-gray-200 p-4">

                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-green-100 text-green-600">

                                        <i data-lucide="message-circle" class="h-5 w-5"></i>

                                    </div>

                                    <div>

                                        <p class="text-xs text-gray-500">
                                            WhatsApp
                                        </p>

                                        @if($wisatum->whatsapp)

                                            <a
                                                href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $wisatum->whatsapp) }}"
                                                target="_blank"
                                                rel="noopener noreferrer"
                                                class="font-semibold text-gray-900 hover:text-green-700"
                                            >
                                                {{ $wisatum->whatsapp }}
                                            </a>

                                        @else

                                            <p class="font-semibold text-gray-900">
                                                -
                                            </p>

                                        @endif

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- =================================================
                    KEMBALI
                ================================================== --}}
                <div class="mt-7">

                    <a
                        href="{{ route('wisata.index') }}"
                        class="inline-flex items-center gap-2 text-sm font-medium text-gray-600 transition hover:text-green-700"
                    >

                        <i data-lucide="arrow-left" class="h-4 w-4"></i>

                        Kembali ke Data Wisata & Jasa

                    </a>

                </div>

            </div>

        </main>

    </div>


    {{-- =============================================================
        LUCIDE ICON
    ============================================================== --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }

        });
    </script>

</body>
</html>