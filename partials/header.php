<header class="headerMenu shadow" id="headerBar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
        <div class="container">
            <a class="navbar-brand" href="<?php echo site_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="<?php echo get_bloginfo('name'); ?>">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarHeader">
                <?php
                wp_nav_menu(array(
                    'theme_location'        => 'header-nav',
                    'container'             => 'nav',
                    'menu_class'            => 'navbar-nav',
                    'list_item_class'       => 'nav-item',
                    'link_class'            => 'nav-link'
                ));
                ?>
            </div>
        </div>
    </nav>
</header>