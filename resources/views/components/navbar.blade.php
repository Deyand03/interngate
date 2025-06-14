<div class="navbar navbar-custom fixed shadow-md px-4 md:px-20 z-50 transition-all duration-300">
    <div class="navbar-start">
        {{-- Tombol Mobile --}}
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            {{-- Menu Dropdown Mobile --}}
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow-lg border border-base-200">
                <li><a href="{{ route('beranda') }}" class="py-2">Beranda</a></li>
                <li><a href="{{ route('lowongan') }}" class="py-2">Lowongan</a></li>
                <li><a href="{{ route('perusahaan') }}" class="py-2">Perusahaan</a></li>
                <li><a href="{{ route('faq') }}" class="py-2">FAQ</a></li>
            </ul>
        </div>

        {{-- Logo --}}
        <a class="flex items-center font-semibold gap-0 text-xl nav-title px-3 rounded-md" href="{{ route('beranda') }}">
            <img class="mr-1" src="{{ asset('img/title-icon.png') }}" width="40px" alt="InternGate Logo">
            <span>Intern</span><span class="text-[var(--bg-primary)]">Gate</span>
        </a>
    </div>

    {{-- Menu Navigasi Desktop --}}
    <div class="navbar-center hidden lg:flex">
        <ul class="flex items-center gap-2 px-1 text-base font-medium space-x-2">
            <li>
                <a href="{{ route('beranda') }}" class="relative group px-3 py-2">
                    <span>Beranda</span>
                    <span class="absolute bottom-1.5 left-0 w-full h-0.5 bg-[var(--bg-primary)] scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out origin-left"></span>
                </a>
            </li>
            <li>
                <a href="{{ route('lowongan') }}" class="relative group px-3 py-2">
                    <span>Lowongan</span>
                    <span class="absolute bottom-1.5 left-0 w-full h-0.5 bg-[var(--bg-primary)] scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out origin-left"></span>
                </a>
            </li>
            <li>
                <a href="{{ route('perusahaan') }}" class="relative group px-3 py-2">
                    <span>Perusahaan</span>
                    <span class="absolute bottom-1.5 left-0 w-full h-0.5 bg-[var(--bg-primary)] scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out origin-left"></span>
                </a>
            </li>
            <li>
                <a href="{{ route('faq') }}" class="relative group px-3 py-2">
                    <span>FAQ</span>
                    <span class="absolute bottom-1.5 left-0 w-full h-0.5 bg-[var(--bg-primary)] scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out origin-left"></span>
                </a>
            </li>
        </ul>
    </div>

    <div class="navbar-end gap-3">
        @guest
            <a href="{{ route('login') }}" class="btn btn-warning px-5">Masuk</a>
            <a href="{{ route('register') }}"
                class="btn btn-ghost bg-sky-500 hover:bg-sky-600 border-0 shadow-md text-[#e7f7ff] p-0 px-5">Register</a>
        @endguest

        @auth
            {{-- Dropdown Profil untuk Pengguna yang Sudah Login --}}
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar transition-transform duration-300 hover:scale-110">
                    <div class="w-10 rounded-full ring-2 ring-primary/50 ring-offset-base-100 ring-offset-2">
                        @if (Auth::user()->role === 'mahasiswa' && Auth::user()->mahasiswa && Auth::user()->mahasiswa->foto_profil)
                            <img src="{{ asset('storage/' . Auth::user()->mahasiswa->foto_profil) }}" alt="Foto Profil Mahasiswa" class="object-cover" />
                        @elseif (Auth::user()->role === 'mitra' && Auth::user()->mitra && Auth::user()->mitra->logo_perusahaan)
                            <img src="{{ asset('storage/' . Auth::user()->mitra->logo_perusahaan) }}" alt="Logo Perusahaan Mitra" class="object-cover" />
                        @else
                            <img src="https://placehold.co/400x400/a3e635/ffffff?text={{ substr(Auth::user()->nama, 0, 1) }}" alt="Default Avatar" class="object-cover" />
                        @endif
                    </div>
                </div>


                <ul tabindex="0" class="menu dropdown-content bg-base-100 rounded-box z-[1] mt-4 w-64 p-2 shadow-xl border border-base-200/50">
                    {{-- Header Dropdown --}}
                    <li class="px-2 pt-2 pb-1">
                        <div class="flex flex-col pointer-events-none">
                            <p class="font-bold truncate">{{ Auth::user()->mahasiswa->nama }}</p>
                            <p class="text-xs text-base-content/60 truncate">{{ Auth::user()->email }}</p>
                        </div>
                    </li>

                    <div class="divider my-1"></div>

                    {{-- Menu Items --}}
                    @if(Auth::user()->role === 'mahasiswa')
                        <li>
                            <a href="{{ route('mahasiswa.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
                                Profile Saya
                            </a>
                        </li>
                    @elseif(Auth::user()->role === 'mitra')
                        <li>
                            <a href="{{ route('mitra.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" /></svg>
                                Dashboard Mitra
                            </a>
                        </li>
                    @endif

                    <div class="divider my-1"></div>

                    {{-- Tombol Logout --}}
                    <li>
                        <form method="POST" action="{{ route('logout') }}" class="flex w-full p-0">
                            @csrf
                            <button type="submit" class="flex w-full p-2 px-3 gap-2 text-left text-error hover:bg-error/20">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" /></svg>
                                Keluar
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        @endauth
    </div>
</div>
