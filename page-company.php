<?php get_header(); ?>
<!-- main.main>article.article>.thumbnail+h1.head1 -->
<main class="main">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article class="article">
        <h1 class="head1"><?php the_title(); ?></h1>
        <ul>
            <li>会社名：<?php the_field('company_name')  ?></li>
            <li>所在地：<?php the_field('company_address') ?> </li>
            <li>事業内容：<?php the_field('company_business') ?> </li>
        </ul>
    </article>

    <?php endwhile; ?><?php else : ?>
        <p>新着記事はありません</p>
    <?php endif; ?>

</main>

<?php get_footer(); ?>