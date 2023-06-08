<?php 
/*
Template Name: ユーザー投稿
Template Post Type: page, post
*/
?>

<?php get_header();?>

<section class=blogpost-form-wrap>
    <h1>新規投稿</h1>
        <?php echo do_shortcode('[user-submitted-posts]'); ?>
</section>

<?php get_footer();?>