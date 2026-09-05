<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kelola Galeri - Admin Desa Digital</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://unpkg.com/lucide@latest"></script>
</head>


<body class="bg-gray-100 text-gray-800">


    {{-- =====================================================
        SIDEBAR
    ====================================================== --}}

    <aside class="fixed inset-y-0 left-0 z-40 w-64 bg-green-900 text-white">


        {{-- LOGO --}}

        <div class="flex h-20 items-center gap-3 border-b border-green-800 px-6">

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

                <p class="text-xs text-green-200">
                    Admin Panel
                </p>

            </div>

        </div>



        {{-- =================================================
            NAVIGATION
        ================================================== --}}

        <nav class="space-y-1 p-4">


            {{-- DASHBOARD --}}

            <a
                href="{{ route('admin.dashboard') }}"
                class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm text-green-100 transition hover:bg-green-700"
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



            {{-- WISATA & JASA --}}

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



            {{-- BERITA --}}

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



            {{-- GALERI ACTIVE --}}

            <a
                href="{{ route('galeri.index') }}"
               class="flex items-center gap-3 rounded-xl bg-green-600 px-4 py-3 text-sm font-semibold text-white shadow-sm"
            >

                <i
                    data-lucide="images"
                    class="h-5 w-5"
                ></i>

                Galeri

            </a>



           {{-- PROFIL DESA --}}

            <a
                href="{{ route('admin.profil.index') }}"
                class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm text-green-100 transition hover:bg-green-900"
            >

                <i
                    data-lucide="building-2"
                    class="h-5 w-5"
                ></i>

                Profil Desa

            </a>

        </nav>



        {{-- =================================================
            LOGOUT
        ================================================== --}}

        <div class="absolute bottom-0 left-0 right-0 border-t border-green-800 p-4">

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


        {{-- =================================================
            TOPBAR
        ================================================== --}}

        <header class="flex h-20 items-center justify-between border-b border-gray-200 bg-white px-8">

            <div>

                <p class="text-sm text-gray-500">
                    Admin Panel
                </p>

                <h2 class="text-xl font-bold text-gray-900">
                    Kelola Galeri
                </h2>

            </div>


            {{-- TAMBAH FOTO --}}

            <a
                href="{{ route('galeri.create') }}"
                class="inline-flex items-center gap-2 rounded-xl bg-green-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-green-700"
            >

                <i
                    data-lucide="plus"
                    class="h-5 w-5"
                ></i>

                Tambah Foto

            </a>

        </header>



        {{-- =================================================
            CONTENT
        ================================================== --}}

        <div class="p-8">


            {{-- =================================================
                FLASH MESSAGE
            ================================================== --}}

            @if(session('success'))

                <div
                    class="mb-6 flex items-center gap-3 rounded-xl border border-green-200 bg-green-50 px-5 py-4 text-sm text-green-700"
                >

                    <i
                        data-lucide="check-circle"
                        class="h-5 w-5 shrink-0"
                    ></i>

                    <span>
                        {{ session('success') }}
                    </span>

                </div>

            @endif



            {{-- =================================================
                ERROR
            ================================================== --}}

            @if($errors->any())

                <div
                    class="mb-6 rounded-xl border border-red-200 bg-red-50 px-5 py-4"
                >

                    <div class="flex items-start gap-3">

                        <i
                            data-lucide="alert-circle"
                            class="mt-0.5 h-5 w-5 shrink-0 text-red-600"
                        ></i>

                        <div>

                            <p class="font-semibold text-red-700">
                                Terjadi kesalahan.
                            </p>

                            <ul class="mt-2 list-disc space-y-1 pl-5 text-sm text-red-600">

                                @foreach($errors->all() as $error)

                                    <li>
                                        {{ $error }}
                                    </li>

                                @endforeach

                            </ul>

                        </div>

                    </div>

                </div>

            @endif



            {{-- =================================================
                STATISTIK
            ================================================== --}}

            <div class="mb-8 grid grid-cols-3 gap-5">


                {{-- TOTAL --}}

                <div
                    class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm"
                >

                    <div class="flex items-center justify-between">

                        <div>

                            <p class="text-sm text-gray-500">
                                Total Foto
                            </p>

                            <p class="mt-2 text-3xl font-bold text-gray-900">
                                {{ $galeris->count() }}
                            </p>

                        </div>


                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-100 text-green-700"
                        >

                            <i
                                data-lucide="images"
                                class="h-6 w-6"
                            ></i>

                        </div>

                    </div>

                </div>



                {{-- PUBLISHED --}}

                <div
                    class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm"
                >

                    <div class="flex items-center justify-between">

                        <div>

                            <p class="text-sm text-gray-500">
                                Published
                            </p>

                            <p class="mt-2 text-3xl font-bold text-green-700">

                                {{ $galeris->where('status', 'published')->count() }}

                            </p>

                        </div>


                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-100 text-green-700"
                        >

                            <i
                                data-lucide="eye"
                                class="h-6 w-6"
                            ></i>

                        </div>

                    </div>

                </div>



                {{-- DRAFT --}}

                <div
                    class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm"
                >

                    <div class="flex items-center justify-between">

                        <div>

                            <p class="text-sm text-gray-500">
                                Draft
                            </p>

                            <p class="mt-2 text-3xl font-bold text-yellow-600">

                                {{ $galeris->where('status', 'draft')->count() }}

                            </p>

                        </div>


                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-xl bg-yellow-100 text-yellow-600"
                        >

                            <i
                                data-lucide="eye-off"
                                class="h-6 w-6"
                            ></i>

                        </div>

                    </div>

                </div>

            </div>



            {{-- =================================================
                TABLE
            ================================================== --}}

            <div
                class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm"
            >


                {{-- TABLE HEADER --}}

                <div
                    class="flex items-center justify-between border-b border-gray-200 px-6 py-5"
                >

                    <div>

                        <h3 class="font-bold text-gray-900">
                            Daftar Galeri
                        </h3>

                        <p class="mt-1 text-sm text-gray-500">
                            Kelola dokumentasi foto desa.
                        </p>

                    </div>

                </div>



                @if($galeris->count() > 0)


                    {{-- TABLE RESPONSIVE --}}

                    <div class="overflow-x-auto">

                        <table class="w-full text-left">


                            {{-- HEAD --}}

                            <thead class="bg-gray-50">

                                <tr>

                                    <th
                                        class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-gray-500"
                                    >
                                        Foto
                                    </th>

                                    <th
                                        class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-gray-500"
                                    >
                                        Judul
                                    </th>

                                    <th
                                        class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-gray-500"
                                    >
                                        Kategori
                                    </th>

                                    <th
                                        class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-gray-500"
                                    >
                                        Status
                                    </th>

                                    <th
                                        class="px-6 py-4 text-xs font-semibold uppercase tracking-wider text-gray-500"
                                    >
                                        Tanggal
                                    </th>

                                    <th
                                        class="px-6 py-4 text-right text-xs font-semibold uppercase tracking-wider text-gray-500"
                                    >
                                        Aksi
                                    </th>

                                </tr>

                            </thead>



                            {{-- BODY --}}

                            <tbody class="divide-y divide-gray-100">

                                @foreach($galeris as $galeri)

                                    <tr class="transition hover:bg-gray-50">


                                        {{-- FOTO --}}

                                        <td class="px-6 py-4">

                                            <div
                                                class="h-16 w-24 overflow-hidden rounded-xl bg-green-50"
                                            >

                                                @if($galeri->foto)

                                                    <img
                                                        src="{{ asset('storage/' . $galeri->foto) }}"
                                                        alt="{{ $galeri->judul }}"
                                                        class="h-full w-full object-cover"
                                                    >

                                                @else

                                                    <div
                                                        class="flex h-full items-center justify-center text-green-600"
                                                    >

                                                        <i
                                                            data-lucide="image"
                                                            class="h-6 w-6"
                                                        ></i>

                                                    </div>

                                                @endif

                                            </div>

                                        </td>



                                        {{-- JUDUL --}}

                                        <td class="px-6 py-4">

                                            <p class="font-semibold text-gray-900">
                                                {{ $galeri->judul }}
                                            </p>

                                            @if($galeri->deskripsi)

                                                <p
                                                    class="mt-1 max-w-xs truncate text-xs text-gray-500"
                                                >
                                                    {{ $galeri->deskripsi }}
                                                </p>

                                            @endif

                                        </td>



                                        {{-- KATEGORI --}}

                                        <td class="px-6 py-4">

                                            @if($galeri->kategori)

                                                <span
                                                    class="inline-flex rounded-full bg-green-50 px-3 py-1 text-xs font-semibold text-green-700"
                                                >
                                                    {{ $galeri->kategori }}
                                                </span>

                                            @else

                                                <span class="text-sm text-gray-400">
                                                    -
                                                </span>

                                            @endif

                                        </td>



                                        {{-- STATUS --}}

                                        <td class="px-6 py-4">

                                            @if($galeri->status === 'published')

                                                <span
                                                    class="inline-flex items-center gap-1.5 rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700"
                                                >

                                                    <span
                                                        class="h-1.5 w-1.5 rounded-full bg-green-600"
                                                    ></span>

                                                    Published

                                                </span>

                                            @else

                                                <span
                                                    class="inline-flex items-center gap-1.5 rounded-full bg-yellow-100 px-3 py-1 text-xs font-semibold text-yellow-700"
                                                >

                                                    <span
                                                        class="h-1.5 w-1.5 rounded-full bg-yellow-600"
                                                    ></span>

                                                    Draft

                                                </span>

                                            @endif

                                        </td>



                                        {{-- TANGGAL --}}

                                        <td class="px-6 py-4 text-sm text-gray-500">

                                            {{ $galeri->created_at->format('d M Y') }}

                                        </td>



                                        {{-- AKSI --}}

                                        <td class="px-6 py-4">

                                            <div
                                                class="flex items-center justify-end gap-2"
                                            >


                                                {{-- DETAIL --}}

                                                <a
                                                    href="{{ route('galeri.show', $galeri) }}"
                                                    title="Lihat detail"
                                                    class="flex h-9 w-9 items-center justify-center rounded-lg border border-gray-200 text-gray-600 transition hover:bg-gray-50 hover:text-green-700"
                                                >

                                                    <i
                                                        data-lucide="eye"
                                                        class="h-4 w-4"
                                                    ></i>

                                                </a>



                                                {{-- EDIT --}}

                                                <a
                                                    href="{{ route('galeri.edit', $galeri) }}"
                                                    title="Edit"
                                                    class="flex h-9 w-9 items-center justify-center rounded-lg border border-gray-200 text-gray-600 transition hover:bg-gray-50 hover:text-blue-600"
                                                >

                                                    <i
                                                        data-lucide="pencil"
                                                        class="h-4 w-4"
                                                    ></i>

                                                </a>



                                                {{-- HAPUS --}}

                                                <form
                                                    action="{{ route('galeri.destroy', $galeri) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Yakin ingin menghapus foto ini?')"
                                                >

                                                    @csrf

                                                    @method('DELETE')

                                                    <button
                                                        type="submit"
                                                        title="Hapus"
                                                        class="flex h-9 w-9 items-center justify-center rounded-lg border border-gray-200 text-gray-600 transition hover:bg-red-50 hover:text-red-600"
                                                    >

                                                        <i
                                                            data-lucide="trash-2"
                                                            class="h-4 w-4"
                                                        ></i>

                                                    </button>

                                                </form>


                                            </div>

                                        </td>

                                    </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>


                @else


                    {{-- =================================================
                        EMPTY STATE
                    ================================================== --}}

                    <div class="px-6 py-20 text-center">

                        <div
                            class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-green-50 text-green-600"
                        >

                            <i
                                data-lucide="images"
                                class="h-8 w-8"
                            ></i>

                        </div>


                        <h3 class="mt-5 text-lg font-bold text-gray-900">
                            Belum Ada Foto
                        </h3>


                        <p class="mx-auto mt-2 max-w-md text-sm text-gray-500">
                            Belum ada foto yang ditambahkan ke galeri.
                            Silakan tambahkan dokumentasi desa terlebih dahulu.
                        </p>


                        <a
                            href="{{ route('galeri.create') }}"
                            class="mt-6 inline-flex items-center gap-2 rounded-xl bg-green-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-green-700"
                        >

                            <i
                                data-lucide="plus"
                                class="h-5 w-5"
                            ></i>

                            Tambah Foto

                        </a>

                    </div>

                @endif

            </div>

        </div>

    </main>



    {{-- =====================================================
        LUCIDE
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