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

<section class="case_studies">
    <div class="container">
        <h2>Case studies</h2>
        <?php for ($i=0; $i < 3; $i++): ?>
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