<?php
/*
    Template name: successful
*/

get_header();

?>

<div class="successful">
    <div class="container">
        <div class="successful_content">
            <h1>Thank you for subscribing 🎉</h1>
            <div class="content">
                <p>You're now part of Style Capital Monthly Edit for <b>Summer Monthly Edit.</b></p>
                <p>Each month, you'll receive a curated selection of fashion pieces, accesories, and exclusive deals tailored to your season. Keep an eye on your inbox for your first edit and event invites!</p>
                <p>Need help? Contact us at <b>info@stylecapital.com</b></p>
            </div>
            <a href="<?php echo esc_url(home_url('/')) ?>" title="back to homepage">back to homepage</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>