<?php

?>
<header id="site-header" class="site-header" role="banner">
    <div class="site-logo">
        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo.png" alt="<?php bloginfo('name'); ?>">
        </a>
    </div>
    <nav id="site-navigation" class="main-navigation" role="navigation">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_id'        => 'primary-menu',
        )); ?>
    </nav>
</header>