const $ = (selector) => document.querySelector(selector);

const radioButtons = document.querySelectorAll('input[name="role"]');
const formMahasiswa = $('#form-mahasiswa');
const formMitra = $('#form-mitra');


const inputFoto = document.getElementById('foto_profil_input');
const previewImage = document.getElementById('preview_foto');
const tombolSimpan = document.getElementById('tombol_simpan_foto');

inputFoto.addEventListener('change', function (event) {
    // Cek apakah user memilih file
    if (event.target.files && event.target.files[0]) {
        // Buat URL sementara untuk file yang dipilih
        const reader = new FileReader();
        reader.onload = function (e) {
            // Ganti src gambar pratinjau dengan URL sementara
            previewImage.src = e.target.result;
        }
        reader.readAsDataURL(event.target.files[0]);

        // Tampilkan tombol simpan
        tombolSimpan.classList.remove('hidden');
    }
});
document.addEventListener('DOMContentLoaded', function () {
    const urlParams = new URLSearchParams(window.location.search);

    if (urlParams.has('search') || urlParams.has('category')) {

        const targetElement = document.getElementById('list-perusahaan');
        console.log(targetElement)
        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    }
});


function showForm(formToShow, formToHide) {
    formToShow.classList.remove('hidden');

    setTimeout(() => {
        formToShow.classList.remove('opacity-0');
        formToShow.classList.add('opacity-100');
    }, 10);

    formToHide.classList.add('opacity-0');
    formToHide.classList.remove('opacity-100');

    setTimeout(() => {
        formToHide.classList.add('hidden');
    }, 10);
}
radioButtons.forEach(radio => {
    radio.addEventListener('click', () => {
        if (radio.value === 'mahasiswa' && radio.checked) {
            showForm(formMahasiswa, formMitra);
        } else if (radio.value === 'mitra' && radio.checked) {
            showForm(formMitra, formMahasiswa);
        }
    });
});
