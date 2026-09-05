<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        {{ $profil?->nama_desa ?? 'Desa Digital' }} - Profil Desa
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://unpkg.com/lucide@latest"></script>
</head>


<body class="bg-white text-gray-800">


    {{-- =====================================================
         NAVBAR
    ====================================================== --}}

    <header class="sticky top-0 z-50 border-b border-gray-100 bg-white/95 backdrop-blur">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">


            {{-- =========================
                 HEADER UTAMA
            ========================== --}}

            <div class="flex h-20 items-center justify-between">


                {{-- LOGO --}}

                <a href="{{ route('home') }}" class="flex items-center gap-3">

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
                            {{ $profil?->nama_desa ?? 'Desa Digital' }}
                        </h1>

                        <p class="hidden text-xs text-gray-500 sm:block">
                            Portal Informasi Desa
                        </p>

                    </div>

                </a>



                {{-- =========================
                     NAVIGASI DESKTOP
                ========================== --}}

                <nav class="hidden items-center gap-1 lg:flex">


                    {{-- BERANDA --}}

                    <a
                        href="{{ route('home') }}"
                        class="rounded-lg px-3 py-2 text-sm font-medium text-gray-600 transition hover:bg-green-50 hover:text-green-700 xl:px-4"
                    >
                        Beranda
                    </a>



                    {{-- PROFIL DESA ACTIVE --}}

                    <a
                        href="{{ route('user.profil') }}"
                        class="rounded-lg bg-green-50 px-3 py-2 text-sm font-semibold text-green-700 xl:px-4"
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



                    {{-- WISATA & JASA --}}

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



                {{-- =========================
                     TOMBOL MOBILE
                ========================== --}}

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



            {{-- =========================
                 NAVIGASI MOBILE
            ========================== --}}

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



                    {{-- PROFIL DESA ACTIVE --}}

                    <a
                        href="{{ route('user.profil') }}"
                        class="flex items-center gap-3 rounded-xl bg-green-50 px-4 py-3 text-sm font-semibold text-green-700"
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



                    {{-- WISATA & JASA --}}

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



                    {{-- GALERI --}}

                    <a
                        href="{{ route('user.galeri.index') }}"
                        class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-gray-700 transition hover:bg-green-50 hover:text-green-700"
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
         HERO PROFIL
    ====================================================== --}}

    <section class="bg-gradient-to-br from-green-950 via-green-900 to-green-700">

        <div class="mx-auto max-w-7xl px-6 py-20 lg:px-8 lg:py-24">

            <div class="grid items-center gap-12 lg:grid-cols-2">


                {{-- TEXT --}}

                <div>

                    <div
                        class="mb-6 inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-2 text-sm font-semibold text-green-100 ring-1 ring-white/10"
                    >
                        <i
                            data-lucide="landmark"
                            class="h-4 w-4"
                        ></i>

                        Profil Desa
                    </div>



                    <h2 class="text-4xl font-bold leading-tight text-white md:text-5xl">

                        Mengenal Desa,

                        <span class="block text-green-300">
                            Mengenal Potensinya.
                        </span>

                    </h2>



                    <p class="mt-6 max-w-xl text-base leading-8 text-green-50/90 md:text-lg">

                        {{ $profil?->deskripsi
                            ? \Illuminate\Support\Str::limit(
                                strip_tags($profil->deskripsi),
                                220
                            )
                            : 'Desa Digital hadir sebagai pusat informasi mengenai profil, potensi, kegiatan, UMKM, wisata, dan berbagai layanan masyarakat desa.'
                        }}

                    </p>

                </div>



                {{-- ILLUSTRATION CARD --}}

                <div class="flex justify-center lg:justify-end">

                    <div
                        class="flex h-80 w-full max-w-md items-center justify-center rounded-3xl bg-white/10 p-4 ring-1 ring-white/20"
                    >

                        <div
                            class="flex h-full w-full flex-col items-center justify-center overflow-hidden rounded-2xl bg-green-50"
                        >

                            @if(!empty($profil?->foto))

                                <img
                                    src="{{ asset('storage/' . $profil->foto) }}"
                                    alt="{{ $profil?->nama_desa ?? 'Foto Desa' }}"
                                    class="h-full w-full object-cover"
                                >

                            @else

                                <div
                                    class="flex h-20 w-20 items-center justify-center rounded-2xl bg-white shadow-sm"
                                >

                                    <i
                                        data-lucide="landmark"
                                        class="h-10 w-10 text-green-600"
                                    ></i>

                                </div>


                                <h3 class="mt-6 text-2xl font-bold text-green-900">
                                    {{ $profil?->nama_desa ?? 'Desa Digital' }}
                                </h3>


                                <p class="mt-2 text-sm text-green-700">
                                    Satu pintu informasi desa
                                </p>

                            @endif

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- =====================================================
         TENTANG DESA
    ====================================================== --}}

    <section class="py-20">

        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="grid gap-12 lg:grid-cols-2 lg:items-center">


                {{-- HEADING --}}

                <div>

                    <span
                        class="text-sm font-bold uppercase tracking-wider text-green-600"
                    >
                        Tentang Desa
                    </span>


                    <h2 class="mt-3 text-3xl font-bold text-gray-900 md:text-4xl">
                        Mengenal Lebih Dekat
                        {{ $profil?->nama_desa ?? 'Desa Kami' }}
                    </h2>


                    @if(!empty($profil?->deskripsi))

                        <div
                            class="mt-5 whitespace-pre-line leading-8 text-gray-600"
                        >
                            {{ $profil->deskripsi }}
                        </div>

                    @else

                        <p class="mt-5 leading-8 text-gray-600">
                            Desa merupakan bagian penting dalam pembangunan
                            masyarakat dan pengembangan potensi lokal.
                            Melalui Desa Digital, berbagai informasi mengenai
                            desa dapat disajikan secara mudah dan terstruktur
                            kepada masyarakat maupun pengunjung.
                        </p>

                    @endif

                </div>



                {{-- CARDS --}}

                <div class="grid gap-5 sm:grid-cols-2">


                    {{-- MASYARAKAT --}}

                    <div
                        class="rounded-2xl border border-gray-100 bg-white p-6 shadow-sm"
                    >

                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-100"
                        >

                            <i
                                data-lucide="users"
                                class="h-6 w-6 text-green-600"
                            ></i>

                        </div>


                        <h3 class="mt-5 font-bold text-gray-900">
                            Masyarakat
                        </h3>


                        <p class="mt-2 text-sm leading-6 text-gray-500">
                            Mendukung akses informasi bagi masyarakat desa.
                        </p>

                    </div>



                    {{-- POTENSI DESA --}}

                    <div
                        class="rounded-2xl border border-gray-100 bg-white p-6 shadow-sm"
                    >

                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-100"
                        >

                            <i
                                data-lucide="sprout"
                                class="h-6 w-6 text-green-600"
                            ></i>

                        </div>


                        <h3 class="mt-5 font-bold text-gray-900">
                            Potensi Desa
                        </h3>


                        <p class="mt-2 text-sm leading-6 text-gray-500">
                            Memperkenalkan berbagai potensi lokal desa.
                        </p>

                    </div>



                    {{-- UMKM --}}

                    <div
                        class="rounded-2xl border border-gray-100 bg-white p-6 shadow-sm"
                    >

                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-100"
                        >

                            <i
                                data-lucide="store"
                                class="h-6 w-6 text-green-600"
                            ></i>

                        </div>


                        <h3 class="mt-5 font-bold text-gray-900">
                            UMKM
                        </h3>


                        <p class="mt-2 text-sm leading-6 text-gray-500">
                            Mendukung promosi usaha masyarakat desa.
                        </p>

                    </div>



                    {{-- WISATA --}}

                    <div
                        class="rounded-2xl border border-gray-100 bg-white p-6 shadow-sm"
                    >

                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-100"
                        >

                            <i
                                data-lucide="map"
                                class="h-6 w-6 text-green-600"
                            ></i>

                        </div>


                        <h3 class="mt-5 font-bold text-gray-900">
                            Wisata
                        </h3>


                        <p class="mt-2 text-sm leading-6 text-gray-500">
                            Mengenalkan destinasi dan jasa masyarakat.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- =====================================================
         VISI & MISI
    ====================================================== --}}

    <section class="bg-gray-50 py-20">

        <div class="mx-auto max-w-7xl px-6 lg:px-8">


            {{-- HEADING --}}

            <div class="mb-12 text-center">

                <span
                    class="text-sm font-bold uppercase tracking-wider text-green-600"
                >
                    Arah Pembangunan
                </span>


                <h2 class="mt-3 text-3xl font-bold text-gray-900">
                    Visi & Misi Desa
                </h2>


                <p class="mx-auto mt-4 max-w-2xl text-gray-500">
                    Landasan dalam mewujudkan desa yang berkembang,
                    mandiri, dan memiliki potensi yang berkelanjutan.
                </p>

            </div>



            <div class="grid gap-8 lg:grid-cols-2">


                {{-- =================================================
                     VISI
                ================================================== --}}

                <div
                    class="rounded-3xl bg-green-900 p-8 text-white shadow-sm"
                >

                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-xl bg-white/10"
                    >

                        <i
                            data-lucide="eye"
                            class="h-6 w-6 text-green-300"
                        ></i>

                    </div>


                    <h3 class="mt-6 text-2xl font-bold">
                        Visi
                    </h3>


                    <p
                        class="mt-4 whitespace-pre-line leading-8 text-green-50/90"
                    >
                        {{ $profil?->visi ?? 'Visi desa belum tersedia.' }}
                    </p>

                </div>



                {{-- =================================================
                     MISI
                ================================================== --}}

                <div
                    class="rounded-3xl bg-white p-8 shadow-sm ring-1 ring-gray-100"
                >

                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-100"
                    >

                        <i
                            data-lucide="target"
                            class="h-6 w-6 text-green-600"
                        ></i>

                    </div>


                    <h3 class="mt-6 text-2xl font-bold text-gray-900">
                        Misi
                    </h3>


                    @php

                        $daftarMisi = preg_split(
                            '/\r\n|\r|\n/',
                            $profil?->misi ?? ''
                        );

                    @endphp


                    <ul class="mt-5 space-y-4 text-gray-600">

                        @if(count(array_filter($daftarMisi)))

                            @foreach($daftarMisi as $misi)

                                @if(trim($misi) !== '')

                                    <li class="flex gap-3">

                                        <i
                                            data-lucide="check-circle-2"
                                            class="mt-1 h-5 w-5 shrink-0 text-green-600"
                                        ></i>


                                        <span>
                                            {{ trim($misi) }}
                                        </span>

                                    </li>

                                @endif

                            @endforeach

                        @else

                            <li class="flex gap-3">

                                <i
                                    data-lucide="check-circle-2"
                                    class="mt-1 h-5 w-5 shrink-0 text-green-600"
                                ></i>


                                <span>
                                    Misi desa belum tersedia.
                                </span>

                            </li>

                        @endif

                    </ul>

                </div>

            </div>

        </div>

    </section>



    {{-- =====================================================
         INFORMASI KONTAK
    ====================================================== --}}

    @if(
        !empty($profil?->alamat) ||
        !empty($profil?->telepon) ||
        !empty($profil?->email) ||
        !empty($profil?->website)
    )

        <section class="py-20">

            <div class="mx-auto max-w-7xl px-6 lg:px-8">

                <div class="mb-10 text-center">

                    <span
                        class="text-sm font-bold uppercase tracking-wider text-green-600"
                    >
                        Informasi Desa
                    </span>


                    <h2 class="mt-3 text-3xl font-bold text-gray-900">
                        Hubungi Kami
                    </h2>

                </div>



                <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">


                    {{-- ALAMAT --}}

                    @if(!empty($profil?->alamat))

                        <div
                            class="rounded-2xl border border-gray-100 bg-white p-6 shadow-sm"
                        >

                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-100"
                            >

                                <i
                                    data-lucide="map-pin"
                                    class="h-6 w-6 text-green-600"
                                ></i>

                            </div>


                            <h3 class="mt-5 font-bold text-gray-900">
                                Alamat
                            </h3>


                            <p class="mt-2 text-sm leading-6 text-gray-500">
                                {{ $profil->alamat }}
                            </p>

                        </div>

                    @endif



                    {{-- TELEPON --}}

                    @if(!empty($profil?->telepon))

                        <div
                            class="rounded-2xl border border-gray-100 bg-white p-6 shadow-sm"
                        >

                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-100"
                            >

                                <i
                                    data-lucide="phone"
                                    class="h-6 w-6 text-green-600"
                                ></i>

                            </div>


                            <h3 class="mt-5 font-bold text-gray-900">
                                Telepon
                            </h3>


                            <a
                                href="tel:{{ $profil->telepon }}"
                                class="mt-2 block text-sm leading-6 text-gray-500 hover:text-green-600"
                            >
                                {{ $profil->telepon }}
                            </a>

                        </div>

                    @endif



                    {{-- EMAIL --}}

                    @if(!empty($profil?->email))

                        <div
                            class="rounded-2xl border border-gray-100 bg-white p-6 shadow-sm"
                        >

                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-100"
                            >

                                <i
                                    data-lucide="mail"
                                    class="h-6 w-6 text-green-600"
                                ></i>

                            </div>


                            <h3 class="mt-5 font-bold text-gray-900">
                                Email
                            </h3>


                            <a
                                href="mailto:{{ $profil->email }}"
                                class="mt-2 block break-all text-sm leading-6 text-gray-500 hover:text-green-600"
                            >
                                {{ $profil->email }}
                            </a>

                        </div>

                    @endif



                    {{-- WEBSITE --}}

                    @if(!empty($profil?->website))

                        <div
                            class="rounded-2xl border border-gray-100 bg-white p-6 shadow-sm"
                        >

                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-100"
                            >

                                <i
                                    data-lucide="globe"
                                    class="h-6 w-6 text-green-600"
                                ></i>

                            </div>


                            <h3 class="mt-5 font-bold text-gray-900">
                                Website
                            </h3>


                            @php

                                $websiteUrl = $profil->website;

                                if (
                                    !str_starts_with(
                                        $websiteUrl,
                                        'http://'
                                    ) &&
                                    !str_starts_with(
                                        $websiteUrl,
                                        'https://'
                                    )
                                ) {
                                    $websiteUrl = 'https://' . $websiteUrl;
                                }

                            @endphp


                            <a
                                href="{{ $websiteUrl }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="mt-2 block break-all text-sm leading-6 text-gray-500 hover:text-green-600"
                            >
                                {{ $profil->website }}
                            </a>

                        </div>

                    @endif

                </div>

            </div>

        </section>

    @endif



    {{-- =====================================================
         FOOTER
    ====================================================== --}}

    <footer class="bg-green-950">

        <div class="mx-auto max-w-7xl px-6 py-10 lg:px-8">

            <div
                class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between"
            >


                <div>

                    <div class="flex items-center gap-3">

                        <div
                            class="flex h-10 w-10 items-center justify-center overflow-hidden rounded-xl bg-green-600"
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
                                    class="h-5 w-5 text-white"
                                ></i>
                            @endif
                        </div>


                        <div>

                            <h3 class="font-bold text-white">
                                {{ $profil?->nama_desa ?? 'Desa Digital' }}
                            </h3>


                            <p class="text-xs text-green-200">
                                Portal Informasi Desa
                            </p>

                        </div>

                    </div>

                </div>


                <p class="text-sm text-green-200">
                    © {{ date('Y') }}
                    {{ $profil?->nama_desa ?? 'Desa Digital' }}.
                    Semua hak dilindungi.
                </p>

            </div>

        </div>

    </footer>



    {{-- =====================================================
         LUCIDE + MOBILE MENU
    ====================================================== --}}

    <script>

        document.addEventListener('DOMContentLoaded', function () {


            // =========================
            // LUCIDE ICONS
            // =========================

            if (window.lucide) {

                lucide.createIcons();

            }



            // =========================
            // MOBILE MENU
            // =========================

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