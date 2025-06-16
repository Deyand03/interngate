<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="shortcut icon" href="{{ asset('img/title-icon.png') }}" type="image/x-icon">
</head>

<body>
    <div class="flex justify-between w-full border h-screen px-20 py-10">

        {{-- Form Login --}}
        <div class="flex flex-col justify-between w-1/3 py-10">
            <div>
                <a href="{{ route('beranda') }}"
                    class="inline-flex items-center justify-center transition-all hover:-translate-y-0.5 active:translate-y-0 mb-8 gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                        fill="none">
                        <g clip-path="url(#clip0_80_59)">
                            <path
                                d="M3.28292 10.94C3.00202 11.2213 2.84424 11.6025 2.84424 12C2.84424 12.3975 3.00202 12.7788 3.28292 13.06L8.93892 18.718C9.07825 18.8573 9.24366 18.9679 9.42571 19.0433C9.60776 19.1187 9.80287 19.1575 9.99992 19.1575C10.197 19.1575 10.3921 19.1187 10.5741 19.0433C10.7562 18.9679 10.9216 18.8573 11.0609 18.718C11.2003 18.5787 11.3108 18.4133 11.3862 18.2312C11.4616 18.0492 11.5004 17.854 11.5004 17.657C11.5004 17.46 11.4616 17.2648 11.3862 17.0828C11.3108 16.9007 11.2003 16.7353 11.0609 16.596L7.96492 13.5H19.4999C19.8977 13.5 20.2793 13.342 20.5606 13.0607C20.8419 12.7794 20.9999 12.3978 20.9999 12C20.9999 11.6022 20.8419 11.2206 20.5606 10.9393C20.2793 10.658 19.8977 10.5 19.4999 10.5H7.96492L11.0609 7.404C11.3422 7.12261 11.5001 6.74101 11.5 6.34315C11.5 5.94529 11.3418 5.56377 11.0604 5.2825C10.779 5.00124 10.3974 4.84328 9.99956 4.84338C9.60171 4.84347 9.22018 5.00161 8.93892 5.283L3.28292 10.94Z"
                                fill="black" fill-opacity="0.7" />
                        </g>
                        <defs>
                            <clipPath id="clip0_80_59">
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <p class="text-">Kembali</p>
                </a>
                <h1 class="font-bold text-3xl">Selamat Datang Kembali</h1>
                <h2 class="font-semibold text-lg">Masukan Email Dan Password</h2>
            </div>
            <div>
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form action="{{ route('login') }}" method="POST" class="flex flex-col gap-2">
                    @csrf
                    {{-- Email Address --}}
                    <div>
                        <label for="email" class="font-medium">Email: </label>
                        <input type="email"
                            class="input w-full input-ghost focus:ring-blue-500 ring-blue-500 ring-1 shadow-md"
                            id="email" name="email" placeholder="Masukan Email" value="{{ old('email') }}"
                            autocomplete="username" required />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    {{-- Password --}}
                    <div>
                        <label for="password" class="font-medium">Password:</label>
                        <input type="password"
                            class="input w-full input-ghost focus:ring-blue-500 ring-blue-500 ring-1 shadow-md"
                            name="password" placeholder="Masukan Password" id="password" required
                            autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="flex justify-between mt-10">
                        <label for="remember_me" class="inline-flex items-center">
                            <input type="checkbox" name="remember" class="rounded">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Ingatkan Saya') }}</span>
                        </label>
                        <div class="flex items-center">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    <button
                        class="btn btn-ghost bg-blue-400/80 hover:bg-blue-400 border-0 shadow-lg text-white">Masuk</button>
                </form>
            </div>
            <div>
                <p>Belum punya akun? <a href="{{ route('register') }}"
                        class="text-blue-500 transition-all hover:underline hover:decoration-blue-700">Daftar
                        Sekarang</a></p>
            </div>
        </div>
        {{-- Gambar Kanan --}}
        <div class="flex justify-center items-center rounded-xl w-3/5 overflow-hidden">
            <div class="flex justify-center items-center">
                <img src="{{ asset('img/login-image.jpg') }}" alt="" class="rounded-xl object-cover w-11/12">
            </div>
        </div>
    </div>
    @vite(['resources/css/app.css', 'resources/css/style.css', 'resources/js/main.js', 'resources/js/app.js'])
    @if (session('success'))
        <div id="success-message" data-message="{{ session('success') }}" class="hidden"></div>
    @endif
</body>

</html>

{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
