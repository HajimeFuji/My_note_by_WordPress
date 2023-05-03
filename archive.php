<?php get_header(); ?>

<main class="main">

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
</main>

<?php get_footer();