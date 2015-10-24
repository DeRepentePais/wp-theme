<?php
/**
 * The home template file.
 *
 * This is the file that responsable to show the principal page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package De_repente_pais
 */
get_header();
?>

<div id="primary" class="">
    <main id="main" class="" role="main">

        <!--Show Gallery News-->
        <?php derepentepais_static_gallery(); ?>

        <hr />

        <div class="row">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col s12 m4 l3">
                        <div class="">
                            <span>em</span>
                            <?php $cat = get_the_category(get_the_ID()) ?>
                            <a href="<?= get_category_link($cat->cat_ID) ?>">
                                <?php echo $cat[0]->name ?>
                            </a>
                        </div>
                        <a href="<?= the_permalink() ?>" title="<?= the_title() ?>">
                            <?php the_post_thumbnail('list') ?>
                            <?php the_title(); ?>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
