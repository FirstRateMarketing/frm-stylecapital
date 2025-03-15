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
                    <p>We’d love to hear from you!</p>
                </div>
                <div>
                    <h2>Colour and Style studio</h2>
                    <p>8 Duke Street, W1U 3EW, London</p>
                </div>
            </div>
            <div class="contact_form">
                <?php echo do_shortcode('[gravityform id="1" title="true" ajax="true"]'); ?>
            </div>
            <div class="contact_map">
                <img src="<?php echo IMG; ?>/map.png">
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>