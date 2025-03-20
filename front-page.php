<?php
/*
    Template name: homepage
*/

get_header();
?>

<main class="hero hero_frontpage">
    <div class="container">
        <div class="hero_frontpage-title">
            <h1>Style is a Currency</h1>
            <p>It gets you the things you want</p>
        </div>
        <div class="hero_frontpage-image">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?php echo IMG; ?>/Hero.png">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo IMG; ?>/Hero.png">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo IMG; ?>/Hero.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<section class="most_important">
    <div class="container">
        <h2>You are your most important asset.</h2>
        <div class="most_important-grid">
            <div class="w-100">
                <img src="<?php echo IMG; ?>/1.png">
            </div>
            <div class="most_important-content w-100">
                <div class="content">
                    <p>Your wardrobe is an investment that you ultimately make in yourself.</p>
                    <p>I view building a wardrobe in the same way I view building an investment portfolio.</p>
                    <p>Correct allocation of capital is key, regardless of your budget. Whether you are an intern or a CEO, you should have strategy that fits your investment objectives.</p>
                </div>
                <a href="#">find your power</a>
            </div>
        </div>
        <div class="most_important-float">
            <img src="<?php echo IMG; ?>/2.jpg">
            <div class="most_important-message content">
                <p>Like any portfolio, it should be monitored and rebalanced as you, your body, your lifestyle, and your career evolve and change.</p>
                <p>Strategy and discipline are the way to build a good wardrobe or a good portfolio</p>
            </div>
        </div>
    </div>
</section>

<section class="colours">
    <div class="container">
        <h2>Here’s How We Identify the Colours and Styles That Suit You.</h2>
        <div class="colours_content" data-state="1">
            <div class="colours_tabs w-100">
                <div class="tab" data-nro="1">
                    <span>01</span>
                    <h3>Find your seasonal palette</h3>
                    <p>Examining your skin tone against a selection of 150 coloured drapes, I determine your undertone, your seasonal palette, and then pinpoint your absolute knockout colours.</p>
                </div>
                <div class="tab" data-nro="2">
                    <span>02</span>
                    <h3>Discover your core style</h3>
                    <p>We dig deep into your personality, preferences, body proportions and face shape to uncover your inherent style, aligning your wardrobe with your essence.</p>
                </div>
                <div class="tab" data-nro="3">
                    <span>03</span>
                    <h3>Curate a smart wardrobe</h3>
                    <p>With your personalized colours and style in mind, we’ll build a wardrobe that works hard for you, ensuring every piece is an investment.</p>
                </div>
            </div>
            <div class="colours_images w-100">
                <div class="image">
                    <img src="<?php echo IMG; ?>/20.jpg">
                </div>
                <div class="image">
                    <img src="<?php echo IMG; ?>/21.jpg">
                </div>
                <div class="image">
                    <img src="<?php echo IMG; ?>/22.jpg">
                </div>
            </div>
        </div>
        <a href="#">learn more</a>
    </div>
</section>

<section class="judgement">
    <div class="container">
        <h2>Humans assess someone they meet in one tenth of a second and rarely pivot from that judgement.</h2>
        <div class="judgement_grid">
            <div class="w-100">
                <img src="<?php echo IMG; ?>/3.jpg">
            </div>
            <div class="w-100">
                <div class="content">
                    <h3>We are wired to process visual data faster than any other kind.</h3>
                    <p> Even if you don’t give your style a lot of thought, others around you are constantly processing whatever visual data you are sending out.</p>
                    <p>It is crucial to get perception right, especially if you are early in your career, interviewing, on a date, or in a client-facing or investor-facing role. If your first impression doesn’t broadcast capable, trustworthy, talented, and confident, you’re unlikely to ever be perceived or treated like a leader later.</p>
                </div>
                <div class="judgement-author">
                    <h4>You can never be overdressed or overeducated</h4>
                    <p>— Oscar Wilde</p>
                </div>
                <a href="" title="find your power">find your power</a>
            </div>
        </div>
    </div>
</section>

