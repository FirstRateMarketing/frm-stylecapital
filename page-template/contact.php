<?php
/*
    Template name: contact
*/

get_header();

?>

<section class="contact">
    <div class="container">
        <div class="contact_grid">
            <div class="contact_info">
                <div>
                    <h1>Contact us</h1>
                    <p><?php echo get_field('description_contact') ?></p>
                </div>
                <div>
                    <h2>Colour and Style studio</h2>
                    <p><?php echo get_field('direction_contact') ?></p>
                </div>
            </div>
            <div class="contact_form">
                <?php echo do_shortcode('[gravityform id="1" title="true" ajax="true"]'); ?>
            </div>
            <div class="contact_map">
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<script>
    (g => {
        var h, a, k, p = "The Google Maps JavaScript API",
            c = "google",
            l = "importLibrary",
            q = "__ib__",
            m = document,
            b = window;
        b = b[c] || (b[c] = {});
        var d = b.maps || (b.maps = {}),
            r = new Set,
            e = new URLSearchParams,
            u = () => h || (h = new Promise(async (f, n) => {
                await (a = m.createElement("script"));
                e.set("libraries", [...r] + "");
                for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
                e.set("callback", c + ".maps." + q);
                a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
                d[q] = f;
                a.onerror = () => h = n(Error(p + " could not load."));
                a.nonce = m.querySelector("script[nonce]")?.nonce || "";
                m.head.append(a)
            }));
        d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n))
    })
    ({
        key: "AIzaSyDm16PUTSAsojL7diI8zmW3Df2lYU2mqxQ",
        v: "weekly"
    });
</script>
<script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>
<script>
    var locations = [{
        lat: 51.51585,
        lng: -0.15250
    }];

    async function initMap() {

        const {
            Map,
            InfoWindow
        } = await google.maps.importLibrary("maps");
        const {
            AdvancedMarkerElement
        } = await google.maps.importLibrary("marker");

        const position = {
            lat: 51.5159274,
            lng: -0.1525368
        };

        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 18,
            center: position,
            mapId: "efa54eadc0c22b2f",
            mapTypeControl: false,
            zoomControl: false,
            streetViewControl: false,
            fullscreenControl: false,
            rotateControl: false,
            scaleControl: false,
            panControl: false,
            clickableIcons: false,
            disableDefaultUI: true
        });

        // Función para obtener el tamaño del marcador según el ancho de la pantalla
        const updateMarkerSize = () => {
            const isLargeScreen = window.matchMedia("(min-width: 1200px)").matches;
            return {
                width: isLargeScreen ? "7.118vw" : "82.5px",
                height: isLargeScreen ? "8.333vw" : "100px",
            };
        };

        const markers = locations.map((position, i) => {
            const markerElement = document.createElement("div");
            // Actualizar el tamaño del marcador según el tamaño de pantalla
            const markerSize = updateMarkerSize();
            markerElement.style.width = markerSize.width;
            markerElement.style.height = markerSize.height;
            markerElement.classList.add('markerElement');
            markerElement.innerHTML = '<svg width="106" height="173" viewBox="0 0 106 173" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="52" cy="95" r="19" fill="#FAFBFB"/><circle cx="51.9982" cy="95.0001" r="13.6964" stroke="#F52E26" stroke-width="4.75"/><g filter="url(#filter0_d_1991_552)"><line x1="53" y1="47.5" x2="53" y2="97.5" stroke="#610200" stroke-width="5"/></g><path id="cross" d="M95.2897 42.4729L87.15 41.6366C77.8388 40.6818 68.4937 40.1265 59.1521 39.9538C62.2061 36.6492 65.074 33.1617 67.7082 29.4846L70.3865 25.7466L66.5672 28.3063C62.7072 30.8898 59.0403 33.717 55.5596 36.7541C55.3734 29.0478 54.8215 21.3652 53.887 13.7402L53.1218 7.5L52.3566 13.7402C51.4333 21.2953 50.8781 28.891 50.6907 36.5273C47.3658 33.4495 43.8546 30.5579 40.1369 27.8865L36.3684 25.1778L38.9552 29.0309C41.5319 32.8671 44.3388 36.5002 47.3353 39.947C37.8819 40.1096 28.4521 40.6682 19.0969 41.6366L11.0283 42.4729L19.0969 43.3058C28.3743 44.2674 37.7193 44.8227 47.0983 44.992C44.051 48.2899 41.1865 51.774 38.5353 55.4612L35.8266 59.2263L39.6798 56.6395C43.5498 54.0425 47.2134 51.2119 50.6907 48.1815C50.8769 55.8607 51.4288 63.5433 52.3566 71.2022L53.1218 77.5L53.887 71.2022C54.808 63.628 55.3599 56.0233 55.5495 48.4253C58.8846 51.5099 62.3991 54.4014 66.1135 57.056L69.8515 59.7342L67.2884 55.9149C64.7252 52.0855 61.9217 48.449 58.9117 44.992C68.3312 44.8261 77.7575 44.2708 87.1466 43.3058L95.2897 42.4729Z" fill="#F52E26"/><defs><filter id="filter0_d_1991_552" x="0.5" y="22.5" width="105" height="150" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/><feOffset dy="25"/><feGaussianBlur stdDeviation="25"/><feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/><feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1991_552"/><feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1991_552" result="shape"/></filter></defs></svg>';
            
            /*markerElement.style.backgroundImage = "url('<?php echo IMG; ?>/pin.svg')";
            markerElement.style.backgroundSize = "100%";
            markerElement.style.backgroundRepeat = "no-repeat";
            markerElement.style.backgroundPosition = "top";*/

            const marker = new google.maps.marker.AdvancedMarkerElement({
                position,
                content: markerElement,
            });

            return marker;
        });

        const markerCluster = new markerClusterer.MarkerClusterer({
            markers,
            map
        });

        // Evento para ajustar el tamaño del marcador dinámicamente al cambiar el tamaño de la ventana
        window.addEventListener("resize", () => {
            markers.forEach((marker) => {
                const markerSize = updateMarkerSize();
                marker.content.style.width = markerSize.width;
                marker.content.style.height = markerSize.height;
            });
        });
    }
    window.onload = initMap();
</script>