<div class="navbar navbar-custom fixed shadow-md px-20 z-50">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                <li><a href="{{ route('beranda') }}">Beranda</a></li>
                <li><a href="{{ route('lowongan') }}">Lowongan</a></li>
                <li><a href="{{ route('perusahaan') }}">Perusahaan</a></li>
                <li><a href="{{ route('faq') }}">FAQ</a></li>
            </ul>
        </div>
        <a class="flex items-center font-semibold gap-0 text-xl nav-title px-3 rounded-md" href="#"><img
                class="mr-1" src="{{ asset('img/title-icon.png') }}" width="40px"
                alt=""><span>Intern</span><span class="text-[var(--bg-primary)]">Gate</span></a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1 text-base font-medium">
            <li><a href="{{ route('beranda') }}">Beranda</a></li>
            <li><a href="{{ route('lowongan') }}">Lowongan</a></li>
            <li><a href="{{ route('perusahaan') }}">Perusahaan</a></li>
            <li><a href="{{ route('faq') }}">FAQ</a></li>
        </ul>
    </div>

    <div class="navbar-end gap-3">
        {{-- BAGIAN INI AKAN TAMPIL JIKA PENGGUNA BELUM LOGIN --}}
        @guest
            <a href="{{ route('login') }}" class="btn btn-warning px-5">Masuk</a>
            <a href="{{ route('register') }}"
                class="btn btn-ghost bg-sky-500 hover:bg-sky-600 border-0 shadow-md text-[#e7f7ff] p-0 px-5">Register</a>
        @endguest

        {{-- BAGIAN INI AKAN TAMPIL JIKA PENGGUNA SUDAH LOGIN --}}
        @auth
            <div class="dropdown dropdown-end"> {{-- Menggunakan dropdown-end untuk menu di kanan --}}
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        @if (Auth::user()->role === 'mahasiswa' && Auth::user()->mahasiswa && Auth::user()->mahasiswa->foto_profil)
                            <img src="{{ asset('storage/' . Auth::user()->mahasiswa->foto_profil) }}"
                                alt="Foto Profil Mahasiswa" class="object-cover" />
                        @elseif (Auth::user()->role === 'mitra' && Auth::user()->mitra && Auth::user()->mitra->logo_perusahaan)
                            <img src="{{ asset('storage/' . Auth::user()->mitra->logo_perusahaan) }}"
                                alt="Logo Perusahaan Mitra" class="object-cover" />
                        @else
                            {{-- Placeholder jika tidak ada foto profil atau role tidak terdefinisi --}}
                            <img src="{{ asset('img/title-icon.png') }}" alt="Default Avatar" class="object-cover" />
                        @endif
                    </div>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                    <li>
                        <a class="justify-between" href="{{ route('profile.edit') }}">
                            Profile
                            <span class="badge">New</span>
                        </a>
                    </li>
                    {{-- Opsi lain: Dashboard sesuai role --}}
                    @if (Auth::user()->role === 'mahasiswa')
                        <li><a href="{{ route('mahasiswa.index') }}">Dashboard Mahasiswa</a></li>
                    @elseif(Auth::user()->role === 'mitra')
                        <li><a href="{{ route('mitra.index') }}">Dashboard Mitra</a></li>
                    @endif
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                Logout
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
            {{-- Nama user bisa diletakkan di samping foto profil atau di dropdown menu --}}
            <span class="font-medium text-gray-700 ml-2 hidden md:block">{{ Auth::user()->nama }}</span>
        @endauth
    </div>
</div>
