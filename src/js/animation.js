(function () {

    window.addEventListener('DOMContentLoaded', () => {
        const anim1 = document.querySelector('.animation1');
        const anim2 = document.querySelector('.animation2');
        const anim3 = document.querySelector('.animation3');
        const loader = document.querySelector('.loader');

        if(loader){

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
                setInterval(() => {
                    if (loader) loader.classList.add('hidden');
                }, 500);
            }, 7000);
            
        }
    });


})();