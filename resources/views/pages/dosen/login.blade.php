@extends('layouts.root')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-md">
        <h1 class="mb-1 text-3xl font-bold text-center">Selamat Datang</h1>
        <p class="mb-8 text-center text-gray-600">
            Silahkan Login Sebagai Dosen
        </p>

        <!-- Error Alert -->
        @if ($errors->any())
            <div id="alert" class="relative px-4 py-3 mb-4 text-red-700 bg-red-100 border border-red-400 rounded" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

            <script>
                setTimeout(function() {
                    document.getElementById('alert').style.display = 'none';
                }, 3500);
            </script>
        @endif

        <form action="" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block mb-1 text-sm font-medium text-gray-700">
                    NIM/NIP
                </label>
                <input
                    type="text"
                    id="nip"
                    name="nip"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required
                />
            </div>

            <div class="mb-6">
                <label for="password" class="block mb-1 text-sm font-medium text-gray-700">
                    Password
                </label>
                <div class="relative">
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="w-full px-3 py-2 pr-10 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                    />
                    <button
                        type="button"
                        onclick="togglePasswordVisibility()"
                        class="absolute inset-y-0 right-0 flex items-center pr-3"
                    >
                        <i class="text-gray-500 fas fa-eye" id="password-icon"></i>
                    </button>
                </div>
            </div>

            <div class="flex items-center mb-6">
                <input
                    type="checkbox"
                    id="remember"
                    name="remember"
                    class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500"
                />
                <label for="remember" class="block ml-2 text-sm text-gray-700">
                    Ingat saya?
                </label>
            </div>

            <button
                type="submit"
                class="w-full px-4 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
            >
                Masuk
            </button>
        </form>

        <div class="flex flex-col mt-4 text-center gap-y-2">
            {{-- <a href="" class="text-sm text-blue-600 hover:underline">
                Lupa Password?
            </a> --}}
            <a href="/" class="text-sm font-bold text-blue-600 hover:underline">
                Kembali ke Beranda
            </a>
        </div>
    </div>
</div>

<script>
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('password');
        const passwordIcon = document.getElementById('password-icon');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            passwordIcon.classList.remove('fa-eye');
            passwordIcon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            passwordIcon.classList.remove('fa-eye-slash');
            passwordIcon.classList.add('fa-eye');
        }
    }
</script>
@endsection
