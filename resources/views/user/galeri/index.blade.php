<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Galeri - {{ $profil?->nama_desa ?: 'Desa Digital' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://unpkg.com/lucide@latest"></script>
</head>


<body class="bg-gray-50 text-gray-800">


    {{-- =====================================================
        NAVBAR
    ====================================================== --}}

    <header class="sticky top-0 z-50 border-b border-gray-100 bg-white/95 backdrop-blur">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            {{-- HEADER UTAMA --}}

            <div class="flex h-20 items-center justify-between">


                {{-- LOGO --}}

                <a
                    href="{{ route('home') }}"
                    class="flex items-center gap-3"
                >

                   <div
                        class="flex h-10 w-10 shrink-0 items-center justify-center overflow-hidden rounded-xl bg-green-600 sm:h-11 sm:w-11"
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
                                class="h-5 w-5 text-white sm:h-6 sm:w-6"
                            ></i>
                        @endif
                    </div>


                    <div>

                      <h1 class="text-sm font-bold leading-tight text-gray-900 sm:text-lg">
                        {{ $profil?->nama_desa ?: 'Desa Digital' }}
                    </h1>

                        <p class="hidden text-xs text-gray-500 sm:block">
                            Portal Informasi Desa
                        </p>

                    </div>

                </a>



                {{-- =================================================
                    NAVBAR DESKTOP
                ================================================== --}}

                <nav class="hidden items-center gap-1 lg:flex">


                    {{-- BERANDA --}}

                    <a
                        href="{{ route('home') }}"
                        class="rounded-lg px-3 py-2 text-sm font-medium text-gray-600 transition hover:bg-green-50 hover:text-green-700 xl:px-4"
                    >
                        Beranda
                    </a>


                    {{-- PROFIL DESA --}}

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


                    {{-- WISATA --}}

                    <a
                        href="{{ route('user.wisata.index') }}"
                        class="rounded-lg px-3 py-2 text-sm font-medium text-gray-600 transition hover:bg-green-50 hover:text-green-700 xl:px-4"
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


                    {{-- GALERI ACTIVE --}}

                    <a
                        href="{{ route('user.galeri.index') }}"
                        class="rounded-lg bg-green-50 px-3 py-2 text-sm font-semibold text-green-700 xl:px-4"
                    >
                        Galeri
                    </a>

                </nav>



                {{-- =================================================
                    MOBILE BUTTON
                ================================================== --}}

                <button
                    type="button"
                    id="mobile-menu-button"
                    class="flex h-10 w-10 items-center justify-center rounded-xl border border-gray-200 text-gray-700 transition hover:bg-gray-50 lg:hidden"
                    aria-label="Buka menu"
                    aria-expanded="false"
                    aria-controls="mobile-menu"
                >

                    <i
                        data-lucide="menu"
                        class="h-5 w-5"
                    ></i>

                </button>

            </div>



            {{-- =================================================
                MOBILE MENU
            ================================================== --}}

            <div
                id="mobile-menu"
                class="hidden border-t border-gray-100 bg-white lg:hidden"
            >

                <nav class="space-y-1 py-4">


                    {{-- BERANDA --}}

                    <a
                        href="{{ route('home') }}"
                        class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-gray-700 transition hover:bg-green-50 hover:text-green-700"
                    >

                        <i
                            data-lucide="home"
                            class="h-5 w-5"
                        ></i>

                        Beranda

                    </a>


                    {{-- PROFIL --}}

                    <a
                        href="{{ route('user.profil') }}"
                        class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-gray-700 transition hover:bg-green-50 hover:text-green-700"
                    >

                        <i
                            data-lucide="building-2"
                            class="h-5 w-5"
                        ></i>

                        Profil Desa

                    </a>


                    {{-- UMKM --}}

                    <a
                        href="{{ route('user.umkm.index') }}"
                        class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-gray-700 transition hover:bg-green-50 hover:text-green-700"
                    >

                        <i
                            data-lucide="store"
                            class="h-5 w-5"
                        ></i>

                        UMKM

                    </a>


                    {{-- WISATA --}}

                    <a
                        href="{{ route('user.wisata.index') }}"
                        class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-gray-700 transition hover:bg-green-50 hover:text-green-700"
                    >

                        <i
                            data-lucide="map"
                            class="h-5 w-5"
                        ></i>

                        Wisata & Jasa

                    </a>


                    {{-- BERITA --}}

                    <a
                        href="{{ route('user.berita.index') }}"
                        class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-gray-700 transition hover:bg-green-50 hover:text-green-700"
                    >

                        <i
                            data-lucide="newspaper"
                            class="h-5 w-5"
                        ></i>

                        Berita

                    </a>


                    {{-- GALERI ACTIVE --}}

                    <a
                        href="{{ route('user.galeri.index') }}"
                        class="flex items-center gap-3 rounded-xl bg-green-50 px-4 py-3 text-sm font-semibold text-green-700"
                    >

                        <i
                            data-lucide="images"
                            class="h-5 w-5"
                        ></i>

                        Galeri

                    </a>

                </nav>

            </div>

        </div>

    </header>



    {{-- =====================================================
        HERO
    ====================================================== --}}

    <section class="bg-white">

        <div class="mx-auto max-w-7xl px-4 py-14 sm:px-6 sm:py-16 lg:px-8 lg:py-20">

            <div class="mx-auto max-w-3xl text-center">


                <span class="inline-flex items-center gap-2 rounded-full bg-green-50 px-4 py-2 text-xs font-semibold text-green-700">

                    <i
                        data-lucide="images"
                        class="h-4 w-4"
                    ></i>

                    Dokumentasi Desa

                </span>


                <h2 class="mt-5 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl lg:text-5xl">

                    Galeri Desa

                </h2>


                <p class="mt-4 text-sm leading-6 text-gray-500 sm:text-base sm:leading-7">

                    Lihat berbagai dokumentasi kegiatan, pembangunan,
                    wisata, UMKM, dan aktivitas masyarakat desa.

                </p>

            </div>

        </div>

    </section>



    {{-- =====================================================
        GALERI
    ====================================================== --}}

    <main class="mx-auto max-w-7xl px-4 py-10 sm:px-6 sm:py-14 lg:px-8">


        @if($galeris->count() > 0)


            {{-- GRID FOTO --}}

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">


                @foreach($galeris as $galeri)


                    <a
                        href="{{ route('user.galeri.show', $galeri) }}"
                        class="group overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"
                    >


                        {{-- FOTO --}}

                        <div class="relative aspect-[4/3] overflow-hidden bg-green-50">


                            @if($galeri->foto)

                                <img
                                    src="{{ asset('storage/' . $galeri->foto) }}"
                                    alt="{{ $galeri->judul }}"
                                    loading="lazy"
                                    class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                                >

                            @else

                                <div class="flex h-full items-center justify-center">

                                    <i
                                        data-lucide="image-off"
                                        class="h-10 w-10 text-green-400"
                                    ></i>

                                </div>

                            @endif


                            {{-- OVERLAY --}}

                            <div class="absolute inset-0 flex items-end bg-gradient-to-t from-black/70 via-black/10 to-transparent opacity-0 transition duration-300 group-hover:opacity-100">

                                <div class="w-full p-4 text-white">

                                    <p class="text-sm font-semibold">
                                        Lihat Detail
                                    </p>

                                </div>

                            </div>

                        </div>



                        {{-- INFORMASI --}}

                        <div class="p-5">


                            @if($galeri->kategori)

                                <span class="inline-flex rounded-full bg-green-50 px-3 py-1 text-xs font-semibold text-green-700">

                                    {{ $galeri->kategori }}

                                </span>

                            @endif


                            <h3 class="mt-3 line-clamp-2 text-base font-bold text-gray-900">

                                {{ $galeri->judul }}

                            </h3>


                            @if($galeri->deskripsi)

                                <p class="mt-2 line-clamp-2 text-sm leading-6 text-gray-500">

                                    {{ $galeri->deskripsi }}

                                </p>

                            @endif


                            <div class="mt-4 flex items-center gap-2 text-xs font-semibold text-green-600">

                                Lihat Foto

                                <i
                                    data-lucide="arrow-right"
                                    class="h-4 w-4 transition group-hover:translate-x-1"
                                ></i>

                            </div>

                        </div>

                    </a>

                @endforeach

            </div>


        @else


            {{-- EMPTY STATE --}}

            <div class="rounded-2xl border border-gray-200 bg-white px-6 py-20 text-center shadow-sm">


                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-green-50 text-green-600">

                    <i
                        data-lucide="images"
                        class="h-8 w-8"
                    ></i>

                </div>


                <h3 class="mt-5 text-xl font-bold text-gray-900">

                    Galeri Belum Tersedia

                </h3>


                <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-gray-500">

                    Belum ada dokumentasi foto yang dipublikasikan.
                    Silakan kembali lagi nanti.

                </p>


                <a
                    href="{{ route('home') }}"
                    class="mt-6 inline-flex items-center gap-2 rounded-xl bg-green-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-green-700"
                >

                    <i
                        data-lucide="home"
                        class="h-4 w-4"
                    ></i>

                    Kembali ke Beranda

                </a>

            </div>

        @endif

    </main>



    {{-- =====================================================
        FOOTER
    ====================================================== --}}

    <footer class="mt-10 bg-green-950 text-white">


        <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">


            <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">


                <div>

                    <p class="font-bold">
                        {{ $profil?->nama_desa ?: 'Desa Digital' }}
                    </p>

                    <p class="mt-1 text-sm text-green-200">
                        Portal Informasi Desa
                    </p>

                </div>


                <p class="text-sm text-green-200">

                    © {{ date('Y') }} {{ $profil?->nama_desa ?: 'Desa Digital' }}

                </p>

            </div>

        </div>

    </footer>



    {{-- =====================================================
        JAVASCRIPT
    ====================================================== --}}

    <script>

        document.addEventListener('DOMContentLoaded', function () {


            // ==========================
            // LUCIDE ICON
            // ==========================

            if (window.lucide) {

                lucide.createIcons();

            }


            // ==========================
            // MOBILE MENU
            // ==========================

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