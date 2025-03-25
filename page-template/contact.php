<?php
/*
    Template name: contact
*/

get_header();

?>

<section class="contact">
    <div class="container">
        <div class="contact_grid">
            <div class="contact_info">
                <div>
                    <h1>Contact us</h1>
                    <p><?php echo get_field('description_contact') ?></p>
                </div>
                <div>
                    <h2>Colour and Style studio</h2>
                    <p><?php echo get_field('direction_contact') ?></p>
                </div>
            </div>
            <div class="contact_form">
                <?php echo do_shortcode('[gravityform id="1" title="true" ajax="true"]'); ?>
            </div>
            <div class="contact_map">
                <?php if (!empty(get_field('image_contact'))): ?>
                    <img
                        src="<?php echo get_field('image_contact')['url'] ?>"
                        title="<?php echo get_field('image_contact')['title'] ?>"
                        alt="<?php echo get_field('image_contact')['alt'] ?>"
                        width="<?php echo get_field('image_contact')['width'] ?>"
                        height="<?php echo get_field('image_contact')['height'] ?>"
                        loading="lazy">
                <?php else: ?>
                    <img loading="lazy" src="<?php echo IMG; ?>/map.png">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>