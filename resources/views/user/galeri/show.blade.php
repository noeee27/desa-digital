<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>{{ $galeri->judul }} - {{ $profil?->nama_desa ?: 'Desa Digital' }}</title>

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
        MAIN
    ====================================================== --}}

    <main class="mx-auto max-w-6xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">


        {{-- BREADCRUMB / BACK --}}

        <div class="mb-6">

            <a
                href="{{ route('user.galeri.index') }}"
                class="inline-flex items-center gap-2 text-sm font-semibold text-green-700 transition hover:text-green-800"
            >

                <i
                    data-lucide="arrow-left"
                    class="h-4 w-4"
                ></i>

                Kembali ke Galeri

            </a>

        </div>



        {{-- =================================================
            DETAIL CARD
        ================================================== --}}

        <article class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm">


            {{-- FOTO --}}

            <div class="bg-gray-100 p-3 sm:p-6">

                @if($galeri->foto)

                    <div class="flex max-h-[650px] items-center justify-center overflow-hidden rounded-xl bg-white sm:rounded-2xl">

                        <img
                            src="{{ asset('storage/' . $galeri->foto) }}"
                            alt="{{ $galeri->judul }}"
                            class="max-h-[650px] w-full object-contain"
                        >

                    </div>

                @else

                    <div class="flex h-72 items-center justify-center rounded-xl bg-green-50 sm:h-96">

                        <div class="text-center text-green-500">

                            <i
                                data-lucide="image-off"
                                class="mx-auto h-12 w-12"
                            ></i>

                            <p class="mt-3 text-sm">
                                Foto tidak tersedia
                            </p>

                        </div>

                    </div>

                @endif

            </div>



            {{-- =================================================
                INFORMASI
            ================================================== --}}

            <div class="p-5 sm:p-8">


                {{-- KATEGORI --}}

                @if($galeri->kategori)

                    <span class="inline-flex rounded-full bg-green-50 px-3 py-1 text-xs font-semibold text-green-700">

                        {{ $galeri->kategori }}

                    </span>

                @endif



                {{-- JUDUL --}}

                <h1 class="mt-4 text-2xl font-bold leading-tight text-gray-900 sm:text-3xl lg:text-4xl">

                    {{ $galeri->judul }}

                </h1>



                {{-- DESKRIPSI --}}

                @if($galeri->deskripsi)

                    <div class="mt-5">

                        <p class="whitespace-pre-line text-sm leading-7 text-gray-600 sm:text-base">

                            {{ $galeri->deskripsi }}

                        </p>

                    </div>

                @endif



                {{-- TANGGAL --}}

                <div class="mt-6 flex items-center gap-2 border-t border-gray-100 pt-5 text-sm text-gray-500">

                    <i
                        data-lucide="calendar"
                        class="h-4 w-4 shrink-0"
                    ></i>

                    <span>
                        {{ $galeri->created_at->translatedFormat('d F Y') }}
                    </span>

                </div>



                {{-- ACTION --}}

                <div class="mt-7 flex flex-col gap-3 sm:flex-row">


                    {{-- KEMBALI --}}

                    <a
                        href="{{ route('user.galeri.index') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-xl border border-gray-200 px-5 py-3 text-sm font-semibold text-gray-700 transition hover:bg-gray-50"
                    >

                        <i
                            data-lucide="arrow-left"
                            class="h-4 w-4"
                        ></i>

                        Kembali ke Galeri

                    </a>


                    {{-- BERANDA --}}

                    <a
                        href="{{ route('home') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-xl bg-green-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-green-700"
                    >

                        <i
                            data-lucide="home"
                            class="h-4 w-4"
                        ></i>

                        Beranda

                    </a>

                </div>

            </div>

        </article>

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
            // LUCIDE
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