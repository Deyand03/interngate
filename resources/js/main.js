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

    const bannerInput = document.getElementById("bannerInput");
    const bannerPreview = document.getElementById("bannerPreview");
    const headerBanner = document.getElementById("headerBanner");
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
})

document.addEventListener('DOMContentLoaded', () => {
    console.log('DOM fully loaded and parsed');
    const $ = (selector) => document.querySelector(selector);

    const radioButtons = document.querySelectorAll('input[name="role"]');
    const formMahasiswa = $('#form-mahasiswa');
    const formMitra = $('#form-mitra');
    const btnEdit = $('#btn-edit');
    const updateBiodata = $('#update-biodata');

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

    const fotoInput = document.getElementById("fotoInput");
    const fotoPreview = document.getElementById("fotoPreview");
    fotoInput.addEventListener("change", function () {
        const file = this.files[0];
        if (file) {
            fotoPreview.src = URL.createObjectURL(file);
        }
    });
})
