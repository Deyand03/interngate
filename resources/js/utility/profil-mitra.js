const bannerInput = document.getElementById("bannerInput");
const bannerPreview = document.getElementById("bannerPreview");
const headerBanner = document.getElementById("headerBanner");
const fotoInput = document.getElementById("fotoInput");
const fotoPreview = document.getElementById("fotoPreview");

fotoInput.addEventListener("change", function () {
    const file = this.files[0];
    if (file) {
        fotoPreview.src = URL.createObjectURL(file);
    }
});

bannerInput.addEventListener("change", function () {
    const file = this.files[0];
    if (file) {
        const previewURL = URL.createObjectURL(file);
        bannerPreview.src = previewURL;
        headerBanner.src = previewURL; // ubah header juga
    }
});

btnEdit.addEventListener('click', function () {
    // Ambil nilai lama untuk diisi ke form
    document.getElementById('input-nama').value = document.getElementById('view-nama').textContent;
    document.getElementById('input-deskripsi').value = document.getElementById('view-deskripsi').textContent;
    document.getElementById('input-telepon').value = document.getElementById('view-telepon').textContent;
    document.getElementById('input-alamat').value = document.getElementById('view-alamat').textContent;

    // Tampilkan form
    document.getElementById('form-edit').classList.remove('hidden');
    document.getElementById('form-edit').classList.add('grid');

})

updateBiodata.addEventListener('click', function (e) {
    e.preventDefault();

    // Update teks
    document.getElementById('view-nama').textContent = document.getElementById('input-nama').value;
    document.getElementById('view-deskripsi').textContent = document.getElementById('input-deskripsi').value;
    document.getElementById('view-telepon').textContent = document.getElementById('input-telepon').value;
    document.getElementById('view-alamat').textContent = document.getElementById('input-alamat').value;

    // Sembunyikan form lagi
    document.getElementById('form-edit').classList.add('hidden');
    document.getElementById('form-edit').classList.remove('grid');
})
