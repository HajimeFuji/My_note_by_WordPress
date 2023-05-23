<?php get_header(); ?>

<main class="main">
    <div class="main-flex">
        <div class="top-wrap">   
            <section class="outdoors-wrap">
                <div class="outdoors-content">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="outdoors-single" >
                            <!-- <h3><?php the_title(); ?></h3> -->
                            <img class="outdoors-single__img" src="<?php the_field('outdoors_image'); ?>" alt="">
                            <p class="outdoors-single__txt">日時：<?php the_field('outdoors_date'); ?></p>
                            <p class="outdoors-single__txt">場所：<?php the_field('outdoors_place'); ?></p>
                            <p class="outdoors-single__txt">メンバー：<?php the_field('outdoors_member'); ?></p>
                            <p class="outdoors-single__txt">メモ：<?php the_field('outdoors_memo'); ?></p>
                            <a href="<?php the_field('outdoors_album'); ?> "target="_blank" rel="noopener noreferrer"><p class="outdoors-single__txt">アルバム</p></a>
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