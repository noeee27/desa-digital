<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Berita - Desa Digital</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="bg-gray-50 text-gray-900">

<div class="min-h-screen flex">

    {{-- SIDEBAR --}}
    <aside class="w-64 bg-green-900 text-white flex flex-col fixed inset-y-0 left-0">

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


        <nav class="flex-1 px-3 py-5 space-y-1">

            <a href="{{ route('admin.dashboard') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-green-800">

                <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
                <span>Dashboard</span>

            </a>


            <a href="{{ route('umkm.index') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-green-800">

                <i data-lucide="store" class="w-5 h-5"></i>
                <span>UMKM</span>

            </a>


            <a href="{{ route('wisata.index') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-green-800">

                <i data-lucide="map" class="w-5 h-5"></i>
                <span>Wisata & Jasa</span>

            </a>


            <a href="{{ route('berita.index') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-lg bg-green-700">

                <i data-lucide="newspaper" class="w-5 h-5"></i>
                <span>Berita</span>

            </a>


            <a href="#"
               class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-green-800">

                <i data-lucide="image" class="w-5 h-5"></i>
                <span>Galeri</span>

            </a>


            <a href="#"
               class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-green-800">

                <i data-lucide="building-2" class="w-5 h-5"></i>
                <span>Profil Desa</span>

            </a>

        </nav>


        <div class="px-3 py-4 border-t border-green-800">

            <form action="{{ route('admin.logout') }}" method="POST">

                @csrf

                <button
                    type="submit"
                    class="w-full flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-green-800">

                    <i data-lucide="log-out" class="w-5 h-5"></i>

                    <span>Logout</span>

                </button>

            </form>

        </div>

    </aside>


    {{-- MAIN --}}
    <main class="ml-64 flex-1 min-h-screen">

        {{-- HEADER --}}
        <header class="bg-white border-b border-gray-200 px-8 py-5">

            <div class="flex items-center justify-between">

                <div>

                    <h1 class="text-2xl font-bold">
                        Berita
                    </h1>

                    <p class="text-sm text-gray-500 mt-1">
                        Edit informasi berita desa.
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


        {{-- CONTENT --}}
        <div class="p-8">


            {{-- BREADCRUMB --}}
            <div class="flex items-center gap-2 text-sm text-gray-500 mb-6">

                <a href="{{ route('berita.index') }}"
                   class="hover:text-green-700">

                    Berita

                </a>

                <i data-lucide="chevron-right" class="w-4 h-4"></i>

                <span class="text-gray-900 font-medium">
                    Edit Berita
                </span>

            </div>


            {{-- TITLE --}}
            <div class="mb-6">

                <h2 class="text-3xl font-bold">
                    Edit Berita
                </h2>

                <p class="text-gray-500 mt-1">
                    Perbarui informasi berita desa.
                </p>

            </div>


            {{-- VALIDATION ERROR --}}
            @if ($errors->any())

                <div class="mb-6 bg-red-50 border border-red-200 text-red-700 rounded-xl p-5">

                    <div class="flex items-center gap-2 font-semibold mb-2">

                        <i data-lucide="circle-alert" class="w-5 h-5"></i>

                        Terdapat kesalahan:

                    </div>

                    <ul class="list-disc ml-6 text-sm space-y-1">

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif


            {{-- FORM --}}
            <form
                action="{{ route('berita.update', $beritum) }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf

                @method('PUT')


                <div class="bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden">


                    {{-- FORM HEADER --}}
                    <div class="px-8 py-6 border-b border-gray-200">

                        <h3 class="text-lg font-semibold">
                            Informasi Berita
                        </h3>

                        <p class="text-sm text-gray-500 mt-1">
                            Silakan ubah data berita sesuai kebutuhan.
                        </p>

                    </div>


                    <div class="p-8 space-y-6">


                        {{-- JUDUL --}}
                        <div>

                            <label class="block text-sm font-medium mb-2">
                                Judul Berita
                            </label>

                            <input
                                type="text"
                                name="judul"
                                value="{{ old('judul', $beritum->judul) }}"
                                required
                                class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none">

                        </div>


                        {{-- KATEGORI --}}
                        <div>

                            <label class="block text-sm font-medium mb-2">
                                Kategori
                            </label>

                            <select
                                name="kategori"
                                required
                                class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-green-500 outline-none">

                                <option value="">
                                    Pilih kategori
                                </option>

                                <option value="Kegiatan Desa"
                                    {{ old('kategori', $beritum->kategori) == 'Kegiatan Desa' ? 'selected' : '' }}>
                                    Kegiatan Desa
                                </option>

                                <option value="Pengumuman"
                                    {{ old('kategori', $beritum->kategori) == 'Pengumuman' ? 'selected' : '' }}>
                                    Pengumuman
                                </option>

                                <option value="Pembangunan"
                                    {{ old('kategori', $beritum->kategori) == 'Pembangunan' ? 'selected' : '' }}>
                                    Pembangunan
                                </option>

                                <option value="Masyarakat"
                                    {{ old('kategori', $beritum->kategori) == 'Masyarakat' ? 'selected' : '' }}>
                                    Masyarakat
                                </option>

                                <option value="Lainnya"
                                    {{ old('kategori', $beritum->kategori) == 'Lainnya' ? 'selected' : '' }}>
                                    Lainnya
                                </option>

                            </select>

                        </div>


                        {{-- ISI --}}
                        <div>

                            <label class="block text-sm font-medium mb-2">
                                Isi Berita
                            </label>

                            <textarea
                                name="isi"
                                rows="10"
                                required
                                class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none resize-y">{{ old('isi', $beritum->isi) }}</textarea>

                        </div>


                        {{-- FOTO --}}
                        <div>

                            <label class="block text-sm font-medium mb-2">
                                Foto Berita
                            </label>


                            @if($beritum->foto)

                                <div class="mb-4">

                                    <p class="text-sm text-gray-500 mb-2">
                                        Foto saat ini:
                                    </p>

                                    <img
                                        src="{{ asset('storage/' . $beritum->foto) }}"
                                        alt="{{ $beritum->judul }}"
                                        class="w-64 h-40 object-cover rounded-xl border border-gray-200">

                                </div>

                            @endif


                            <input
                                type="file"
                                name="foto"
                                accept=".jpg,.jpeg,.png,.webp"
                                class="w-full border border-gray-300 rounded-xl px-4 py-3 bg-white">

                            <p class="text-xs text-gray-500 mt-2">
                                Kosongkan jika tidak ingin mengganti foto.
                                Maksimal 2 MB.
                            </p>

                        </div>


                        {{-- STATUS --}}
                        <div>

                            <label class="block text-sm font-medium mb-2">
                                Status Berita
                            </label>

                            <select
                                name="status"
                                required
                                class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-green-500 outline-none">

                                <option value="draft"
                                    {{ old('status', $beritum->status) == 'draft' ? 'selected' : '' }}>
                                    Draft
                                </option>

                                <option value="published"
                                    {{ old('status', $beritum->status) == 'published' ? 'selected' : '' }}>
                                    Published
                                </option>

                            </select>

                        </div>


                    </div>


                    {{-- ACTION --}}
                    <div class="px-8 py-6 bg-gray-50 border-t border-gray-200 flex items-center justify-between">

                        <a
                            href="{{ route('berita.show', $beritum) }}"
                            class="inline-flex items-center gap-2 px-5 py-3 border border-gray-300 rounded-xl text-gray-700 font-medium hover:bg-white">

                            <i data-lucide="arrow-left" class="w-5 h-5"></i>

                            Batal

                        </a>


                        <button
                            type="submit"
                            class="inline-flex items-center gap-2 px-6 py-3 bg-green-700 hover:bg-green-800 text-white rounded-xl font-medium">

                            <i data-lucide="save" class="w-5 h-5"></i>

                            Simpan Perubahan

                        </button>

                    </div>

                </div>

            </form>


        </div>

    </main>

</div>


<script>
    lucide.createIcons();
</script>

</body>

</html>