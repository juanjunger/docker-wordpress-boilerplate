<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>   
        <!-- Meta Tags -->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="author" content="" />
        <meta name="publisher" content="" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="copyright" content="" />

        <!-- Facebook -->
        <meta property="og:image" content="" />
        <meta property="og:title" content="" />
        <meta property="og:description" content="" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="" />
        <meta property="og:locale" content="pt-br" />
        <meta property="fb:admins" content="" />

        <!-- Twitter -->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:title" content="" />
        <meta name="twitter:description" content="" />
        <meta name="twitter:image" content="" />

        <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
        
        <?php wp_head(); ?>
    </head>

    <body <?php #body_class(); ?>>
        <header>
            <div class="container">
                <div class="flex">
                    <div class="header__logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <h3><?php bloginfo('name'); ?></h3>
                        </a>
                    </div>
                    <div class="header__menu">
                        <nav>
                            <ul>
                                <li>
                                    <a href="">Repository</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <?php #wp_nav_menu( array( 'header-menu' => 'header-menu' ) ); ?>