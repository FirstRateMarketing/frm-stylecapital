(function(){

    function adjustBodyPadding() {
        const header = document.querySelector('.header');
        if (header) {
            const headerHeight = header.offsetHeight;
            document.body.style.paddingTop = `${headerHeight}px`;
        }
    }
    
    document.addEventListener("DOMContentLoaded", adjustBodyPadding);
    window.addEventListener("resize", adjustBodyPadding);    

})();