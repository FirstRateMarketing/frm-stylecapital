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

    let tabs = document.querySelectorAll('.tab'),
        tabContent = document.querySelector('.colours_content');

    if(tabs && tabContent){
        Array.from(tabs).forEach(tab=>{
            tab.addEventListener('click', (e)=>{
                e.preventDefault();
                let n = e.currentTarget.getAttribute('data-nro') ?? 1;
                tabContent.setAttribute('data-state', n);
            })
        })
    }

    // ------------------------------------------------------------

    let clothes = document.querySelectorAll('.clothe'),
        clotheContent = document.querySelector('.clothes_body');

    if(clothes && clotheContent){
        Array.from(clothes).forEach(clothe=>{
            clothe.addEventListener('mouseover', (e)=>{
                e.preventDefault();
                let n = e.currentTarget.getAttribute('data-nro') ?? 1;
                clotheContent.setAttribute('data-state', n);
            })
        })
    }

})();