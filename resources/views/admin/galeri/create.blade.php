<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Foto - Admin Desa Digital</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://unpkg.com/lucide@latest"></script>
</head>


<body class="bg-gray-100 text-gray-800">

    {{-- =====================================================
        SIDEBAR
    ====================================================== --}}

    <aside class="fixed inset-y-0 left-0 z-40 w-64 bg-green-950 text-white">

        <div class="flex h-20 items-center gap-3 border-b border-green-900 px-6">

            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-green-600">
                <i data-lucide="landmark" class="h-5 w-5"></i>
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


        <nav class="space-y-1 p-4">

            <a
                href="{{ route('admin.dashboard') }}"
                class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm text-green-100 hover:bg-green-900"
            >
                <i data-lucide="layout-dashboard" class="h-5 w-5"></i>
                Dashboard
            </a>


            <a
                href="{{ route('umkm.index') }}"
                class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm text-green-100 hover:bg-green-900"
            >
                <i data-lucide="store" class="h-5 w-5"></i>
                UMKM
            </a>


            <a
                href="{{ route('wisata.index') }}"
                class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm text-green-100 hover:bg-green-900"
            >
                <i data-lucide="map" class="h-5 w-5"></i>
                Wisata & Jasa
            </a>


            <a
                href="{{ route('berita.index') }}"
                class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm text-green-100 hover:bg-green-900"
            >
                <i data-lucide="newspaper" class="h-5 w-5"></i>
                Berita
            </a>


            <a
                href="{{ route('galeri.index') }}"
                class="flex items-center gap-3 rounded-xl bg-green-700 px-4 py-3 text-sm font-semibold text-white"
            >
                <i data-lucide="images" class="h-5 w-5"></i>
                Galeri
            </a>

        </nav>


        <div class="absolute bottom-0 left-0 right-0 border-t border-green-900 p-4">

            <form
                action="{{ route('admin.logout') }}"
                method="POST"
            >

                @csrf

                <button
                    type="submit"
                    class="flex w-full items-center gap-3 rounded-xl px-4 py-3 text-sm text-green-100 hover:bg-green-900"
                >

                    <i data-lucide="log-out" class="h-5 w-5"></i>

                    Keluar

                </button>

            </form>

        </div>

    </aside>



    {{-- =====================================================
        MAIN
    ====================================================== --}}

    <main class="ml-64 min-h-screen">

        {{-- TOPBAR --}}

        <header class="flex h-20 items-center justify-between border-b border-gray-200 bg-white px-8">

            <div>

                <p class="text-sm text-gray-500">
                    Admin Panel
                </p>

                <h2 class="text-xl font-bold text-gray-900">
                    Tambah Foto Galeri
                </h2>

            </div>


            <a
                href="{{ route('galeri.index') }}"
                class="inline-flex items-center gap-2 rounded-xl border border-gray-200 bg-white px-5 py-3 text-sm font-semibold text-gray-700 transition hover:bg-gray-50"
            >

                <i data-lucide="arrow-left" class="h-5 w-5"></i>

                Kembali

            </a>

        </header>



        {{-- CONTENT --}}

        <div class="p-8">

            <div class="mx-auto max-w-4xl">


                {{-- ERROR VALIDATION --}}

                @if($errors->any())

                    <div class="mb-6 rounded-xl border border-red-200 bg-red-50 p-5">

                        <div class="flex items-start gap-3">

                            <i
                                data-lucide="alert-circle"
                                class="mt-0.5 h-5 w-5 shrink-0 text-red-600"
                            ></i>

                            <div>

                                <p class="font-semibold text-red-700">
                                    Terdapat kesalahan pada form.
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



                {{-- FORM CARD --}}

                <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm">


                    {{-- HEADER --}}

                    <div class="border-b border-gray-200 px-7 py-6">

                        <h3 class="text-lg font-bold text-gray-900">
                            Informasi Foto
                        </h3>

                        <p class="mt-1 text-sm text-gray-500">
                            Tambahkan dokumentasi kegiatan atau potensi desa.
                        </p>

                    </div>



                    {{-- FORM --}}

                    <form
                        action="{{ route('galeri.store') }}"
                        method="POST"
                        enctype="multipart/form-data"
                        class="p-7"
                    >

                        @csrf


                        {{-- JUDUL --}}

                        <div class="mb-6">

                            <label
                                for="judul"
                                class="mb-2 block text-sm font-semibold text-gray-700"
                            >
                                Judul Foto
                                <span class="text-red-500">*</span>
                            </label>


                            <input
                                type="text"
                                id="judul"
                                name="judul"
                                value="{{ old('judul') }}"
                                placeholder="Contoh: Kegiatan Gotong Royong Desa"
                                required
                                class="w-full rounded-xl border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-green-500 focus:ring-2 focus:ring-green-100"
                            >

                        </div>



                        {{-- KATEGORI + STATUS --}}

                        <div class="mb-6 grid grid-cols-2 gap-5">


                            {{-- KATEGORI --}}

                            <div>

                                <label
                                    for="kategori"
                                    class="mb-2 block text-sm font-semibold text-gray-700"
                                >
                                    Kategori
                                </label>


                                <select
                                    id="kategori"
                                    name="kategori"
                                    class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm outline-none transition focus:border-green-500 focus:ring-2 focus:ring-green-100"
                                >

                                    <option value="">
                                        Pilih kategori
                                    </option>

                                    <option
                                        value="Kegiatan Desa"
                                        {{ old('kategori') === 'Kegiatan Desa' ? 'selected' : '' }}
                                    >
                                        Kegiatan Desa
                                    </option>

                                    <option
                                        value="Pembangunan"
                                        {{ old('kategori') === 'Pembangunan' ? 'selected' : '' }}
                                    >
                                        Pembangunan
                                    </option>

                                    <option
                                        value="Masyarakat"
                                        {{ old('kategori') === 'Masyarakat' ? 'selected' : '' }}
                                    >
                                        Masyarakat
                                    </option>

                                    <option
                                        value="Wisata"
                                        {{ old('kategori') === 'Wisata' ? 'selected' : '' }}
                                    >
                                        Wisata
                                    </option>

                                    <option
                                        value="UMKM"
                                        {{ old('kategori') === 'UMKM' ? 'selected' : '' }}
                                    >
                                        UMKM
                                    </option>

                                    <option
                                        value="Lainnya"
                                        {{ old('kategori') === 'Lainnya' ? 'selected' : '' }}
                                    >
                                        Lainnya
                                    </option>

                                </select>

                            </div>



                            {{-- STATUS --}}

                            <div>

                                <label
                                    for="status"
                                    class="mb-2 block text-sm font-semibold text-gray-700"
                                >
                                    Status
                                    <span class="text-red-500">*</span>
                                </label>


                                <select
                                    id="status"
                                    name="status"
                                    required
                                    class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm outline-none transition focus:border-green-500 focus:ring-2 focus:ring-green-100"
                                >

                                    <option
                                        value="published"
                                        {{ old('status', 'published') === 'published' ? 'selected' : '' }}
                                    >
                                        Published
                                    </option>

                                    <option
                                        value="draft"
                                        {{ old('status') === 'draft' ? 'selected' : '' }}
                                    >
                                        Draft
                                    </option>

                                </select>

                            </div>

                        </div>



                        {{-- DESKRIPSI --}}

                        <div class="mb-6">

                            <label
                                for="deskripsi"
                                class="mb-2 block text-sm font-semibold text-gray-700"
                            >
                                Deskripsi
                            </label>


                            <textarea
                                id="deskripsi"
                                name="deskripsi"
                                rows="5"
                                placeholder="Tuliskan keterangan mengenai foto..."
                                class="w-full resize-none rounded-xl border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-green-500 focus:ring-2 focus:ring-green-100"
                            >{{ old('deskripsi') }}</textarea>

                        </div>



                        {{-- FOTO --}}

                        <div class="mb-8">

                            <label
                                for="foto"
                                class="mb-2 block text-sm font-semibold text-gray-700"
                            >
                                Foto
                                <span class="text-red-500">*</span>
                            </label>


                            <div
                                class="rounded-2xl border-2 border-dashed border-gray-300 p-6 transition hover:border-green-400"
                            >

                                <div class="flex items-center gap-6">


                                    {{-- PREVIEW --}}

                                    <div
                                        id="preview-container"
                                        class="hidden h-32 w-48 shrink-0 overflow-hidden rounded-xl bg-gray-100"
                                    >

                                        <img
                                            id="preview-image"
                                            src=""
                                            alt="Preview"
                                            class="h-full w-full object-cover"
                                        >

                                    </div>


                                    {{-- UPLOAD AREA --}}

                                    <div class="flex-1">

                                        <div class="flex items-center gap-3">

                                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-50 text-green-600">

                                                <i
                                                    data-lucide="upload"
                                                    class="h-6 w-6"
                                                ></i>

                                            </div>


                                            <div>

                                                <p class="text-sm font-semibold text-gray-800">
                                                    Upload foto
                                                </p>

                                                <p class="mt-1 text-xs text-gray-500">
                                                    JPG, JPEG, PNG atau WEBP. Maksimal 5 MB.
                                                </p>

                                            </div>

                                        </div>


                                        <input
                                            type="file"
                                            id="foto"
                                            name="foto"
                                            accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp"
                                            required
                                            class="mt-4 block w-full text-sm text-gray-600 file:mr-4 file:rounded-lg file:border-0 file:bg-green-50 file:px-4 file:py-2 file:font-semibold file:text-green-700 hover:file:bg-green-100"
                                        >

                                    </div>

                                </div>

                            </div>

                        </div>



                        {{-- BUTTON --}}

                        <div class="flex items-center justify-end gap-3 border-t border-gray-100 pt-6">


                            <a
                                href="{{ route('galeri.index') }}"
                                class="rounded-xl border border-gray-200 px-5 py-3 text-sm font-semibold text-gray-700 transition hover:bg-gray-50"
                            >
                                Batal
                            </a>


                            <button
                                type="submit"
                                class="inline-flex items-center gap-2 rounded-xl bg-green-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-green-700"
                            >

                                <i data-lucide="save" class="h-5 w-5"></i>

                                Simpan Foto

                            </button>

                        </div>

                    </form>

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


            // ==========================
            // PREVIEW FOTO
            // ==========================

            const fotoInput =
                document.getElementById('foto');

            const previewContainer =
                document.getElementById('preview-container');

            const previewImage =
                document.getElementById('preview-image');


            if (fotoInput) {

                fotoInput.addEventListener('change', function () {

                    const file = this.files[0];

                    if (!file) {

                        previewContainer.classList.add('hidden');

                        previewImage.src = '';

                        return;

                    }


                    // Validasi ukuran
                    if (file.size > 5 * 1024 * 1024) {

                        alert('Ukuran foto maksimal 5 MB.');

                        this.value = '';

                        previewContainer.classList.add('hidden');

                        previewImage.src = '';

                        return;

                    }


                    // Preview
                    const reader =
                        new FileReader();

                    reader.onload = function (event) {

                        previewImage.src =
                            event.target.result;

                        previewContainer.classList.remove('hidden');

                    };

                    reader.readAsDataURL(file);

                });

            }

        });

    </script>

</body>

</html>