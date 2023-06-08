<?php get_header(); ?>

<main class="main">
    <div class="main-flex">
        <div class="top-wrap">   
            <section class="outdoors-wrap">
                <div class="outdoors-content">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="outdoors-single" >
                            <h2><?php the_field('blog_date'); ?>_<?php the_title(); ?></h2>
                            <div class="outdoors-single__txt">
                                <?php the_content(); ?>
                            </div>
                            <a href="<?php the_field('blog_album'); ?> "target="_blank" rel="noopener noreferrer"><p class="outdoors-single__txt">アルバム</p></a>
                            <?php the_post_thumbnail(array(600,450)); ?>

                        </div>
                    <?php endwhile; ?><?php else : ?>
                        <p>新着記事はありません</p>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </section>
        </div>
        <div class="original-sidebar">
            <div>
                <?php get_sidebar(); ?>
            </div>
            <div>
                <?php dynamic_sidebar('main-sidebar'); ?>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>