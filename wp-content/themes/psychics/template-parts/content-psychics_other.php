<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package psychics
 */
?>
<section class="central-section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 header-group">
                <hgroup>
                    <?php
                    global $wp_post_types;
                    $posts = get_posts(array(
                        'post_type' => 'psychics_other'
                    ));
                    ?>
                    <h2><?php echo $wp_post_types["psychics_other"]->labels->singular_name; ?></h2>
                    <h4><?php echo $wp_post_types["psychics_other"]->description; ?></h4>
                </hgroup>
            </div>
        </div>
        <div class="d-flex justify-content-center  flex-wrap">
            <?php
            foreach ($posts as $post):
                setup_postdata($post);
                echo '<div class="box-item image"><p class="name">' . $post->post_title . '</p>' . $post->post_content . '</div>';
            endforeach;
            wp_reset_query();
            ?>
        </div>
        <div class="big-button">
            <a href="#">Browse more Psychics</a>
        </div>
    </div>
</section>
