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
