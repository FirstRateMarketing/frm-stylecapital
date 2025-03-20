(function() {

    function adjustBodyPadding() {
        const header = document.querySelector('.header');
        if (header) {
            const headerHeight = header.offsetHeight;
            document.body.style.paddingTop = `${headerHeight}px`;
        }
    }

    function toggleMobileMenu() {
        const toggleMenu = document.querySelector(".toggle_menu");
        const headerMobile = document.querySelector(".header_mobile");

        if (!toggleMenu || !headerMobile) return;

        let menuOpen = false;
        const menuImg = toggleMenu.getAttribute("data-menu");
        const closeImg = toggleMenu.getAttribute("data-close");

        toggleMenu.addEventListener("click", function () {
            menuOpen = !menuOpen;

            if (menuOpen) {
                toggleMenu.src = closeImg;
                headerMobile.classList.add("active");
            } else {
                toggleMenu.src = menuImg;
                headerMobile.classList.remove("active");
            }
        });
    }

    document.addEventListener("DOMContentLoaded", function() {
       // adjustBodyPadding();
        toggleMobileMenu();
    });

    //window.addEventListener("resize", adjustBodyPadding);

})();
