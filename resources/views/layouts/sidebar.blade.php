<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/css/style.css', 'resources/js/main.js'])

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
        .menu .menu-item a.active {
            background-color: rgba(255, 255, 255, 0.15);
            font-weight: 700;
            color: white;
        }
        .menu .menu-item a.active i {
            color: #F5C219; /* Warna kuning sebagai aksen ikon aktif */
        }
    </style>
</head>

<body style="font-family: Poppins">
    <div class="flex">
        <nav class="w-[25%] bg-gradient-to-b from-[#187DAB] to-[#146C94] text-white flex flex-col sticky top-0">
            <!-- Bagian Atas: Logo & Profil -->
            <div class="p-6">
                <!-- Logo & Kembali ke Beranda -->
                <a href="/" class="flex items-center gap-3 mb-8 group">
                    <div class="p-2 bg-white/20 rounded-lg group-hover:bg-white/30 transition-colors">
                        <i class="fa-solid fa-fw fa-arrow-left"></i>
                    </div>
                    <span class="text-lg font-semibold">Kembali ke Beranda</span>
                </a>

                <!-- Kartu Profil Mitra -->
                <div class="p-4 bg-white/10 rounded-xl backdrop-blur-sm border border-white/20">
                    <div class="flex items-center gap-4">
                        <div class="avatar">
                            <div class="w-16 rounded-lg">
                                <!-- SPACE-BACKEND: Ganti src dengan logo perusahaan dari DB -->
                                <img src="https://placehold.co/128x128/FFFFFF/187DAB?text=Mitra" />
                            </div>
                        </div>
                        <div class="flex-grow">
                            <!-- SPACE-BACKEND: Ganti dengan nama perusahaan dari DB -->
                            <h3 class="font-bold text-lg leading-tight text-white">PT. Teknologi Maju</h3>
                        </div>
                    </div>
                    <div class="divider my-3 border-white/20"></div>
                     <!-- SPACE-BACKEND: Ganti dengan email dari DB -->
                    <p class="text-xs text-white/70 px-1">contact@teknologimaju.com</p>
                </div>
            </div>

            <!-- Bagian Tengah: Menu Navigasi Utama -->
            <ul class="menu p-4 space-y-2 text-base font-medium flex-grow">
                <li class="menu-title text-warning"><span>Menu Utama</span></li>
                <li class="menu-item">
                    <!-- Tambahkan class 'active' jika route sedang aktif -->
                    <a href="" class="active">
                        <i class="fa-solid fa-fw fa-chart-pie"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="">
                            <i class="fa-solid fa-fw fa-briefcase"></i>
                        <span>Tambah Program</span>
                    </a>
                </li>
                
                
                <li class="menu-title text-white/50 mt-4"><span>Akun</span></li>
                <li class="menu-item">
                    <a href="#">
                        <i class="fa-solid fa-fw fa-building"></i>
                        <span>Profil Perusahaan</span>
                    </a>
                </li>
            </ul>

            <!-- Bagian Bawah: Logout -->
            <div class="p-4 border-t border-white/20">
                <a href="#" class="btn btn-ghost w-full justify-start hover:bg-white/10">
                    <i class="fa-solid fa-fw fa-arrow-right-from-bracket"></i>
                    <span>Logout</span>
                </a>
            </div>

            <div class="text-center text-xs text-white py-4 border-t border-white-400">
                &copy; 2025 InternGate
            </div>
        </nav>

        <div>
            @yield('content')
        </div>
    
        @yield('modals')
    </div>
</body>
</html>
