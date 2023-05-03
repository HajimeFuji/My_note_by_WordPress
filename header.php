<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="キーワードでサイトを説明">
    <meta name="description" content="どんなサイトか短い文章で説明">
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
    </head>

<body  class="drawer drawer--right">
    <header>
        <nav class="header header-menu">
            <?php 
                wp_nav_menu( [
                    'theme_location' => 'main-menu' 
                    ] ); 
            ?>
        </nav>
        
        <button type="button" class="drawer-toggle drawer-hamburger">
            <span class="sr-only">toggle navigation</span>
            <span class="drawer-hamburger-icon"></span>
        </button>

        <nav class="drawer-nav" role="navigation">
            <?php 
                wp_nav_menu( [
                    'theme_location' => 'main-menu' 
                    ] ); 
            ?>
        </nav>
    
    </header>   