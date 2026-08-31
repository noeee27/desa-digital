<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>UMKM - Desa Digital</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-800">

    <div class="min-h-screen flex">

        {{-- SIDEBAR --}}
        <aside class="hidden w-64 shrink-0 bg-green-900 text-white md:flex md:flex-col">

            {{-- Logo --}}
            <div class="flex h-20 items-center gap-3 border-b border-green-800 px-6">

                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-green-600">
                    <i data-lucide="landmark" class="h-5 w-5"></i>
                </div>

                <div>
                    <h1 class="font-bold">
                        Desa Digital
                    </h1>

                    <p class="text-xs text-green-300">
                        Panel Administrasi
                    </p>
                </div>

            </div>


            {{-- Navigation --}}
            <nav class="flex-1 space-y-1 px-3 py-6">

                {{-- Dashboard --}}
                <a
                    href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
                >
                    <i data-lucide="layout-dashboard" class="h-5 w-5"></i>
                    <span>Dashboard</span>
                </a>


                {{-- UMKM --}}
                <a
                    href="{{ route('umkm.index') }}"
                    class="flex items-center gap-3 rounded-xl bg-green-700 px-4 py-3 text-sm font-medium"
                >
                    <i data-lucide="store" class="h-5 w-5"></i>
                    <span>UMKM</span>
                </a>


                {{-- Wisata & Jasa --}}
                <a
                    href="{{ route('wisata.index') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
                >
                    <i data-lucide="car-front" class="h-5 w-5"></i>
                    <span>Wisata & Jasa</span>
                </a>


                {{-- Berita --}}
                <a
                    href="{{ route('berita.index') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
                >
                    <i data-lucide="newspaper" class="h-5 w-5"></i>
                    <span>Berita</span>
                </a>


                {{-- Galeri --}}
                <a
                    href="{{ route('galeri.index') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
                >
                    <i data-lucide="images" class="h-5 w-5"></i>
                    <span>Galeri</span>
                </a>


                {{-- Profil Desa --}}
                <a
                    href="{{ route('user.profil') }}"
                    target="_blank"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
                >
                    <i data-lucide="building-2" class="h-5 w-5"></i>
                    <span>Profil Desa</span>
                </a>

            </nav>


            {{-- Logout --}}
            <div class="border-t border-green-800 p-4">

                <form method="POST" action="{{ route('admin.logout') }}">

                    @csrf

                    <button
                        type="submit"
                        class="flex w-full items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
                    >
                        <i data-lucide="log-out" class="h-5 w-5"></i>
                        <span>Logout</span>
                    </button>

                </form>

            </div>

        </aside>


        {{-- MAIN --}}
        <main class="min-w-0 flex-1">


            {{-- TOPBAR --}}
            <header class="flex h-20 items-center justify-between border-b border-gray-200 bg-white px-6">

                <div>

                    <h2 class="text-xl font-bold text-gray-900">
                        UMKM
                    </h2>

                    <p class="text-sm text-gray-500">
                        Kelola informasi usaha masyarakat desa.
                    </p>

                </div>


                {{-- Admin --}}
                <div class="flex items-center gap-3">

                    <div class="hidden text-right sm:block">

                        <p class="text-sm font-semibold text-gray-900">
                            {{ auth()->user()->name }}
                        </p>

                        <p class="text-xs text-gray-500">
                            Administrator
                        </p>

                    </div>


                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-green-100 font-semibold text-green-700">

                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                    </div>

                </div>

            </header>


            {{-- CONTENT --}}
            <div class="p-6">


                {{-- Page Header --}}
                <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

                    <div>

                        <h1 class="text-2xl font-bold text-gray-900">
                            Data UMKM
                        </h1>

                        <p class="mt-1 text-sm text-gray-500">
                            Daftar usaha masyarakat yang terdaftar di website desa.
                        </p>

                    </div>


                    {{-- Tombol Tambah --}}
                    <a
                        href="{{ route('umkm.create') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-xl bg-green-700 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-green-800"
                    >
                        <i data-lucide="plus" class="h-5 w-5"></i>

                        Tambah UMKM
                    </a>

                </div>


                {{-- Success Message --}}
                @if (session('success'))

                    <div class="mb-6 flex items-center gap-3 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">

                        <i data-lucide="circle-check" class="h-5 w-5 shrink-0"></i>

                        <span>
                            {{ session('success') }}
                        </span>

                    </div>

                @endif


                {{-- UMKM TABLE --}}
                <div class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-200">


                    {{-- Table Header --}}
                    <div class="border-b border-gray-200 px-6 py-5">

                        <div class="flex items-center gap-3">

                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-green-100 text-green-700">

                                <i data-lucide="store" class="h-5 w-5"></i>

                            </div>


                            <div>

                                <h2 class="font-semibold text-gray-900">
                                    Daftar UMKM
                                </h2>

                                <p class="text-sm text-gray-500">
                                    {{ $umkms->count() }} usaha terdaftar
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- Table --}}
                    <div class="overflow-x-auto">

                        <table class="w-full min-w-[900px] text-left text-sm">


                            {{-- Head --}}
                            <thead class="bg-gray-50">

                                <tr class="border-b border-gray-200">

                                    <th class="px-6 py-4 font-semibold text-gray-600">
                                        No
                                    </th>

                                    <th class="px-6 py-4 font-semibold text-gray-600">
                                        Nama Usaha
                                    </th>

                                    <th class="px-6 py-4 font-semibold text-gray-600">
                                        Kategori
                                    </th>

                                    <th class="px-6 py-4 font-semibold text-gray-600">
                                        Pemilik
                                    </th>

                                    <th class="px-6 py-4 font-semibold text-gray-600">
                                        No. HP
                                    </th>

                                    <th class="px-6 py-4 font-semibold text-gray-600">
                                        Status
                                    </th>

                                    <th class="px-6 py-4 text-right font-semibold text-gray-600">
                                        Aksi
                                    </th>

                                </tr>

                            </thead>


                            {{-- Body --}}
                            <tbody class="divide-y divide-gray-100">

                                @forelse ($umkms as $umkm)

                                    <tr class="transition hover:bg-gray-50">

                                        {{-- No --}}
                                        <td class="px-6 py-4 text-gray-500">
                                            {{ $loop->iteration }}
                                        </td>


                                        {{-- Nama --}}
                                        <td class="px-6 py-4">

                                            <div class="font-semibold text-gray-900">
                                                {{ $umkm->nama_usaha }}
                                            </div>

                                            @if ($umkm->alamat)

                                                <div class="mt-1 flex items-center gap-1 text-xs text-gray-500">

                                                    <i data-lucide="map-pin" class="h-3.5 w-3.5"></i>

                                                    {{ $umkm->alamat }}

                                                </div>

                                            @endif

                                        </td>


                                        {{-- Kategori --}}
                                        <td class="px-6 py-4">

                                            <span class="rounded-lg bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">
                                                {{ $umkm->kategori }}
                                            </span>

                                        </td>


                                        {{-- Pemilik --}}
                                        <td class="px-6 py-4 text-gray-600">
                                            {{ $umkm->nama_pemilik }}
                                        </td>


                                        {{-- HP --}}
                                        <td class="px-6 py-4 text-gray-600">
                                            {{ $umkm->no_hp }}
                                        </td>


                                        {{-- Status --}}
                                        <td class="px-6 py-4">

                                            @if ($umkm->status === 'active')

                                                <span class="inline-flex items-center gap-1.5 rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">

                                                    <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>

                                                    Aktif

                                                </span>

                                            @else

                                                <span class="inline-flex items-center gap-1.5 rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-600">

                                                    <span class="h-1.5 w-1.5 rounded-full bg-gray-500"></span>

                                                    Nonaktif

                                                </span>

                                            @endif

                                        </td>


                                        {{-- Actions --}}
                                        <td class="px-6 py-4">

                                            <div class="flex justify-end gap-1">


                                                {{-- Detail --}}
                                                <a
                                                    href="{{ route('umkm.show', $umkm) }}"
                                                    title="Detail"
                                                    class="rounded-lg p-2 text-gray-500 transition hover:bg-gray-100 hover:text-gray-700"
                                                >
                                                    <i data-lucide="eye" class="h-4 w-4"></i>
                                                </a>


                                                {{-- Edit --}}
                                                <a
                                                    href="{{ route('umkm.edit', $umkm) }}"
                                                    title="Edit"
                                                    class="rounded-lg p-2 text-gray-500 transition hover:bg-green-50 hover:text-green-700"
                                                >
                                                    <i data-lucide="pencil" class="h-4 w-4"></i>
                                                </a>


                                                {{-- Delete --}}
                                                <form
                                                    method="POST"
                                                    action="{{ route('umkm.destroy', $umkm) }}"
                                                    onsubmit="return confirm('Apakah kamu yakin ingin menghapus UMKM ini?')"
                                                >

                                                    @csrf

                                                    @method('DELETE')

                                                    <button
                                                        type="submit"
                                                        title="Hapus"
                                                        class="rounded-lg p-2 text-gray-500 transition hover:bg-red-50 hover:text-red-600"
                                                    >
                                                        <i data-lucide="trash-2" class="h-4 w-4"></i>
                                                    </button>

                                                </form>

                                            </div>

                                        </td>

                                    </tr>

                                @empty

                                    {{-- Empty State --}}
                                    <tr>

                                        <td
                                            colspan="7"
                                            class="px-6 py-16 text-center"
                                        >

                                            <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-green-50 text-green-600">

                                                <i data-lucide="store" class="h-8 w-8"></i>

                                            </div>


                                            <h3 class="mt-5 text-lg font-semibold text-gray-900">
                                                Belum ada UMKM
                                            </h3>


                                            <p class="mx-auto mt-2 max-w-md text-sm text-gray-500">
                                                Belum ada data usaha masyarakat yang ditambahkan.
                                                Silakan tambahkan data UMKM pertama.
                                            </p>


                                            <a
                                                href="{{ route('umkm.create') }}"
                                                class="mt-6 inline-flex items-center gap-2 rounded-xl bg-green-700 px-5 py-3 text-sm font-semibold text-white transition hover:bg-green-800"
                                            >

                                                <i data-lucide="plus" class="h-5 w-5"></i>

                                                Tambah UMKM

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

</body>

</html>