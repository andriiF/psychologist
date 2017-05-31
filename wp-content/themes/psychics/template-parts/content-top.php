<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package psychics
 */
?>
<section class="bgimage top-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text">
                <h1><?php echo get_bloginfo('description', 'display'); ?></h1>
            </div>
            <div class="col-md-6 girl">
                <figure>
                    <img src="/wp-content/themes/psychics/images/maingirl_07.png" alt=""/>
                </figure>
            </div>
        </div>
    </div>
    <div class="bottom-searcher">
        <?php
        get_search_small_form();
        ?>

    </div>
</section>