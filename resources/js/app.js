import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    window.addEventListener('success', event => {
        Swal.fire({
            icon: 'success',
            title: '¡Éxito!',
            text: event.detail,
        });
    });
});
