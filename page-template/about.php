<?php
/*
    Template name: about
*/

get_header();

?>

<main class="hero hero_about">
    <div class="container">
        <div class="hero_about-banner">
            <img src="<?php echo IMG; ?>/12.png">
            <h1><?php echo get_field('title_banner') ?? ''; ?></h1>
        </div>
        <div class="hero_about-content">
            <div class="content">
                <h2><?php echo get_field('subtitle_banner') ?? ''; ?></h2>
                <p><?php echo get_field('description_banner') ?? ''; ?></p>
            </div>
            <img src="<?php echo IMG; ?>/14.png">
        </div>
    </div>
</main>

<?php if (have_rows('reasons')): ?>
    <section class="why">
        <div class="container">
            <h2>Why I do this</h2>
            <div class="why_content">
                <div class="why_col">
                    <?php while (have_rows('reasons')): the_row(); ?>
                        <div class="why_tab">
                            <span>0<?php echo get_row_index(); ?></span>

                            <?php if (!empty(get_sub_field('title_reasons'))): ?>
                                <h3><?php echo get_sub_field('title_reasons'); ?></h3>
                            <?php endif; ?>

                            <?php if (!empty(get_sub_field('description_reasons'))): ?>
                                <p><?php echo get_sub_field('description_reasons'); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="why_image">
                    <?php if (!empty(get_field('image_why'))): ?>
                        <img
                            src="<?php echo get_field('image_why')['url'] ?>"
                            title="<?php echo get_field('image_why')['title'] ?>"
                            alt="<?php echo get_field('image_why')['alt'] ?>"
                            width="<?php echo get_field('image_why')['width'] ?>"
                            height="<?php echo get_field('image_why')['height'] ?>"
                            loading="lazy">
                    <?php else: ?>
                        <img src="<?php echo IMG; ?>/15.png" loading="lazy">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>