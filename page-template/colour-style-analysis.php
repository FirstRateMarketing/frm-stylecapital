<?php
/*
    Template name: analysis
*/

get_header();

?>

<main class="hero hero_colours relative">
    <div class="hero_colours-title">
        <h1>colour and style analysis session</h1>
    </div>
    <div class="hero_colours-image">
        <img src="<?php echo IMG; ?>/18.png">
    </div>
    <img src="<?php echo IMG; ?>/19.png" class="absolute">
</main>

<section class="wheel">
    <div class="container">
        <div class="wheel_head">
            <h2>The colour wheel is divided into 4 sections</h2>
            <p>We name each section after seasons to be descriptive:</p>
        </div>
        <img src="<?php echo IMG; ?>/colour-wheel.svg">
        <div class="wheel_list">
            <div>
                <h3>Spring</h3>
                <p>Warm, bright, clear, and splashy. These are the colours of citrus fruits, fresh green shoots, tulips, hibiscus, terracotta pots, and warm aqua blue mediterranean seas.</p>
            </div>
            <div>
                <h3>Summer</h3>
                <p>Cool, smoky, pastel, muted shades. Summer berries, plums, sweet peas, hydrangeas, bluebells and pastel English garden colours.</p>
            </div>
            <div>
                <h3>Autumn</h3>
                <p>Rich, soft, warm and earthy. Moss, chestnuts, autumn leaves, cinnamon, olives, spice-rack colours.</p>
            </div>
            <div>
                <h3>Winter</h3>
                <p>Cool, saturated, clear colours, high contrast. Rich holly green, bright red berries, snow, wet slate, bright arctic skies, jewel tones.</p>
            </div>
        </div>
    </div>
</section>

<section class="clothes">
    <div class="container">
        <div class="clothes_head">
            <h2>i find green is the easiest colour to see the difference between warm and cool shades. why?</h2>
            <p>Because it is a mix of yellow, the primary warm colour, and blue, the primary cool colour.</p>
        </div>
        <div class="clothes_body" data-state="1">
            <div class="pagination">
                <div class="pagination-dot"></div>
            </div>
            <div class="clothes-box">
                <div class="clothe" data-nro="1">
                    <div class="clothe_image">
                        <img src="<?php echo IMG; ?>/clothe/1.png">
                    </div>
                    <div class="clothe_info">
                        <h3>Spring Green</h3>
                    </div>
                </div>
                <div class="clothe" data-nro="2">
                    <div class="clothe_image">
                        <img src="<?php echo IMG; ?>/clothe/2.png">
                    </div>
                    <div class="clothe_info">
                        <h3>Summer Green</h3>
                    </div>
                </div>
                <div class="clothe" data-nro="3">
                    <div class="clothe_image">
                        <img src="<?php echo IMG; ?>/clothe/3.png">
                    </div>
                    <div class="clothe_info">
                        <h3>Autumn Green</h3>
                    </div>
                </div>
                <div class="clothe" data-nro="4">
                    <div class="clothe_image">
                        <img src="<?php echo IMG; ?>/clothe/4.png">
                    </div>
                    <div class="clothe_info">
                        <h3>Winter Green</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="clothes_footer">
            <div>
                <h4>If you were mixing paints to make the Spring or Autumn greens above, you would add a higher proportion of yellow pigment. To make the Summer and Winter greens, you would instead add more blue pigment.</h4>
            </div>
            <div>
                <p>To apply this simple art concept to your colour analysis, your skin has either a warm or a cool undertone. It is also either bright or soft in colour.  You will look harmonious and vibrant when the ‘adjacent colour’ (the clothing near your face) matches that undertone.  </p>
                <a href="" title="book your colour analysis">book your colour analysis</a>
            </div>
        </div>
    </div>
</section>

