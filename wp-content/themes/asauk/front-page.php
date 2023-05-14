<?php

/**
 * Template name: Front Page
 * The template for displaying all single posts
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * 
 * @package asauk
 */

    get_header();
    $post_id = get_the_ID();
?>

<main>
    <section class="first-section">
        <div class="site-wrapper">
            <div class="container">
                <div class="wrapper">
                    <h1><?php the_field('banner', $post_id );?></h1>
                    <span><button><p>BECOME A MEMBER</p><img src="<?php echo get_template_directory_uri(); ?> /assets/icons/vector.png" alt="vector"></button></span>
                </div>                
            </div>
       </div>
    </section>
    <section class="second-section">
        <div class="site-wrapper">
            <div class="secondary-wrapper">
                <div class="minor-container" id="minor-container">
                    <div class="first-div" id="first-div" style="background-image: url('<?php echo get_template_directory_uri(); ?> /assets/img/africa-writes-woman.png')">
                        <img src="" alt="">
                        <img src="" alt="">
                    </div>
                    <div class="second-div">
                        <h2><?php the_field('title', $post_id);?></h2><br>
                        <h5><?php the_field('body', $post_id);?></h5><br>
                        <span>
                            <button>
                                <h6>KNOW MORE</h6>
                                <span><img src="<?php echo get_template_directory_uri()?> /assets/icons/vector.png" alt="vector"></span>
                            </button>
                        </span>
                    </div>
                </div>
                <div class="pillars" id="pillars">
                    <h2>Our Pillars</h2>
                    <div class="pillars-container" id="pillars-container">
                        <div class="first-pillar" id="first-pillar" style="background-image: url('<?php echo get_template_directory_uri(); ?> /assets/img/connect.png')">
                            <span>
                                <span class="item"><p>Connect</p></span>
                                <span><img src="<?php echo get_template_directory_uri()?> /assets/icons/vector.png" alt="vector"></span>
                            </span>
                        </div>
                        <div class="second-pillar" id="second-pillar" style="background-image: url('<?php echo get_template_directory_uri(); ?> /assets/img/learn.png')">
                            <span>
                                <span class="item"><p>Learn</p></span>
                                <span><img src="<?php echo get_template_directory_uri()?> /assets/icons/vector.png" alt="vector"></span>
                            </span>
                        </div>
                        <div class="third-pillar" id="third-pillar" style="background-image: url('<?php echo get_template_directory_uri(); ?> /assets/img/debate.png')">
                            <span>
                                <span class="item"><p>Debate</p></span>
                                <span><img src="<?php echo get_template_directory_uri()?> /assets/icons/vector.png" alt="vector"></span>
                            </span>
                        </div>
                        <div class="fourth-pillar" id="fourth-pillar" style="background-image: url('<?php echo get_template_directory_uri(); ?> /assets/img/celebrate.png')">
                            <span>
                                <span class="item"><p>Celebrate</p></span>
                                <span><img src="<?php echo get_template_directory_uri()?> /assets/icons/vector.png" alt="vector"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="events" id="events">
                    <h2>Events</h2>
                    <div class="events-container">
                        <div class="first-event" id="first-event" style="background-image: url('<?php echo get_template_directory_uri(); ?> /assets/img/events-1.png')">
                            <div class="first-half" id="first-half">
                                <span class="date"><h6>When-30/05/19</h6></span>
                                <span><h6>Volunteering</h6></span>
                            </div>
                            <div class="second-half" id="second-half">
                                <h3>South Africa <br> Pre-election Briefing</h3>
                                <h6>Eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque. Eu feugiat pretium nibh ipsum consequat nisl vel pretium. Eget nulla facilisi etiam dignissim diam quis enim.</h6>
                                <span><button><h4>READ MORE</h4></button></span>
                            </div>
                        </div>
                        <div class="second-event" id="second-event" style="background-image: url('<?php echo get_template_directory_uri(); ?> /assets/img/events-2.png')">
                            <div class="first-part" id="first-part">
                                <span class="date"><h6>When-30/05/19</h6></span>
                                <span><h6>Fund Raiser</h6></span>
                            </div>
                            <div class="second-part" id="second-part">
                                <h3>South Africa Pre-election Briefing</h3>
                                <span><button><h4>READ MORE</h4></button></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="news" id="news">
                    <h2>Latest News</h2>
                    <div class="news-container">
                        <div class="news-items" id="news-items">
                            <div class="news-one" id="news-one" style="background-image: url('<?php echo get_template_directory_uri(); ?> /assets/img/news-1.png')">
                                <span class="news-span-1"><h6>RAS News</h6></span>
                            </div>
                            <div class="col-container">
                                <span class="news-title"><h4>Key findings from parliamentary meeting on UK VISA refusals for African Visitors to the UK</h4></span>
                                <span class="news-content"><h6>Eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque. Eu feugiat pretium nibh ipsum consequat nisl vel pretium. Eget nulla facilisi etiam dignissim diam quis enim.</h6></span>
                                <span class="news-more">
                                    <span class="read-more">
                                        <a href="#"><h6>Read more</h6>
                                        <h6><img src="<?php echo get_template_directory_uri()?> /assets/icons/arrow.png" alt="arrow"></h6></a>
                                    </span>
                                    <span class="news-date"><h6>30/05/19</h6></span>
                                </span>
                            </div>
                        </div>
                        <div class="news-items" id="news-items">
                            <div class="news-two" id="news-two" style="background-image: url('<?php echo get_template_directory_uri(); ?> /assets/img/news-2.png')">
                                <span class="news-span-2"><h6>Director's Blog</h6></span>
                            </div>
                            <div class="col-container">
                                <span class="news-title"><h4>Conflict, Coups and Democracy: The African Union and the Second</h4></span>
                                <span class="news-content"><h6>Eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque. Eu feugiat pretium nibh ipsum consequat nisl vel pretium. Eget nulla facilisi etiam dignissim diam quis enim.</h6></span>
                                <span class="news-more">
                                    <span class="read-more">
                                        <a href="#"><h6>Read more</h6>
                                        <h6><img src="<?php echo get_template_directory_uri()?> /assets/icons/arrow.png" alt="arrow"></h6></a>                                        
                                    </span>
                                    <span class="news-date"><h6>30/05/19</h6></span>
                                </span>                                
                            </div>
                        </div>
                        <div class="news-items" id="news-items">
                            <div class="news-three" id="news-three" style="background-image: url('<?php echo get_template_directory_uri(); ?> /assets/img/news-3.png')">
                                <span class="news-span-3"><h6>African Arguments</h6></span>
                            </div>
                            <div class="col-container">
                                <span class="news-title"><h4>Key findings from parliamentary for African</h4></span>
                                <span class="news-content"><h6>Eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque. Eu feugiat pretium nibh ipsum consequat nisl vel pretium. Eget nulla facilisi etiam dignissim diam quis enim.</h6></span>
                                <span class="news-more">
                                    <span class="read-more">
                                        <a href="#"><h6>Read more</h6>
                                        <h6><img src="<?php echo get_template_directory_uri()?> /assets/icons/arrow.png" alt="arrow"></h6></a>                                    </span>
                                    <span class="news-date"><h6>30/05/19</h6></span>
                                </span>
                            </div>
                        </div>
                        <div class="news-items" id="news-items">
                            <div class="news-four" id="news-four" style="background-image: url('<?php echo get_template_directory_uri(); ?> /assets/img/news-4.png')">
                                <span class="news-span-4"><h6>African Arguments</h6></span>
                            </div>
                            <div class="col-container">
                                <span class="news-title"><h4>Conflicts, Coups and Democracy: The African Union and the Second Arab Spring</h4></span>
                                <span class="news-content"><h6>Eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque. Eu feugiat pretium nibh ipsum consequat nisl vel pretium. Eget nulla facilisi etiam dignissim diam quis enim.</h6></span>
                                <span class="news-more">
                                    <span class="read-more">
                                        <a href="#"><h6>Read more</h6>
                                        <h6><img src="<?php echo get_template_directory_uri()?> /assets/icons/arrow.png" alt="arrow"></h6></a>                                    </span>
                                    <span class="news-date"><h6>30/05/19</h6></span>
                                </span>                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="community" id="community">
                    <div class="first-half">
                        <h3>Join a community that wants to give back</h3>
                        <h5>Remember when we were still friends, we could sing our hearts, sing our hearts. Of all the things you held your own, you just kept on drinking, kept on drinking. You are the rain that falls at night, beneath the water colored skies, you are the rain that falls at night, beneath the water colored skies.</h5>
                        <span><button><h4>JOIN US</h4><img src="<?php echo get_template_directory_uri(); ?> /assets/icons/vector.png" alt="vector"></button></span>
                    </div>
                    <div class="second-half" style="background-image: url('<?php echo get_template_directory_uri(); ?> /assets/img/community.png')"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="third-section">
        <div class="brand-container">
            <div class="site-wrapper">
                <div class="brand-content">
                    <h2>Our Brands</h2>
                    <img src="<?php echo get_template_directory_uri()?> /assets/icons/african-arguments.png" alt="african-arguments-logo">
                    <img src="<?php echo get_template_directory_uri()?> /assets/icons/african-affairs.png" alt="african-affairs-logo">
                    <img src="<?php echo get_template_directory_uri()?> /assets/icons/film-africa.png" alt="film-africa-logo">
                    <img src="<?php echo get_template_directory_uri()?> /assets/icons/africa-writes.png" alt="africa-writes-logo">
                </div>
            </div>
        </div>
        <div class="newsletter-container">
            <div class="newsletter-wrapper">
                <h3>Sign up to our newsletter</h3>
                <div class="contact-form">
                    <form class= "form" id="contact-form" method="post" action="">
                        <?php the_field( 'newsletter', $post_id ); ?>
                    </form>
                </div>
            </div>
        </div>
        <div class="donate-container" id="donate-container" style="background-image: url('<?php echo get_template_directory_uri(); ?> /assets/img/african-story.png')">
            <div class="donate-wrapper">
                <h2>Help us tell the African Story!</h2>
                <span><button><h4>DONATE</h4><img src="<?php echo get_template_directory_uri(); ?> /assets/icons/vector.png" alt="vector"></button></span>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>