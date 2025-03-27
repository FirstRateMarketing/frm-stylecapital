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
            speed: 2000,
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
                },
                768: {
                    perPage: 1,
                    autoWidth: false
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

    var x = window.matchMedia("(max-width: 1100px)"),
        action = 'mouseover';
    if(x.matches){action = 'click';}

    if(clothes && clotheContent){
        Array.from(clothes).forEach(clothe=>{
            clothe.addEventListener(action, (e)=>{
                e.preventDefault();
                let n = e.currentTarget.getAttribute('data-nro') ?? 1;
                clotheContent.setAttribute('data-state', n);
            })
        })
    }

    // ------------------------------------------------------------

    let select = document.getElementById("bcountry");

    if (select) {
        const allowedCountries = [
            { code: "GB", name: "United Kingdom" },
            { code: "US", name: "United States" },
            { code: "DE", name: "Germany" },
            { code: "IT", name: "Italy" },
            { code: "FR", name: "France" }
        ];
        select.innerHTML = "";

        allowedCountries.forEach(country => {
            let option = document.createElement("option");
            option.value = country.code;
            option.textContent = country.name;
            select.appendChild(option);
        });
    }

})();