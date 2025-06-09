<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite(['resources/css/app.css', 'resources/css/style.css', 'resources/js/main.js'])
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
                            id="nama" name="nama" placeholder="Masukan Nama" value="{{ old('nama') }}" required />
                    </div>
                    <div>
                        <label for="email" class="font-medium">Email: </label>
                        <input type="email"
                            class="input w-full input-ghost focus:ring-blue-500 ring-blue-500 ring-1 shadow-md"
                            id="email" name="email" placeholder="Masukan Email" value="{{ old('email') }}"required />
                    </div>
                    <div>
                        <label for="password" class="font-medium">Password: </label>
                        <input type="password"
                            class="input w-full input-ghost focus:ring-blue-500 ring-blue-500 ring-1 shadow-md"
                            id="password" name="password" placeholder="Masukan password" autocomplete="new-password"
                            required />
                    </div>
                    <div>
                        <label for="role" class="flex flex-col"><span class="font-medium">Role:</span>
                            <div>
                                <input type="radio" name="role" id="mahasiswa" class="radio radio-sm radio-info"
                                    value="mahasiswa" required /> <span class="me-1">Mahasiswa</span>
                                <input type="radio" name="role" id="mitra" class="radio radio-sm radio-info"
                                    value="mitra" required />
                                Mitra
                            </div>
                        </label>
                    </div>

                    {{-- Form Mitra --}}
                    <div class="hidden opacity-0 form-regis" id="form-mitra">
                        mitra
                    </div>

                    {{-- Form Mahasiswa --}}
                    <div class="hidden opacity-0 form-regis py-1" id="form-mahasiswa">
                        <label class="font-medium" for="nim">NIM :</label>
                        <input type="text" id="nim" name="nim"
                            class="input w-full input-ghost focus:ring-blue-500 ring-blue-500 ring-1 shadow-md mb-2"
                            placeholder="Masukan NIM">

                        <label class="font-medium " for="jurusan">Jurusan :</label>
                        <input type="text" id="jurusan" name="jurusan"
                            class="input w-full input-ghost focus:ring-blue-500 ring-blue-500 ring-1 shadow-md mb-2"
                            placeholder="Masukan Jurusan">

                        <label class="font-medium" for="universitas">Universitas :</label>
                        <input type="text" id="universitas" name="universitas"
                            class="input w-full input-ghost focus:ring-blue-500 ring-blue-500 ring-1 shadow-md mb-2"
                            placeholder="Masukan Universitas">
                    </div>

                    <button type="submit" class="btn btn-info text-white">REGISTER</button>
                </form>
            </div>

            {{-- Footer --}}
            <div>

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
