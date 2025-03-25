<?php
/*
    Template name: consulting
*/

get_header();

?>

<main class="hero hero_consulting">
    <div class="hero_consulting-content">
        <h1><?php echo get_field('title_banner') ?? 'consulting'; ?></h1>
        <p><?php echo get_field('description_banner') ?? 'I’ve helped brands both large and small address the importance of colour and style in their collections'; ?></p>
    </div>
    <div class="hero_consulting-image">
        <?php if (!empty(get_field('image_banner'))): ?>
            <img
                src="<?php echo get_field('image_banner')['url'] ?>"
                title="<?php echo get_field('image_banner')['title'] ?>"
                alt="<?php echo get_field('image_banner')['alt'] ?>"
                width="<?php echo get_field('image_banner')['width'] ?>"
                height="<?php echo get_field('image_banner')['height'] ?>"
                loading="lazy">
        <?php else: ?>
            <img src="<?php echo IMG; ?>/6.jpg" loading="lazy">
        <?php endif; ?>
    </div>
</main>

<?php if (have_rows('item_blog')): ?>
    <section class="experienced">
        <div class="container">
            <?php if (!empty(get_field('title_blogger'))): ?>
                <h2><?php echo get_field('title_blogger') ?></h2>
            <?php endif; ?>
            <div class="experienced_list w-100">
                <?php while (have_rows('item_blog')): the_row(); ?>
                    <div class="experience">
                        <div class="experience_content">
                            <div class="content">
                                <h3><?php echo get_sub_field('title_item_blog'); ?></h3>
                                <?php echo get_sub_field('description_item_blog') ?? ''; ?>
                            </div>
                        </div>
                        <div class="experience_image">
                            <img
                                src="<?php echo get_sub_field('image_item_blog')['url'] ?>"
                                title="<?php echo get_sub_field('image_item_blog')['title'] ?>"
                                alt="<?php echo get_sub_field('image_item_blog')['alt'] ?>"
                                width="<?php echo get_sub_field('image_item_blog')['width'] ?>"
                                height="<?php echo get_sub_field('image_item_blog')['height'] ?>"
                                loading="lazy">
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php if (!empty(get_field('title_blogger_in_bottom'))): ?>
                <h3><?php echo get_field('title_blogger_in_bottom') ?></h3>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>

<?php get_template_part('inc/sections/cta'); ?>

<?php get_footer(); ?>