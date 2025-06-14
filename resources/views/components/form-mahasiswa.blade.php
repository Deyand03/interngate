<div class="transition-opacity duration-500 ease-in-out opacity-0 hidden form-regis py-1" id="form-mahasiswa">
    <div>
        <label class="font-medium" for="nim">NIM :</label>
        <input type="text" id="nim" name="nim"
            class="input w-full input-ghost focus:ring-blue-500 ring-blue-500 ring-1 shadow-md mb-2"
            placeholder="Masukan NIM">
        @error('nim')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label class="font-medium " for="jurusan">Jurusan :</label>
        <input type="text" id="jurusan" name="jurusan"
            class="input w-full input-ghost focus:ring-blue-500 ring-blue-500 ring-1 shadow-md mb-2"
            placeholder="Masukan Jurusan">
        @error('jurusan')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label class="font-medium" for="universitas">Universitas :</label>
        <input type="text" id="universitas" name="universitas"
            class="input w-full input-ghost focus:ring-blue-500 ring-blue-500 ring-1 shadow-md mb-2"
            placeholder="Masukan Universitas">
        @error('universitas')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
</div>
