<?php 
/*
Template Name: 採用ページ
Template Post Type: page
*/
?>

<?php get_header(); ?>
<!-- main.main>article.article>.thumbnail+h1.head1 -->
<main class="main">

    <article class="article">
        <h1 class="head1"><?php the_title(); ?></h1>
        <!-- チェックが入っている場合は表示 -->
        <?php if(get_field('is_recruiting')) : ?>
        <!-- カスタムフィールドに設定した職業、勤務地を表示 -->            
        <ul>
            <li>職業：<?php the_field('occupation') ?></li>
            <li>勤務地：<?php the_field('location') ?> </li>
        </ul>
        <!-- 募集中でない場合、"現在募集しておりません"と表示 -->
        <?php else : ?>
            <p>現在募集しておりません</p>
        <?php endif; ?>
    </article>

</main>

<?php get_footer(); ?>