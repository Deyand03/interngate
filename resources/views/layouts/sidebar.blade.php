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
</head>

<<<<<<< HEAD
<body style="font-family: Poppins" class="flex">
    <!-- Sidebar -->
    <nav class="w-[20%] h-screen bg-blue-600 text-white flex flex-col justify-between">
        <div>
            <div class="flex items-center gap-2 p-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <g clip-path="url(#clip0_80_59)">
                            <path
                                d="M3.28292 10.94C3.00202 11.2213 2.84424 11.6025 2.84424 12C2.84424 12.3975 3.00202 12.7788 3.28292 13.06L8.93892 18.718C9.07825 18.8573 9.24366 18.9679 9.42571 19.0433C9.60776 19.1187 9.80287 19.1575 9.99992 19.1575C10.197 19.1575 10.3921 19.1187 10.5741 19.0433C10.7562 18.9679 10.9216 18.8573 11.0609 18.718C11.2003 18.5787 11.3108 18.4133 11.3862 18.2312C11.4616 18.0492 11.5004 17.854 11.5004 17.657C11.5004 17.46 11.4616 17.2648 11.3862 17.0828C11.3108 16.9007 11.2003 16.7353 11.0609 16.596L7.96492 13.5H19.4999C19.8977 13.5 20.2793 13.342 20.5606 13.0607C20.8419 12.7794 20.9999 12.3978 20.9999 12C20.9999 11.6022 20.8419 11.2206 20.5606 10.9393C20.2793 10.658 19.8977 10.5 19.4999 10.5H7.96492L11.0609 7.404C11.3422 7.12261 11.5001 6.74101 11.5 6.34315C11.5 5.94529 11.3418 5.56377 11.0604 5.2825C10.779 5.00124 10.3974 4.84328 9.99956 4.84338C9.60171 4.84347 9.22018 5.00161 8.93892 5.283L3.28292 10.94Z"
                                fill="white" fill-opacity="0.9" />
                        </g>
                        <defs>
                            <clipPath id="clip0_80_59">
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                <h1 class="text-lg font-bold">BERANDA</h1>
                
            </div>

             <div class="card w-20% h-40 bg-blue-200 shadow-xl">
            <div class="card-body items-center text-center">
            <div class="avatar mb-1">
                <div class="w-10 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                    <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" alt="" />
                </div>
            </div>
        
    

             <h2 class="card-title text-xs font-bold text-gray-800">Nama perusahaan</h2>
            {{-- Mengurangi margin atas dari paragraf pertama agar lebih dekat ke nama --}}
            <p class="text-gray-600 text-xs leading-tight mt-0 mb-0">Deskripsi</p>
                 <a href="/profil/edit" class="btn btn-xs btn-primary btn-xs">Edit Profil</a>
            
        </div>
            </div>
            
            <div class="text-white py-4 border-t border-blue-400"></div>

            <ul class="menu p-0 w-full">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                <li>
                    <a href="/dashboard-mitra" class="text-white hover:bg-blue-700 active:bg-blue-700 rounded-none h-12 flex items-center pl-4">
                        <i class="fas fa-chart-line mr-3"></i> Dashboard Mitra
                    </a>
                </li>
                <li>
                    <a href="/Tambah_program" class="text-white hover:bg-blue-700 active:bg-blue-700 rounded-none h-12 flex items-center pl-4">
                        <i class="fas fa-plus-circle mr-3"></i> Tambah Program
                    </a>
                </li>
                <li>
                    <a href="/profile-mitra" class="text-white hover:bg-blue-700 active:bg-blue-700 rounded-none h-12 flex items-center pl-4">
                        <i class="fas fa-user-circle mr-3"></i> Profil Mitra
                    </a>
                </li>
                <li>
                    <a href="/logout" class="text-white hover:bg-blue-700 active:bg-blue-700 rounded-none h-12 flex items-center pl-4">
                        <i class="fas fa-sign-out-alt mr-3"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
        <div class="text-center text-xs text-white py-4 border-t border-blue-400">
            &copy; 2025 InternGate
        </div>
    </nav>

   @section('content')
    
@endsection
=======
<body style="font-family: Poppins">
    <div class="flex">
        <nav class="flex w-[20%] h-screen bg-blue-500 p-3">
            {{-- Sidebar --}}
                <div class="text-center text-white ">
                    <h1 class="text-2xl text-center font-bold"> DASHBOARD</h1>
                </div>
        </nav>

        <div>
            @yield('content')
        </div>
    </div>
>>>>>>> 7c83105ea48999a0590b1b5ae5d7542024705442
</body>

</html>
