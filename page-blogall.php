<?php get_header(); ?>

<main class="main">

    <div class="main-flex">
        <div class="top-wrap">   
            <section class="outdoors-wrap">
                <h1>投稿一覧</h1>
                <div class="ouchi-content">
                    <?php
                        $args = [
                            'post_type' => 'post', //投稿
                            'posts_per_page' => -1, //取得する投稿の件数
                            'orderby'   => 'date',
                        ];
                        $my_query = new WP_Query( $args );
                    ?>

                    <table class="table_list">      
                        <thead>
                            <tr>
                                <th>日付</th>
                                <th>イベント</th>
                                <th>内容</th>
                                <th>Photo</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <?php if ($my_query -> have_posts()) : ?>
                                <?php while ($my_query -> have_posts()) : $my_query -> the_post(); ?>
                                    <tr>
                                        <th><p><?php the_field('blog_date'); ?></p></th>
                                        <td><p><?php the_title(); ?></p></td>
                                        <td><p><?php the_content(); ?></p></td>
                                        <td class="table-photo">
                                            <a href="<?php the_field('blog-album'); ?> "target="_blank" rel="noopener noreferrer">link</a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                                <?php else : ?>
                                    <?php echo "表示する記事がありません"; ?>
                                <?php endif; ?>
                            <?php wp_reset_postdata(); ?>
                        
                        </tbody>
                    </table>
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

<?php get_footer();