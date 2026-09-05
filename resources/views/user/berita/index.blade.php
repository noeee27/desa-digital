<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Berita Desa - {{ $profil?->nama_desa ?: 'Desa Digital' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

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
                        Informasi Desa
                    </p>
                </div>

            </a>


            {{-- DESKTOP NAV --}}
            <nav class="hidden items-center gap-1 lg:flex">

                <a
                    href="{{ route('home') }}"
                    class="rounded-lg px-4 py-2 text-sm font-medium text-gray-600 transition hover:bg-green-50 hover:text-green-700"
                >
                    Beranda
                </a>

                <a
                    href="{{ route('user.profil') }}"
                    class="rounded-lg px-4 py-2 text-sm font-medium text-gray-600 transition hover:bg-green-50 hover:text-green-700"
                >
                    Profil Desa
                </a>

                <a
                    href="{{ route('user.umkm.index') }}"
                    class="rounded-lg px-4 py-2 text-sm font-medium text-gray-600 transition hover:bg-green-50 hover:text-green-700"
                >
                    UMKM
                </a>

                <a
                    href="{{ route('user.wisata.index') }}"
                    class="rounded-lg px-4 py-2 text-sm font-medium text-gray-600 transition hover:bg-green-50 hover:text-green-700"
                >
                    Wisata & Jasa
                </a>

                {{-- ACTIVE --}}
                <a
                    href="{{ route('user.berita.index') }}"
                    class="rounded-lg bg-green-50 px-4 py-2 text-sm font-semibold text-green-700"
                >
                    Berita
                </a>

                <a
                    href="{{ route('user.galeri.index') }}"
                    class="rounded-lg px-4 py-2 text-sm font-medium text-gray-600 transition hover:bg-green-50 hover:text-green-700"
                >
                    Galeri
                </a>

            </nav>


            {{-- MOBILE MENU BUTTON --}}
            <button
                type="button"
                id="mobile-menu-button"
                class="flex h-10 w-10 items-center justify-center rounded-xl border border-gray-200 text-gray-700 transition hover:bg-gray-50 lg:hidden"
                aria-label="Buka menu"
            >

                <i data-lucide="menu" class="h-5 w-5"></i>

            </button>

        </div>


        {{-- MOBILE MENU --}}
        <div
            id="mobile-menu"
            class="hidden border-t border-gray-100 bg-white lg:hidden"
        >

            <nav class="mx-auto max-w-7xl space-y-1 px-4 py-4 sm:px-6">

                <a
                    href="{{ route('home') }}"
                    class="block rounded-xl px-4 py-3 text-sm font-medium text-gray-700 hover:bg-green-50 hover:text-green-700"
                >
                    Beranda
                </a>

                <a
                    href="{{ route('user.profil') }}"
                    class="block rounded-xl px-4 py-3 text-sm font-medium text-gray-700 hover:bg-green-50 hover:text-green-700"
                >
                    Profil Desa
                </a>

                <a
                    href="{{ route('user.umkm.index') }}"
                    class="block rounded-xl px-4 py-3 text-sm font-medium text-gray-700 hover:bg-green-50 hover:text-green-700"
                >
                    UMKM
                </a>

                <a
                    href="{{ route('user.wisata.index') }}"
                    class="block rounded-xl px-4 py-3 text-sm font-medium text-gray-700 hover:bg-green-50 hover:text-green-700"
                >
                    Wisata & Jasa
                </a>

                <a
                    href="{{ route('user.berita.index') }}"
                    class="block rounded-xl bg-green-50 px-4 py-3 text-sm font-semibold text-green-700"
                >
                    Berita
                </a>

               <a
                    href="{{ route('user.galeri.index') }}"
                    class="block rounded-xl px-4 py-3 text-sm font-medium text-gray-700 hover:bg-green-50 hover:text-green-700"
                >
                    Galeri
                </a>

            </nav>

        </div>

    </header>


    {{-- =====================================================
         HERO / PAGE HEADER
    ====================================================== --}}
    <section class="bg-green-900">

        <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 sm:py-16 lg:px-8">

            <div class="max-w-3xl">

                <div class="mb-4 inline-flex items-center gap-2 rounded-full bg-green-800 px-4 py-2 text-xs font-semibold text-green-100">

                    <i data-lucide="newspaper" class="h-4 w-4"></i>

                    INFORMASI DESA

                </div>


                <h2 class="text-3xl font-bold leading-tight text-white sm:text-4xl lg:text-5xl">
                    Berita Desa
                </h2>


                <p class="mt-4 max-w-2xl text-sm leading-7 text-green-100 sm:text-base">
                    Temukan berbagai berita, kegiatan, pengumuman, dan informasi terbaru seputar desa.
                </p>

            </div>

        </div>

    </section>


    {{-- =====================================================
         CONTENT
    ====================================================== --}}
    <main>

        <section class="mx-auto max-w-7xl px-4 py-10 sm:px-6 sm:py-14 lg:px-8">

            {{-- HEADER CONTENT --}}
            <div class="mb-8 flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">

                <div>

                    <p class="text-sm font-semibold text-green-700">
                        BERITA TERBARU
                    </p>

                    <h3 class="mt-1 text-2xl font-bold text-gray-900 sm:text-3xl">
                        Informasi Terkini
                    </h3>

                    <p class="mt-2 max-w-2xl text-sm leading-6 text-gray-500">
                        Simak perkembangan dan berbagai kegiatan terbaru yang berlangsung di desa.
                    </p>

                </div>


                <div class="text-sm text-gray-500">

                    <span class="font-semibold text-gray-900">
                        {{ $beritas->count() }}
                    </span>

                    berita tersedia

                </div>

            </div>


            {{-- =================================================
                 LIST BERITA
            ================================================== --}}
            @if($beritas->count() > 0)

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">

                    @foreach($beritas as $berita)

                        <article
                            class="group flex h-full flex-col overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"
                        >

                            {{-- FOTO --}}
                            <a href="{{ route('user.berita.show', $berita) }}">

                                <div class="relative aspect-[16/10] overflow-hidden bg-green-50">

                                    @if($berita->foto)

                                        <img
                                            src="{{ asset('storage/' . $berita->foto) }}"
                                            alt="{{ $berita->judul }}"
                                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                                        >

                                    @else

                                        <div class="flex h-full w-full items-center justify-center text-green-600">

                                            <div class="text-center">

                                                <i data-lucide="newspaper" class="mx-auto h-10 w-10"></i>

                                                <p class="mt-2 text-xs font-medium">
                                                    Tidak ada foto
                                                </p>

                                            </div>

                                        </div>

                                    @endif


                                    {{-- CATEGORY --}}
                                    @if($berita->kategori)

                                        <div class="absolute left-4 top-4">

                                            <span class="rounded-full bg-white/95 px-3 py-1.5 text-xs font-semibold text-green-700 shadow-sm">

                                                {{ $berita->kategori }}

                                            </span>

                                        </div>

                                    @endif

                                </div>

                            </a>


                            {{-- CONTENT --}}
                            <div class="flex flex-1 flex-col p-5 sm:p-6">

                                {{-- DATE --}}
                                <div class="flex items-center gap-2 text-xs text-gray-400">

                                    <i data-lucide="calendar-days" class="h-4 w-4"></i>

                                    {{ $berita->created_at?->format('d M Y') }}

                                </div>


                                {{-- TITLE --}}
                                <h4 class="mt-3 line-clamp-2 text-lg font-bold leading-7 text-gray-900 transition group-hover:text-green-700 sm:text-xl">

                                    {{ $berita->judul }}

                                </h4>


                                {{-- DESCRIPTION --}}
                                <p class="mt-3 line-clamp-3 text-sm leading-6 text-gray-500">

                                    {{ \Illuminate\Support\Str::limit(strip_tags($berita->isi), 130) }}

                                </p>


                                {{-- READ MORE --}}
                                <div class="mt-auto pt-5">

                                    <a
                                        href="{{ route('user.berita.show', $berita) }}"
                                        class="inline-flex items-center gap-2 text-sm font-semibold text-green-700 transition hover:text-green-800"
                                    >

                                        Baca Selengkapnya

                                        <i
                                            data-lucide="arrow-right"
                                            class="h-4 w-4 transition-transform group-hover:translate-x-1"
                                        ></i>

                                    </a>

                                </div>

                            </div>

                        </article>

                    @endforeach

                </div>

            @else

                {{-- EMPTY STATE --}}
                <div class="rounded-2xl border border-gray-200 bg-white px-6 py-16 text-center shadow-sm">

                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-green-50 text-green-600">

                        <i data-lucide="newspaper" class="h-8 w-8"></i>

                    </div>


                    <h3 class="mt-5 text-xl font-bold text-gray-900">
                        Belum Ada Berita
                    </h3>


                    <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-gray-500">
                        Saat ini belum ada berita yang dipublikasikan.
                        Silakan kembali lagi nanti untuk mendapatkan informasi terbaru.
                    </p>

                </div>

            @endif

        </section>

    </main>


    {{-- =====================================================
         FOOTER
    ====================================================== --}}
    <footer class="border-t border-gray-200 bg-white">

        <div class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">

            <div class="grid gap-8 md:grid-cols-3">


                {{-- BRAND --}}
                <div>

                    <div class="flex items-center gap-3">

                        <div
                            class="flex h-10 w-10 shrink-0 items-center justify-center overflow-hidden rounded-xl bg-green-600 text-white"
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

                           <h3 class="font-bold text-gray-900">
                                {{ $profil?->nama_desa ?: 'Desa Digital' }}
                            </h3>

                            <p class="text-xs text-gray-500">
                                Informasi Desa
                            </p>

                        </div>

                    </div>


                    <p class="mt-4 max-w-sm text-sm leading-6 text-gray-500">
                        Portal informasi digital desa untuk memberikan informasi
                        yang mudah diakses oleh seluruh masyarakat.
                    </p>

                </div>


                {{-- NAVIGATION --}}
                <div>

                    <h4 class="font-semibold text-gray-900">
                        Navigasi
                    </h4>

                    <div class="mt-4 space-y-2 text-sm">

                        <a
                            href="{{ route('home') }}"
                            class="block text-gray-500 hover:text-green-700"
                        >
                            Beranda
                        </a>

                        <a
                            href="{{ route('user.profil') }}"
                            class="block text-gray-500 hover:text-green-700"
                        >
                            Profil Desa
                        </a>

                        <a
                            href="{{ route('user.umkm.index') }}"
                            class="block text-gray-500 hover:text-green-700"
                        >
                            UMKM
                        </a>

                        <a
                            href="{{ route('user.wisata.index') }}"
                            class="block text-gray-500 hover:text-green-700"
                        >
                            Wisata & Jasa
                        </a>

                        <a
                            href="{{ route('user.berita.index') }}"
                            class="block font-medium text-green-700"
                        >
                            Berita
                        </a>

                    </div>

                </div>


                {{-- CONTACT --}}
                <div>

                    <h4 class="font-semibold text-gray-900">
                        Informasi
                    </h4>

                    <div class="mt-4 space-y-3 text-sm text-gray-500">

                        <div class="flex items-start gap-3">

                            <i data-lucide="map-pin" class="mt-0.5 h-4 w-4 shrink-0 text-green-700"></i>

                            <span>
                                Informasi alamat desa
                            </span>

                        </div>


                        <div class="flex items-start gap-3">

                            <i data-lucide="phone" class="mt-0.5 h-4 w-4 shrink-0 text-green-700"></i>

                            <span>
                                Informasi kontak desa
                            </span>

                        </div>

                    </div>

                </div>

            </div>


            <div class="mt-8 border-t border-gray-100 pt-6 text-center text-xs text-gray-400">

                © {{ date('Y') }} {{ $profil?->nama_desa ?: 'Desa Digital' }}. Semua hak dilindungi.

            </div>

        </div>

    </footer>


    {{-- =====================================================
         JAVASCRIPT
    ====================================================== --}}
    <script>

        document.addEventListener('DOMContentLoaded', function () {

            if (window.lucide) {
                lucide.createIcons();
            }


            const menuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            if (menuButton && mobileMenu) {

                menuButton.addEventListener('click', function () {

                    mobileMenu.classList.toggle('hidden');

                });

            }

        });

    </script>

</body>

</html>