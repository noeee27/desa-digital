<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $beritum->judul }} - Desa Digital</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="bg-gray-50 text-gray-900">

<div class="min-h-screen flex">

    {{-- =========================
         SIDEBAR
    ========================== --}}
    <aside class="w-64 bg-green-900 text-white flex flex-col fixed inset-y-0 left-0">

        {{-- Logo --}}
        <div class="px-6 py-5 border-b border-green-800">

            <div class="flex items-center gap-3">

                <div class="w-11 h-11 bg-green-500 rounded-xl flex items-center justify-center">
                    <i data-lucide="landmark" class="w-6 h-6"></i>
                </div>

                <div>
                    <h1 class="font-bold text-lg">
                        Desa Digital
                    </h1>

                    <p class="text-xs text-green-200">
                        Panel Administrasi
                    </p>
                </div>

            </div>

        </div>


        {{-- Navigation --}}
        <nav class="flex-1 px-3 py-5 space-y-1">

            <a href="{{ route('admin.dashboard') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-green-800 transition">

                <i data-lucide="layout-dashboard" class="w-5 h-5"></i>

                <span>Dashboard</span>

            </a>


            <a href="{{ route('umkm.index') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-green-800 transition">

                <i data-lucide="store" class="w-5 h-5"></i>

                <span>UMKM</span>

            </a>


            <a href="{{ route('wisata.index') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-green-800 transition">

                <i data-lucide="map" class="w-5 h-5"></i>

                <span>Wisata & Jasa</span>

            </a>


            <a href="{{ route('berita.index') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-lg bg-green-700">

                <i data-lucide="newspaper" class="w-5 h-5"></i>

                <span>Berita</span>

            </a>


            <a href="#"
               class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-green-800 transition">

                <i data-lucide="image" class="w-5 h-5"></i>

                <span>Galeri</span>

            </a>


            <a href="#"
               class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-green-800 transition">

                <i data-lucide="building-2" class="w-5 h-5"></i>

                <span>Profil Desa</span>

            </a>

        </nav>


        {{-- Logout --}}
        <div class="px-3 py-4 border-t border-green-800">

            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf

                <button
                    type="submit"
                    class="w-full flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-green-800 transition text-left">

                    <i data-lucide="log-out" class="w-5 h-5"></i>

                    <span>Logout</span>

                </button>

            </form>

        </div>

    </aside>


    {{-- =========================
         MAIN CONTENT
    ========================== --}}
    <main class="ml-64 flex-1 min-h-screen">


        {{-- =========================
             HEADER
        ========================== --}}
        <header class="bg-white border-b border-gray-200 px-8 py-5">

            <div class="flex items-center justify-between">

                <div>

                    <h1 class="text-2xl font-bold">
                        Berita
                    </h1>

                    <p class="text-sm text-gray-500 mt-1">
                        Detail informasi berita desa.
                    </p>

                </div>


                <div class="flex items-center gap-3">

                    <div class="text-right">

                        <p class="font-medium text-sm">
                            Administrator Desa
                        </p>

                        <p class="text-xs text-gray-500">
                            Administrator
                        </p>

                    </div>


                    <div class="w-11 h-11 bg-green-100 text-green-700 rounded-full flex items-center justify-center font-semibold">
                        A
                    </div>

                </div>

            </div>

        </header>


        {{-- =========================
             CONTENT
        ========================== --}}
        <div class="p-8">


            {{-- Breadcrumb --}}
            <div class="flex items-center gap-2 text-sm text-gray-500 mb-6">

                <a href="{{ route('berita.index') }}"
                   class="hover:text-green-700">

                    Berita

                </a>

                <i data-lucide="chevron-right" class="w-4 h-4"></i>

                <span class="text-gray-900 font-medium">
                    Detail Berita
                </span>

            </div>


            {{-- Title & Action --}}
            <div class="flex items-center justify-between mb-6">

                <div class="flex items-center gap-4">

                    <div class="w-14 h-14 bg-green-100 text-green-600 rounded-xl flex items-center justify-center">

                        <i data-lucide="newspaper" class="w-7 h-7"></i>

                    </div>

                    <div>

                        <h2 class="text-3xl font-bold">
                            {{ $beritum->judul }}
                        </h2>

                        <p class="text-gray-500 mt-1">
                            Detail informasi berita desa.
                        </p>

                    </div>

                </div>


                <a href="{{ route('berita.edit', $beritum) }}"
                   class="inline-flex items-center gap-2 bg-green-700 hover:bg-green-800 text-white px-5 py-3 rounded-xl font-medium transition">

                    <i data-lucide="pencil" class="w-5 h-5"></i>

                    Edit Berita

                </a>

            </div>


            {{-- Success Message --}}
            @if(session('success'))

                <div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-5 py-4 rounded-xl flex items-center gap-3">

                    <i data-lucide="circle-check" class="w-5 h-5"></i>

                    <span>
                        {{ session('success') }}
                    </span>

                </div>

            @endif


            {{-- =========================
                 BERITA CARD
            ========================== --}}
            <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm">

                {{-- Foto --}}
                @if($beritum->foto)

                    <div class="w-full bg-gray-100">

                        <img
                            src="{{ asset('storage/' . $beritum->foto) }}"
                            alt="{{ $beritum->judul }}"
                            class="w-full max-h-[500px] object-cover">

                    </div>

                @else

                    <div class="w-full h-64 bg-green-50 flex flex-col items-center justify-center text-green-600">

                        <i data-lucide="image-off" class="w-14 h-14 mb-3"></i>

                        <p class="font-medium">
                            Belum ada foto berita
                        </p>

                    </div>

                @endif


                {{-- Informasi --}}
                <div class="p-8">

                    {{-- Kategori + Status --}}
                    <div class="flex items-center gap-3 mb-5">

                        <span class="px-3 py-1.5 rounded-full bg-gray-100 text-gray-700 text-sm font-medium">

                            {{ $beritum->kategori }}

                        </span>


                        @if($beritum->status === 'published')

                            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-green-100 text-green-700 text-sm font-medium">

                                <span class="w-2 h-2 bg-green-500 rounded-full"></span>

                                Published

                            </span>

                        @else

                            <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-gray-100 text-gray-600 text-sm font-medium">

                                <span class="w-2 h-2 bg-gray-400 rounded-full"></span>

                                Draft

                            </span>

                        @endif

                    </div>


                    {{-- Judul --}}
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">
                        {{ $beritum->judul }}
                    </h3>


                    {{-- Slug --}}
                    <p class="text-sm text-gray-500 mb-6">
                        Slug:
                        <span class="font-medium text-gray-700">
                            {{ $beritum->slug }}
                        </span>
                    </p>


                    {{-- Isi Berita --}}
                    <div class="border-t border-gray-200 pt-6">

                        <h4 class="text-lg font-semibold mb-4">
                            Isi Berita
                        </h4>

                        <div class="text-gray-700 leading-8 whitespace-pre-line">
                            {{ $beritum->isi }}
                        </div>

                    </div>


                    {{-- Informasi Tanggal --}}
                    <div class="border-t border-gray-200 mt-8 pt-6">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                            <div>

                                <p class="text-sm text-gray-500 mb-1">
                                    Dibuat
                                </p>

                                <p class="font-medium text-gray-900">
                                    {{ $beritum->created_at?->format('d F Y, H:i') }}
                                </p>

                            </div>


                            <div>

                                <p class="text-sm text-gray-500 mb-1">
                                    Terakhir diperbarui
                                </p>

                                <p class="font-medium text-gray-900">
                                    {{ $beritum->updated_at?->format('d F Y, H:i') }}
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            {{-- =========================
                 BOTTOM ACTION
            ========================== --}}
            <div class="flex items-center justify-between mt-6">

                <a href="{{ route('berita.index') }}"
                   class="inline-flex items-center gap-2 text-gray-600 hover:text-green-700 font-medium">

                    <i data-lucide="arrow-left" class="w-5 h-5"></i>

                    Kembali ke Data Berita

                </a>


                <form
                    action="{{ route('berita.destroy', $beritum) }}"
                    method="POST"
                    onsubmit="return confirm('Yakin ingin menghapus berita ini?')">

                    @csrf
                    @method('DELETE')

                    <button
                        type="submit"
                        class="inline-flex items-center gap-2 text-red-600 hover:text-red-700 font-medium">

                        <i data-lucide="trash-2" class="w-5 h-5"></i>

                        Hapus Berita

                    </button>

                </form>

            </div>

        </div>

    </main>

</div>


<script>
    lucide.createIcons();
</script>

</body>
</html>