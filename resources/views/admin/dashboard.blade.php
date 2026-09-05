<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Admin - Desa Digital</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="bg-gray-50 text-gray-800">

    <div class="min-h-screen flex">


        {{-- =====================================================
            SIDEBAR
        ====================================================== --}}

        <aside class="hidden w-64 shrink-0 bg-green-900 text-white md:flex md:flex-col">


            {{-- LOGO --}}

            <div class="flex h-20 items-center gap-3 border-b border-green-800 px-6">

                <div
                    class="flex h-10 w-10 items-center justify-center rounded-xl bg-green-600"
                >
                    <i
                        data-lucide="landmark"
                        class="h-5 w-5"
                    ></i>
                </div>


                <div>

                    <h1 class="font-bold tracking-wide">
                        Desa Digital
                    </h1>

                    <p class="text-xs text-green-300">
                        Panel Administrasi
                    </p>

                </div>

            </div>



            {{-- =================================================
                NAVIGATION
            ================================================== --}}

            <nav class="flex-1 space-y-1 px-3 py-6">


                {{-- DASHBOARD --}}

                <a
                    href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-3 rounded-xl bg-green-700 px-4 py-3 text-sm font-medium"
                >

                    <i
                        data-lucide="layout-dashboard"
                        class="h-5 w-5"
                    ></i>

                    <span>
                        Dashboard
                    </span>

                </a>



                {{-- UMKM --}}

                <a
                    href="{{ route('umkm.index') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
                >

                    <i
                        data-lucide="store"
                        class="h-5 w-5"
                    ></i>

                    <span>
                        UMKM
                    </span>

                </a>



                {{-- WISATA & JASA --}}

                <a
                    href="{{ route('wisata.index') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
                >

                    <i
                        data-lucide="car-front"
                        class="h-5 w-5"
                    ></i>

                    <span>
                        Wisata & Jasa
                    </span>

                </a>



                {{-- BERITA --}}

                <a
                    href="{{ route('berita.index') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
                >

                    <i
                        data-lucide="newspaper"
                        class="h-5 w-5"
                    ></i>

                    <span>
                        Berita
                    </span>

                </a>



                {{-- GALERI --}}

                <a
                    href="{{ route('galeri.index') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
                >

                    <i
                        data-lucide="images"
                        class="h-5 w-5"
                    ></i>

                    <span>
                        Galeri
                    </span>

                </a>



                {{-- PROFIL DESA --}}

                <a
                    href="{{ route('admin.profil.index') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
                >

                    <i
                        data-lucide="building-2"
                        class="h-5 w-5"
                    ></i>

                    <span>
                        Profil Desa
                    </span>

                </a>


            </nav>



            {{-- =================================================
                LOGOUT
            ================================================== --}}

            <div class="border-t border-green-800 p-4">

                <form
                    method="POST"
                    action="{{ route('admin.logout') }}"
                >

                    @csrf

                    <button
                        type="submit"
                        class="flex w-full items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
                    >

                        <i
                            data-lucide="log-out"
                            class="h-5 w-5"
                        ></i>

                        <span>
                            Logout
                        </span>

                    </button>

                </form>

            </div>

        </aside>



        {{-- =====================================================
            MAIN
        ====================================================== --}}

        <main class="min-w-0 flex-1">


            {{-- =================================================
                TOPBAR
            ================================================== --}}

            <header
                class="flex h-20 items-center justify-between border-b border-gray-200 bg-white px-6"
            >

                <div>

                    <h2 class="text-xl font-bold text-gray-900">
                        Dashboard
                    </h2>

                    <p class="text-sm text-gray-500">
                        Kelola informasi dan potensi desa.
                    </p>

                </div>



                {{-- ADMIN --}}

                <div class="flex items-center gap-3">

                    <div class="hidden text-right sm:block">

                        <p class="text-sm font-semibold text-gray-900">
                            {{ auth()->user()->name }}
                        </p>

                        <p class="text-xs text-gray-500">
                            Administrator
                        </p>

                    </div>


                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-green-100 font-semibold text-green-700"
                    >

                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                    </div>

                </div>

            </header>



            {{-- =================================================
                CONTENT
            ================================================== --}}

            <div class="p-6">


                {{-- =================================================
                    WELCOME
                ================================================== --}}

                <section
                    class="mb-6 rounded-2xl bg-green-700 p-6 text-white shadow-sm"
                >

                    <div
                        class="flex items-start justify-between gap-4"
                    >

                        <div>

                            <h3 class="text-2xl font-bold">
                                Selamat datang, {{ auth()->user()->name }}
                            </h3>

                            <p
                                class="mt-2 max-w-2xl text-sm leading-6 text-green-100"
                            >
                                Kelola informasi desa, UMKM, layanan wisata,
                                berita, dan galeri dari satu tempat.
                            </p>

                        </div>


                        <div
                            class="hidden rounded-xl bg-green-600 p-3 sm:block"
                        >

                            <i
                                data-lucide="layout-dashboard"
                                class="h-6 w-6"
                            ></i>

                        </div>

                    </div>

                </section>



                {{-- =================================================
                    STATISTICS
                ================================================== --}}

                <section
                    class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4"
                >


                    {{-- UMKM --}}

                    <a
                        href="{{ route('umkm.index') }}"
                        class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-gray-200 transition hover:-translate-y-1 hover:shadow-md"
                    >

                        <div class="flex items-center justify-between">

                            <div>

                                <p class="text-sm text-gray-500">
                                    Total UMKM
                                </p>

                                <p
                                    class="mt-2 text-3xl font-bold text-gray-900"
                                >
                                    {{ \App\Models\Umkm::count() }}
                                </p>

                            </div>


                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-100 text-green-700"
                            >

                                <i
                                    data-lucide="store"
                                    class="h-6 w-6"
                                ></i>

                            </div>

                        </div>

                    </a>



                    {{-- WISATA --}}

                    <a
                        href="{{ route('wisata.index') }}"
                        class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-gray-200 transition hover:-translate-y-1 hover:shadow-md"
                    >

                        <div class="flex items-center justify-between">

                            <div>

                                <p class="text-sm text-gray-500">
                                    Layanan Wisata
                                </p>

                                <p
                                    class="mt-2 text-3xl font-bold text-gray-900"
                                >
                                    {{ \App\Models\Wisata::count() }}
                                </p>

                            </div>


                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-100 text-blue-700"
                            >

                                <i
                                    data-lucide="car-front"
                                    class="h-6 w-6"
                                ></i>

                            </div>

                        </div>

                    </a>



                    {{-- BERITA --}}

                    <a
                        href="{{ route('berita.index') }}"
                        class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-gray-200 transition hover:-translate-y-1 hover:shadow-md"
                    >

                        <div class="flex items-center justify-between">

                            <div>

                                <p class="text-sm text-gray-500">
                                    Total Berita
                                </p>

                                <p
                                    class="mt-2 text-3xl font-bold text-gray-900"
                                >
                                    {{ \App\Models\Berita::count() }}
                                </p>

                            </div>


                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-xl bg-yellow-100 text-yellow-700"
                            >

                                <i
                                    data-lucide="newspaper"
                                    class="h-6 w-6"
                                ></i>

                            </div>

                        </div>

                    </a>



                    {{-- GALERI --}}

                    <a
                        href="{{ route('galeri.index') }}"
                        class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-gray-200 transition hover:-translate-y-1 hover:shadow-md"
                    >

                        <div class="flex items-center justify-between">

                            <div>

                                <p class="text-sm text-gray-500">
                                    Foto Galeri
                                </p>

                                <p
                                    class="mt-2 text-3xl font-bold text-gray-900"
                                >
                                    {{ \App\Models\Galeri::count() }}
                                </p>

                            </div>


                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-xl bg-purple-100 text-purple-700"
                            >

                                <i
                                    data-lucide="images"
                                    class="h-6 w-6"
                                ></i>

                            </div>

                        </div>

                    </a>


                </section>



                {{-- =================================================
                    QUICK ACCESS
                ================================================== --}}

                <section class="mt-8">

                    <h3 class="mb-4 text-lg font-bold text-gray-900">
                        Akses Cepat
                    </h3>


                    <div
                        class="grid gap-5 md:grid-cols-2 xl:grid-cols-4"
                    >


                        {{-- UMKM --}}

                        <a
                            href="{{ route('umkm.index') }}"
                            class="group rounded-2xl bg-white p-6 shadow-sm ring-1 ring-gray-200 transition hover:-translate-y-1 hover:shadow-md"
                        >

                            <div
                                class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-green-100 text-green-700"
                            >

                                <i
                                    data-lucide="store"
                                    class="h-6 w-6"
                                ></i>

                            </div>


                            <h4 class="font-semibold text-gray-900">
                                Kelola UMKM
                            </h4>


                            <p
                                class="mt-1 text-sm leading-6 text-gray-500"
                            >
                                Kelola informasi Jeep, Kapal Kano,
                                dan Snorkeling.
                            </p>

                        </a>



                        {{-- WISATA --}}

                        <a
                            href="{{ route('wisata.index') }}"
                            class="group rounded-2xl bg-white p-6 shadow-sm ring-1 ring-gray-200 transition hover:-translate-y-1 hover:shadow-md"
                        >

                            <div
                                class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-100 text-blue-700"
                            >

                                <i
                                    data-lucide="car-front"
                                    class="h-6 w-6"
                                ></i>

                            </div>


                            <h4 class="font-semibold text-gray-900">
                                Kelola Wisata & Jasa
                            </h4>


                            <p
                                class="mt-1 text-sm leading-6 text-gray-500"
                            >
                                Kelola informasi jeep, tour guide,
                                dan layanan wisata.
                            </p>

                        </a>



                        {{-- BERITA --}}

                        <a
                            href="{{ route('berita.index') }}"
                            class="group rounded-2xl bg-white p-6 shadow-sm ring-1 ring-gray-200 transition hover:-translate-y-1 hover:shadow-md"
                        >

                            <div
                                class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-yellow-100 text-yellow-700"
                            >

                                <i
                                    data-lucide="newspaper"
                                    class="h-6 w-6"
                                ></i>

                            </div>


                            <h4 class="font-semibold text-gray-900">
                                Kelola Berita
                            </h4>


                            <p
                                class="mt-1 text-sm leading-6 text-gray-500"
                            >
                                Publikasikan informasi dan kegiatan
                                terbaru desa.
                            </p>

                        </a>



                        {{-- GALERI --}}

                        <a
                            href="{{ route('galeri.index') }}"
                            class="group rounded-2xl bg-white p-6 shadow-sm ring-1 ring-gray-200 transition hover:-translate-y-1 hover:shadow-md"
                        >

                            <div
                                class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-purple-100 text-purple-700"
                            >

                                <i
                                    data-lucide="images"
                                    class="h-6 w-6"
                                ></i>

                            </div>


                            <h4 class="font-semibold text-gray-900">
                                Kelola Galeri
                            </h4>


                            <p
                                class="mt-1 text-sm leading-6 text-gray-500"
                            >
                                Kelola dokumentasi foto dan kegiatan
                                desa.
                            </p>

                        </a>


                    </div>

                </section>



                {{-- =================================================
                    RECENT ACTIVITY
                ================================================== --}}

                <section
                    class="mt-8 rounded-2xl bg-white p-6 shadow-sm ring-1 ring-gray-200"
                >

                    <div>

                        <h3 class="font-bold text-gray-900">
                            Aktivitas Terbaru
                        </h3>

                        <p class="mt-1 text-sm text-gray-500">
                            Informasi terbaru yang dikelola admin.
                        </p>

                    </div>


                    <div
                        class="mt-6 rounded-xl border border-dashed border-gray-300 p-10 text-center"
                    >

                        <div
                            class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-gray-100 text-gray-500"
                        >

                            <i
                                data-lucide="clipboard-list"
                                class="h-6 w-6"
                            ></i>

                        </div>


                        <p class="mt-3 font-medium text-gray-700">
                            Belum ada aktivitas
                        </p>


                        <p class="mt-1 text-sm text-gray-500">
                            Aktivitas CMS akan muncul di sini.
                        </p>

                    </div>

                </section>


            </div>

        </main>

    </div>


    {{-- =====================================================
        LUCIDE ICON
    ====================================================== --}}

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }

        });
    </script>

</body>

</html>