<section class="it_works">
    <div class="it_works-container">
        <h2>Here is how it works</h2>
        <div class="it_works-grid top">
            <img src="<?php echo IMG; ?>/23.jpg">
            <div>
                <h3>With a makeup free face and using natural light in my studio, we start by determining your seasonal palette. </h3>
                <p>Together we go through around 150 different coloured drapes to see the effect of each next to your skin. I find if you are warm or cool, soft or bright by analysing the effect various colours have on your jawline, your overall skin texture, your eye sockets, and any shadowing, sculpting, or filtering effect the colours have on your face.</p>
                <p>After one session you will be confident and fluent in which shades suit you best. We find the seasonal palette from which you will build a cohesive wardrobe. Within your palette, I will find your sub palette, and the within that, your WOW colours… the ones that when placed near your face make you look fresh, vibrant, and glowing. Your WOW colours are where we concentrate capital in your wardrobe portfolio. </p>
            </div>
        </div>
        <img src="<?php echo IMG; ?>/24.jpg" class="it_works-banner">
        <div class="it_works-grid bottom">
            <div>
                <h3>The next step is to assess your inherent style</h3>
                <p>Your body structure, your face shape, your personality, your decisiveness, how rational or intuitive you are, how introverted or extroverted you are, your interests when you were 10 years old before the world placed expectations on you, and a host of other components, all make your style uniquely yours. </p>
                <p>We peel back the layers of the onion and determine what your style archetype is at your core, to make the outside (your wardrobe) and the inside (your intrinsic style) harmonious, authentic, and aligned. I’ll ask you to bring to your appointment (if possible) some clothes that you love and wear a lot as well as some ones that you love but don’t seem to wear, so we can find your personal thread of style running through them. If you aren’t able to bring in clothes, have some photos ready on your phone of you wearing your favourites.</p>
            </div>
            <img src="<?php echo IMG; ?>/25.jpg">
        </div>
    </div>
</section>

<section class="case_studies">
    <div class="container">
        <h2>Case studies</h2>
        <?php for ($i = 0; $i < 3; $i++): ?>
            <div class="case_study">
                <div class="case_study-info">
                    <div class="case_study-nro">
                        <span>CASE STUDY ONE</span>
                    </div>
                    <div class="content w-100">
                        <h3>One of my clients, Emilia, at Tier 1 US bank had a senior manager take her under her wing in the first few days when she was a grad trainee.</h3>
                        <p>Many years later, Emilia asked her why. She was told it was because she was wearing Roger Vivier shoes (her mother had given them to her as a good luck present in her first job).</p>
                        <p>The senior manager assumed that if she was putting that much effort in to her office appearance early on, she’d be putting that same effort into her work as well. At the time, Emilia had no idea what Roger Vivier shoes were, but her mother did!</p>
                        <p>First impressions count. She is a living example of the Marilyn Monroe quote ‘Give a girl the right pair of shoes and she can conquer the world’.</p>
                    </div>
                </div>
                <div class="case_study-image">
                    <img src="<?php echo IMG; ?>/16.png">
                </div>
            </div>
        <?php endfor; ?>
    </div>
</section>

<section class="open_to_you">
    <div class="container">
        <div class="open_to_you-head">
            <h2>in addition to colour and style analysis, my personal little black book is open to you!</h2>
            <p>After years of blogging and keen interest in beauty and wellness, I have an incredible little black book. Bring allllll your questions!</p>
        </div>
        <div class="open_to_you-box">
            <img src="<?php echo IMG; ?>/17.jpg">
            <div class="open_to_you-list">
                <div>
                    <h3>Need the best brow microblader in London?</h3>
                    <p>Sorted.</p>
                </div>
                <div>
                    <h3>Want to discuss the best and latest facials for your skin condition?</h3>
                    <p>I’ve got you.</p>
                </div>
                <div>
                    <h3>Not happy with your hair stylist or colourist?</h3>
                    <p>I have some gems.</p>
                </div>
                <div>
                    <h3>Have eczema or hair loss or rosacea?</h3>
                    <p>Covered.</p>
                </div>
                <div>
                    <h3>Need clean makeup brand recommendations in YOUR colours?</h3>
                    <p>Done.</p>
                </div>
                <div>
                    <h3>Need a tailor, a photographer, or a makeup artist for an event?</h3>
                    <p>I have options.</p>
                </div>
                <div>
                    <h3>Want to know the best spa for a day with your bestie, a great dermatologist, an incredible jewellery designer, a custom perfumer, an amazing hypnotist+ career coach, or my favourite Japanese hair and scalp spa in London?</h3>
                    <p>I have opinions!</p>
                </div>
            </div>
        </div>
        <a href="#" title="Find your power">Find your power</a>
    </div>
