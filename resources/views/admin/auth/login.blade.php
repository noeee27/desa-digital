<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Admin - Desa Digital</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gray-100">

    <div class="min-h-screen flex items-center justify-center px-4">

        <div class="w-full max-w-md">

            {{-- Logo / Brand --}}
            <div class="text-center mb-8">

                <div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-2xl bg-green-700 text-white shadow-lg">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-8 w-8"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3 21h18M5 21V10l7-5 7 5v11M9 21v-6h6v6"
                        />
                    </svg>
                </div>

                <h1 class="text-3xl font-bold text-gray-900">
                    Desa Digital
                </h1>

                <p class="mt-2 text-sm text-gray-500">
                    Panel Administrasi Desa
                </p>

            </div>


            {{-- Login Card --}}
            <div class="rounded-2xl bg-white p-8 shadow-xl ring-1 ring-gray-200">

                <div class="mb-6">
                    <h2 class="text-xl font-semibold text-gray-900">
                        Login Admin
                    </h2>

                    <p class="mt-1 text-sm text-gray-500">
                        Silakan masuk untuk mengelola informasi desa.
                    </p>
                </div>


                {{-- Error --}}
                @if ($errors->any())
                    <div class="mb-5 rounded-lg bg-red-50 p-4 text-sm text-red-700">
                        {{ $errors->first() }}
                    </div>
                @endif


                <form
                    method="POST"
                    action="{{ route('admin.login.submit') }}"
                    class="space-y-5"
                >

                    @csrf


                    {{-- Email --}}
                    <div>

                        <label
                            for="email"
                            class="mb-2 block text-sm font-medium text-gray-700"
                        >
                            Email
                        </label>

                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Masukkan email admin"
                            required
                            autofocus
                            class="block w-full rounded-xl border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-green-600 focus:ring-2 focus:ring-green-100"
                        >

                    </div>


                    {{-- Password --}}
                    <div>

                        <label
                            for="password"
                            class="mb-2 block text-sm font-medium text-gray-700"
                        >
                            Password
                        </label>

                        <input
                            id="password"
                            type="password"
                            name="password"
                            placeholder="Masukkan password"
                            required
                            class="block w-full rounded-xl border border-gray-300 px-4 py-3 text-sm outline-none transition focus:border-green-600 focus:ring-2 focus:ring-green-100"
                        >

                    </div>


                    {{-- Button --}}
                    <button
                        type="submit"
                        class="w-full rounded-xl bg-green-700 px-4 py-3 font-semibold text-white shadow-md transition hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2"
                    >
                        Login ke Dashboard
                    </button>

                </form>


                {{-- Back to Website --}}
                <div class="mt-6 text-center">

                    <a
                        href="/"
                        class="text-sm font-medium text-gray-500 transition hover:text-green-700"
                    >
                        ← Kembali ke Website Desa
                    </a>

                </div>

            </div>


            {{-- Footer --}}
            <p class="mt-6 text-center text-xs text-gray-400">
                © {{ date('Y') }} Desa Digital
            </p>

        </div>

    </div>

</body>

</html>