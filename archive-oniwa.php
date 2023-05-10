<?php get_header(); ?>

<main class="main">

    <div class="main-flex">
        <div class="top-wrap">   
            <section class="outdoors-wrap">
                <h1>おにわごと</h1>
                <div class="outdoors-content">
                    <?php
                        $args = [
                            'post_type' => 'oniwa', //カスタム投稿タイプ名
                            'posts_per_page' => -1, //取得する投稿の件数
                            'orderby'   => 'date',
                        ];
                        $my_query = new WP_Query( $args );
                    ?>

                    <?php if ($my_query -> have_posts()) : ?>
                        <?php while ($my_query -> have_posts()) : $my_query -> the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                            <div class="oniwa-card" >
                                <P class="oniwa-card__title"><?php the_title(); ?></P>
                                <img class="oniwa-card__img" src="<?php the_field('oniwa_image'); ?>" alt="">
                                <p class="oniwa-card__txt">日時：<?php the_field('oniwa_date'); ?></p>
                                <p class="oniwa-card__txt">場所：<?php the_field('oniwa_place'); ?></p>
                            </div>
                        </a>

                    <?php endwhile; ?><?php else : ?>
                        <?php echo "表示する記事がありません"; ?>
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

<?php get_footer();