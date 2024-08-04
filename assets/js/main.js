document.addEventListener('DOMContentLoaded', function () {
    function initMobileMenu() {
        var hamburger = document.getElementById('hamburger-menu');
        var mobileMenu = document.getElementById('mobile-menu');
        var overlay = document.getElementById('overlay');

        if (hamburger && mobileMenu && overlay) {
            hamburger.addEventListener('click', function () {
                mobileMenu.classList.toggle('open');
                overlay.classList.toggle('active');
            });

            overlay.addEventListener('click', function () {
                mobileMenu.classList.remove('open');
                overlay.classList.remove('active');
            });
        } else {
            console.error('One or more elements are missing: hamburger-menu, mobile-menu, overlay');
        }
    }

    function checkScreenSize() {
        if (window.innerWidth <= 1140) {
            initMobileMenu();
        }
    }

    checkScreenSize();
    window.addEventListener('resize', checkScreenSize);
});