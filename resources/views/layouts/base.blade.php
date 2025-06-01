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
    <div class="navbar navbar-custom fixed bg-base-100 shadow-md px-20 z-50">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                    <li><a href="" class="text-lg p-2">Beranda</a></li>
                    <li><a href="" class="text-lg p-2">Lowongan</a></li>
                    <li><a href="" class="text-lg p-2">Perusahaan</a></li>
                    <li><a href="" class="text-lg p-2">Panduan</a></li>
                </ul>
            </div>
            <a class="font-semibold gap-0 text-xl nav-title px-3 rounded-md" href="#"><span>Intern</span><span class="text-[var(--bg-primary)]">Gate</span></a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1 text-base font-medium">
                <li><a href="">Beranda</a></li>
                <li><a href="">Lowongan</a></li>
                <li><a href="">Perusahaan</a></li>
                <li><a href="">Panduan</a></li>
            </ul>
        </div>
        <div class="navbar-end gap-3">
            <a href="{{ route('login') }}" class="btn btn-warning px-5">Masuk</a>
            <a href="{{ route('register') }}" class="btn btn-ghost bg-[var(--btn-color)] text-[#e7f7ff] p-0 px-5">Register</a>
        </div>
    </div>
    <div class="pt-[68px]">
        @yield('content')
    </div>
</body>

</html>
