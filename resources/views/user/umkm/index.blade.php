<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>UMKM Desa - Desa Digital</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://unpkg.com/lucide@latest"></script>
</head>


<body class="bg-gray-50 text-gray-800">


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

                    <h1 class="text-sm font-bold text-gray-900 sm:text-base">
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

                {{-- Beranda --}}

                <a
                    href="{{ route('home') }}"
                    class="rounded-lg px-3 py-2 text-sm font-medium text-gray-600 transition hover:bg-green-50 hover:text-green-700 xl:px-4"
                >
                    Beranda
                </a>


                {{-- Profil --}}

                <a
                    href="{{ route('user.profil') }}"
                    class="rounded-lg px-3 py-2 text-sm font-medium text-gray-600 transition hover:bg-green-50 hover:text-green-700 xl:px-4"
                >
                    Profil Desa
                </a>


                {{-- UMKM ACTIVE --}}

                <a
                    href="{{ route('user.umkm.index') }}"
                    class="rounded-lg bg-green-50 px-3 py-2 text-sm font-semibold text-green-700 xl:px-4"
                >
                    UMKM
                </a>


                {{-- Wisata --}}

                <a
                    href="{{ route('user.wisata.index') }}"
                    class="rounded-lg px-3 py-2 text-sm font-medium text-gray-600 transition hover:bg-green-50 hover:text-green-700 xl:px-4"
                >
                    Wisata & Jasa
                </a>


                {{-- Berita --}}

                <a
                    href="{{ route('user.berita.index') }}"
                    class="rounded-lg px-3 py-2 text-sm font-medium text-gray-600 transition hover:bg-green-50 hover:text-green-700 xl:px-4"
                >
                    Berita
                </a>


                {{-- Galeri
                     Route belum dibuat, jadi sementara nonaktif
                --}}

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


                {{-- Beranda --}}

                <a
                    href="{{ route('home') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-gray-700 transition hover:bg-green-50 hover:text-green-700"
                >

                    <i data-lucide="home" class="h-4 w-4"></i>

                    Beranda

                </a>


                {{-- Profil --}}

                <a
                    href="{{ route('user.profil') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-gray-700 transition hover:bg-green-50 hover:text-green-700"
                >

                    <i data-lucide="building-2" class="h-4 w-4"></i>

                    Profil Desa

                </a>


                {{-- UMKM ACTIVE --}}

                <a
                    href="{{ route('user.umkm.index') }}"
                    class="flex items-center gap-3 rounded-xl bg-green-50 px-4 py-3 text-sm font-semibold text-green-700"
                >

                    <i data-lucide="store" class="h-4 w-4"></i>

                    UMKM

                </a>


                {{-- Wisata --}}

                <a
                    href="{{ route('user.wisata.index') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-gray-700 transition hover:bg-green-50 hover:text-green-700"
                >

                    <i data-lucide="map" class="h-4 w-4"></i>

                    Wisata & Jasa

                </a>


                {{-- Berita --}}

                <a
                    href="{{ route('user.berita.index') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-gray-700 transition hover:bg-green-50 hover:text-green-700"
                >

                    <i data-lucide="newspaper" class="h-4 w-4"></i>

                    Berita

                </a>


                {{-- Galeri --}}

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
         HERO / PAGE HEADER
    ====================================================== --}}

    <section class="bg-green-900">

        <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 sm:py-16 lg:px-8">

            <div class="max-w-3xl">


                <div
                    class="mb-4 inline-flex items-center gap-2 rounded-full bg-green-800 px-4 py-2 text-xs font-semibold text-green-100"
                >

                    <i data-lucide="store" class="h-4 w-4"></i>

                    POTENSI EKONOMI DESA

                </div>


                <h2
                    class="text-3xl font-bold leading-tight text-white sm:text-4xl lg:text-5xl"
                >
                    UMKM Desa
                </h2>


                <p
                    class="mt-4 max-w-2xl text-sm leading-7 text-green-100 sm:text-base"
                >
                    Temukan berbagai usaha masyarakat desa dan dukung
                    produk lokal untuk membantu perkembangan ekonomi desa.
                </p>

            </div>

        </div>

    </section>



    {{-- =====================================================
         MAIN CONTENT
    ====================================================== --}}

    <main>

        <section
            class="mx-auto max-w-7xl px-4 py-10 sm:px-6 sm:py-14 lg:px-8"
        >


            {{-- HEADER CONTENT --}}

            <div
                class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between"
            >

                <div>

                    <p class="text-sm font-semibold text-green-700">
                        USAHA MASYARAKAT
                    </p>

                    <h3
                        class="mt-1 text-2xl font-bold text-gray-900 sm:text-3xl"
                    >
                        Jelajahi UMKM Desa
                    </h3>

                    <p
                        class="mt-2 max-w-2xl text-sm leading-6 text-gray-500"
                    >
                        Kenali berbagai usaha lokal yang berkembang
                        dan menjadi bagian dari potensi ekonomi desa.
                    </p>

                </div>


                {{-- JUMLAH UMKM --}}

                <div class="text-sm text-gray-500">

                    <span class="font-semibold text-gray-900">
                        {{ $umkms->count() }}
                    </span>

                    UMKM tersedia

                </div>

            </div>



            {{-- =================================================
                 DATA UMKM
            ================================================== --}}

            @if($umkms->count() > 0)

                <div
                    class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3"
                >

                    @foreach($umkms as $umkm)

                        <article
                            class="group flex h-full flex-col overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"
                        >


                            {{-- FOTO --}}

                            <a href="{{ route('user.umkm.show', $umkm) }}">

                                <div
                                    class="relative aspect-[16/10] overflow-hidden bg-green-50"
                                >

                                    @if($umkm->foto)

                                        <img
                                            src="{{ asset('storage/' . $umkm->foto) }}"
                                            alt="{{ $umkm->nama_usaha }}"
                                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                                        >

                                    @else

                                        <div
                                            class="flex h-full w-full flex-col items-center justify-center text-green-600"
                                        >

                                            <i
                                                data-lucide="store"
                                                class="h-10 w-10"
                                            ></i>

                                            <span
                                                class="mt-2 text-xs font-medium"
                                            >
                                                Belum ada foto
                                            </span>

                                        </div>

                                    @endif


                                    {{-- KATEGORI --}}

                                    @if($umkm->kategori)

                                        <div class="absolute left-4 top-4">

                                            <span
                                                class="rounded-full bg-white/95 px-3 py-1.5 text-xs font-semibold text-green-700 shadow-sm"
                                            >
                                                {{ $umkm->kategori }}
                                            </span>

                                        </div>

                                    @endif

                                </div>

                            </a>



                            {{-- INFORMASI --}}

                            <div
                                class="flex flex-1 flex-col p-5 sm:p-6"
                            >


                                {{-- KATEGORI MOBILE / SMALL --}}

                                @if($umkm->kategori)

                                    <div class="mb-3 sm:hidden">

                                        <span
                                            class="inline-flex rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700"
                                        >
                                            {{ $umkm->kategori }}
                                        </span>

                                    </div>

                                @endif


                                {{-- NAMA USAHA --}}

                                <h3
                                    class="text-lg font-bold leading-7 text-gray-900 transition group-hover:text-green-700 sm:text-xl"
                                >

                                    {{ $umkm->nama_usaha }}

                                </h3>


                                {{-- DESKRIPSI --}}

                                <p
                                    class="mt-2 line-clamp-3 text-sm leading-6 text-gray-500"
                                >

                                    {{ $umkm->deskripsi }}

                                </p>


                                {{-- ALAMAT --}}

                                @if($umkm->alamat)

                                    <div
                                        class="mt-4 flex items-start gap-2 text-sm text-gray-500"
                                    >

                                        <i
                                            data-lucide="map-pin"
                                            class="mt-0.5 h-4 w-4 shrink-0 text-green-600"
                                        ></i>

                                        <span class="line-clamp-2">
                                            {{ $umkm->alamat }}
                                        </span>

                                    </div>

                                @endif


                                {{-- DETAIL BUTTON --}}

                                <div class="mt-auto pt-5">

                                    <a
                                        href="{{ route('user.umkm.show', $umkm) }}"
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
                    class="rounded-2xl border border-gray-200 bg-white px-5 py-14 text-center shadow-sm sm:px-6 sm:py-16"
                >

                    <div
                        class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-green-50 text-green-600"
                    >

                        <i
                            data-lucide="store"
                            class="h-8 w-8"
                        ></i>

                    </div>


                    <h3
                        class="mt-5 text-xl font-bold text-gray-900"
                    >
                        Belum Ada UMKM
                    </h3>


                    <p
                        class="mx-auto mt-2 max-w-md text-sm leading-6 text-gray-500"
                    >
                        Belum ada data UMKM aktif yang tersedia.
                        Silakan kembali lagi nanti untuk melihat
                        berbagai usaha masyarakat desa.
                    </p>

                </div>

            @endif

        </section>

    </main>



    {{-- =====================================================
         FOOTER
    ====================================================== --}}

    <footer class="border-t border-gray-800 bg-green-950 text-white">

        <div
            class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8"
        >

            <div
                class="flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between"
            >


                {{-- BRAND --}}

                <div>

                    <div class="flex items-center gap-3">

                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-xl bg-green-700"
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

            // Aktifkan Lucide Icons
            if (window.lucide) {
                lucide.createIcons();
            }


            // Mobile menu
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