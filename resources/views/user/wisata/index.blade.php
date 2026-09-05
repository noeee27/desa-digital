<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Wisata & Jasa - Desa Digital</title>

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
                    class="flex h-10 w-10 shrink-0 items-center justify-center overflow-hidden rounded-xl bg-green-600 text-white sm:h-11 sm:w-11"
                >
                    @if($profil?->foto)
                        <img
                            src="{{ asset('storage/' . $profil->foto) }}"
                            alt="{{ $profil?->nama_desa ?? 'Logo Desa' }}"
                            class="h-full w-full object-cover"
                        >
                    @else
                        <i
                            data-lucide="landmark"
                            class="h-5 w-5 sm:h-6 sm:w-6"
                        ></i>
                    @endif
                </div>

                <div>

                    <h1 class="text-sm font-bold leading-tight text-gray-900 sm:text-base">
                        {{ $profil?->nama_desa ?: 'Desa Digital' }}
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

                {{-- BERANDA --}}

                <a
                    href="{{ route('home') }}"
                    class="rounded-lg px-3 py-2 text-sm font-medium text-gray-600 transition hover:bg-green-50 hover:text-green-700 xl:px-4"
                >
                    Beranda
                </a>


                {{-- PROFIL --}}

                <a
                    href="{{ route('user.profil') }}"
                    class="rounded-lg px-3 py-2 text-sm font-medium text-gray-600 transition hover:bg-green-50 hover:text-green-700 xl:px-4"
                >
                    Profil Desa
                </a>


                {{-- UMKM --}}

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


                {{-- BERITA --}}

                <a
                    href="{{ route('user.berita.index') }}"
                    class="rounded-lg px-3 py-2 text-sm font-medium text-gray-600 transition hover:bg-green-50 hover:text-green-700 xl:px-4"
                >
                    Berita
                </a>


                {{-- GALERI --}}

                <a
                    href="{{ route('user.galeri.index') }}"
                    class="rounded-lg px-3 py-2 text-sm font-medium text-gray-600 transition hover:bg-green-50 hover:text-green-700 xl:px-4"
                >
                    Galeri
                </a>

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

                <a
                    href="{{ route('user.galeri.index') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-gray-700 transition hover:bg-green-50 hover:text-green-700"
                >
                    <i data-lucide="images" class="h-4 w-4"></i>
                    Galeri
                </a>

            </nav>

        </div>

    </header>



    {{-- =====================================================
         HERO
    ====================================================== --}}

    <section class="bg-gradient-to-br from-green-950 via-green-900 to-green-700">

        <div
            class="mx-auto max-w-7xl px-4 py-12 sm:px-6 sm:py-16 lg:px-8 lg:py-20"
        >

            <div class="max-w-3xl">

                <div
                    class="mb-4 inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-2 text-xs font-semibold text-green-100 ring-1 ring-white/10 sm:mb-5 sm:text-sm"
                >

                    <i data-lucide="map" class="h-4 w-4"></i>

                    POTENSI DESA

                </div>


                <h2
                    class="text-3xl font-bold leading-tight text-white sm:text-4xl md:text-5xl"
                >
                    Wisata & Jasa Desa
                </h2>


                <p
                    class="mt-4 max-w-2xl text-sm leading-7 text-green-100 sm:mt-5 sm:text-base md:text-lg"
                >
                    Temukan berbagai destinasi wisata dan jasa masyarakat
                    yang tersedia di desa.
                </p>

            </div>

        </div>

    </section>



    {{-- =====================================================
         DAFTAR WISATA & JASA
    ====================================================== --}}

    <section class="py-10 sm:py-14 lg:py-16">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">


            {{-- SECTION HEADING --}}

            <div class="mb-8 sm:mb-10">

                <p
                    class="text-xs font-bold uppercase tracking-wider text-green-600 sm:text-sm"
                >
                    Jelajahi Sekarang
                </p>


                <h2
                    class="mt-2 text-2xl font-bold text-gray-900 sm:text-3xl"
                >
                    Pilihan Wisata & Jasa
                </h2>


                <p class="mt-2 text-sm leading-6 text-gray-500 sm:text-base">
                    Informasi destinasi dan layanan masyarakat desa.
                </p>

            </div>



            {{-- =================================================
                 DATA
            ================================================== --}}

            @if($wisatas->count() > 0)

                <div
                    class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 lg:gap-7"
                >

                    @foreach($wisatas as $wisata)

                        <article
                            class="group flex h-full flex-col overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"
                        >


                            {{-- FOTO --}}

                            <a href="{{ route('user.wisata.show', $wisata) }}">

                                <div
                                    class="relative aspect-[16/10] overflow-hidden bg-green-50"
                                >

                                    @if($wisata->foto)

                                        <img
                                            src="{{ asset('storage/' . $wisata->foto) }}"
                                            alt="{{ $wisata->nama }}"
                                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                                        >

                                    @else

                                        <div
                                            class="flex h-full flex-col items-center justify-center text-green-600"
                                        >

                                            <div
                                                class="flex h-16 w-16 items-center justify-center rounded-2xl bg-green-100"
                                            >

                                                <i
                                                    data-lucide="map"
                                                    class="h-8 w-8"
                                                ></i>

                                            </div>


                                            <span class="mt-3 text-sm font-medium">
                                                Belum ada foto
                                            </span>

                                        </div>

                                    @endif


                                    {{-- KATEGORI --}}

                                    @if($wisata->kategori)

                                        <div class="absolute left-4 top-4">

                                            <span
                                                class="rounded-full bg-white/95 px-3 py-1.5 text-xs font-semibold text-green-700 shadow-sm"
                                            >
                                                {{ $wisata->kategori }}
                                            </span>

                                        </div>

                                    @endif

                                </div>

                            </a>



                            {{-- CONTENT --}}

                            <div class="flex flex-1 flex-col p-5 sm:p-6">


                                {{-- KATEGORI MOBILE --}}

                                @if($wisata->kategori)

                                    <div class="mb-3 sm:hidden">

                                        <span
                                            class="inline-flex rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700"
                                        >
                                            {{ $wisata->kategori }}
                                        </span>

                                    </div>

                                @endif


                                {{-- NAMA --}}

                                <h3
                                    class="line-clamp-2 text-lg font-bold leading-7 text-gray-900 transition group-hover:text-green-700 sm:text-xl"
                                >
                                    {{ $wisata->nama }}
                                </h3>


                                {{-- DESKRIPSI --}}

                                <p
                                    class="mt-2 line-clamp-3 text-sm leading-6 text-gray-500"
                                >
                                    {{ $wisata->deskripsi ?: 'Belum ada deskripsi.' }}
                                </p>


                                {{-- ALAMAT --}}

                                @if($wisata->alamat)

                                    <div
                                        class="mt-4 flex items-start gap-2 text-sm text-gray-500"
                                    >

                                        <i
                                            data-lucide="map-pin"
                                            class="mt-0.5 h-4 w-4 shrink-0 text-green-600"
                                        ></i>

                                        <span class="line-clamp-2">
                                            {{ $wisata->alamat }}
                                        </span>

                                    </div>

                                @endif


                                {{-- HARGA --}}

                                @if($wisata->harga)

                                    <div
                                        class="mt-3 flex items-center gap-2 text-sm"
                                    >

                                        <i
                                            data-lucide="banknote"
                                            class="h-4 w-4 shrink-0 text-green-600"
                                        ></i>

                                        <span
                                            class="font-semibold text-gray-700"
                                        >
                                            {{ $wisata->harga }}
                                        </span>

                                    </div>

                                @endif


                                {{-- DETAIL --}}

                                <div class="mt-auto pt-5">

                                    <a
                                        href="{{ route('user.wisata.show', $wisata) }}"
                                        class="flex w-full items-center justify-center gap-2 rounded-xl bg-green-600 px-4 py-3 text-sm font-semibold text-white transition hover:bg-green-700 active:scale-[0.98]"
                                    >

                                        Lihat Detail

                                        <i
                                            data-lucide="arrow-right"
                                            class="h-4 w-4"
                                        ></i>

                                    </a>

                                </div>

                            </div>

                        </article>

                    @endforeach

                </div>


            @else


                {{-- =================================================
                     EMPTY STATE
                ================================================== --}}

                <div
                    class="rounded-2xl border border-dashed border-gray-300 bg-white px-5 py-14 text-center sm:px-6 sm:py-20"
                >

                    <div
                        class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-green-50 sm:h-20 sm:w-20"
                    >

                        <i
                            data-lucide="map"
                            class="h-8 w-8 text-green-600 sm:h-10 sm:w-10"
                        ></i>

                    </div>


                    <h3
                        class="mt-5 text-xl font-bold text-gray-900"
                    >
                        Belum Ada Data
                    </h3>


                    <p
                        class="mx-auto mt-2 max-w-md text-sm leading-6 text-gray-500"
                    >
                        Saat ini belum ada data wisata atau jasa
                        yang tersedia untuk ditampilkan.
                    </p>

                </div>

            @endif

        </div>

    </section>



    {{-- =====================================================
         CTA
    ====================================================== --}}

    <section class="bg-green-900 py-12 sm:py-16">

        <div
            class="mx-auto max-w-3xl px-4 text-center sm:px-6"
        >

            <div
                class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-white/10"
            >

                <i
                    data-lucide="compass"
                    class="h-7 w-7 text-green-300"
                ></i>

            </div>


            <h2
                class="mt-5 text-2xl font-bold text-white sm:text-3xl"
            >
                Jelajahi Potensi Desa
            </h2>


            <p
                class="mt-4 text-sm leading-7 text-green-100 sm:text-base"
            >
                Kenali berbagai destinasi dan jasa masyarakat
                yang menjadi bagian dari potensi desa.
            </p>

        </div>

    </section>



    {{-- =====================================================
         FOOTER
    ====================================================== --}}

    <footer class="bg-green-950 text-white">

        <div
            class="mx-auto max-w-7xl px-4 py-8 sm:px-6 sm:py-10 lg:px-8"
        >

            <div
                class="flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between"
            >

                {{-- BRAND --}}

                <div class="flex items-center gap-3">

                   <div
                        class="flex h-10 w-10 shrink-0 items-center justify-center overflow-hidden rounded-xl bg-green-600"
                    >
                        @if($profil?->foto)
                            <img
                                src="{{ asset('storage/' . $profil->foto) }}"
                                alt="{{ $profil?->nama_desa ?? 'Logo Desa' }}"
                                class="h-full w-full object-cover"
                            >
                        @else
                            <i
                                data-lucide="landmark"
                                class="h-5 w-5"
                            ></i>
                        @endif
                    </div>


                    <div>

                       <p class="font-bold">
                            {{ $profil?->nama_desa ?: 'Desa Digital' }}
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
                   © {{ date('Y') }} {{ $profil?->nama_desa ?: 'Desa Digital' }}.
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