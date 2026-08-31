<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $galeri->judul }} - Admin Desa Digital</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://unpkg.com/lucide@latest"></script>
</head>


<body class="bg-gray-100 text-gray-800">

    {{-- =====================================================
        SIDEBAR
    ====================================================== --}}

    <aside class="fixed inset-y-0 left-0 z-40 w-64 bg-green-950 text-white">

        {{-- LOGO --}}

        <div class="flex h-20 items-center gap-3 border-b border-green-900 px-6">

            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-green-600">

                <i
                    data-lucide="landmark"
                    class="h-5 w-5"
                ></i>

            </div>

            <div>

                <h1 class="font-bold">
                    Desa Digital
                </h1>

                <p class="text-xs text-green-300">
                    Admin Panel
                </p>

            </div>

        </div>


        {{-- MENU --}}

        <nav class="space-y-1 p-4">

            {{-- Dashboard --}}

            <a
                href="{{ route('admin.dashboard') }}"
                class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm text-green-100 transition hover:bg-green-900"
            >

                <i
                    data-lucide="layout-dashboard"
                    class="h-5 w-5"
                ></i>

                Dashboard

            </a>


            {{-- UMKM --}}

            <a
                href="{{ route('umkm.index') }}"
                class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm text-green-100 transition hover:bg-green-900"
            >

                <i
                    data-lucide="store"
                    class="h-5 w-5"
                ></i>

                UMKM

            </a>


            {{-- Wisata --}}

            <a
                href="{{ route('wisata.index') }}"
                class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm text-green-100 transition hover:bg-green-900"
            >

                <i
                    data-lucide="map"
                    class="h-5 w-5"
                ></i>

                Wisata & Jasa

            </a>


            {{-- Berita --}}

            <a
                href="{{ route('berita.index') }}"
                class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm text-green-100 transition hover:bg-green-900"
            >

                <i
                    data-lucide="newspaper"
                    class="h-5 w-5"
                ></i>

                Berita

            </a>


            {{-- Galeri Active --}}

            <a
                href="{{ route('galeri.index') }}"
                class="flex items-center gap-3 rounded-xl bg-green-700 px-4 py-3 text-sm font-semibold text-white"
            >

                <i
                    data-lucide="images"
                    class="h-5 w-5"
                ></i>

                Galeri

            </a>

        </nav>


        {{-- LOGOUT --}}

        <div class="absolute bottom-0 left-0 right-0 border-t border-green-900 p-4">

            <form
                action="{{ route('admin.logout') }}"
                method="POST"
            >

                @csrf

                <button
                    type="submit"
                    class="flex w-full items-center gap-3 rounded-xl px-4 py-3 text-sm text-green-100 transition hover:bg-green-900"
                >

                    <i
                        data-lucide="log-out"
                        class="h-5 w-5"
                    ></i>

                    Keluar

                </button>

            </form>

        </div>

    </aside>



    {{-- =====================================================
        MAIN CONTENT
    ====================================================== --}}

    <main class="ml-64 min-h-screen">

        {{-- TOPBAR --}}

        <header class="flex h-20 items-center justify-between border-b border-gray-200 bg-white px-8">

            <div>

                <p class="text-sm text-gray-500">
                    Admin Panel
                </p>

                <h2 class="text-xl font-bold text-gray-900">
                    Detail Galeri
                </h2>

            </div>


            <a
                href="{{ route('galeri.index') }}"
                class="inline-flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-5 py-3 text-sm font-semibold text-gray-700 transition hover:bg-gray-50"
            >

                <i
                    data-lucide="arrow-left"
                    class="h-5 w-5"
                ></i>

                Kembali

            </a>

        </header>



        {{-- CONTENT --}}

        <div class="p-8">

            <div class="mx-auto max-w-5xl">


                {{-- FLASH MESSAGE --}}

                @if(session('success'))

                    <div class="mb-6 flex items-center gap-3 rounded-xl border border-green-200 bg-green-50 px-5 py-4 text-sm text-green-700">

                        <i
                            data-lucide="check-circle"
                            class="h-5 w-5"
                        ></i>

                        {{ session('success') }}

                    </div>

                @endif



                {{-- DETAIL CARD --}}

                <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm">


                    {{-- FOTO --}}

                    <div class="bg-gray-100 p-6">

                        <div class="mx-auto max-h-[550px] max-w-4xl overflow-hidden rounded-2xl bg-white shadow-sm">

                            @if($galeri->foto)

                                <img
                                    src="{{ asset('storage/' . $galeri->foto) }}"
                                    alt="{{ $galeri->judul }}"
                                    class="mx-auto max-h-[550px] w-full object-contain"
                                >

                            @else

                                <div class="flex h-96 items-center justify-center">

                                    <div class="text-center">

                                        <i
                                            data-lucide="image-off"
                                            class="mx-auto h-12 w-12 text-gray-400"
                                        ></i>

                                        <p class="mt-3 text-sm text-gray-500">
                                            Foto tidak tersedia
                                        </p>

                                    </div>

                                </div>

                            @endif

                        </div>

                    </div>



                    {{-- INFORMASI --}}

                    <div class="p-8">

                        <div class="flex items-start justify-between gap-6">


                            {{-- INFO KIRI --}}

                            <div class="min-w-0">

                                @if($galeri->kategori)

                                    <span class="inline-flex rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">

                                        {{ $galeri->kategori }}

                                    </span>

                                @endif


                                <h1 class="mt-4 text-3xl font-bold text-gray-900">

                                    {{ $galeri->judul }}

                                </h1>


                                @if($galeri->deskripsi)

                                    <p class="mt-4 whitespace-pre-line leading-7 text-gray-600">

                                        {{ $galeri->deskripsi }}

                                    </p>

                                @else

                                    <p class="mt-4 text-sm italic text-gray-400">

                                        Tidak ada deskripsi.

                                    </p>

                                @endif

                            </div>



                            {{-- STATUS --}}

                            <div class="shrink-0">

                                @if($galeri->status === 'published')

                                    <span class="inline-flex items-center gap-2 rounded-full bg-green-100 px-4 py-2 text-xs font-semibold text-green-700">

                                        <span class="h-2 w-2 rounded-full bg-green-600"></span>

                                        Published

                                    </span>

                                @else

                                    <span class="inline-flex items-center gap-2 rounded-full bg-yellow-100 px-4 py-2 text-xs font-semibold text-yellow-700">

                                        <span class="h-2 w-2 rounded-full bg-yellow-600"></span>

                                        Draft

                                    </span>

                                @endif

                            </div>

                        </div>



                        {{-- META --}}

                        <div class="mt-8 grid grid-cols-2 gap-4 border-t border-gray-100 pt-6">


                            <div>

                                <p class="text-xs font-semibold uppercase tracking-wide text-gray-400">
                                    Ditambahkan
                                </p>

                                <p class="mt-1 text-sm font-medium text-gray-700">

                                    {{ $galeri->created_at->format('d F Y, H:i') }}

                                </p>

                            </div>


                            <div>

                                <p class="text-xs font-semibold uppercase tracking-wide text-gray-400">
                                    Terakhir diperbarui
                                </p>

                                <p class="mt-1 text-sm font-medium text-gray-700">

                                    {{ $galeri->updated_at->format('d F Y, H:i') }}

                                </p>

                            </div>

                        </div>



                        {{-- ACTION --}}

                        <div class="mt-8 flex items-center justify-end gap-3 border-t border-gray-100 pt-6">


                            {{-- KEMBALI --}}

                            <a
                                href="{{ route('galeri.index') }}"
                                class="inline-flex items-center gap-2 rounded-xl border border-gray-200 px-5 py-3 text-sm font-semibold text-gray-700 transition hover:bg-gray-50"
                            >

                                <i
                                    data-lucide="arrow-left"
                                    class="h-4 w-4"
                                ></i>

                                Kembali

                            </a>


                            {{-- EDIT --}}

                            <a
                                href="{{ route('galeri.edit', $galeri) }}"
                                class="inline-flex items-center gap-2 rounded-xl bg-green-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-green-700"
                            >

                                <i
                                    data-lucide="pencil"
                                    class="h-4 w-4"
                                ></i>

                                Edit Foto

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>



    {{-- =====================================================
        SCRIPT
    ====================================================== --}}

    <script>

        document.addEventListener('DOMContentLoaded', function () {

            if (window.lucide) {

                lucide.createIcons();

            }

        });

    </script>

</body>

</html>