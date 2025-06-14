<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite(['resources/css/app.css', 'resources/css/style.css', 'resources/js/main.js', 'resources/js/app.js'])
    <link rel="shortcut icon" href="{{ asset('img/title-icon.png') }}" type="image/x-icon">
</head>

<body>
    <div class="flex justify-between w-full px-20 py-10 h-screen">
        {{-- Gambar --}}
        <div class="flex rounded-xl w-3/5 h-full">
            <div class="relative overflow-hidden flex items-center justify-center w-full h-full">
                <img src="{{ asset('img/register-image.jpg') }}" alt=""
                    class="rounded-xl h-full w-full object-cover">
            </div>
        </div>

        {{-- Form Register --}}
        <div class="flex flex-col justify-between w-[38%] rounded-xl">
            {{-- Header --}}
            <div class="flex flex-col justify-between">
                <div class="flex flex-col items-center gap-3">
                    <h1 class="text-4xl font-semibold">Buat Akun</h1>
                    <h3 class="text-base font-medium">Sudah Punya Akun?
                        <a href="{{ route('login') }}"
                            class="text-blue-500 transition-all hover:underline hover:decoartion-blue-700">Log in</a>
                    </h3>
                </div>
            </div>

            {{-- Form Input --}}
            <div class="flex flex-col overflow-y-auto transition-all px-2">
                <form action="{{ route('register') }}" method="POST" class="flex flex-col gap-3 py-1">
                    @csrf
                    <div>
                        <label for="nama" class="font-medium">Nama: </label>
                        <input type="text"
                            class="input w-full input-ghost focus:ring-blue-500 ring-blue-500 ring-1 shadow-md"
                            id="nama" name="nama" placeholder="Masukan Nama" value="{{ old('nama') }}"
                            required />
                        @error('nama')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="font-medium">Email: </label>
                        <input type="email"
                            class="input w-full input-ghost focus:ring-blue-500 ring-blue-500 ring-1 shadow-md"
                            id="email" name="email" placeholder="Masukan Email"
                            value="{{ old('email') }}"required />
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="font-medium">Password: </label>
                        <input type="password"
                            class="input w-full input-ghost focus:ring-blue-500 ring-blue-500 ring-1 shadow-md"
                            id="password" name="password" placeholder="Masukan password" autocomplete="new-password"
                            required />
                        @error('password')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="password_confirmation" class="font-medium">Konfirmasi Password: </label>
                        <input type="password"
                            class="input w-full input-ghost focus:ring-blue-500 ring-blue-500 ring-1 shadow-md"
                            id="password_confirmation" name="password_confirmation" placeholder="Masukan password"
                            autocomplete="new-password" required />
                        @error('password_confirmed')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="role" class="flex flex-col"><span class="font-medium">Role:</span>
                            <div class="">
                                <input type="radio" name="role" id="mahasiswa" class="" value="mahasiswa" required /> <span class="me-1">Mahasiswa</span>
                                <input type="radio" name="role" id="mitra" class=" " value="mitra" required /> Mitra
                            </div>
                        </label>
                    </div>

                    {{-- Form Mitra --}}
                    <x-form-mitra></x-form-mitra>

                    {{-- Form Mahasiswa --}}
                    <x-form-mahasiswa></x-form-mahasiswa>

                    <button type="submit" class="btn btn-info text-white">REGISTER</button>
                </form>
            </div>

            {{-- Footer --}}
            <div>
                @if ($errors->any())
                    <div role="alert" class="alert alert-warning">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                    </svg>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>

</html>

{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
