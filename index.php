<?php get_header(); ?>
    <article>
        <section id="sec1-firstview">
            <h1><?php bloginfo('name'); ?></h1>
            <div>
                <p><?php bloginfo('description'); ?></p>
                <a href="/outdoors" class="btn">Outdoors</a>
                <a href="#sec5-contactform" class="btn">おうちごと</a>
            </div>
        </section>

        <section id="sec3-portfolio" class="slide-bottom" data-plugin-options='{"speed":300,"reverse": false}'>
            <h1>制作実績</h1>
            <div class="portfolio">
                <div class="portfolio-content">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb_01.png" alt="あいうえお建設様">
                    <h2>あいうえお建設様</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam hic, saepe quia, officia sequi id alias deleniti nemo excepturi molestias amet nostrum aspernatur laborum quaerat molestiae architecto culpa, ratione at.</p>
                </div>
                <div class="portfolio-content">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb_02.png" alt="かきくけこ産業">
                    <h2>かきくけこ産業様</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi vitae repudiandae a sit, quo ex omnis eligendi facilis animi fugiat, minus amet alias dignissimos maxime delectus. Ex dolor dolorum ipsa!</p>
                </div>
                <div class="portfolio-content">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb_03.png" alt="さしすせそ興業様">
                    <h2>さしすせそ興業様</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, autem consequuntur! Quae quibusdam eaque inventore, architecto at rerum. Consectetur placeat nostrum cupiditate similique corrupti quos officiis voluptatum ipsam optio veniam?</p>
                </div>
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

    </article>



    <button id="pagetop"><a href="#">page top</a></button>

    <div class="call_to_action">
        <a href="/page-backcountry">
            <div class="call_to_action__box">
                <p class="call_to_action__text">backcountry</p>
            </div>
        </a>
    </div>
    
    <div class="originl-sidebar">
        <?php dynamic_sidebar('main-sidebar'); ?>
    </div>
<?php get_footer(); ?>