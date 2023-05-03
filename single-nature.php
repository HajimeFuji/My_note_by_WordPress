<?php get_header(); ?>

<!-- main.main>article.article>.thumbnail+h1.head1 -->
<main class="main">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article class="article">
        <div class="thumbnail">
            <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail('large'); ?>
            <?php endif; ?>
        </div>
        <h1 class="head1"><?php the_title(); ?></h1>
        <?php the_date(); ?>
        <?php the_category(); ?>
        <?php the_content(); ?>
        <!-- <?php echo get_the_permalink(); ?> -->
    </article>

    <?php endwhile; ?><?php else : ?>
        <p>新着記事はありません</p>
    <?php endif; ?>

</main>

<?php get_footer(); ?>