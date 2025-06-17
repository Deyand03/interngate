<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/css/style.css'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('img/title-icon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .content-area {
            background-color: #f7f9fc;
        }
        /* Style kustom untuk menu item aktif */
        .menu .menu-item > a.active {
            background-color: rgba(255, 255, 255, 0.15);
            font-weight: 700;
            color: white;
            border-left: 4px solid #F5C219; /* Aksen kuning untuk link aktif */
        }
        .menu .menu-item > a.active i {
            color: #F5C219; /* Warna kuning sebagai aksen ikon aktif */
        }
    </style>
</head>

<body style="font-family: Poppins">
    <div class="flex min-h-screen">
        <nav class="w-72 bg-gradient-to-b from-[#187DAB] to-[#146C94] text-white flex flex-col h-screen sticky top-0">

            <!-- Bagian Atas: Kembali & Profil -->
            <div class="p-4">
                <a href="{{ route('beranda') }}" class="btn btn-ghost w-full justify-start mb-4 text-base font-semibold normal-case">
                    <i class="fa-solid fa-fw fa-arrow-left"></i>
                    Kembali ke Beranda
                </a>

                <div class="p-4 bg-white/10 rounded-xl backdrop-blur-sm border border-white/20">
                    <div class="flex items-center gap-4">
                        <div class="avatar">
                            <div class="w-16 rounded-lg">
                                <img src="{{ Auth::user()->mitra->logo_perusahaan ? asset('storage/' . Auth::user()->mitra->logo_perusahaan) : asset('img/placeholder.jpg') }}" alt="Logo Perusahaan" />
                            </div>
                        </div>
                        <div class="flex-grow">
                            <h3 class="font-bold text-lg leading-tight text-white">{{ Auth::user()->mitra->nama_perusahaan }}</h3>
                        </div>
                    </div>
                    <div class="divider my-3 border-white/20"></div>
                    <p class="text-sm text-white/70 px-1">{{ Auth::user()->email }}</p>
                </div>
            </div>

            <!-- Bagian Tengah: Menu Navigasi Utama -->
            <ul class="menu p-4 space-y-2 text-base font-medium flex-grow w-full">
                <li class="menu-title text-warning"><span>Menu Utama</span></li>
                <li class="menu-item">
                    <!-- Tambahkan class 'active' jika route sedang aktif -->
                    <a href="{{ route('mitra.index')}}" class="{{ request()->routeIs('mitra.index') ? 'active' : '' }}">
                        <i class="fa-solid fa-fw fa-chart-pie"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('mitra.kelola') }}" class="{{ request()->routeIs('mitra.kelola') ? 'active' : '' }}">
                            <i class="fa-solid fa-fw fa-briefcase"></i>
                        <span>Kelola Program</span>
                    </a>
                </li>


                <li class="menu-title text-white/50 mt-4"><span>Akun</span></li>
                <li class="menu-item">
                    <a href="{{ route('mitra.profile') }}" class="{{ request()->routeIs('mitra.profile  ') ? 'active' : '' }} -mt-3">
                        <i class="fa-solid fa-fw fa-building"></i>
                        <span>Profil Perusahaan</span>
                    </a>
                </li>
            </ul>

            <!-- Bagian Bawah: Logout -->
            <div class="p-4 border-t border-white/20">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-ghost w-full justify-start hover:bg-white/10">
                        <i class="fa-solid fa-fw fa-arrow-right-from-bracket"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
            <div class="text-center text-xs text-white py-4 border-t border-white-400">
                &copy; 2025 InternGate
            </div>
        </nav>

        <!-- Konten Halaman Utama -->
        <main class="flex-1 content-area h-screen overflow-y-auto">
            @yield('content')
        </div>
    </div>

    @yield('modals')
    @vite(['resources/js/app.js', 'resources/js/utility/profil-mitra.js'])
</body>
</html>
