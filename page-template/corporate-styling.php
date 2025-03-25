<?php
/*
    Template name: corporate
*/

get_header();

?>

<main class="hero hero_corporate">
    <div class="container">
        <div class="hero_corporate-head">
            <h1><?php echo get_field('title_banner'); ?></h1>
            <p><?php echo get_field('description_banner'); ?></p>
        </div>
        <div class="hero_corporate-body">
            <img src="<?php echo IMG; ?>/10.jpg">
            <div class="hero_corporate-content">
                <div class="content">
                    <h2><?php echo get_field('subtitle_banner'); ?></h2>
                    <p><?php echo get_field('subdescription_banner'); ?></p>
                </div>
                <img src="<?php echo IMG; ?>/11.png">
            </div>
        </div>
    </div>
</main>

<section class="text">
    <div class="container">
        <div class="text_box">
            <?php if (!empty(get_field('description_full'))): ?>
                <?php echo get_field('description_full'); ?>
            <?php else: ?>
                <p>I offer bespoke group or one to one styling events for women’s networks, for internal team building exercises, for external client events, for women returners, for women switching to entirely different job sectors that require very different wardrobes, and for those who simply need more polish after being promoted to bigger roles.</p>
                <p>I course-correct graduate trainees or people early in their careers who haven’t ‘understood the corporate dressing assignment’ and haven’t made the transition from student/festival dressing to a corporate yet still true-to-themselves wardrobe. Early in your career, you want the judgements that are made about you to be accurate and helpful, to be built on your abilities and your personality. Do not undermine yourself or distract from your capabilities by thoughtless non-strategic dressing every morning.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_template_part('inc/sections/cta'); ?>

<?php get_footer(); ?>