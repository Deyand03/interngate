const $ = (selector) => document.querySelector(selector);

const radioButtons = document.querySelectorAll('input[name="role"]');
const formMahasiswa = $('#form-mahasiswa');
const formMitra = $('#form-mitra');

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
