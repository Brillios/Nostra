<button id="hamburger-menu" aria-label="Open Menu">☰</button>
<nav id="mobile-menu" class="off-canvas">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_id'        => 'primary-menu',
        'container'      => false,
    ));
    ?>
</nav>
<div id="overlay" class="overlay"></div>