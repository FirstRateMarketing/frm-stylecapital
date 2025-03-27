<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

    <?php if (is_404()): ?>
        <title><?php esc_attr_e("Error Page - 404"); ?></title>
    <?php else: ?>
        <title><?php echo wp_get_document_title(); ?></title>
    <?php endif; ?>

</head>

<body <?php body_class(); ?>>

    <?php if (is_front_page()): ?>
        <div class="loader">
            <div class="loader_animation">
                <img src="<?php echo IMG; ?>/animation1.svg" class="animation1" title="<?php echo get_bloginfo('name'); ?>" alt="<?php echo get_bloginfo('name'); ?>" loading="lazy">
                <img src="<?php echo IMG; ?>/animation2.svg" class="animation2" title="<?php echo get_bloginfo('name'); ?>" alt="<?php echo get_bloginfo('name'); ?>" loading="lazy">
                <img src="<?php echo IMG; ?>/animation3.svg" class="animation3" title="<?php echo get_bloginfo('name'); ?>" alt="<?php echo get_bloginfo('name'); ?>" loading="lazy">
            </div>
        </div>
    <?php endif; ?>

    <header class="header">
        <div class="header_top">
            <div class="container">
                <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo get_bloginfo('name'); ?>" class="header_logo d-block w-100">
                    <img src="<?php echo IMG; ?>/logo.svg" title="<?php echo get_bloginfo('name'); ?>" alt="<?php echo get_bloginfo('name'); ?>" class="w-100" loading="lazy" width="898" height="50">
                </a>
                <?php if (!is_page('subscription-successful')): ?>
                    <img class="toggle_menu" src="<?php echo IMG; ?>/menu-mobile.svg" data-menu="<?php echo IMG; ?>/menu-mobile.svg" data-close="<?php echo IMG; ?>/close.svg" title="Men&uacute;" alt="Men&uacute;" width="30" height="30">
                <?php endif; ?>
            </div>
        </div>
    </header>
    <?php if (!is_page('subscription-successful') && !is_page('subscription-payment')): ?>
        <nav>
            <div class="header_bottom">
                <div class="container">
                    <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => 'header_navigation')); ?>
                </div>
            </div>
            <div class="header_mobile">
                <div class="container">
                    <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => 'header_navigation')); ?>
                </div>
            </div>
        </nav>
    <?php endif; ?>