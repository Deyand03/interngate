<div class="transition-opacity duration-500 ease-in-out opacity-0 hidden form-regis" id="form-mitra">
    <div>
        <label class="font-medium" for="nama_perusahaan">Nama Perusahaan :</label>
        <input type="text" id="nama_perusahaan" name="nama_perusahaan"
            class="input w-full input-ghost focus:ring-blue-500 ring-blue-500 ring-1 shadow-md mb-2"
            placeholder="Masukan Nama Perusahaan">
        @error('nama_perusahaan')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label class="font-medium " for="alamat_perusaahan">Alamat Perusahaan :</label>
        <input type="text" id="alamat_perusaahan" name="alamat_perusaahan"
            class="input w-full input-ghost focus:ring-blue-500 ring-blue-500 ring-1 shadow-md mb-2"
            placeholder="Masukan alamat_perusaahan">
        @error('alamat_perusaahan')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex flex-col">
        <label class="font-medium" for="deskripsi">Deskripsi :</label>
        <textarea id="deskripsi" name="deskripsi"
            class="textarea textarea-ghost w-full focus:ring-blue-500 ring-blue-500 ring-1 shadow-md mb-2" rows="5"
            placeholder="Masukan deskripsi"></textarea>
        @error('deskripsi')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
</div>
