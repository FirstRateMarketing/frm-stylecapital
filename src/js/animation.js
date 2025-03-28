(function () {
    window.addEventListener('DOMContentLoaded', () => {
        // Verificamos si ya se mostró el loader antes
        const hasSeenLoader = localStorage.getItem('hasSeenLoader');
        const anim1 = document.querySelector('.animation1');
        const anim2 = document.querySelector('.animation2');
        const anim3 = document.querySelector('.animation3');
        const loader = document.querySelector('.loader');

        if (!hasSeenLoader && loader) {
            // Guardamos en localStorage que el loader ya se mostró
            localStorage.setItem('hasSeenLoader', 'true');

            // Detener rotación y mover .animation1
            if (anim1) {
                setTimeout(() => {
                    anim1.classList.remove('animation1');
                    anim1.classList.add('animation1', 'stop');
                }, 2000);
            }

            // A los 5.5 segundos: ocultar anim1 y anim2, mostrar anim3
            setTimeout(() => {
                if (anim1) anim1.classList.add('noshow');
                if (anim2) anim2.classList.add('noshow');
                setTimeout(() => {
                    if (anim3) anim3.classList.add('show');
                }, 500);
            }, 5500);

            // A los 7 segundos: ocultar anim3 y loader
            setTimeout(() => {
                if (anim3) anim3.classList.remove('show');
                if (anim3) anim3.classList.add('hide');
                setTimeout(() => {
                    if (loader) loader.classList.add('hidden');
                }, 500);
            }, 7000);

        } else {
            // Si ya lo vio, ocultamos directamente el loader por si acaso
            if (loader) loader.parentElement.removeChild(loader);
        }
    });
})();