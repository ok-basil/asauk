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
                    <h1>Support the work of the society</h1>
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
                        <h2>What we do. Promoting Africa.</h2><br>
                        <h5>The Royal African Society is Britian's prime Africa organization. <br><br>
                            Our goal is to promote Africa in business, politics, culture or academia. We are a membership society that works to foster
                            better understanding and strong relationships between Britian, Africa and the world.<br><br>
                            Our in-depth knowledge of the continet and our collaborative approach to programmes and partnerships make us the first choice
                            for anyone who wants to engage, understand, celebrate or learn more about Africa.
                        </h5><br>
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
                                <span class=""><h6>RAS News</h6></span>
                            </div>
                            <div>
                                <span><h4>Key findings from parliamentary meeting on UK VISA refusals for African Visitors to the UK</h4></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="news-items" id="news-items">
                            <div class="news-two" id="news-two" style="background-image: url('<?php echo get_template_directory_uri(); ?> /assets/img/news-2.png')">
                                <span class=""><h6>Director's Blog</h6></span>
                            </div>
                            <div>
                                <span><h4>Conflict, Coups and Democracy: The African Union and the Second</h4></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="news-items" id="news-items">
                            <div class="news-three" id="news-three" style="background-image: url('<?php echo get_template_directory_uri(); ?> /assets/img/news-3.png')">
                                <span><h6>African Arguments</h6></span>
                            </div>
                            <div>
                                <span><h4>Key findings from parliamentary for African</h4></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="news-items" id="news-items">
                            <div class="news-four" id="news-four" style="background-image: url('<?php echo get_template_directory_uri(); ?> /assets/img/news-4.png')">
                                <span><h6>African Arguments</h6></span>
                            </div>
                            <div>
                                <span><h4>Conflicts, Coups and Democracy: The African Union and the Second Arab Spring</h4></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </section>
    <section class="third-section">
        
    </section>
</main>