<div class="flex flex-col pt-20 -mt-15 px-20">
    <div class="flex flex-col items-center justify-center">
        <span class="font-bold text-3xl mb-3">Pilihan Lowongan Magang</span>
        <div class="line"></div>
    </div>

    <div class="flex flex-col my-8">
        {{-- Foreach untuk list perusahaan --}}
        {{-- Limit list perusahaan menjadi 5 untuk digunakan ke pagination --}}
        <div class="flex p-3 bg-blue-100 rounded-xl mb-10">
            <div class="flex items-center justify-between w-full px-5 gap-2">
                <div class="flex gap-2 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none">
                        <path d="M10.5 19C15.1945 19 19 15.1945 19 10.5C19 5.8055 15.1945 2 10.5 2C5.8055 2 2 5.8055 2 10.5C2 15.1945 5.8055 19 10.5 19Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                        <path d="M13.3284 7.1715C12.9573 6.79963 12.5164 6.50471 12.031 6.30367C11.5456 6.10264 11.0253 5.99944 10.4999 6C9.97451 5.99944 9.4542 6.10264 8.96881 6.30367C8.48342 6.50471 8.04251 6.79963 7.67139 7.1715M16.6109 16.611L20.8534 20.8535" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    <span class="text-lg font-semibold">Pencarian</span>
                </div>
                <form action="#list-perusahaan" class="flex gap-2 w-1/2">
                    <input type="text" name="search" class="input w-full">
                    <button type="submit" class="btn btn-ghost bg-blue-400 border-0 hover:bg-blue-600 transition-all hover:-translate-y-0.5 active:translate-y-0 shadow-lg  text-white">Cari</button>
                </form>
            </div>
        </div>
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-3">
            {{-- Card --}}
            <div class="flex items-center h-80 gap-5 w-full overflow-hidden shadow-lg rounded-lg p-8">
                <div class="flex max-w-full max-h-full aspect-square">
                    <img src="https://placehold.co/307x307" class="rounded-lg" alt="">
                </div>
                <div class="flex h-full flex-col justify-between w-full">
                    <h3 class="font-semibold text-3xl">Title</h3>
                    <h4 class="font-medium text-base">(Nama Perusahaan)</h4>
                    <p class="line-clamp-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia,
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
            <div class="flex items-center h-80 gap-5 w-full overflow-hidden shadow-lg rounded-lg p-8">
                <div class="flex max-w-full max-h-full aspect-square">
                    <img src="https://placehold.co/307x307" class="rounded-lg" alt="">
                </div>
                <div class="flex h-full flex-col justify-between w-full">
                    <h3 class="font-semibold text-3xl">Title</h3>
                    <h4 class="font-medium text-base">(Nama Perusahaan)</h4>
                    <p class="line-clamp-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia,
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
            <div class="flex items-center h-80 gap-5 w-full overflow-hidden shadow-lg rounded-lg p-8">
                <div class="flex max-w-full max-h-full aspect-square">
                    <img src="https://placehold.co/307x307" class="rounded-lg" alt="">
                </div>
                <div class="flex h-full flex-col justify-between w-full">
                    <h3 class="font-semibold text-3xl">Title</h3>
                    <h4 class="font-medium text-base">(Nama Perusahaan)</h4>
                    <p class="line-clamp-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia,
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

        {{-- <div class="w-4/12 sticky top-24">
            <div class="shadow-lg rounded-lg p-8">
                <fieldset class="fieldset">
                    <legend class="fieldset-legend"><span class="text-2xl">Filter</span></legend>
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M10.5 19C15.1945 19 19 15.1945 19 10.5C19 5.8055 15.1945 2 10.5 2C5.8055 2 2 5.8055 2 10.5C2 15.1945 5.8055 19 10.5 19Z"
                                        stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                                    <path
                                        d="M13.3284 7.1715C12.9573 6.79963 12.5164 6.50471 12.031 6.30367C11.5456 6.10264 11.0253 5.99944 10.4999 6C9.97451 5.99944 9.4542 6.10264 8.96881 6.30367C8.48342 6.50471 8.04251 6.79963 7.67139 7.1715M16.6109 16.611L20.8534 20.8535"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <input type="text" id="simple-search" name="search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5"
                                placeholder="Cari Lowongan..." required />
                        </div>
                        <button type="submit"
                            class="bg-sky-400 dark:bg-blue-400 ms-2 shadow-md transition-transform hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0 btn btn-ghost border-0 focus:ring-blue-500 focus:border-blue-500 ">
                            <span class="font-medium text-sm">Search</span>
                        </button>
                    </form>
                </fieldset>

            </div>
        </div> --}}
    </div>
</div>
