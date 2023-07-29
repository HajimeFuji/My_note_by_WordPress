<?php 
/*
Template Name: ヘッダーレステンプレート
Template Post Type: page, post
*/
?>

<?php get_header("noheader"); ?>


<article>
    <section id="sec1-firstview">
        <h1><?php bloginfo('name'); ?></h1>
        <div>
            <p><?php bloginfo('description'); ?></p>
            <a href="/outdoors" class="btn">Outdoor</a>
            <a href="/ouchi" class="btn">おうちごと</a>
            <a href="/oniwa" class="btn">おにわごと</a>
            <a href="/blogall" class="btn">投稿一覧</a>
            <a href="/blogpost" class="btn">新規投稿</a>
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
                                            <p class="outdoors-top__txt"><?php the_field('outdoors_date'); ?>_<?php the_title(); ?></p>
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
                    <h1>投稿記事</h1>
                    <div class="blog-content">
                        <?php
                            $args = [
                                'post_type' => 'post', //ブログ投稿タイプ名
                                'posts_per_page' => 6, //取得する投稿の件数
                                'orderby'   => 'date',
                            ];
                            $my_query = new WP_Query( $args );
                        ?>
                        <?php if ($my_query -> have_posts()) : ?>
                            <?php while ($my_query -> have_posts()) : $my_query -> the_post(); ?>

                            <a href="<?php the_permalink(); ?>">
                                <div class="blog-card" >
                                    <div class="blog-card__img">
                                        <?php the_post_thumbnail('medium'); ?>
                                        <!-- <img src="<?php the_post_thumbnail('thumbnails'); ?>"> -->
                                    </div>
                                    <div>
                                        <p class="blog-card__txt"><?php the_field('blog_date'); ?>_<?php the_title(); ?></p>
                                        <!-- <p class="blog-card__txt"><?php the_title(); ?></p> -->
                                        <!-- <p class="blog-card__txt"><?php the_excerpt(); ?></p> -->
                                    </div>
                                </div>
                            </a>

                            <?php endwhile; ?><?php else : ?>
                                <?php echo "表示する記事がありません"; ?>
                        <?php endif; ?>

                    </div>
                </section>

                <div class="returnbox">
                    <a class="btn2__text" href="#">
                        <div class="btn2">
                            <p class="btn2__text">page top</p>
                        </div>
                    </a>
                </div>

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