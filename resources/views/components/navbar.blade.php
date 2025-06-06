<div class="navbar navbar-custom fixed shadow-md px-20 z-50">
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
        <a class="flex items-center font-semibold gap-0 text-xl nav-title px-3 rounded-md" href="#"><img
                class="mr-1" src="{{ asset('img/title-icon.png') }}" width="40px"
                alt=""><span>Intern</span><span class="text-[var(--bg-primary)]">Gate</span></a>
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
        <a href="{{ route('register') }}"
            class="btn btn-ghost bg-sky-500 hover:bg-sky-600 border-0 shadow-md text-[#e7f7ff] p-0 px-5">Register</a>
    </div>
</div>
