<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package psychics
 */
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main container-fluid" role="main">

        <?php get_template_part('template-parts/content', 'top'); ?>

        <?php
        get_template_part('template-parts/content', 'categories');
        ?>
        <?php
        get_template_part('template-parts/content', 'psychics');
        ?>
        <?php
        get_template_part('template-parts/content', 'psychics_other');
        ?>


        <aside class = "articles-section">
            <div class = "container">
                <div class = "row">
                    <div class = "col-xs-12 header-group">
                        <hgroup>
                            <h2>Our Featured psychics</h2>
                            <h4>Chose from our Most Popular Psychics Services</h4>
                        </hgroup>
                    </div>
                </div>
                <div class = "row">
                    <?php
//Articles section>-->
                    $count = 0;
                    if (have_posts()) :
                        /* Start the Loop */
                        $posts = get_posts();
                        while (have_posts()) : the_post();

                            /*
                             * Include the Post-Format-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                             */
                            get_template_part('template-parts/content', get_post_format());
                        endwhile;

                        the_posts_navigation();

                    else :

                        get_template_part('template-parts/content', 'none');

                    endif;
                    ?>
                </div>
        </aside>
        <?php get_template_part('template-parts/content', 'sponsors'); ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
