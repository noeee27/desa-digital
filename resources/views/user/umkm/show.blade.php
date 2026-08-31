<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $umkm->nama_usaha }} - Desa Digital</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="bg-gray-50 text-gray-900">


    {{-- =====================================================
         NAVBAR
    ====================================================== --}}

    <header class="sticky top-0 z-50 border-b border-gray-100 bg-white/95 backdrop-blur">

        <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">

            {{-- LOGO --}}

            <a href="{{ route('home') }}" class="flex items-center gap-3">

                <div
                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-green-600 text-white sm:h-11 sm:w-11"
                >
                    <i data-lucide="landmark" class="h-5 w-5 sm:h-6 sm:w-6"></i>
                </div>

                <div>

                    <h1 class="text-sm font-bold leading-tight text-gray-900 sm:text-base">
                        Desa Digital
                    </h1>

                    <p class="hidden text-xs text-gray-500 sm:block">
                        Portal Informasi Desa
                    </p>

                </div>

            </a>


            {{-- =================================================
                 DESKTOP NAVIGATION
            ================================================== --}}

            <nav class="hidden items-center gap-1 lg:flex">

                <a
                    href="{{ route('home') }}"
                    class="rounded-lg px-3 py-2 text-sm font-medium text-gray-600 transition hover:bg-green-50 hover:text-green-700 xl:px-4"
                >
                    Beranda
                </a>

                <a
                    href="{{ route('user.profil') }}"
                    class="rounded-lg px-3 py-2 text-sm font-medium text-gray-600 transition hover:bg-green-50 hover:text-green-700 xl:px-4"
                >
                    Profil Desa
                </a>

                {{-- ACTIVE UMKM --}}

                <a
                    href="{{ route('user.umkm.index') }}"
                    class="rounded-lg bg-green-50 px-3 py-2 text-sm font-semibold text-green-700 xl:px-4"
                >
                    UMKM
                </a>

                <a
                    href="{{ route('user.wisata.index') }}"
                    class="rounded-lg px-3 py-2 text-sm font-medium text-gray-600 transition hover:bg-green-50 hover:text-green-700 xl:px-4"
                >
                    Wisata & Jasa
                </a>

                <a
                    href="{{ route('user.berita.index') }}"
                    class="rounded-lg px-3 py-2 text-sm font-medium text-gray-600 transition hover:bg-green-50 hover:text-green-700 xl:px-4"
                >
                    Berita
                </a>

                {{-- Galeri belum dibuat --}}

                <span
                    class="cursor-not-allowed rounded-lg px-3 py-2 text-sm font-medium text-gray-400 xl:px-4"
                    title="Galeri belum tersedia"
                >
                    Galeri
                </span>

            </nav>


            {{-- =================================================
                 MOBILE MENU BUTTON
            ================================================== --}}

            <button
                type="button"
                id="mobile-menu-button"
                class="flex h-10 w-10 items-center justify-center rounded-xl border border-gray-200 text-gray-700 transition hover:bg-gray-50 lg:hidden"
                aria-label="Buka menu"
                aria-expanded="false"
            >

                <i data-lucide="menu" class="h-5 w-5"></i>

            </button>

        </div>


        {{-- =================================================
             MOBILE NAVIGATION
        ================================================== --}}

        <div
            id="mobile-menu"
            class="hidden border-t border-gray-100 bg-white lg:hidden"
        >

            <nav class="mx-auto max-w-7xl space-y-1 px-4 py-4 sm:px-6">

                <a
                    href="{{ route('home') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-gray-700 transition hover:bg-green-50 hover:text-green-700"
                >
                    <i data-lucide="home" class="h-4 w-4"></i>
                    Beranda
                </a>


                <a
                    href="{{ route('user.profil') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-gray-700 transition hover:bg-green-50 hover:text-green-700"
                >
                    <i data-lucide="building-2" class="h-4 w-4"></i>
                    Profil Desa
                </a>


                <a
                    href="{{ route('user.umkm.index') }}"
                    class="flex items-center gap-3 rounded-xl bg-green-50 px-4 py-3 text-sm font-semibold text-green-700"
                >
                    <i data-lucide="store" class="h-4 w-4"></i>
                    UMKM
                </a>


                <a
                    href="{{ route('user.wisata.index') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-gray-700 transition hover:bg-green-50 hover:text-green-700"
                >
                    <i data-lucide="map" class="h-4 w-4"></i>
                    Wisata & Jasa
                </a>


                <a
                    href="{{ route('user.berita.index') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-gray-700 transition hover:bg-green-50 hover:text-green-700"
                >
                    <i data-lucide="newspaper" class="h-4 w-4"></i>
                    Berita
                </a>


                <div
                    class="flex cursor-not-allowed items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-gray-400"
                >
                    <i data-lucide="images" class="h-4 w-4"></i>

                    Galeri

                    <span class="ml-auto text-xs">
                        Segera
                    </span>
                </div>

            </nav>

        </div>

    </header>



    {{-- =====================================================
         MAIN CONTENT
    ====================================================== --}}

    <main class="mx-auto max-w-7xl px-4 py-8 sm:px-6 sm:py-10 lg:px-8 lg:py-12">


        {{-- =================================================
             BREADCRUMB
        ================================================== --}}

        <div class="mb-6 flex items-center gap-2 overflow-hidden text-sm text-gray-500 sm:mb-8">

            <a
                href="{{ route('user.umkm.index') }}"
                class="shrink-0 hover:text-green-600"
            >
                UMKM
            </a>

            <i
                data-lucide="chevron-right"
                class="h-4 w-4 shrink-0"
            ></i>

            <span class="truncate font-medium text-gray-900">
                {{ $umkm->nama_usaha }}
            </span>

        </div>



        {{-- =================================================
             HEADER
        ================================================== --}}

        <div class="mb-8 flex flex-col gap-4 sm:mb-10 lg:flex-row lg:items-center lg:justify-between">

            <div class="min-w-0">

                <p class="mb-2 text-sm font-semibold text-green-600">
                    UMKM DESA
                </p>

                <h2
                    class="break-words text-3xl font-bold leading-tight sm:text-4xl lg:text-5xl"
                >
                    {{ $umkm->nama_usaha }}
                </h2>

                <p class="mt-2 text-sm leading-6 text-gray-500 sm:text-base">
                    Detail informasi usaha masyarakat desa.
                </p>

            </div>


            {{-- STATUS --}}

            @if($umkm->status === 'active')

                <div class="shrink-0">

                    <span
                        class="inline-flex items-center gap-2 rounded-full bg-green-100 px-4 py-2 text-sm font-semibold text-green-700"
                    >

                        <span class="h-2 w-2 rounded-full bg-green-600"></span>

                        Aktif

                    </span>

                </div>

            @endif

        </div>



        {{-- =================================================
             FOTO + INFORMASI
        ================================================== --}}

        <div class="grid grid-cols-1 gap-6 lg:grid-cols-5 lg:gap-8">


            {{-- FOTO --}}

            <div class="lg:col-span-2">

                <div
                    class="aspect-[4/3] overflow-hidden rounded-2xl border border-green-100 bg-green-50 sm:aspect-[16/11] lg:aspect-auto lg:h-[420px]"
                >

                    @if($umkm->foto)

                        <img
                            src="{{ asset('storage/' . $umkm->foto) }}"
                            alt="{{ $umkm->nama_usaha }}"
                            class="h-full w-full object-cover"
                        >

                    @else

                        <div
                            class="flex h-full min-h-[260px] flex-col items-center justify-center text-green-600"
                        >

                            <div
                                class="mb-4 flex h-20 w-20 items-center justify-center rounded-2xl bg-green-100"
                            >
                                <i data-lucide="store" class="h-10 w-10"></i>
                            </div>

                            <p class="font-semibold">
                                Belum ada foto
                            </p>

                        </div>

                    @endif

                </div>

            </div>



            {{-- =================================================
                 INFORMASI USAHA
            ================================================== --}}

            <div class="lg:col-span-3">

                <div
                    class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm"
                >

                    <div class="border-b border-gray-100 px-5 py-5 sm:px-7 sm:py-6">

                        <h3 class="text-xl font-bold">
                            Informasi Usaha
                        </h3>

                    </div>


                    <div class="p-5 sm:p-7">


                        {{-- KATEGORI + PEMILIK --}}

                        <div class="mb-7 grid grid-cols-1 gap-6 sm:grid-cols-2">

                            <div>

                                <p class="mb-2 text-sm text-gray-500">
                                    Kategori
                                </p>

                                <span
                                    class="inline-flex rounded-full bg-green-100 px-3 py-1 text-sm font-semibold text-green-700"
                                >
                                    {{ $umkm->kategori }}
                                </span>

                            </div>


                            <div>

                                <p class="mb-2 text-sm text-gray-500">
                                    Nama Pemilik
                                </p>

                                <p class="break-words text-lg font-semibold">
                                    {{ $umkm->nama_pemilik }}
                                </p>

                            </div>

                        </div>



                        {{-- ALAMAT --}}

                        @if($umkm->alamat)

                            <div class="mb-7">

                                <p class="mb-2 text-sm text-gray-500">
                                    Alamat
                                </p>

                                <div class="flex items-start gap-3">

                                    <i
                                        data-lucide="map-pin"
                                        class="mt-1 h-5 w-5 shrink-0 text-green-600"
                                    ></i>

                                    <p class="break-words font-medium leading-6">
                                        {{ $umkm->alamat }}
                                    </p>

                                </div>

                            </div>

                        @endif



                        {{-- DESKRIPSI --}}

                        <div>

                            <p class="mb-2 text-sm text-gray-500">
                                Deskripsi Usaha
                            </p>

                            <p class="break-words leading-7 text-gray-700">
                                {{ $umkm->deskripsi ?: 'Belum ada deskripsi usaha.' }}
                            </p>

                        </div>

                    </div>

                </div>



                {{-- =================================================
                     KONTAK
                ================================================== --}}

                <div
                    class="mt-6 overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm sm:mt-7"
                >

                    <div class="border-b border-gray-100 px-5 py-5 sm:px-7 sm:py-6">

                        <h3 class="text-xl font-bold">
                            Informasi Kontak
                        </h3>

                    </div>


                    <div class="grid grid-cols-1 gap-4 p-5 sm:grid-cols-2 sm:p-7">


                        {{-- NOMOR HP --}}

                        @if($umkm->no_hp)

                            <a
                                href="tel:{{ $umkm->no_hp }}"
                                class="flex items-center gap-4 rounded-xl border border-gray-200 p-4 transition hover:border-green-300 hover:bg-green-50 sm:p-5"
                            >

                                <div
                                    class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-green-100 text-green-600"
                                >

                                    <i data-lucide="phone" class="h-5 w-5"></i>

                                </div>


                                <div class="min-w-0">

                                    <p class="text-sm text-gray-500">
                                        Nomor HP
                                    </p>

                                    <p class="break-all font-semibold">
                                        {{ $umkm->no_hp }}
                                    </p>

                                </div>

                            </a>

                        @endif



                        {{-- WHATSAPP --}}

                        @if($umkm->whatsapp)

                            @php
                                $whatsappNumber = preg_replace('/[^0-9]/', '', $umkm->whatsapp);

                                if (str_starts_with($whatsappNumber, '0')) {
                                    $whatsappNumber = '62' . substr($whatsappNumber, 1);
                                }
                            @endphp

                            <a
                                href="https://wa.me/{{ $whatsappNumber }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="flex items-center gap-4 rounded-xl border border-gray-200 p-4 transition hover:border-green-300 hover:bg-green-50 sm:p-5"
                            >

                                <div
                                    class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-green-100 text-green-600"
                                >

                                    <i data-lucide="message-circle" class="h-5 w-5"></i>

                                </div>


                                <div class="min-w-0">

                                    <p class="text-sm text-gray-500">
                                        WhatsApp
                                    </p>

                                    <p class="break-all font-semibold">
                                        {{ $umkm->whatsapp }}
                                    </p>

                                </div>

                            </a>

                        @endif

                    </div>

                </div>



                {{-- =================================================
                     GOOGLE MAPS
                ================================================== --}}

                @if($umkm->maps_url)

                    <a
                        href="{{ $umkm->maps_url }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="mt-5 flex w-full items-center justify-center gap-2 rounded-xl bg-green-600 px-4 py-3 text-center text-sm font-semibold text-white transition hover:bg-green-700 active:scale-[0.98]"
                    >

                        <i data-lucide="map-pin" class="h-5 w-5"></i>

                        Lihat Lokasi di Google Maps

                    </a>

                @endif

            </div>

        </div>



        {{-- =================================================
             BACK BUTTON
        ================================================== --}}

        <div class="mt-8 sm:mt-10">

            <a
                href="{{ route('user.umkm.index') }}"
                class="inline-flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-4 py-3 text-sm font-medium text-gray-600 shadow-sm transition hover:border-green-200 hover:bg-green-50 hover:text-green-600"
            >

                <i data-lucide="arrow-left" class="h-4 w-4"></i>

                Kembali ke UMKM

            </a>

        </div>

    </main>



    {{-- =====================================================
         FOOTER
    ====================================================== --}}

    <footer class="mt-12 bg-green-950 text-white sm:mt-16">

        <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 sm:py-10 lg:px-8">

            <div
                class="flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between"
            >

                <div>

                    <div class="flex items-center gap-3">

                        <div
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-green-700"
                        >

                            <i data-lucide="landmark" class="h-5 w-5"></i>

                        </div>


                        <div>

                            <p class="font-bold">
                                Desa Digital
                            </p>

                            <p class="text-xs text-green-200 sm:text-sm">
                                Portal Informasi Desa
                            </p>

                        </div>

                    </div>

                </div>


                <p class="text-left text-xs text-green-200 sm:text-right sm:text-sm">

                    © {{ date('Y') }} Desa Digital.
                    Semua hak dilindungi.

                </p>

            </div>

        </div>

    </footer>



    {{-- =====================================================
         JAVASCRIPT
    ====================================================== --}}

    <script>

        document.addEventListener('DOMContentLoaded', function () {

            // Lucide Icons
            if (window.lucide) {
                lucide.createIcons();
            }


            // Mobile Menu
            const menuButton =
                document.getElementById('mobile-menu-button');

            const mobileMenu =
                document.getElementById('mobile-menu');


            if (menuButton && mobileMenu) {

                menuButton.addEventListener('click', function () {

                    mobileMenu.classList.toggle('hidden');

                    const isOpen =
                        !mobileMenu.classList.contains('hidden');

                    menuButton.setAttribute(
                        'aria-expanded',
                        isOpen ? 'true' : 'false'
                    );

                });

            }

        });

    </script>


</body>
</html>