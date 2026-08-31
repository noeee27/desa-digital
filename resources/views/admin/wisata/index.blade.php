<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Wisata & Jasa - Desa Digital</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-800">

    <div class="min-h-screen flex">

        {{-- SIDEBAR --}}
        <aside class="hidden w-64 shrink-0 bg-green-900 text-white md:flex md:flex-col">

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


            {{-- NAVIGATION --}}
            <nav class="flex-1 space-y-1 px-3 py-6">

                {{-- DASHBOARD --}}
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
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
                >
                    <i data-lucide="store" class="h-5 w-5"></i>
                    <span>UMKM</span>
                </a>


                {{-- WISATA & JASA --}}
                <a
                    href="{{ route('wisata.index') }}"
                    class="flex items-center gap-3 rounded-xl bg-green-700 px-4 py-3 text-sm font-medium"
                >
                    <i data-lucide="car-front" class="h-5 w-5"></i>
                    <span>Wisata & Jasa</span>
                </a>


                {{-- BERITA --}}
                <a
                    href="{{ route('berita.index') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
                >
                    <i data-lucide="newspaper" class="h-5 w-5"></i>
                    <span>Berita</span>
                </a>


                {{-- GALERI --}}
                <a
                    href="{{ route('galeri.index') }}"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
                >
                    <i data-lucide="images" class="h-5 w-5"></i>
                    <span>Galeri</span>
                </a>


                {{-- PROFIL DESA --}}
                <a
                    href="{{ route('user.profil') }}"
                    target="_blank"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
                >
                    <i data-lucide="building-2" class="h-5 w-5"></i>
                    <span>Profil Desa</span>
                </a>

            </nav>


            {{-- LOGOUT --}}
            <div class="border-t border-green-800 p-4">

                <form method="POST" action="{{ route('admin.logout') }}">

                    @csrf

                    <button
                        type="submit"
                        class="flex w-full items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
                    >
                        <i data-lucide="log-out" class="h-5 w-5"></i>
                        Logout
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
                        Wisata & Jasa
                    </h2>

                    <p class="text-sm text-gray-500">
                        Kelola informasi wisata dan jasa masyarakat desa.
                    </p>

                </div>


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

                {{-- HEADER --}}
                <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

                    <div>

                        <h1 class="text-2xl font-bold text-gray-900">
                            Data Wisata & Jasa
                        </h1>

                        <p class="mt-1 text-sm text-gray-500">
                            Kelola informasi tempat wisata dan jasa masyarakat.
                        </p>

                    </div>


                    <a
                        href="{{ route('wisata.create') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-xl bg-green-700 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-green-800"
                    >
                        <i data-lucide="plus" class="h-4 w-4"></i>
                        Tambah Wisata & Jasa
                    </a>

                </div>


                {{-- SUCCESS MESSAGE --}}
                @if (session('success'))

                    <div class="mb-6 flex items-start gap-3 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-green-800">

                        <i data-lucide="circle-check" class="mt-0.5 h-5 w-5 shrink-0"></i>

                        <p class="text-sm font-medium">
                            {{ session('success') }}
                        </p>

                    </div>

                @endif


                {{-- STAT --}}
                <div class="mb-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">

                    <div class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-gray-200">

                        <div class="flex items-center justify-between">

                            <div>

                                <p class="text-sm text-gray-500">
                                    Total Data
                                </p>

                                <p class="mt-1 text-2xl font-bold text-gray-900">
                                    {{ $wisatas->count() }}
                                </p>

                            </div>


                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-green-100 text-green-700">

                                <i data-lucide="map" class="h-5 w-5"></i>

                            </div>

                        </div>

                    </div>


                    <div class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-gray-200">

                        <div class="flex items-center justify-between">

                            <div>

                                <p class="text-sm text-gray-500">
                                    Data Aktif
                                </p>

                                <p class="mt-1 text-2xl font-bold text-gray-900">
                                    {{ $wisatas->where('status', 'active')->count() }}
                                </p>

                            </div>


                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-green-100 text-green-700">

                                <i data-lucide="circle-check" class="h-5 w-5"></i>

                            </div>

                        </div>

                    </div>


                    <div class="rounded-2xl bg-white p-5 shadow-sm ring-1 ring-gray-200">

                        <div class="flex items-center justify-between">

                            <div>

                                <p class="text-sm text-gray-500">
                                    Data Nonaktif
                                </p>

                                <p class="mt-1 text-2xl font-bold text-gray-900">
                                    {{ $wisatas->where('status', 'inactive')->count() }}
                                </p>

                            </div>


                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gray-100 text-gray-600">

                                <i data-lucide="circle-off" class="h-5 w-5"></i>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- TABLE --}}
                <div class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-200">

                    <div class="overflow-x-auto">

                        <table class="w-full text-left text-sm">

                            <thead class="border-b border-gray-200 bg-gray-50">

                                <tr>

                                    <th class="px-6 py-4 font-semibold text-gray-700">
                                        Wisata / Jasa
                                    </th>

                                    <th class="px-6 py-4 font-semibold text-gray-700">
                                        Kategori
                                    </th>

                                    <th class="px-6 py-4 font-semibold text-gray-700">
                                        Lokasi
                                    </th>

                                    <th class="px-6 py-4 font-semibold text-gray-700">
                                        Kontak
                                    </th>

                                    <th class="px-6 py-4 font-semibold text-gray-700">
                                        Status
                                    </th>

                                    <th class="px-6 py-4 text-right font-semibold text-gray-700">
                                        Aksi
                                    </th>

                                </tr>

                            </thead>


                            <tbody class="divide-y divide-gray-100">

                                @forelse ($wisatas as $wisata)

                                    <tr class="transition hover:bg-gray-50">

                                        {{-- NAMA --}}
                                        <td class="px-6 py-4">

                                            <div class="flex items-center gap-3">

                                                @if ($wisata->foto)

                                                    <img
                                                        src="{{ asset('storage/' . $wisata->foto) }}"
                                                        alt="{{ $wisata->nama }}"
                                                        class="h-12 w-12 rounded-xl object-cover"
                                                    >

                                                @else

                                                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-100 text-green-700">

                                                        <i data-lucide="map" class="h-5 w-5"></i>

                                                    </div>

                                                @endif


                                                <div>

                                                    <p class="font-semibold text-gray-900">
                                                        {{ $wisata->nama }}
                                                    </p>

                                                    <p class="text-xs text-gray-500">
                                                        {{ Str::limit($wisata->deskripsi ?? 'Tidak ada deskripsi', 45) }}
                                                    </p>

                                                </div>

                                            </div>

                                        </td>


                                        {{-- KATEGORI --}}
                                        <td class="px-6 py-4">

                                            <span class="inline-flex rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">
                                                {{ $wisata->kategori }}
                                            </span>

                                        </td>


                                        {{-- LOKASI --}}
                                        <td class="px-6 py-4">

                                            <div class="flex items-center gap-2 text-gray-600">

                                                <i data-lucide="map-pin" class="h-4 w-4 shrink-0"></i>

                                                <span>
                                                    {{ $wisata->lokasi ?: '-' }}
                                                </span>

                                            </div>

                                        </td>


                                        {{-- KONTAK --}}
                                        <td class="px-6 py-4">

                                            @if ($wisata->whatsapp)

                                                <a
                                                    href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $wisata->whatsapp) }}"
                                                    target="_blank"
                                                    rel="noopener noreferrer"
                                                    class="inline-flex items-center gap-2 text-green-700 hover:text-green-800"
                                                >

                                                    <i data-lucide="message-circle" class="h-4 w-4"></i>

                                                    {{ $wisata->whatsapp }}

                                                </a>

                                            @elseif ($wisata->kontak)

                                                <a
                                                    href="tel:{{ $wisata->kontak }}"
                                                    class="inline-flex items-center gap-2 text-gray-700 hover:text-green-700"
                                                >

                                                    <i data-lucide="phone" class="h-4 w-4"></i>

                                                    {{ $wisata->kontak }}

                                                </a>

                                            @else

                                                <span class="text-gray-400">
                                                    -
                                                </span>

                                            @endif

                                        </td>


                                        {{-- STATUS --}}
                                        <td class="px-6 py-4">

                                            @if ($wisata->status === 'active')

                                                <span class="inline-flex items-center gap-2 rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">

                                                    <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>

                                                    Aktif

                                                </span>

                                            @else

                                                <span class="inline-flex items-center gap-2 rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-600">

                                                    <span class="h-1.5 w-1.5 rounded-full bg-gray-500"></span>

                                                    Nonaktif

                                                </span>

                                            @endif

                                        </td>


                                        {{-- AKSI --}}
                                        <td class="px-6 py-4">

                                            <div class="flex items-center justify-end gap-2">

                                                {{-- DETAIL --}}
                                                <a
                                                    href="{{ route('wisata.show', $wisata) }}"
                                                    title="Lihat detail"
                                                    class="flex h-9 w-9 items-center justify-center rounded-lg text-gray-500 transition hover:bg-green-50 hover:text-green-700"
                                                >
                                                    <i data-lucide="eye" class="h-4 w-4"></i>
                                                </a>


                                                {{-- EDIT --}}
                                                <a
                                                    href="{{ route('wisata.edit', $wisata) }}"
                                                    title="Edit"
                                                    class="flex h-9 w-9 items-center justify-center rounded-lg text-gray-500 transition hover:bg-blue-50 hover:text-blue-700"
                                                >
                                                    <i data-lucide="pencil" class="h-4 w-4"></i>
                                                </a>


                                                {{-- DELETE --}}
                                                <form
                                                    method="POST"
                                                    action="{{ route('wisata.destroy', $wisata) }}"
                                                    onsubmit="return confirm('Yakin ingin menghapus data ini?')"
                                                >

                                                    @csrf
                                                    @method('DELETE')

                                                    <button
                                                        type="submit"
                                                        title="Hapus"
                                                        class="flex h-9 w-9 items-center justify-center rounded-lg text-gray-500 transition hover:bg-red-50 hover:text-red-600"
                                                    >
                                                        <i data-lucide="trash-2" class="h-4 w-4"></i>
                                                    </button>

                                                </form>

                                            </div>

                                        </td>

                                    </tr>

                                @empty

                                    <tr>

                                        <td colspan="6" class="px-6 py-16 text-center">

                                            <div class="mx-auto flex max-w-sm flex-col items-center">

                                                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-green-50 text-green-600">

                                                    <i data-lucide="map" class="h-8 w-8"></i>

                                                </div>

                                                <h3 class="mt-4 text-base font-semibold text-gray-900">
                                                    Belum ada data wisata & jasa
                                                </h3>

                                                <p class="mt-1 text-sm text-gray-500">
                                                    Tambahkan informasi wisata atau jasa masyarakat desa.
                                                </p>

                                                <a
                                                    href="{{ route('wisata.create') }}"
                                                    class="mt-5 inline-flex items-center gap-2 rounded-xl bg-green-700 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-green-800"
                                                >
                                                    <i data-lucide="plus" class="h-4 w-4"></i>
                                                    Tambah Data
                                                </a>

                                            </div>

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