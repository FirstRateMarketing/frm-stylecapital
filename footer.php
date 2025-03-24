<?php if(!is_page('subscription-successful') && !is_page('subscription-payment')): ?>
<footer class="footer">
    <div class="container">
        <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo get_bloginfo('name'); ?>" class="footer_logo d-block w-100">
            <img src="<?php echo IMG; ?>/logo-footer.svg" title="<?php echo get_bloginfo('name'); ?>" alt="<?php echo get_bloginfo('name'); ?>" class="w-100" loading="lazy">
        </a>
        <div class="footer_credits">
            <p>Colour and Style studio</p>
            <p>8 Duke Street, W1U 3EW, London</p>
        </div>
    </div>
</footer>
<?php endif; ?>

<?php wp_footer(); ?>

</body>

</html>