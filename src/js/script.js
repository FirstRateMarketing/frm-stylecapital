import { Splide } from '@splidejs/splide';
import "@splidejs/splide/css";

(function(){

    if(document.querySelector('#clients')){
        new Splide('#clients', {
            drag: false,
            autoWidth: true,
            arrows: true,
            pagination: false,
            gap: '2.222vw',
            padding: {
                left: '5.278vw',
                right: '5.278vw',
            },
            breakpoints: {
                1200: {
                    gap: '26px',
                    padding: {
                        left: '4%',
                        right: '4%',
                    },
                }
            }
        }).mount();
    }

})();