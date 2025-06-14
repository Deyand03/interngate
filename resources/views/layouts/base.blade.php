<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/css/style.css', 'resources/js/main.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('img/title-icon.png') }}">
</head>

<body style="font-family: Poppins">

    <nav>
        <x-navbar></x-navbar>
    </nav>

    <div class="pt-[68px]">
        @yield('content')
    </div>

    <footer>
        <section class="bg-[#187DAB] text-white">
            <div class="container mx-auto px-6 lg:px-20 py-10 text-center flex flex-col items-center">
                <h2 class="text-4xl lg:text-5xl font-extrabold mb-4">Mulai Karir Profesionalmu Sekarang!</h2>
                <p class="text-lg opacity-90 mb-8 max-w-2xl">Jangan lewatkan kesempatan untuk mendapatkan pengalaman industri terbaik. Daftar dan temukan program magang impianmu hari ini.</p>
                <a href="#perusahaan" class="btn bg-[#F5C219] hover:bg-[#eab308] border-none text-black font-bold h-14 px-8 text-lg transform hover:-translate-y-1 transition-all duration-300 shadow-lg">
                Daftar Sekarang Juga
                </a>
            </div>
        </section>
    </footer>
</body>

</html>
