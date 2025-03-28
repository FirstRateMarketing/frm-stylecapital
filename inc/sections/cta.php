<section class="cta_banner">
    <div class="container">
        <div class="cta_banner-grid">
            <img src="<?php echo IMG; ?>/8.webp" class="left">
            <div class="cta_banner-content">
                <img src="<?php echo IMG; ?>/cta.svg">
    			<?php if(is_page('corporate-styling')): ?>
                    <h2>Get a custom quote</h2>
                    <a href="<?php echo esc_url(home_url('contact')); ?>" title="get in touch">get in touch</a>
                <?php else: ?>
                	<h2>Get a custom quote for your brand</h2>
                    <a href="<?php echo esc_url(home_url('contact')); ?>" title="find your power">find your power</a>
                <?php endif; ?>
            </div>
            <img src="<?php echo IMG; ?>/9.webp" class="right">
        </div>
    </div>
</section>