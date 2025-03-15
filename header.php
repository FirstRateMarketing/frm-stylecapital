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

    <header class="header">
        <div class="header_top">
            <div class="container">
                <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo get_bloginfo('name'); ?>" class="header_logo d-block w-100">
                    <img src="<?php echo IMG; ?>/logo.svg" title="<?php echo get_bloginfo('name'); ?>" alt="<?php echo get_bloginfo('name'); ?>" class="w-100" loading="lazy">
                </a>
            </div>
        </div>
    </header>
    <nav>
        <div class="header_bottom">
            <div class="container">
                <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => 'header_navigation')); ?>
            </div>
        </div>
    </nav>