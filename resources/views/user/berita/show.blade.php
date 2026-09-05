<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $berita->judul }} - Desa Digital</title>

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

                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-green-700 text-white">
                    <i data-lucide="landmark" class="h-5 w-5"></i>
                </div>

                <div>
                    <h1 class="text-sm font-bold leading-tight text-gray-900 sm:text-base">
                        Desa Digital
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


            {{-- MOBILE BUTTON --}}
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
         BREADCRUMB
    ====================================================== --}}
    <div class="border-b border-gray-100 bg-white">

        <div class="mx-auto max-w-5xl px-4 py-4 sm:px-6 lg:px-8">

            <div class="flex items-center gap-2 text-sm">

                <a
                    href="{{ route('home') }}"
                    class="text-gray-500 transition hover:text-green-700"
                >
                    Beranda
                </a>

                <i data-lucide="chevron-right" class="h-4 w-4 text-gray-400"></i>

                <a
                    href="{{ route('user.berita.index') }}"
                    class="text-gray-500 transition hover:text-green-700"
                >
                    Berita
                </a>

                <i data-lucide="chevron-right" class="h-4 w-4 text-gray-400"></i>

                <span class="truncate font-medium text-gray-900">
                    Detail Berita
                </span>

            </div>

        </div>

    </div>


    {{-- =====================================================
         ARTICLE
    ====================================================== --}}
    <main>

        <article class="mx-auto max-w-5xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">

            {{-- CATEGORY --}}
            @if($berita->kategori)

                <div class="mb-4">

                    <span class="inline-flex items-center rounded-full bg-green-100 px-3 py-1.5 text-xs font-semibold text-green-700">

                        {{ $berita->kategori }}

                    </span>

                </div>

            @endif


            {{-- TITLE --}}
            <h1 class="max-w-4xl text-3xl font-bold leading-tight text-gray-900 sm:text-4xl lg:text-5xl">

                {{ $berita->judul }}

            </h1>


            {{-- DATE --}}
            <div class="mt-4 flex items-center gap-2 text-sm text-gray-500">

                <i data-lucide="calendar-days" class="h-4 w-4 text-green-700"></i>

                <span>
                    Dipublikasikan {{ $berita->created_at?->format('d F Y') }}
                </span>

            </div>


            {{-- FOTO UTAMA --}}
            @if($berita->foto)

                <div class="mt-8 overflow-hidden rounded-2xl bg-gray-100 shadow-sm">

                    <img
                        src="{{ asset('storage/' . $berita->foto) }}"
                        alt="{{ $berita->judul }}"
                        class="h-auto max-h-[600px] w-full object-cover"
                    >

                </div>

            @else

                <div class="mt-8 flex h-64 items-center justify-center rounded-2xl bg-green-50 text-green-600 sm:h-80">

                    <div class="text-center">

                        <i data-lucide="newspaper" class="mx-auto h-12 w-12"></i>

                        <p class="mt-3 text-sm font-medium">
                            Tidak ada foto berita
                        </p>

                    </div>

                </div>

            @endif


            {{-- ISI BERITA --}}
            <div class="mt-8 rounded-2xl border border-gray-200 bg-white p-5 shadow-sm sm:p-8 lg:p-10">

                <div class="prose prose-gray max-w-none text-sm leading-7 sm:text-base sm:leading-8">

                    {!! nl2br(e($berita->isi)) !!}

                </div>

            </div>


            {{-- BACK BUTTON --}}
            <div class="mt-8">

                <a
                    href="{{ route('user.berita.index') }}"
                    class="inline-flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-4 py-3 text-sm font-semibold text-gray-700 shadow-sm transition hover:border-green-200 hover:bg-green-50 hover:text-green-700"
                >

                    <i data-lucide="arrow-left" class="h-4 w-4"></i>

                    Kembali ke Berita

                </a>

            </div>

        </article>

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

                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-green-700 text-white">

                            <i data-lucide="landmark" class="h-5 w-5"></i>

                        </div>

                        <div>

                            <h3 class="font-bold text-gray-900">
                                Desa Digital
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


                {{-- INFORMATION --}}
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

                © {{ date('Y') }} Desa Digital. Semua hak dilindungi.

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