<?php get_header(); ?>

<article>
    <section id="sec1-firstview">
        <h1><?php bloginfo('name'); ?></h1>
        <div>
            <p><?php bloginfo('description'); ?></p>
            <a href="/outdoors" class="btn">Outdoors</a>
            <a href="/ouchi" class="btn">おうちごと</a>
        </div>
    </section>

    <main class="main">
        <div class="main-flex">
            <div class="top-wrap">   
                <section class="outdoors-wrap">
                    <h1>Outdoor活動</h1>
                    <div class="outdoors-top">
                            <?php
                                $args = [
                                    'post_type' => 'outdoors', //カスタム投稿タイプ名
                                    'posts_per_page' => 6, //取得する投稿の件数
                                    'orderby'   => 'date',
                                ];
                                $my_query = new WP_Query( $args );
                            ?>
                            <?php if ($my_query -> have_posts()) : ?>
                            <?php while ($my_query -> have_posts()) : $my_query -> the_post(); ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="outdoors-top__content" >
                                            <p class="outdoors-top__txt"><?php the_title(); ?></p>
                                            <!-- <p class="outdoors-top__txt">日時：<?php the_field('outdoors_date'); ?></p>
                                            <p class="outdoors-top__txt">場所：<?php the_field('outdoors_place'); ?></p> -->
                                            <div class="outdoors-top__line"></div>
                                        </div>
                                    </a>
                            <?php endwhile; ?><?php else : ?>
                                <?php echo "表示する記事がありません"; ?>
                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>
                    </div>
                </section>

                <section id="sec4-newblog" class="slide-bottom" data-plugin-options='{"speed":300,"reverse": false}'>
                    <h1>新着記事</h1>
                    <div class="blog">

                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>

                        <div class="blog-content" >
                            <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('thumbnails'); ?>
                            <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb_01.png" alt="ブログ1サムネイル">
                            <?php endif; ?>
                            <div class="blog-info">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_excerpt(); ?></p>
                                <a href="#"><i class="fas fa-globe-americas"></i><?php the_category(); ?></a>
                                <a href="#"><i class="fas fa-globe-americas"></i><?php the_time(); ?></a>
                                <a href="#"><i class="fas fa-globe-americas"></i><?php echo get_the_date('Y/m/d'); ?></a>
                            </div>
                        </div>

                        <?php endwhile; ?><?php else : ?>

                            <?php echo "表示する記事がありません"; ?>
                    <?php endif; ?>

                    </div>
                </section>

                <button id="pagetop"><a href="#">page top</a></button>

                <!-- <div class="call_to_action">
                    <a href="/page-backcountry">
                        <div class="call_to_action__box">
                            <p class="call_to_action__text">Topへ</p>
                        </div>
                    </a>
                </div> -->
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
</article>





<?php get_footer(); ?>