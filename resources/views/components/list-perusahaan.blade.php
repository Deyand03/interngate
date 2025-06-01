<div class="flex flex-col mt-20 px-40">
    <div class="flex w-fit p-2 pr-4 bg-[var(--bg-secondary)] items-center rounded-lg text-white shadow-lg">
        <div>
            <svg width="35" height="35" viewBox="0 0 35 35" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M19.3273 8.721L17.5 19.6877L15.6727 8.721C15.6289 8.45583 15.6433 8.18429 15.7149 7.92524C15.7866 7.6662 15.9138 7.42585 16.0876 7.22089C16.2615 7.01593 16.4779 6.85126 16.7218 6.73833C16.9657 6.62539 17.2312 6.56689 17.5 6.56689C17.7688 6.56689 18.0343 6.62539 18.2782 6.73833C18.5221 6.85126 18.7385 7.01593 18.9124 7.22089C19.0862 7.42585 19.2134 7.6662 19.2851 7.92524C19.3567 8.18429 19.3711 8.45583 19.3273 8.721Z"
                    stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                <path
                    d="M17.5 29.1667C18.3054 29.1667 18.9583 28.5137 18.9583 27.7083C18.9583 26.9029 18.3054 26.25 17.5 26.25C16.6946 26.25 16.0417 26.9029 16.0417 27.7083C16.0417 28.5137 16.6946 29.1667 17.5 29.1667Z"
                    stroke="currentColor" stroke-width="2" />
            </svg>
        </div>
        <span class="font-semibold">Tersedia ?? Perusahaan</span>
    </div>

    <div class="flex my-8 gap-5 items-start">
        {{-- Foreach untuk list perusahaan --}}
        {{-- Limit list perusahaan menjadi 5 untuk digunakan ke pagination --}}
        <div class="flex flex-col gap-5 w-8/12 h-fit">
            <div class="flex gap-5 shadow-lg rounded-lg p-8">
                <img src="https://placehold.co/307x307" class="rounded-lg" alt="">
                <div class="flex flex-col justify-between w-full">
                    <h3 class="font-semibold text-3xl">Title</h3>
                    <h4 class="font-medium text-base">(Nama Perusahaan)</h4>
                    <p class="line-clamp-6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia,
                        dolores est
                        labore mollitia sit tempore eos vitae ad blanditiis, repellendus, harum commodi amet
                        voluptatum
                        esse enim deserunt eligendi impedit excepturi dolor earum nisi dicta. Totam cum et earum
                        ipsam
                        veritatis numquam ullam, voluptatibus nobis sit labore, a aspernatur eaque. Laudantium?
                    </p>
                    <hr style="">
                    <a href="#" class="btn btn-warning">Lihat Selengkapnya</a>
                </div>
            </div>
            <div class="flex gap-5 shadow-lg rounded-lg p-8">
                <img src="https://placehold.co/307x307" class="rounded-lg" alt="">
                <div class="flex flex-col justify-between w-full">
                    <h3 class="font-semibold text-3xl">Title</h3>
                    <h4 class="font-medium text-base">(Nama Perusahaan)</h4>
                    <p class="line-clamp-6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia,
                        dolores est
                        labore mollitia sit tempore eos vitae ad blanditiis, repellendus, harum commodi amet
                        voluptatum
                        esse enim deserunt eligendi impedit excepturi dolor earum nisi dicta. Totam cum et earum
                        ipsam
                        veritatis numquam ullam, voluptatibus nobis sit labore, a aspernatur eaque. Laudantium?
                    </p>
                    <hr style="">
                    <a href="#" class="btn btn-warning">Lihat Selengkapnya</a>
                </div>
            </div>
            <div class="flex gap-5 shadow-lg rounded-lg p-8">
                <img src="https://placehold.co/307x307" class="rounded-lg" alt="">
                <div class="flex flex-col justify-between w-full">
                    <h3 class="font-semibold text-3xl">Title</h3>
                    <h4 class="font-medium text-base">(Nama Perusahaan)</h4>
                    <p class="line-clamp-6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia,
                        dolores est
                        labore mollitia sit tempore eos vitae ad blanditiis, repellendus, harum commodi amet
                        voluptatum
                        esse enim deserunt eligendi impedit excepturi dolor earum nisi dicta. Totam cum et earum
                        ipsam
                        veritatis numquam ullam, voluptatibus nobis sit labore, a aspernatur eaque. Laudantium?
                    </p>
                    <hr style="">
                    <a href="#" class="btn btn-warning">Lihat Selengkapnya</a>
                </div>
            </div>

        </div>

        {{-- Filter --}}

        <div class="w-4/12 sticky top-24">
            <div class="shadow-lg rounded-lg p-8">
                <fieldset class="fieldset">
                    <legend class="fieldset-legend"><span class="text-2xl">Filter</span></legend>
                    <form action="" method="get">
                        <label class="input">
                            <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none"
                                    stroke="currentColor">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <path d="m21 21-4.3-4.3"></path>
                                </g>
                            </svg>
                            <input type="search" required placeholder="Search . . ." />
                        </label>
                        <btn class="btn btn-accent mt-3">Cari</btn>
                    </form>
                </fieldset>

            </div>
        </div>
    </div>
</div>
