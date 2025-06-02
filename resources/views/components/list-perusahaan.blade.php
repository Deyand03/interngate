<div class="flex flex-col pt-20 px-40">
    <div class="flex flex-col items-center justify-center">
        <span class="font-bold text-3xl mb-3">Pilihan Lowongan Magang</span>
        <div class="line"></div>
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
