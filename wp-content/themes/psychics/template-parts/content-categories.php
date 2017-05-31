<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package psychics
 */
$categories = get_categories();
?>


<section class="topbox-section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 header-group">
                <hgroup>
                    <h2>Trending psychics categories</h2>
                    <h4>Chose from our Most Popular Psychics Services</h4>
                </hgroup>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($categories as $category) {
                $image = z_taxonomy_image_url($category->term_id);
                echo '<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                        <p>' . $category->name . '</p>
                <figure>
                    <img src=' . $image . ' alt=""/>
                </figure>
            </div>';
            }
            ?>
        </div>
    </div>
</section>