</section>

<section class="yourself">
    <img src="<?php echo IMG; ?>/shadow2.svg" class="absolute">
    <div class="container">
        <h2>investment in yourself</h2>
        <div class="yourself-content">
            <div class="yourself-legend">
                <h3>In person colour analysis and style analysis</h3>
                <div></div>
            </div>
            <ul class="yourself-list mb60">
                <li>
                    <div>
                        <p>Colour analysis + digital colour palette for your phone + hair and makeup colour recommendations + one month trial of curated Monthly Edit + little black book discussion</p>
                    </div>
                    <span>£500</span>
                </li>
                <li>
                    <div>
                        <p>Style analysis + personalised folder of your style recommendations + one month trial of curated Monthly Edit + little black book discussion</p>
                    </div>
                    <span>£1000</span>
                </li>
                <li>
                    <div>
                        <p>Colour and strategic style analysis + personalised folder of your style recommendations + one month trial of curated Monthly Edit + little black book discussion</p>
                    </div>
                    <span>£1300</span>
                </li>
            </ul>
            <div class="yourself-legend">
                <h3>Shopping trip</h3>
                <div></div>
            </div>
            <ul class="yourself-list">
                <li>
                    <div>
                        <p>Half day targeted shopping trip</p>
                    </div>
                    <span>£500</span>
                </li>
                <li>
                    <div>
                        <p>Full day targeted shopping trip</p>
                    </div>
                    <span>£1000</span>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="faq">
    <div class="container">
        <h2>got questions? <br>i have answers.</h2>
        <ul id="my-accordion" class="faq_questions accordionjs">
            <li>
                <div>
                    <h3>Will you make me wear orange or bright colours like you wear?</h3><svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="6.75" y1="3.27834e-08" x2="6.75" y2="12" stroke="#080707" stroke-width="1.5" />
                        <line x1="13" y1="5.75" x2="-6.55671e-08" y2="5.75" stroke="#080707" stroke-width="1.5" />
                    </svg>
                </div>
                <div>
                    <p>No, I am a bright spring, so I look exhausted and hungover in neutrals. You may look amazing and luxurious in them.</p>
                </div>
            </li>
            <li>
                <div>
                    <h3>How long does a session last?</h3><svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="6.75" y1="3.27834e-08" x2="6.75" y2="12" stroke="#080707" stroke-width="1.5" />
                        <line x1="13" y1="5.75" x2="-6.55671e-08" y2="5.75" stroke="#080707" stroke-width="1.5" />
                    </svg>
                </div>
                <div>
                    <p>It varies depending on how easy your colours are to determine, and how much little black book information you want to discuss. Allow at least two hours for colour and three for style. Most clients like to break this into two different sessions, because there is A LOT to take in.</p>
                </div>
            </li>
            <li>
                <div>
                    <h3>Do I need to have my colours done again if my hair greys, or if I have a fake or real tan?</h3><svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="6.75" y1="3.27834e-08" x2="6.75" y2="12" stroke="#080707" stroke-width="1.5" />
                        <line x1="13" y1="5.75" x2="-6.55671e-08" y2="5.75" stroke="#080707" stroke-width="1.5" />
                    </svg>
                </div>
                <div>
                    <p>No, this is really a one and done experience; your undertone never changes, although you may prefer different colours <b>within</b> your palette as your hair or skin colour changes.</p>
                </div>
            </li>
            <li>
                <div>
                    <h3>I’m not really interested in fashion; is there any point to this for me?</h3><svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="6.75" y1="3.27834e-08" x2="6.75" y2="12" stroke="#080707" stroke-width="1.5" />
                        <line x1="13" y1="5.75" x2="-6.55671e-08" y2="5.75" stroke="#080707" stroke-width="1.5" />
                    </svg>
                </div>
                <div>
                    <p>Steve Jobs and Mark Zuckerberg claimed to not care about fashion either. However, Steve’s iconic black turtleneck jumpers and Mark’s signature hoodies are intertwined with their identities and how they present themselves and their businesses to the world. Disinterest is still a signal. </p>
                </div>
            </li>
            <li>
                <div>
                    <h3>What if I don’t like my colours or my style archetype?</h3><svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="6.75" y1="3.27834e-08" x2="6.75" y2="12" stroke="#080707" stroke-width="1.5" />
                        <line x1="13" y1="5.75" x2="-6.55671e-08" y2="5.75" stroke="#080707" stroke-width="1.5" />
                    </svg>
                </div>
                <div>
                    <p>You’d be the first! There is such a broad range in each colour palette and each style archetype; we will find what feels like home for you. I am just the guide to take you there. </p>
                </div>
            </li>
            <li>
                <div>
                    <h3>Can I bring a friend or partner to my session?</h3><svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="6.75" y1="3.27834e-08" x2="6.75" y2="12" stroke="#080707" stroke-width="1.5" />
                        <line x1="13" y1="5.75" x2="-6.55671e-08" y2="5.75" stroke="#080707" stroke-width="1.5" />
                    </svg>
                </div>
                <div>
                    <p>Absolutely!</p>
                </div>
            </li>
            <li>
                <div>
                    <h3>What if I can’t remember something after my session?</h3><svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="6.75" y1="3.27834e-08" x2="6.75" y2="12" stroke="#080707" stroke-width="1.5" />
                        <line x1="13" y1="5.75" x2="-6.55671e-08" y2="5.75" stroke="#080707" stroke-width="1.5" />
                    </svg>
                </div>
                <div>
                    <p>I’ll give you a copy of your seasonal palette, your WOW colours, and all the style documentation you need to guide you. If you need inspiration for an event, a holiday, or an interview, you can sign up for a monthly edit (coming soon) of items curated in your palette.</p>
                </div>
            </li>
            <li>
                <div>
                    <h3>Can I book you and your honest opinions for a shopping trip?</h3><svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="6.75" y1="3.27834e-08" x2="6.75" y2="12" stroke="#080707" stroke-width="1.5" />
                        <line x1="13" y1="5.75" x2="-6.55671e-08" y2="5.75" stroke="#080707" stroke-width="1.5" />
                    </svg>
                </div>
                <div>
                    <p>Definitely. Give me a brief beforehand of what you need (travel capsule, new job wardrobe, beach holiday, etc) so I can scour the stores first to save you time and money. </p>
                </div>
            </li>
            <li>
                <div>
                    <h3>Do you do virtual colour or style analysis?</h3><svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="6.75" y1="3.27834e-08" x2="6.75" y2="12" stroke="#080707" stroke-width="1.5" />
                        <line x1="13" y1="5.75" x2="-6.55671e-08" y2="5.75" stroke="#080707" stroke-width="1.5" />
                    </svg>
                </div>
                <div>
                    <p>I can, but it isn’t ideal. I see a lot of people who have been misdiagnosed online. Some skin is ‘cuspy’ eg the warmest end of a cool palette, or the coolest end of a warm palette. It is critical to be accurate, and phones, variable lighting and computer screens make that tought. I prefer natural light. If you are a very obvious season (like me) it will work, but I am not a believer in virtual accuracy, despite the convenience/popularity. Also, every AI colour analysis app I’ve ever tried has been dead wrong.</p>
                </div>
            </li>
        </ul>
    </div>
</section>

<?php get_footer(); ?>

<script>
    jQuery(document).ready(function($) {
        $("#my-accordion").accordionjs({
            // Allow self close.(data-close-able)
            closeAble: false,

            // Close other sections.(data-close-other)
            closeOther: false,

            // Animation Speed.(data-slide-speed)
            slideSpeed: 150,

            // The section open on first init. A number from 1 to X or false.(data-active-index)
            activeIndex: 100,

            // Callback when a section is open
            openSection: function(section) {},

            // Callback before a section is open
            beforeOpenSection: function(section) {},
        });
    });
</script>