<?php
/*
    Template name: purchase
*/

get_header();

?>

<section class="purchase">
    <div class="container">
        <h1>Choose a payment method</h1>
        <div class="purchase_box">
            <a href="<?php echo esc_url(home_url('/')) ?>" title="Back to subscription" class="backTo">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 18 10" fill="none">
                    <path d="M5.71429 10C5.71429 9.47 5.19071 8.67857 4.66071 8.01429C3.97929 7.15714 3.165 6.40929 2.23143 5.83857C1.53143 5.41071 0.682857 5 5.96244e-08 5M5.96244e-08 5C0.682857 5 1.53214 4.58929 2.23143 4.16143C3.165 3.59 3.97929 2.84214 4.66071 1.98643C5.19072 1.32143 5.71429 0.528571 5.71429 -7.54962e-07M5.96244e-08 5L17.1429 5" stroke="#504F4F" />
                </svg>
                Back to subscription
            </a>
            <?php the_content(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>