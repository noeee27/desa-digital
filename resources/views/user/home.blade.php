<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Desa Digital</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://unpkg.com/lucide@latest"></script>
</head>


<body class="bg-white text-gray-800">


    {{-- =====================================================
         NAVBAR
    ====================================================== --}}

    <header class="sticky top-0 z-50 border-b border-gray-100 bg-white/95 backdrop-blur">

        <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:h-20 lg:px-8">


            {{-- LOGO --}}

            <a
                href="{{ route('home') }}"
                class="flex items-center gap-3"
            >

                <div
                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-green-700 text-white sm:h-11 sm:w-11"
                >

                    <i
                        data-lucide="landmark"
                        class="h-5 w-5 sm:h-6 sm:w-6"
                    ></i>

                </div>


                <div>

                    <h1 class="text-sm font-bold text-gray-900 sm:text-lg">
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


                {{-- BERANDA ACTIVE --}}

                <a
                    href="{{ route('home') }}"
                    class="rounded-lg bg-green-50 px-3 py-2 text-sm font-semibold text-green-700 xl:px-4"
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

                <i
                    id="mobile-menu-icon"
                    data-lucide="menu"
                    class="h-5 w-5"
                ></i>

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


                {{-- BERANDA ACTIVE --}}

                <a
                    href="{{ route('home') }}"
                    class="flex items-center gap-3 rounded-xl bg-green-50 px-4 py-3 text-sm font-semibold text-green-700"
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


                {{-- WISATA --}}

                <a
                    href="{{ route('user.wisata.index') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-gray-700 transition hover:bg-green-50 hover:text-green-700"
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

    <section class="relative overflow-hidden bg-green-900">


        {{-- BACKGROUND --}}

        <div
            class="absolute inset-0 bg-gradient-to-br from-green-950 via-green-900 to-green-700"
        ></div>


        <div
            class="relative mx-auto max-w-7xl px-4 py-14 sm:px-6 sm:py-20 lg:px-8 lg:py-28"
        >

            <div class="grid items-center gap-10 lg:grid-cols-2 lg:gap-12">


                {{-- HERO TEXT --}}

                <div>

                    <div
                        class="mb-5 inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-2 text-xs font-medium text-green-100 ring-1 ring-white/10 sm:px-4 sm:text-sm"
                    >

                        <i
                            data-lucide="sparkles"
                            class="h-4 w-4"
                        ></i>

                        Selamat Datang di Desa Digital

                    </div>


                    <h2
                        class="max-w-3xl text-3xl font-bold leading-tight text-white sm:text-5xl lg:text-6xl"
                    >

                        Mengenal Desa,

                        <span class="text-green-300">
                            Mengenal Potensinya.
                        </span>

                    </h2>


                    <p
                        class="mt-5 max-w-xl text-sm leading-7 text-green-100 sm:mt-6 sm:text-lg"
                    >

                        Temukan berbagai informasi tentang desa,
                        mulai dari profil, UMKM, wisata, jasa masyarakat,
                        berita, hingga berbagai potensi lokal.

                    </p>


                    {{-- HERO BUTTONS --}}

                    <div
                        class="mt-7 flex flex-col gap-3 sm:mt-8 sm:flex-row"
                    >

                        <a
                            href="{{ route('user.umkm.index') }}"
                            class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-white px-6 py-3.5 text-sm font-semibold text-green-800 shadow-lg transition hover:bg-green-50 sm:w-auto"
                        >

                            <i
                                data-lucide="store"
                                class="h-5 w-5"
                            ></i>

                            Jelajahi UMKM

                        </a>


                        <a
                            href="{{ route('user.wisata.index') }}"
                            class="inline-flex w-full items-center justify-center gap-2 rounded-xl border border-white/30 bg-white/10 px-6 py-3.5 text-sm font-semibold text-white transition hover:bg-white/20 sm:w-auto"
                        >

                            <i
                                data-lucide="map"
                                class="h-5 w-5"
                            ></i>

                            Lihat Wisata

                        </a>

                    </div>

                </div>



                {{-- HERO VISUAL --}}

                <div class="hidden lg:block">

                    <div class="relative mx-auto max-w-lg">

                        <div
                            class="absolute -inset-5 rounded-[2rem] bg-green-400/20 blur-2xl"
                        ></div>


                        <div
                            class="relative overflow-hidden rounded-[2rem] border border-white/10 bg-white/10 p-3 backdrop-blur"
                        >

                            <div
                                class="flex h-96 items-center justify-center rounded-[1.5rem] bg-gradient-to-br from-green-100 to-green-50"
                            >

                                <div class="text-center">

                                    <div
                                        class="mx-auto flex h-24 w-24 items-center justify-center rounded-3xl bg-white text-green-700 shadow-lg"
                                    >

                                        <i
                                            data-lucide="landmark"
                                            class="h-12 w-12"
                                        ></i>

                                    </div>


                                    <h3
                                        class="mt-6 text-xl font-bold text-green-900"
                                    >
                                        Desa Digital
                                    </h3>


                                    <p
                                        class="mt-2 text-sm text-green-700"
                                    >
                                        Satu pintu informasi desa
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- =====================================================
         PROFIL SINGKAT
    ====================================================== --}}

    <section
        id="profil"
        class="bg-white py-14 sm:py-20"
    >

        <div
            class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8"
        >

            <div
                class="grid items-center gap-10 lg:grid-cols-2 lg:gap-12"
            >


                {{-- TEXT --}}

                <div>

                    <div
                        class="mb-4 inline-flex items-center gap-2 rounded-full bg-green-50 px-4 py-2 text-xs font-semibold text-green-700 sm:text-sm"
                    >

                        <i
                            data-lucide="building-2"
                            class="h-4 w-4"
                        ></i>

                        Tentang Desa

                    </div>


                    <h2
                        class="text-2xl font-bold text-gray-900 sm:text-4xl"
                    >

                        Mengenal Lebih Dekat

                        <span class="text-green-700">
                            Desa Kita
                        </span>

                    </h2>


                    <p
                        class="mt-5 max-w-xl text-sm leading-7 text-gray-600 sm:text-base"
                    >

                        Desa Digital merupakan media informasi desa
                        yang membantu masyarakat dan pengunjung
                        mendapatkan informasi mengenai profil,
                        potensi, UMKM, wisata, jasa, dan berbagai
                        kegiatan yang ada di desa.

                    </p>


                    <a
                        href="{{ route('user.profil') }}"
                        class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-green-700 transition hover:text-green-800"
                    >

                        Selengkapnya

                        <i
                            data-lucide="arrow-right"
                            class="h-4 w-4"
                        ></i>

                    </a>

                </div>



                {{-- STATISTIK --}}

                <div class="grid grid-cols-2 gap-3 sm:gap-4">


                    {{-- UMKM --}}

                    <a
                        href="{{ route('user.umkm.index') }}"
                        class="rounded-2xl border border-gray-200 bg-gray-50 p-4 transition hover:-translate-y-1 hover:shadow-md sm:p-6"
                    >

                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-xl bg-green-100 text-green-700 sm:h-12 sm:w-12"
                        >

                            <i
                                data-lucide="store"
                                class="h-5 w-5 sm:h-6 sm:w-6"
                            ></i>

                        </div>


                        <p
                            class="mt-4 text-2xl font-bold text-gray-900 sm:mt-5 sm:text-3xl"
                        >
                            {{ $umkms->count() }}
                        </p>


                        <p class="mt-1 text-xs text-gray-500 sm:text-sm">
                            UMKM aktif
                        </p>

                    </a>



                    {{-- WISATA --}}

                    <a
                        href="{{ route('user.wisata.index') }}"
                        class="rounded-2xl border border-gray-200 bg-gray-50 p-4 transition hover:-translate-y-1 hover:shadow-md sm:p-6"
                    >

                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-xl bg-green-100 text-green-700 sm:h-12 sm:w-12"
                        >

                            <i
                                data-lucide="map"
                                class="h-5 w-5 sm:h-6 sm:w-6"
                            ></i>

                        </div>


                        <p
                            class="mt-4 text-2xl font-bold text-gray-900 sm:mt-5 sm:text-3xl"
                        >
                            {{ $wisatas->count() }}
                        </p>


                        <p class="mt-1 text-xs text-gray-500 sm:text-sm">
                            Wisata & jasa
                        </p>

                    </a>



                    {{-- BERITA --}}

                    <a
                        href="{{ route('user.berita.index') }}"
                        class="rounded-2xl border border-gray-200 bg-gray-50 p-4 transition hover:-translate-y-1 hover:shadow-md sm:p-6"
                    >

                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-xl bg-green-100 text-green-700 sm:h-12 sm:w-12"
                        >

                            <i
                                data-lucide="newspaper"
                                class="h-5 w-5 sm:h-6 sm:w-6"
                            ></i>

                        </div>


                        <p
                            class="mt-4 text-2xl font-bold text-gray-900 sm:mt-5 sm:text-3xl"
                        >
                            {{ $beritas->count() ?? 0 }}
                        </p>


                        <p class="mt-1 text-xs text-gray-500 sm:text-sm">
                            Berita
                        </p>

                    </a>



                    {{-- GALERI --}}

                   <a
                        href="{{ route('user.galeri.index') }}"
                        class="rounded-2xl border border-gray-200 bg-gray-50 p-4 transition hover:-translate-y-1 hover:shadow-md sm:p-6"
                    >

                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-xl bg-green-100 text-green-700 sm:h-12 sm:w-12"
                        >

                            <i
                                data-lucide="images"
                                class="h-5 w-5 sm:h-6 sm:w-6"
                            ></i>

                        </div>


                        <p class="mt-4 text-2xl font-bold text-gray-900 sm:mt-5 sm:text-3xl">
                            {{ $galeris->count() }}
                        </p>


                        <p class="mt-1 text-xs text-gray-500 sm:text-sm">
                            Galeri
                        </p>

                    </a>

                </div>

            </div>

        </div>

    </section>



    {{-- =====================================================
         UMKM
    ====================================================== --}}

    <section
        id="umkm"
        class="bg-gray-50 py-14 sm:py-20"
    >

        <div
            class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8"
        >


            {{-- HEADER --}}

            <div
                class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between"
            >

                <div>

                    <div
                        class="mb-3 inline-flex items-center gap-2 text-xs font-semibold text-green-700 sm:text-sm"
                    >

                        <i
                            data-lucide="store"
                            class="h-4 w-4"
                        ></i>

                        Potensi Ekonomi Desa

                    </div>


                    <h2
                        class="text-2xl font-bold text-gray-900 sm:text-3xl"
                    >
                        UMKM Desa
                    </h2>


                    <p
                        class="mt-2 text-sm text-gray-500 sm:text-base"
                    >
                        Kenali dan dukung usaha masyarakat desa.
                    </p>

                </div>


                <a
                    href="{{ route('user.umkm.index') }}"
                    class="inline-flex w-fit items-center gap-2 text-sm font-semibold text-green-700"
                >

                    Lihat semua

                    <i
                        data-lucide="arrow-right"
                        class="h-4 w-4"
                    ></i>

                </a>

            </div>



            {{-- CARDS --}}

            <div
                class="mt-8 grid gap-5 sm:mt-10 sm:grid-cols-2 lg:grid-cols-3"
            >

                @forelse ($umkms as $umkm)

                    <article
                        class="group flex h-full flex-col overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"
                    >


                        {{-- FOTO --}}

                        <a
                            href="{{ route('user.umkm.show', $umkm) }}"
                        >

                            <div
                                class="aspect-[16/10] overflow-hidden bg-green-50"
                            >

                                @if ($umkm->foto)

                                    <img
                                        src="{{ asset('storage/' . $umkm->foto) }}"
                                        alt="{{ $umkm->nama_usaha }}"
                                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                                    >

                                @else

                                    <div
                                        class="flex h-full items-center justify-center text-green-600"
                                    >

                                        <i
                                            data-lucide="store"
                                            class="h-12 w-12 sm:h-14 sm:w-14"
                                        ></i>

                                    </div>

                                @endif

                            </div>

                        </a>



                        {{-- CONTENT --}}

                        <div
                            class="flex flex-1 flex-col p-5"
                        >

                            <span
                                class="inline-flex w-fit rounded-full bg-green-50 px-3 py-1 text-xs font-semibold text-green-700"
                            >
                                {{ $umkm->kategori }}
                            </span>


                            <h3
                                class="mt-3 line-clamp-2 text-lg font-bold text-gray-900"
                            >
                                {{ $umkm->nama_usaha }}
                            </h3>


                            <p
                                class="mt-2 line-clamp-2 text-sm leading-6 text-gray-500"
                            >
                                {{ $umkm->deskripsi ?? 'Usaha masyarakat desa.' }}
                            </p>


                            <div
                                class="mt-auto pt-5"
                            >

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

                @empty

                    <div
                        class="col-span-full rounded-2xl border border-dashed border-gray-300 bg-white px-5 py-14 text-center sm:py-16"
                    >

                        <i
                            data-lucide="store"
                            class="mx-auto h-12 w-12 text-gray-300"
                        ></i>


                        <h3 class="mt-4 font-semibold text-gray-900">
                            Belum ada UMKM
                        </h3>


                        <p class="mt-1 text-sm text-gray-500">
                            Data UMKM desa akan tampil di sini.
                        </p>

                    </div>

                @endforelse

            </div>

        </div>

    </section>



    {{-- =====================================================
         WISATA & JASA
    ====================================================== --}}

    <section
        id="wisata"
        class="bg-white py-14 sm:py-20"
    >

        <div
            class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8"
        >


            {{-- HEADER --}}

            <div
                class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between"
            >

                <div>

                    <div
                        class="mb-3 inline-flex items-center gap-2 text-xs font-semibold text-green-700 sm:text-sm"
                    >

                        <i
                            data-lucide="map"
                            class="h-4 w-4"
                        ></i>

                        Jelajahi Potensi Desa

                    </div>


                    <h2
                        class="text-2xl font-bold text-gray-900 sm:text-3xl"
                    >
                        Wisata & Jasa
                    </h2>


                    <p
                        class="mt-2 text-sm text-gray-500 sm:text-base"
                    >
                        Temukan destinasi dan jasa masyarakat desa.
                    </p>

                </div>


                <a
                    href="{{ route('user.wisata.index') }}"
                    class="inline-flex w-fit items-center gap-2 text-sm font-semibold text-green-700"
                >

                    Lihat semua

                    <i
                        data-lucide="arrow-right"
                        class="h-4 w-4"
                    ></i>

                </a>

            </div>



            {{-- CARDS --}}

            <div
                class="mt-8 grid gap-5 sm:mt-10 sm:grid-cols-2 lg:grid-cols-3"
            >

                @forelse ($wisatas as $wisata)

                    <article
                        class="group flex h-full flex-col overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"
                    >


                        {{-- FOTO --}}

                        <a
                            href="{{ route('user.wisata.show', $wisata) }}"
                        >

                            <div
                                class="aspect-[16/10] overflow-hidden bg-green-50"
                            >

                                @if ($wisata->foto)

                                    <img
                                        src="{{ asset('storage/' . $wisata->foto) }}"
                                        alt="{{ $wisata->nama }}"
                                        class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                                    >

                                @else

                                    <div
                                        class="flex h-full items-center justify-center text-green-600"
                                    >

                                        <i
                                            data-lucide="map"
                                            class="h-12 w-12 sm:h-14 sm:w-14"
                                        ></i>

                                    </div>

                                @endif

                            </div>

                        </a>



                        {{-- CONTENT --}}

                        <div
                            class="flex flex-1 flex-col p-5"
                        >

                            <span
                                class="inline-flex w-fit rounded-full bg-green-50 px-3 py-1 text-xs font-semibold text-green-700"
                            >
                                {{ $wisata->kategori }}
                            </span>


                            <h3
                                class="mt-3 line-clamp-2 text-lg font-bold text-gray-900"
                            >
                                {{ $wisata->nama }}
                            </h3>


                            <p
                                class="mt-2 line-clamp-2 text-sm leading-6 text-gray-500"
                            >
                                {{ $wisata->deskripsi ?? 'Informasi wisata dan jasa desa.' }}
                            </p>


                            @if($wisata->alamat)

                                <div
                                    class="mt-4 flex items-center gap-2 text-sm text-gray-500"
                                >

                                    <i
                                        data-lucide="map-pin"
                                        class="h-4 w-4 shrink-0"
                                    ></i>

                                    <span class="line-clamp-1">
                                        {{ $wisata->alamat }}
                                    </span>

                                </div>

                            @endif


                            <div
                                class="mt-auto pt-5"
                            >

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

                @empty

                    <div
                        class="col-span-full rounded-2xl border border-dashed border-gray-300 bg-gray-50 px-5 py-14 text-center sm:py-16"
                    >

                        <i
                            data-lucide="map"
                            class="mx-auto h-12 w-12 text-gray-300"
                        ></i>


                        <h3 class="mt-4 font-semibold text-gray-900">
                            Belum ada wisata atau jasa
                        </h3>


                        <p class="mt-1 text-sm text-gray-500">
                            Data wisata dan jasa akan tampil di sini.
                        </p>

                    </div>

                @endforelse

            </div>

        </div>

    </section>



    {{-- =====================================================
         BERITA
    ====================================================== --}}

    <section
        id="berita"
        class="bg-gray-50 py-14 sm:py-20"
    >

        <div
            class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8"
        >

            <div
                class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between"
            >

                <div>

                    <div
                        class="mb-3 inline-flex items-center gap-2 text-xs font-semibold text-green-700 sm:text-sm"
                    >

                        <i
                            data-lucide="newspaper"
                            class="h-4 w-4"
                        ></i>

                        Informasi Desa

                    </div>


                    <h2
                        class="text-2xl font-bold text-gray-900 sm:text-3xl"
                    >
                        Berita Terbaru
                    </h2>


                    <p
                        class="mt-2 text-sm text-gray-500 sm:text-base"
                    >
                        Informasi dan kegiatan terbaru dari desa.
                    </p>

                </div>


                <a
                    href="{{ route('user.berita.index') }}"
                    class="inline-flex w-fit items-center gap-2 text-sm font-semibold text-green-700"
                >

                    Lihat semua

                    <i
                        data-lucide="arrow-right"
                        class="h-4 w-4"
                    ></i>

                </a>

            </div>



            <div class="mt-8">

                @if(isset($beritas) && $beritas->count() > 0)

                    <div
                        class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3"
                    >

                        @foreach($beritas as $berita)

                            <article
                                class="group overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-lg"
                            >

                                <a
                                    href="{{ route('user.berita.show', $berita) }}"
                                >

                                    <div
                                        class="aspect-[16/10] overflow-hidden bg-green-50"
                                    >

                                        @if($berita->foto)

                                            <img
                                                src="{{ asset('storage/' . $berita->foto) }}"
                                                alt="{{ $berita->judul }}"
                                                class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                                            >

                                        @else

                                            <div
                                                class="flex h-full items-center justify-center text-green-600"
                                            >

                                                <i
                                                    data-lucide="newspaper"
                                                    class="h-12 w-12"
                                                ></i>

                                            </div>

                                        @endif

                                    </div>


                                    <div class="p-5">

                                        @if($berita->kategori)

                                            <span
                                                class="inline-flex rounded-full bg-green-50 px-3 py-1 text-xs font-semibold text-green-700"
                                            >
                                                {{ $berita->kategori }}
                                            </span>

                                        @endif


                                        <h3
                                            class="mt-3 line-clamp-2 text-lg font-bold text-gray-900"
                                        >
                                            {{ $berita->judul }}
                                        </h3>


                                        <p
                                            class="mt-2 line-clamp-2 text-sm leading-6 text-gray-500"
                                        >
                                            {{ \Illuminate\Support\Str::limit(strip_tags($berita->isi), 120) }}
                                        </p>


                                        <div
                                            class="mt-4 flex items-center gap-2 text-sm font-semibold text-green-700"
                                        >

                                            Baca Selengkapnya

                                            <i
                                                data-lucide="arrow-right"
                                                class="h-4 w-4"
                                            ></i>

                                        </div>

                                    </div>

                                </a>

                            </article>

                        @endforeach

                    </div>

                @else

                    <div
                        class="rounded-2xl border border-dashed border-gray-300 bg-white px-5 py-14 text-center sm:py-16"
                    >

                        <i
                            data-lucide="newspaper"
                            class="mx-auto h-12 w-12 text-gray-300"
                        ></i>


                        <h3 class="mt-4 font-semibold text-gray-900">
                            Belum ada berita
                        </h3>


                        <p class="mt-1 text-sm text-gray-500">
                            Informasi berita desa akan tampil di sini.
                        </p>

                    </div>

                @endif

            </div>

        </div>

    </section>



    {{-- =====================================================
         CTA
    ====================================================== --}}

    <section class="bg-green-900 py-12 sm:py-16">

        <div
            class="mx-auto max-w-4xl px-4 text-center sm:px-6"
        >

            <div
                class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-white/10 text-green-300"
            >

                <i
                    data-lucide="heart-handshake"
                    class="h-7 w-7"
                ></i>

            </div>


            <h2
                class="mt-5 text-2xl font-bold text-white sm:text-4xl"
            >
                Mari Kenali Potensi Desa
            </h2>


            <p
                class="mx-auto mt-4 max-w-2xl text-sm leading-7 text-green-100 sm:text-base"
            >

                Dukung usaha masyarakat dan temukan berbagai
                potensi wisata yang ada di desa.

            </p>


            <div
                class="mt-7 flex flex-col justify-center gap-3 sm:flex-row"
            >

                <a
                    href="{{ route('user.umkm.index') }}"
                    class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-white px-6 py-3 text-sm font-semibold text-green-800 transition hover:bg-green-50 sm:w-auto"
                >

                    <i
                        data-lucide="store"
                        class="h-5 w-5"
                    ></i>

                    Lihat UMKM

                </a>


                <a
                    href="{{ route('user.wisata.index') }}"
                    class="inline-flex w-full items-center justify-center gap-2 rounded-xl border border-white/30 px-6 py-3 text-sm font-semibold text-white transition hover:bg-white/10 sm:w-auto"
                >

                    <i
                        data-lucide="map"
                        class="h-5 w-5"
                    ></i>

                    Jelajahi Wisata

                </a>

            </div>

        </div>

    </section>



    {{-- =====================================================
         FOOTER
    ====================================================== --}}

    <footer class="bg-gray-950 text-gray-300">

        <div
            class="mx-auto max-w-7xl px-4 py-10 sm:px-6 sm:py-12 lg:px-8"
        >

            <div
                class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 lg:gap-10"
            >


                {{-- BRAND --}}

                <div>

                    <div class="flex items-center gap-3">

                        <div
                            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-green-600 text-white"
                        >

                            <i
                                data-lucide="landmark"
                                class="h-5 w-5"
                            ></i>

                        </div>


                        <div>

                            <h3 class="font-bold text-white">
                                Desa Digital
                            </h3>

                            <p class="text-xs text-gray-500">
                                Portal Informasi Desa
                            </p>

                        </div>

                    </div>


                    <p
                        class="mt-5 max-w-sm text-sm leading-6 text-gray-400"
                    >

                        Platform informasi digital untuk
                        memperkenalkan potensi, kegiatan,
                        dan informasi desa.

                    </p>

                </div>



                {{-- NAVIGASI --}}

                <div>

                    <h3 class="font-semibold text-white">
                        Navigasi
                    </h3>


                    <div class="mt-4 space-y-3 text-sm">

                        <a
                            href="{{ route('home') }}"
                            class="block transition hover:text-white"
                        >
                            Beranda
                        </a>


                        <a
                            href="{{ route('user.profil') }}"
                            class="block transition hover:text-white"
                        >
                            Profil Desa
                        </a>


                        <a
                            href="{{ route('user.umkm.index') }}"
                            class="block transition hover:text-white"
                        >
                            UMKM
                        </a>


                        <a
                            href="{{ route('user.wisata.index') }}"
                            class="block transition hover:text-white"
                        >
                            Wisata & Jasa
                        </a>


                        <a
                            href="{{ route('user.berita.index') }}"
                            class="block transition hover:text-white"
                        >
                            Berita
                        </a>


                        <a
                            href="{{ route('user.galeri.index') }}"
                            class="block transition hover:text-white"
                        >
                            Galeri
                        </a>

                    </div>

                </div>



                {{-- INFORMASI --}}

                <div>

                    <h3 class="font-semibold text-white">
                        Informasi
                    </h3>


                    <div
                        class="mt-4 space-y-3 text-sm text-gray-400"
                    >

                        <p class="flex items-center gap-2">

                            <i
                                data-lucide="map-pin"
                                class="h-4 w-4 shrink-0"
                            ></i>

                            Desa Digital

                        </p>


                        <p class="flex items-center gap-2">

                            <i
                                data-lucide="phone"
                                class="h-4 w-4 shrink-0"
                            ></i>

                            Informasi Desa

                        </p>

                    </div>

                </div>

            </div>



            {{-- COPYRIGHT --}}

            <div
                class="mt-8 border-t border-gray-800 pt-6 text-center text-xs text-gray-500 sm:mt-10 sm:text-sm"
            >

                © {{ date('Y') }} Desa Digital.
                Seluruh hak cipta dilindungi.

            </div>

        </div>

    </footer>



    {{-- =====================================================
         JAVASCRIPT
    ====================================================== --}}

    <script>

        document.addEventListener('DOMContentLoaded', function () {

            // ================================================
            // LUCIDE ICON
            // ================================================

            if (window.lucide) {
                lucide.createIcons();
            }


            // ================================================
            // MOBILE MENU
            // ================================================

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


                    // Ganti icon menu / X

                    menuButton.innerHTML = isOpen
                        ? '<i data-lucide="x" class="h-5 w-5"></i>'
                        : '<i data-lucide="menu" class="h-5 w-5"></i>';


                    if (window.lucide) {
                        lucide.createIcons();
                    }

                });

            }

        });

    </script>


</body>
</html>