<section class="portfolio">
    <div class="container">
        <h2>my role as a style strategist is to make sure every single item you buy makes Economic sense in your wardrobe portfolio.</h2>
        <div class="portfolio_grid">
            <div class="portfolio_grid-left">
                <img src="<?php echo IMG; ?>/4.png">
                <div class="w-100">
                    <p>Also, we don’t wastefully discard everything you have, I make adjustments, and then make sure you stay in your palette for future purchases so everything works together easily.</p>
                    <p>To paraphrase Maya Angelou, “When we know better, we do better” … and we invest smarter in the future. </p>
                </div>
            </div>
            <div class="portfolio_grid-right">
                <div class="w-100">
                    <h3>You have to buy clothes, why not do it with strategy, intention, and thought?</h3>
                    <p>A good deal is not necessarily a good buy. I focus the bulk of your investment on the section of your wardrobe that you wear every day, not on what you wear to attend a wedding or other event.</p>
                </div>
                <img src="<?php echo IMG; ?>/5.jpg">
            </div>
        </div>
    </div>
</section>

<section class="monthly_edit">
    <div class="container">
        <div class="monthly_edit-head">
            <h2>the style capital monthly edit</h2>
            <p>Subscribe for <b>£100/month</b> and receive a curated selection of fashion and accessories, exclusive deals, and invitations to both online and in-person community events tailored to your season.</p>
        </div>
        <div class="monthly_edit-body">
            <div>
                <?php echo do_shortcode( '[pmpro_membership_levels_select]' ); ?>
            </div>
            <a href="#">SUBSCRIBE NOW</a>
        </div>
    </div>
</section>

<section class="clients">
    <div class="w-100 relative">
        <div class="container">
            <h2>Clients owning their colours</h2>
        </div>
        <div class="clients_box">
            <div class="clients_slider">
                <div class="splide" role="group" id="clients">
                    <div class="splide__arrows">
                        <button class="splide__arrow splide__arrow--prev">
                            <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.66667 0.167968C6.66667 0.786302 6.05583 1.70964 5.4375 2.48464C4.6425 3.48464 3.6925 4.35714 2.60333 5.02297C1.78667 5.52214 0.796667 6.0013 2.54983e-07 6.0013M2.54983e-07 6.0013C0.796667 6.0013 1.7875 6.48047 2.60333 6.97964C3.6925 7.6463 4.6425 8.5188 5.4375 9.51714C6.05583 10.293 6.66667 11.218 6.66667 11.8346M2.54983e-07 6.0013L20 6.0013" stroke="#080707" />
                            </svg>
                            Prev
                        </button>
                        <button class="splide__arrow splide__arrow--next">
                            Next
                            <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.3333 0.167968C13.3333 0.786302 13.9442 1.70964 14.5625 2.48464C15.3575 3.48464 16.3075 4.35714 17.3967 5.02297C18.2133 5.52214 19.2033 6.0013 20 6.0013M20 6.0013C19.2033 6.0013 18.2125 6.48047 17.3967 6.97964C16.3075 7.6463 15.3575 8.5188 14.5625 9.51714C13.9442 10.293 13.3333 11.218 13.3333 11.8346M20 6.0013L2.21854e-07 6.0013" stroke="#080707" />
                            </svg>
                        </button>
                    </div>
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php for ($i = 0; $i < 3; $i++): ?>
                                <li class="splide__slide">
                                    <div class="clientbox relative">
                                        <img src="<?php echo IMG; ?>/shadow.svg" class="absolute">
                                        <div class="clientbox-span absolute">
                                            <p>blue autumn</p>
                                        </div>
                                        <div class="clientbox-title">
                                            <h3>What an incredible experience it was having Lisa do my colour analysis!</h3>
                                        </div>
                                        <div class="clientbox-description">
                                            <p>Not only have I now changed much of my wardrobe but I feel much more confident wearing clothes in colours that REALLY work for me. I receive so many comments now from friends and work colleagues saying “that colour looks great on you!” Lisa is a joy to spend time with and taught me so much about colour and fashion. I wholeheartedly recommend Lisa’s services! If you are in London, go!</p>
                                        </div>
                                        <div class="clientbox-author">
                                            <p>katie</p>
                                        </div>
                                    </div>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<script>
    var swiper3 = new Swiper(".mySwiper", {
        grabCursor: true,
        effect: "creative",
        centeredSlides: true,
        rewind: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        creativeEffect: {
            prev: {
                shadow: true,
                translate: ["0%", 0, -1],
            },
            next: {
                translate: ["100%", 0, 0],
            },
        },
    });
</script>