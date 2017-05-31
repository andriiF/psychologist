<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 *
 * @package psychics
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='//fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="page" class="site">
            <header id="masthead" class="site-header" role="banner">
                <div class="container-fluid header-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 logo">
                                <a href="<?php echo esc_url(home_url('/')); ?>">
                                    <img src="/wp-content/themes/psychics/images/Main-page_03.png" alt=""/>
                                </a>
                            </div>
                            <div class="col-md-5 col-sm-12 searcher">
                                <?php
                                get_search_form();
                                ?>
                            </div>
                            <div class = "col-md-4 col-sm-12 searcher">
                                <div class = "header-menu">
                                    <ul class = "d-flex  flex-wrap">
                                        <li>
                                            <a href = "<?php echo esc_url(home_url('/register')); ?>">Register</a>
                                        </li>
                                        <li>
                                            <a href = "<?php echo esc_url(home_url('/logging')); ?>">Sign in</a>
                                        </li>
                                        <li>
                                            <a href = "<?php echo esc_url(home_url('/join_to_us')); ?>" class = "button">Join as Psychic</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class = "navbar navbar-toggleable-md navbar-light">
                    <button class = "navbar-toggler navbar-toggler-right" type = "button" data-toggle = "collapse" data-target = "#navbarSupportedContent" aria-controls = "navbarSupportedContent" aria-label = "Toggle navigation">
                        <span class = "navbar-toggler-icon"></span>
                    </button>
                    <div class = "collapse navbar-collapse" id = "navbarSupportedContent">
                        <ul class = "navbar-nav mr-auto">
                            <?php
                            echo wp_nav_menu(array('theme_location' => 'menu-1', 'menu_id' => 'primary-menu'));
                            ?>
                        </ul>
                    </div>
                </nav>
            </header>

            <div id="content" class="site-content">
