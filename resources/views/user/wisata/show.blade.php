<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $wisata->nama }} - Desa Digital</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

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


                <a
                    href="{{ route('user.umkm.index') }}"
                    class="rounded-lg px-3 py-2 text-sm font-medium text-gray-600 transition hover:bg-green-50 hover:text-green-700 xl:px-4"
                >
                    UMKM
                </a>


                {{-- WISATA ACTIVE --}}

                <a
                    href="{{ route('user.wisata.index') }}"
                    class="rounded-lg bg-green-50 px-3 py-2 text-sm font-semibold text-green-700 xl:px-4"
                >
                    Wisata & Jasa
                </a>


                <a
                    href="{{ route('user.berita.index') }}"
                    class="rounded-lg px-3 py-2 text-sm font-medium text-gray-600 transition hover:bg-green-50 hover:text-green-700 xl:px-4"
                >
                    Berita
                </a>


                {{-- GALERI BELUM DIBUAT --}}

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


                {{-- BERANDA --}}

                <a
                    href="{{ route('home') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-gray-700 transition hover:bg-green-50 hover:text-green-700"
                >

                    <i data-lucide="home" class="h-4 w-4"></i>

                    Beranda

                </a>


                {{-- PROFIL --}}

                <a
                    href="{{ route('user.profil') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-gray-700 transition hover:bg-green-50 hover:text-green-700"
                >

                    <i data-lucide="building-2" class="h-4 w-4"></i>

                    Profil Desa

                </a>


                {{-- UMKM --}}

                <a
                    href="{{ route('user.umkm.index') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-gray-700 transition hover:bg-green-50 hover:text-green-700"
                >

                    <i data-lucide="store" class="h-4 w-4"></i>

                    UMKM

                </a>


                {{-- WISATA ACTIVE --}}

                <a
                    href="{{ route('user.wisata.index') }}"
                    class="flex items-center gap-3 rounded-xl bg-green-50 px-4 py-3 text-sm font-semibold text-green-700"
                >

                    <i data-lucide="map" class="h-4 w-4"></i>

                    Wisata & Jasa

                </a>


                {{-- BERITA --}}

                <a
                    href="{{ route('user.berita.index') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-gray-700 transition hover:bg-green-50 hover:text-green-700"
                >

                    <i data-lucide="newspaper" class="h-4 w-4"></i>

                    Berita

                </a>


                {{-- GALERI --}}

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
         MAIN
    ====================================================== --}}

    <main
        class="mx-auto max-w-7xl px-4 py-8 sm:px-6 sm:py-10 lg:px-8 lg:py-12"
    >


        {{-- =================================================
             BREADCRUMB
        ================================================== --}}

        <div
            class="mb-6 flex items-center gap-2 overflow-hidden text-sm text-gray-500 sm:mb-8"
        >

            <a
                href="{{ route('user.wisata.index') }}"
                class="shrink-0 transition hover:text-green-600"
            >
                Wisata & Jasa
            </a>


            <i
                data-lucide="chevron-right"
                class="h-4 w-4 shrink-0"
            ></i>


            <span class="truncate font-medium text-gray-900">
                {{ $wisata->nama }}
            </span>

        </div>



        {{-- =================================================
             HEADER
        ================================================== --}}

        <div class="mb-8 sm:mb-10">

            {{-- KATEGORI --}}

            @if($wisata->kategori)

                <span
                    class="inline-flex items-center rounded-full bg-green-100 px-3 py-1.5 text-xs font-semibold text-green-700 sm:px-4 sm:text-sm"
                >
                    {{ $wisata->kategori }}
                </span>

            @endif


            {{-- NAMA --}}

            <h2
                class="mt-4 break-words text-3xl font-bold leading-tight text-gray-900 sm:text-4xl md:text-5xl"
            >
                {{ $wisata->nama }}
            </h2>


            <p
                class="mt-3 max-w-2xl text-sm leading-6 text-gray-500 sm:text-base"
            >
                Informasi lengkap mengenai wisata atau jasa yang tersedia
                di desa.
            </p>

        </div>



        {{-- =================================================
             FOTO + INFORMASI
        ================================================== --}}

        <div class="grid grid-cols-1 gap-6 lg:grid-cols-5 lg:gap-8">


            {{-- =================================================
                 FOTO
            ================================================== --}}

            <div class="lg:col-span-2">

                <div
                    class="aspect-[4/3] overflow-hidden rounded-2xl border border-gray-200 bg-green-50 sm:aspect-[16/11] lg:aspect-auto lg:h-[420px] lg:rounded-3xl"
                >

                    @if($wisata->foto)

                        <img
                            src="{{ asset('storage/' . $wisata->foto) }}"
                            alt="{{ $wisata->nama }}"
                            class="h-full w-full object-cover"
                        >

                    @else

                        <div
                            class="flex h-full min-h-[250px] flex-col items-center justify-center text-green-600 sm:min-h-[300px]"
                        >

                            <div
                                class="flex h-16 w-16 items-center justify-center rounded-2xl bg-green-100 sm:h-20 sm:w-20"
                            >

                                <i
                                    data-lucide="map"
                                    class="h-8 w-8 sm:h-10 sm:w-10"
                                ></i>

                            </div>


                            <p class="mt-4 text-sm font-semibold sm:text-base">
                                Belum ada foto
                            </p>

                        </div>

                    @endif

                </div>

            </div>



            {{-- =================================================
                 INFORMASI
            ================================================== --}}

            <div class="lg:col-span-3">


                {{-- DESKRIPSI --}}

                <div
                    class="rounded-2xl border border-gray-200 bg-white p-5 shadow-sm sm:p-7"
                >

                    <h3 class="text-xl font-bold text-gray-900">
                        Tentang {{ $wisata->nama }}
                    </h3>


                    <p
                        class="mt-4 break-words text-sm leading-7 text-gray-600 sm:mt-5 sm:text-base sm:leading-8"
                    >
                        {{ $wisata->deskripsi ?: 'Belum ada deskripsi untuk data ini.' }}
                    </p>

                </div>



                {{-- INFORMASI DETAIL --}}

                <div
                    class="mt-5 rounded-2xl border border-gray-200 bg-white p-5 shadow-sm sm:mt-6 sm:p-7"
                >

                    <h3 class="text-xl font-bold text-gray-900">
                        Informasi
                    </h3>


                    <div class="mt-5 space-y-5 sm:mt-6">


                        {{-- KATEGORI --}}

                        <div class="flex items-start gap-3 sm:gap-4">

                            <div
                                class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-green-100 sm:h-11 sm:w-11"
                            >

                                <i
                                    data-lucide="tag"
                                    class="h-5 w-5 text-green-600"
                                ></i>

                            </div>


                            <div class="min-w-0">

                                <p class="text-sm text-gray-500">
                                    Kategori
                                </p>

                                <p
                                    class="mt-1 break-words font-semibold text-gray-900"
                                >
                                    {{ $wisata->kategori }}
                                </p>

                            </div>

                        </div>



                        {{-- ALAMAT --}}

                        @if($wisata->alamat)

                            <div class="flex items-start gap-3 sm:gap-4">

                                <div
                                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-green-100 sm:h-11 sm:w-11"
                                >

                                    <i
                                        data-lucide="map-pin"
                                        class="h-5 w-5 text-green-600"
                                    ></i>

                                </div>


                                <div class="min-w-0">

                                    <p class="text-sm text-gray-500">
                                        Alamat
                                    </p>

                                    <p
                                        class="mt-1 break-words font-semibold leading-6 text-gray-900"
                                    >
                                        {{ $wisata->alamat }}
                                    </p>

                                </div>

                            </div>

                        @endif



                        {{-- HARGA --}}

                        @if($wisata->harga)

                            <div class="flex items-start gap-3 sm:gap-4">

                                <div
                                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-green-100 sm:h-11 sm:w-11"
                                >

                                    <i
                                        data-lucide="banknote"
                                        class="h-5 w-5 text-green-600"
                                    ></i>

                                </div>


                                <div class="min-w-0">

                                    <p class="text-sm text-gray-500">
                                        Harga
                                    </p>

                                    <p
                                        class="mt-1 break-words font-semibold text-gray-900"
                                    >
                                        {{ $wisata->harga }}
                                    </p>

                                </div>

                            </div>

                        @endif

                    </div>

                </div>



                {{-- =================================================
                     KONTAK
                ================================================== --}}

                @if($wisata->no_hp || $wisata->whatsapp)

                    <div
                        class="mt-5 rounded-2xl border border-gray-200 bg-white p-5 shadow-sm sm:mt-6 sm:p-7"
                    >

                        <h3 class="text-xl font-bold text-gray-900">
                            Kontak
                        </h3>


                        <div
                            class="mt-5 grid grid-cols-1 gap-4 sm:mt-6 sm:grid-cols-2"
                        >


                            {{-- NO HP --}}

                            @if($wisata->no_hp)

                                <a
                                    href="tel:{{ $wisata->no_hp }}"
                                    class="flex min-w-0 items-center gap-3 rounded-xl border border-gray-200 p-4 transition hover:border-green-300 hover:bg-green-50"
                                >

                                    <div
                                        class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-green-100 sm:h-11 sm:w-11"
                                    >

                                        <i
                                            data-lucide="phone"
                                            class="h-5 w-5 text-green-600"
                                        ></i>

                                    </div>


                                    <div class="min-w-0">

                                        <p class="text-xs text-gray-500">
                                            Nomor HP
                                        </p>

                                        <p class="break-all text-sm font-semibold">
                                            {{ $wisata->no_hp }}
                                        </p>

                                    </div>

                                </a>

                            @endif



                            {{-- WHATSAPP --}}

                            @if($wisata->whatsapp)

                                @php
                                    $whatsappNumber = preg_replace('/[^0-9]/', '', $wisata->whatsapp);

                                    if (str_starts_with($whatsappNumber, '0')) {
                                        $whatsappNumber = '62' . substr($whatsappNumber, 1);
                                    }
                                @endphp

                                <a
                                    href="https://wa.me/{{ $whatsappNumber }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="flex min-w-0 items-center gap-3 rounded-xl border border-gray-200 p-4 transition hover:border-green-300 hover:bg-green-50"
                                >

                                    <div
                                        class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-green-100 sm:h-11 sm:w-11"
                                    >

                                        <i
                                            data-lucide="message-circle"
                                            class="h-5 w-5 text-green-600"
                                        ></i>

                                    </div>


                                    <div class="min-w-0">

                                        <p class="text-xs text-gray-500">
                                            WhatsApp
                                        </p>

                                        <p class="break-all text-sm font-semibold">
                                            {{ $wisata->whatsapp }}
                                        </p>

                                    </div>

                                </a>

                            @endif

                        </div>

                    </div>

                @endif



                {{-- =================================================
                     GOOGLE MAPS
                ================================================== --}}

                @if($wisata->maps_url)

                    <a
                        href="{{ $wisata->maps_url }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="mt-5 flex w-full items-center justify-center gap-2 rounded-xl bg-green-600 px-4 py-3.5 text-center text-sm font-semibold text-white transition hover:bg-green-700 active:scale-[0.98] sm:mt-6 sm:px-5"
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
                href="{{ route('user.wisata.index') }}"
                class="inline-flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-4 py-3 text-sm font-medium text-gray-600 shadow-sm transition hover:border-green-200 hover:bg-green-50 hover:text-green-600"
            >

                <i data-lucide="arrow-left" class="h-4 w-4"></i>

                Kembali ke Wisata & Jasa

            </a>

        </div>

    </main>



    {{-- =====================================================
         FOOTER
    ====================================================== --}}

    <footer class="mt-10 bg-green-950 text-white sm:mt-16">

        <div
            class="mx-auto max-w-7xl px-4 py-8 sm:px-6 sm:py-10 lg:px-8"
        >

            <div
                class="flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between"
            >


                {{-- BRAND --}}

                <div class="flex items-center gap-3">

                    <div
                        class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-green-600"
                    >

                        <i
                            data-lucide="landmark"
                            class="h-5 w-5"
                        ></i>

                    </div>


                    <div>

                        <p class="font-bold">
                            Desa Digital
                        </p>

                        <p class="text-xs text-green-200">
                            Portal Informasi Desa
                        </p>

                    </div>

                </div>


                {{-- COPYRIGHT --}}

                <p
                    class="text-left text-xs text-green-200 sm:text-right sm:text-sm"
                >
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