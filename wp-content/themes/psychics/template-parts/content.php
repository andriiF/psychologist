<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package psychics
 */
$posttext = $post->post_content;
$regex = '~<img [^\>]*\ />~';
preg_match_all($regex, $posttext, $images);
$posttext = preg_replace($regex, '', $posttext);
?>



<article id="post-<?php the_ID(); ?>"  class="col-md-4 article">
    <a href="<?php echo esc_url(get_permalink()); ?>">
        <figure>

            <?php echo $images[0][0]; ?>
        </figure>
        <div  class="description">

            <h4>
                <?php the_title(); ?>
            </h4>
            <p class="desc">
                <?php echo $posttext; ?>
            </p>
            <p class="date">  <?php psychics_posted_on(); ?></p>
        </div>
    </a>
</article>
