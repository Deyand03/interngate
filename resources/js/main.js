const $ = (selector) => {
    return document.querySelector(selector);
}

const role_mahasiswa = $('#mahasiswa');
const role_mitra = $('#mitra');
const form_mitra = $('#form-mitra');
const form_mahasiswa = $('#form-mahasiswa');

role_mitra.addEventListener('click', () => {
    if (role_mitra.checked) {
        form_mitra.classList.remove('hidden');
        form_mitra.classList.remove('opacity-0');
        form_mitra.classList.add('opacity-100');
        form_mahasiswa.classList.add('hidden');
    }
    else if (role_mitra.unchecked) {
        form_mitra.classList.add('hidden');
        form_mahasiswa.classList.remove('hidden');
        form_mahasiswa.classList.add('opacity-0');
        form_mahasiswa.classList.remove('opacity-100');
    }
    form_mitra.style.transition = 'opacity 0.3s ease';

})
role_mahasiswa.addEventListener('click', () => {
    if (role_mahasiswa.checked) {
        form_mahasiswa.classList.remove('hidden');
        form_mitra.classList.add('hidden');
        form_mahasiswa.classList.add('opacity-100');
        form_mahasiswa.classList.remove('opacity-0');
    }
    else if (role_mahasiswa.unchecked) {
        form_mahasiswa.classList.add('hidden');
        form_mitra.classList.remove('hidden');
        form_mitra.classList.add('opacity-0');
        form_mitra.classList.remove('opacity-100');
    }
    form_mahasiswa.style.transition = 'opacity 0.3s ease';
})
