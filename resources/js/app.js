import './bootstrap';
import Swal from 'sweetalert2';
import Alpine from 'alpinejs';

window.Swal = Swal;
window.Alpine = Alpine;

Alpine.start();


document.addEventListener('DOMContentLoaded', () => {

    const successMessageElement = document.getElementById('success-message');

    if (successMessageElement) {
        const message = successMessageElement.getAttribute('data-message');
        console.log(message);
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 7000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });

        Toast.fire({
            icon: 'success',
            title: `${message}`
        });
    }
});
