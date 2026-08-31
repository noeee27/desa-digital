<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Berita - Desa Digital</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="bg-gray-50 text-gray-800">

    <div class="min-h-screen flex">


        {{-- =====================================================
            SIDEBAR
        ====================================================== --}}

        <aside class="hidden w-64 shrink-0 bg-green-900 text-white md:flex md:flex-col">


            {{-- =================================================
                LOGO
            ================================================== --}}

            <div class="flex h-20 items-center gap-3 border-b border-green-800 px-6">

                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-green-600">

                    <i
                        data-lucide="landmark"
                        class="h-5 w-5">
                    </i>

                </div>


                <div>

                    <h1 class="font-bold">
                        Desa Digital
                    </h1>

                    <p class="text-xs text-green-200">
                        Panel Administrasi
                    </p>

                </div>

            </div>



            {{-- =================================================
                NAVIGATION
            ================================================== --}}

            <nav class="flex-1 space-y-1 px-3 py-6">


                {{-- =================================================
                    DASHBOARD
                ================================================== --}}

                <a
                    href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-700"
                >

                    <i
                        data-lucide="layout-dashboard"
                        class="h-5 w-5">
                    </i>

                    <span>
                        Dashboard
                    </span>

                </a>



                {{-- =================================================
                    UMKM
                ================================================== --}}

                <a
                    href="{{ route('umkm.index') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-700"
                >

                    <i
                        data-lucide="store"
                        class="h-5 w-5">
                    </i>

                    <span>
                        UMKM
                    </span>

                </a>



                {{-- =================================================
                    WISATA & JASA
                ================================================== --}}

                <a
                    href="{{ route('wisata.index') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-700"
                >

                    <i
                        data-lucide="car-front"
                        class="h-5 w-5">
                    </i>

                    <span>
                        Wisata & Jasa
                    </span>

                </a>



                {{-- =================================================
                    BERITA ACTIVE
                ================================================== --}}

                <a
                    href="{{ route('berita.index') }}"
                    class="flex items-center gap-3 rounded-xl bg-green-600 px-4 py-3 text-sm font-medium text-white shadow-sm"
                >

                    <i
                        data-lucide="newspaper"
                        class="h-5 w-5">
                    </i>

                    <span>
                        Berita
                    </span>

                </a>



                {{-- =================================================
                    GALERI
                ================================================== --}}

                <a
                    href="{{ route('galeri.index') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-700"
                >

                    <i
                        data-lucide="images"
                        class="h-5 w-5">
                    </i>

                    <span>
                        Galeri
                    </span>

                </a>



                {{-- =================================================
                    PROFIL DESA
                ================================================== --}}

                <a
                    href="{{ route('user.profil') }}"
                    target="_blank"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-700"
                >

                    <i
                        data-lucide="building-2"
                        class="h-5 w-5">
                    </i>

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
                        class="flex w-full items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-700"
                    >

                        <i
                            data-lucide="log-out"
                            class="h-5 w-5">
                        </i>

                        <span>
                            Logout
                        </span>

                    </button>

                </form>

            </div>

        </aside>



        {{-- =====================================================
            MAIN CONTENT
        ====================================================== --}}

        <main class="min-w-0 flex-1">


            {{-- =================================================
                TOPBAR
            ================================================== --}}

            <header class="flex h-20 items-center justify-between border-b border-gray-200 bg-white px-6">

                <div>

                    <h2 class="text-xl font-bold text-gray-900">
                        Berita
                    </h2>

                    <p class="text-sm text-gray-500">
                        Kelola berita dan informasi desa.
                    </p>

                </div>



                {{-- ADMIN PROFILE --}}

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
                    PAGE HEADER
                ================================================== --}}

                <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

                    <div>

                        <h1 class="text-2xl font-bold text-gray-900">
                            Data Berita
                        </h1>

                        <p class="mt-1 text-sm text-gray-500">
                            Daftar berita dan informasi yang diterbitkan oleh desa.
                        </p>

                    </div>



                    {{-- TAMBAH BERITA --}}

                    <a
                        href="{{ route('berita.create') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-xl bg-green-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-green-700"
                    >

                        <i
                            data-lucide="plus"
                            class="h-5 w-5">
                        </i>

                        Tambah Berita

                    </a>

                </div>



                {{-- =================================================
                    SUCCESS MESSAGE
                ================================================== --}}

                @if (session('success'))

                    <div
                        class="mb-6 flex items-center gap-3 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700"
                    >

                        <i
                            data-lucide="circle-check"
                            class="h-5 w-5 shrink-0">
                        </i>

                        <span>
                            {{ session('success') }}
                        </span>

                    </div>

                @endif



                {{-- =================================================
                    BERITA TABLE
                ================================================== --}}

                <div
                    class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-200"
                >


                    {{-- TABLE HEADER --}}

                    <div class="border-b border-gray-200 px-6 py-5">

                        <div class="flex items-center gap-3">

                            <div
                                class="flex h-10 w-10 items-center justify-center rounded-xl bg-green-100 text-green-700"
                            >

                                <i
                                    data-lucide="newspaper"
                                    class="h-5 w-5">
                                </i>

                            </div>


                            <div>

                                <h2 class="font-semibold text-gray-900">
                                    Daftar Berita
                                </h2>

                                <p class="text-sm text-gray-500">
                                    {{ $beritas->count() }} berita terdaftar
                                </p>

                            </div>

                        </div>

                    </div>



                    {{-- =================================================
                        TABLE
                    ================================================== --}}

                    <div class="overflow-x-auto">

                        <table class="w-full min-w-[1000px] text-left text-sm">


                            {{-- TABLE HEAD --}}

                            <thead class="bg-gray-50">

                                <tr class="border-b border-gray-200">

                                    <th class="px-6 py-4 font-semibold text-gray-600">
                                        No
                                    </th>

                                    <th class="px-6 py-4 font-semibold text-gray-600">
                                        Berita
                                    </th>

                                    <th class="px-6 py-4 font-semibold text-gray-600">
                                        Kategori
                                    </th>

                                    <th class="px-6 py-4 font-semibold text-gray-600">
                                        Status
                                    </th>

                                    <th class="px-6 py-4 font-semibold text-gray-600">
                                        Tanggal
                                    </th>

                                    <th class="px-6 py-4 text-right font-semibold text-gray-600">
                                        Aksi
                                    </th>

                                </tr>

                            </thead>



                            {{-- =================================================
                                TABLE BODY
                            ================================================== --}}

                            <tbody class="divide-y divide-gray-100">


                                @forelse ($beritas as $berita)

                                    <tr class="transition hover:bg-gray-50">


                                        {{-- NO --}}

                                        <td class="px-6 py-4 text-gray-500">

                                            {{ $loop->iteration }}

                                        </td>



                                        {{-- BERITA --}}

                                        <td class="px-6 py-4">

                                            <div class="flex items-center gap-4">


                                                {{-- FOTO --}}

                                                <div
                                                    class="h-14 w-20 shrink-0 overflow-hidden rounded-xl bg-green-50"
                                                >

                                                    @if ($berita->foto)

                                                        <img
                                                            src="{{ asset('storage/' . $berita->foto) }}"
                                                            alt="{{ $berita->judul }}"
                                                            class="h-full w-full object-cover"
                                                        >

                                                    @else

                                                        <div
                                                            class="flex h-full w-full items-center justify-center text-green-600"
                                                        >

                                                            <i
                                                                data-lucide="newspaper"
                                                                class="h-6 w-6">
                                                            </i>

                                                        </div>

                                                    @endif

                                                </div>



                                                {{-- JUDUL --}}

                                                <div class="min-w-0">

                                                    <div
                                                        class="max-w-sm truncate font-semibold text-gray-900"
                                                    >
                                                        {{ $berita->judul }}
                                                    </div>


                                                    @if ($berita->slug)

                                                        <div
                                                            class="mt-1 max-w-sm truncate text-xs text-gray-500"
                                                        >
                                                            {{ $berita->slug }}
                                                        </div>

                                                    @endif

                                                </div>

                                            </div>

                                        </td>



                                        {{-- KATEGORI --}}

                                        <td class="px-6 py-4">

                                            @if ($berita->kategori)

                                                <span
                                                    class="rounded-lg bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700"
                                                >
                                                    {{ $berita->kategori }}
                                                </span>

                                            @else

                                                <span class="text-gray-400">
                                                    -
                                                </span>

                                            @endif

                                        </td>



                                        {{-- STATUS --}}

                                        <td class="px-6 py-4">

                                            @if ($berita->status === 'published')

                                                <span
                                                    class="inline-flex items-center gap-1.5 rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700"
                                                >

                                                    <span
                                                        class="h-1.5 w-1.5 rounded-full bg-green-600">
                                                    </span>

                                                    Published

                                                </span>

                                            @else

                                                <span
                                                    class="inline-flex items-center gap-1.5 rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-600"
                                                >

                                                    <span
                                                        class="h-1.5 w-1.5 rounded-full bg-gray-500">
                                                    </span>

                                                    Draft

                                                </span>

                                            @endif

                                        </td>



                                        {{-- TANGGAL --}}

                                        <td class="px-6 py-4 text-gray-600">

                                            {{ $berita->created_at?->format('d M Y') }}

                                        </td>



                                        {{-- AKSI --}}

                                        <td class="px-6 py-4">

                                            <div class="flex justify-end gap-1">


                                                {{-- DETAIL --}}

                                                <a
                                                    href="{{ route('berita.show', $berita) }}"
                                                    title="Detail"
                                                    class="rounded-lg p-2 text-gray-500 transition hover:bg-gray-100 hover:text-gray-700"
                                                >

                                                    <i
                                                        data-lucide="eye"
                                                        class="h-4 w-4">
                                                    </i>

                                                </a>



                                                {{-- EDIT --}}

                                                <a
                                                    href="{{ route('berita.edit', $berita) }}"
                                                    title="Edit"
                                                    class="rounded-lg p-2 text-gray-500 transition hover:bg-green-50 hover:text-green-700"
                                                >

                                                    <i
                                                        data-lucide="pencil"
                                                        class="h-4 w-4">
                                                    </i>

                                                </a>



                                                {{-- DELETE --}}

                                                <form
                                                    method="POST"
                                                    action="{{ route('berita.destroy', $berita) }}"
                                                    onsubmit="return confirm('Apakah kamu yakin ingin menghapus berita ini?')"
                                                >

                                                    @csrf

                                                    @method('DELETE')

                                                    <button
                                                        type="submit"
                                                        title="Hapus"
                                                        class="rounded-lg p-2 text-gray-500 transition hover:bg-red-50 hover:text-red-600"
                                                    >

                                                        <i
                                                            data-lucide="trash-2"
                                                            class="h-4 w-4">
                                                        </i>

                                                    </button>

                                                </form>

                                            </div>

                                        </td>

                                    </tr>


                                @empty


                                    {{-- =================================================
                                        EMPTY STATE
                                    ================================================== --}}

                                    <tr>

                                        <td
                                            colspan="6"
                                            class="px-6 py-16 text-center"
                                        >

                                            <div
                                                class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-green-50 text-green-600"
                                            >

                                                <i
                                                    data-lucide="newspaper"
                                                    class="h-8 w-8">
                                                </i>

                                            </div>


                                            <h3
                                                class="mt-5 text-lg font-semibold text-gray-900"
                                            >
                                                Belum ada berita
                                            </h3>


                                            <p
                                                class="mx-auto mt-2 max-w-md text-sm text-gray-500"
                                            >
                                                Belum ada berita yang ditambahkan.
                                                Silakan tambahkan berita pertama.
                                            </p>


                                            <a
                                                href="{{ route('berita.create') }}"
                                                class="mt-6 inline-flex items-center gap-2 rounded-xl bg-green-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-green-700"
                                            >

                                                <i
                                                    data-lucide="plus"
                                                    class="h-5 w-5">
                                                </i>

                                                Tambah Berita

                                            </a>

                                        </td>

                                    </tr>


                                @endforelse


                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </main>

    </div>



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