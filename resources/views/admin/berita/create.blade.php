<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Berita - Desa Digital</title>

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


            {{-- NAVIGATION --}}
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
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
                >
                    <i data-lucide="store" class="h-5 w-5"></i>
                    <span>UMKM</span>
                </a>


                {{-- Wisata --}}
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
                    class="flex items-center gap-3 rounded-xl bg-green-700 px-4 py-3 text-sm font-medium"
                >
                    <i data-lucide="newspaper" class="h-5 w-5"></i>
                    <span>Berita</span>
                </a>


                {{-- Galeri --}}
                <a
                    href="#"
                    class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-medium text-green-100 transition hover:bg-green-800"
                >
                    <i data-lucide="images" class="h-5 w-5"></i>
                    <span>Galeri</span>
                </a>


                {{-- Profil Desa --}}
                <a
                    href="{{ route('user.profil') }}"
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
                        <span>Logout</span>
                    </button>

                </form>

            </div>

        </aside>


        {{-- MAIN CONTENT --}}
        <main class="min-w-0 flex-1">


            {{-- TOPBAR --}}
            <header class="flex h-20 items-center justify-between border-b border-gray-200 bg-white px-6">

                <div>

                    <h2 class="text-xl font-bold text-gray-900">
                        Berita
                    </h2>

                    <p class="text-sm text-gray-500">
                        Tambahkan berita dan informasi desa.
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


                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-green-100 font-semibold text-green-700">

                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}

                    </div>

                </div>

            </header>


            {{-- CONTENT --}}
            <div class="p-6">

                {{-- BACK --}}
                <a
                    href="{{ route('berita.index') }}"
                    class="mb-6 inline-flex items-center gap-2 text-sm font-medium text-gray-600 transition hover:text-green-700"
                >

                    <i data-lucide="arrow-left" class="h-4 w-4"></i>

                    Kembali ke Data Berita

                </a>


                {{-- TITLE --}}
                <div class="mb-6">

                    <h1 class="text-2xl font-bold text-gray-900">
                        Tambah Berita
                    </h1>

                    <p class="mt-1 text-sm text-gray-500">
                        Tambahkan berita atau informasi terbaru mengenai desa.
                    </p>

                </div>


                {{-- VALIDATION ERROR --}}
                @if ($errors->any())

                    <div class="mb-6 rounded-xl border border-red-200 bg-red-50 p-4">

                        <div class="flex gap-3">

                            <i
                                data-lucide="circle-alert"
                                class="h-5 w-5 shrink-0 text-red-600"
                            ></i>

                            <div>

                                <h3 class="font-semibold text-red-800">
                                    Terdapat kesalahan
                                </h3>

                                <ul class="mt-2 list-disc space-y-1 pl-5 text-sm text-red-700">

                                    @foreach ($errors->all() as $error)

                                        <li>
                                            {{ $error }}
                                        </li>

                                    @endforeach

                                </ul>

                            </div>

                        </div>

                    </div>

                @endif


                {{-- FORM --}}
                <form
                    action="{{ route('berita.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
                    class="space-y-6"
                >

                    @csrf


                    {{-- INFORMASI BERITA --}}
                    <div class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-200">

                        <div class="border-b border-gray-200 px-6 py-5">

                            <h2 class="text-lg font-semibold text-gray-900">
                                Informasi Berita
                            </h2>

                            <p class="mt-1 text-sm text-gray-500">
                                Isi informasi utama berita.
                            </p>

                        </div>


                        <div class="space-y-6 p-6">


                            {{-- JUDUL --}}
                            <div>

                                <label
                                    for="judul"
                                    class="mb-2 block text-sm font-medium text-gray-700"
                                >
                                    Judul Berita
                                    <span class="text-red-500">*</span>
                                </label>

                                <input
                                    type="text"
                                    id="judul"
                                    name="judul"
                                    value="{{ old('judul') }}"
                                    required
                                    maxlength="255"
                                    placeholder="Contoh: Pemerintah Desa Gelar Kegiatan Gotong Royong"
                                    class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-green-600 focus:ring-2 focus:ring-green-100"
                                >

                            </div>


                            {{-- KATEGORI --}}
                            <div>

                                <label
                                    for="kategori"
                                    class="mb-2 block text-sm font-medium text-gray-700"
                                >
                                    Kategori
                                    <span class="text-red-500">*</span>
                                </label>

                                <select
                                    id="kategori"
                                    name="kategori"
                                    required
                                    class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm outline-none transition focus:border-green-600 focus:ring-2 focus:ring-green-100"
                                >

                                    <option value="">
                                        Pilih kategori
                                    </option>

                                    <option
                                        value="Pemerintahan"
                                        {{ old('kategori') == 'Pemerintahan' ? 'selected' : '' }}
                                    >
                                        Pemerintahan
                                    </option>

                                    <option
                                        value="Kegiatan Desa"
                                        {{ old('kategori') == 'Kegiatan Desa' ? 'selected' : '' }}
                                    >
                                        Kegiatan Desa
                                    </option>

                                    <option
                                        value="Masyarakat"
                                        {{ old('kategori') == 'Masyarakat' ? 'selected' : '' }}
                                    >
                                        Masyarakat
                                    </option>

                                    <option
                                        value="UMKM"
                                        {{ old('kategori') == 'UMKM' ? 'selected' : '' }}
                                    >
                                        UMKM
                                    </option>

                                    <option
                                        value="Wisata"
                                        {{ old('kategori') == 'Wisata' ? 'selected' : '' }}
                                    >
                                        Wisata
                                    </option>

                                    <option
                                        value="Pengumuman"
                                        {{ old('kategori') == 'Pengumuman' ? 'selected' : '' }}
                                    >
                                        Pengumuman
                                    </option>

                                </select>

                            </div>


                            {{-- ISI BERITA --}}
                            <div>

                                <label
                                    for="isi"
                                    class="mb-2 block text-sm font-medium text-gray-700"
                                >
                                    Isi Berita
                                    <span class="text-red-500">*</span>
                                </label>

                                <textarea
                                    id="isi"
                                    name="isi"
                                    rows="10"
                                    required
                                    placeholder="Tuliskan isi berita di sini..."
                                    class="w-full resize-y rounded-xl border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-green-600 focus:ring-2 focus:ring-green-100"
                                >{{ old('isi') }}</textarea>

                                <p class="mt-2 text-xs text-gray-500">
                                    Tuliskan informasi berita secara lengkap dan mudah dipahami.
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- FOTO --}}
                    <div class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-200">

                        <div class="border-b border-gray-200 px-6 py-5">

                            <h2 class="text-lg font-semibold text-gray-900">
                                Foto Berita
                            </h2>

                            <p class="mt-1 text-sm text-gray-500">
                                Tambahkan foto utama untuk berita.
                            </p>

                        </div>


                        <div class="p-6">

                            <label
                                for="foto"
                                class="mb-2 block text-sm font-medium text-gray-700"
                            >
                                Foto
                            </label>

                            <input
                                type="file"
                                id="foto"
                                name="foto"
                                accept=".jpg,.jpeg,.png,.webp"
                                class="block w-full cursor-pointer rounded-xl border border-gray-300 bg-white text-sm text-gray-600 file:mr-4 file:border-0 file:bg-green-50 file:px-4 file:py-3 file:font-medium file:text-green-700 hover:file:bg-green-100"
                            >

                            <p class="mt-2 text-xs text-gray-500">
                                Format: JPG, JPEG, PNG, atau WEBP. Maksimal 2 MB.
                            </p>

                        </div>

                    </div>


                    {{-- STATUS --}}
                    <div class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-200">

                        <div class="border-b border-gray-200 px-6 py-5">

                            <h2 class="text-lg font-semibold text-gray-900">
                                Status Publikasi
                            </h2>

                            <p class="mt-1 text-sm text-gray-500">
                                Tentukan status berita setelah disimpan.
                            </p>

                        </div>


                        <div class="p-6">

                            <div class="grid gap-4 sm:grid-cols-2">


                                {{-- PUBLISHED --}}
                                <label class="cursor-pointer">

                                    <input
                                        type="radio"
                                        name="status"
                                        value="published"
                                        class="peer sr-only"
                                        {{ old('status', 'published') == 'published' ? 'checked' : '' }}
                                    >

                                    <div class="rounded-xl border border-gray-200 p-4 transition peer-checked:border-green-600 peer-checked:bg-green-50">

                                        <div class="flex items-start gap-3">

                                            <div class="mt-0.5 text-green-600">

                                                <i
                                                    data-lucide="circle-check"
                                                    class="h-5 w-5"
                                                ></i>

                                            </div>

                                            <div>

                                                <p class="font-semibold text-gray-900">
                                                    Published
                                                </p>

                                                <p class="mt-1 text-xs text-gray-500">
                                                    Berita dapat ditampilkan kepada pengunjung.
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                </label>


                                {{-- DRAFT --}}
                                <label class="cursor-pointer">

                                    <input
                                        type="radio"
                                        name="status"
                                        value="draft"
                                        class="peer sr-only"
                                        {{ old('status') == 'draft' ? 'checked' : '' }}
                                    >

                                    <div class="rounded-xl border border-gray-200 p-4 transition peer-checked:border-green-600 peer-checked:bg-green-50">

                                        <div class="flex items-start gap-3">

                                            <div class="mt-0.5 text-gray-500">

                                                <i
                                                    data-lucide="file-edit"
                                                    class="h-5 w-5"
                                                ></i>

                                            </div>

                                            <div>

                                                <p class="font-semibold text-gray-900">
                                                    Draft
                                                </p>

                                                <p class="mt-1 text-xs text-gray-500">
                                                    Berita disimpan tetapi belum ditampilkan.
                                                </p>

                                            </div>

                                        </div>

                                    </div>

                                </label>

                            </div>

                        </div>

                    </div>


                    {{-- BUTTON --}}
                    <div class="flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">

                        <a
                            href="{{ route('berita.index') }}"
                            class="inline-flex items-center justify-center rounded-xl border border-gray-300 bg-white px-6 py-3 text-sm font-semibold text-gray-700 transition hover:bg-gray-50"
                        >
                            Batal
                        </a>


                        <button
                            type="submit"
                            class="inline-flex items-center justify-center gap-2 rounded-xl bg-green-700 px-6 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-green-800"
                        >

                            <i
                                data-lucide="save"
                                class="h-5 w-5"
                            ></i>

                            Simpan Berita

                        </button>

                    </div>

                </form>

            </div>

        </main>

    </div>


    {{-- LUCIDE --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            if (window.lucide) {
                lucide.createIcons();
            }

        });
    </script>

</body>

</html>