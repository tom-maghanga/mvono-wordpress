<?php get_header(); ?>


<?php 
$big_heading = get_field('big_heading'); 
$smaller_heading = get_field('smaller-heading');
$donate_text = get_field('donate-text');
$watch_text = get_field('watch-text');
$donate_link = get_field('donate-link');
$watch_link = get_field('watch-link');


?>


</div>

        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                        <?php
                                $c1_image_id = get_post_meta(get_the_ID(), 'carousel_1', true);
                                $c1_image_url = wp_get_attachment_image_url($c1_image_id, 'full'); // 'full' size can be changed to match your image size requirements
                                if ($c1_image_url) {
                                   // echo '<img src="' . esc_url($c1_image_url) . '" alt="img">';
                                }
                                ?>
                                 <img class="img-fluid" src="<?php echo esc_url($c1_image_url); ?>" height="830" width="auto" alt="Image">
                          
                        </div>
                        <div class="carousel-text">
                            <h1><?php echo $big_heading; ?>
                            </h1>
                            <p>
                             <?php echo $smaller_heading ?>

                            </p>
                            
                            <div class="carousel-btn">
                                <a class="btn btn-custom donate-home" href="/donate"> <?php echo $donate_text ?></a>
                                <a class="btn btn-custom btn-play" href="<?php echo get_field('youtube') ?>"  target="_blank"> <?php echo $watch_text ?></a>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                        <?php
                                $c2_image_id = get_post_meta(get_the_ID(), 'carousel_2', true);
                                $c2_image_url = wp_get_attachment_image_url($c2_image_id, 'full'); // 'full' size can be changed to match your image size requirements
                                if ($c2_image_url) {
                                    echo '<img src="' . esc_url($c2_image_url) . '" alt="img">';
                                }
                                ?>
                          
                        </div>
                        <div class="carousel-text">
                            <h1><?php echo $big_heading; ?>
                            </h1>
                            <p>
                             <?php echo $smaller_heading ?>

                            </p>
                            
                            <div class="carousel-btn">
                                <a class="btn btn-custom donate-home" href="/donate"> <?php echo $donate_text ?></a>
                                <a class="btn btn-custom btn-play" href="<?php echo get_field('youtube') ?>"  target="_blank"> <?php echo $watch_text ?></a>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                        <?php
                                $c3_image_id = get_post_meta(get_the_ID(), 'carousel_3', true);
                                $c3_image_url = wp_get_attachment_image_url($c3_image_id, 'full'); // 'full' size can be changed to match your image size requirements
                                if ($c3_image_url) {
                                    echo '<img src="' . esc_url($c3_image_url) . '" alt="img">';
                                }
                                ?>
                        </div>
                        <div class="carousel-text">
                            <h1><?php echo $big_heading; ?>
                            </h1>
                            <p>
                             <?php echo $smaller_heading ?>

                            </p>
                            
                            <div class="carousel-btn">
                                <a class="btn btn-custom donate-home" href="/donate"> <?php echo $donate_text ?></a>
                                <a class="btn btn-custom btn-play" href="<?php echo get_field('youtube') ?>"  target="_blank"> <?php echo $watch_text ?></a>

                            </div>
                        </div>
                    </div>
                    
                    <div class="carousel-item">
                        <div class="carousel-img">
                        <?php
                                $c4_image_id = get_post_meta(get_the_ID(), 'carousel_4', true);
                                $c4_image_url = wp_get_attachment_image_url($c4_image_id, 'full'); // 'full' size can be changed to match your image size requirements
                                if ($c4_image_url) {
                                    echo '<img src="' . esc_url($c4_image_url) . '" alt="img">';
                                }
                                ?>
                        </div>
                        <div class="carousel-text">
                            <h1><?php echo $big_heading; ?>
                            </h1>
                            <p>
                             <?php echo $smaller_heading ?>

                            </p>
                            
                            <div class="carousel-btn">
                                <a class="btn btn-custom donate-home" href="/donate"> <?php echo $donate_text ?></a>
                                <a class="btn btn-custom btn-play" href="<?php echo get_field('youtube') ?>"  target="_blank"> <?php echo $watch_text ?></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->



<section id="">
    <div class="container">
    <div class="section-header about-head text-center">
                                <h2>About Us</h2>
                                
                            </div>
        <div class="row about">
            
            <div class="col-md-12">
                <div class="mu-about-area">
                    <!-- Title -->
                    
                    <!-- Start Feature Content -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mu-about-left">
                            <?php
                                $image_id = get_post_meta(get_the_ID(), 'about_img', true);
                                $image_url = wp_get_attachment_image_url($image_id, 'full'); // 'full' size can be changed to match your image size requirements
                                if ($image_url) {
                                    // echo '<img src="' . esc_url($image_url) . '" alt="img">';
                                }
                                ?>
                                <img class="" src="<?php echo esc_url($image_url); ?>" height="350px" width="500px" alt="img">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="row">
                        <div class="col-md-12">
                            <div class="section-header text-center">
                                
                                <p><?php echo get_post_meta(get_the_ID(), 'about_title', true); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="tab-content-1" class="container tab-pane active">
                                    <?php echo get_post_meta(get_the_ID(), 'about_text', true); ?>
                                    <div class="carousel-btn">
                                    <a class="btn btn-static" href="/about">Learn More</a>
                                    </div>
                                </div>
                                <div id="tab-content-2" class="container tab-pane fade">
                                    <?php echo get_post_meta(get_the_ID(), 'mission_text', true); ?>
                                    <div class="carousel-btn">
                                    <a class="btn btn-static" href="/what-we-do">Learn More</a>
                                    </div>
                                </div>
                                <div id="tab-content-3" class="container tab-pane fade">
                                    <?php echo get_post_meta(get_the_ID(), 'vision_text', true); ?>
                                    <div class="carousel-btn">
                                    <a class="btn btn-static" href="/programs">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </div>
                        </div>
                    </div>

                    </div>
                    <!-- End Feature Content -->
                </div>
            </div>
        </div>
    </div>
</section>




<!--  -->
   
<!-- Service Start -->
<div class="service">
    <div class="container">
        <div class="section-header text-center">
            <h2>What We Do?</h2>
            <p>We give dignity and a future to orphans and the vulnerable in Taita Taveta.</p>
        </div>
        <div class="row">
            <?php if (have_rows('icon')) : ?>
                <?php while (have_rows('icon')) : the_row(); ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="<?php echo esc_attr(get_sub_field('icon')); ?>"></i>
                            </div>
                            <div class="service-text">
                                <h3><a href="<?php echo "/". get_sub_field('program_select') ?>"> <?php echo esc_html(get_sub_field('title')); ?>  </a> </h3>
                                <ul>
                                    <?php
                                    $description_lines = explode("\n", esc_html(get_sub_field('description')));
                                    foreach ($description_lines as $line) {
                                        echo '<li>' . esc_html($line) . '</li>';
                                    }
                                    ?>
                                </ul>
                                <div class="carousel-btn">
                                    <a class="btn btn-static" href="/donate">Donate Now</a>
                                    <a class="btn m" href="<?php echo "/". get_sub_field('program_select') ?>">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- Service End -->

        
    

        

        
        <!-- Event Start -->
        <div class="event">
            <div class="container">
                <div class="section-header text-center">
                    <h2><?php echo get_field('section_title') ?></h2>
                    <p><?php echo get_field('section_text') ?></p>
                </div>
                <div class="row">

                        <div class="event-item">
                        
                            
                            <img src="<?php $event_image= get_field('event_image');                            
                            echo esc_url($event_image['url']); ?>" alt="Image">
                            <div class="event-content">
                                <div class="event-meta">
                                    <p><i class="fa fa-calendar-alt"></i><?php echo get_field('date')?></p>
                                    <p><i class="far fa-clock"></i><?php echo get_field('time')?></p>
                                    <p><i class="fa fa-map-marker-alt"></i><?php echo get_field('venue')?></p>
                                </div>
                                <div class="event-text">
                                    <h3><?php echo get_field('event_title')?></h3>
                                    <p><?php echo get_field('event_explain')?></p>
                                    
                                    <a class="btn btn-custom" href="/news"><?php echo get_field('event_button') ?></a>
                                </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Event End -->
                
<!-- Causes Start -->
<div class="causes">
    <div class="container">
        <div class="section-header text-center">
            <h2><?php echo esc_html(get_field('c_heading')); ?></h2>
            <p><?php echo esc_html(get_field('c_paragraph')); ?></p>
        </div>

        <?php
        $causes_repeater = get_field('causes', get_the_ID());
        ?>

        <div class="owl-carousel causes-carousel">
            <?php foreach ($causes_repeater as $cause) : ?>
                <div class="causes-item">
                    <div class="causes-img">
                        <?php
                        $c_image_url = $cause['c_image']['url'];
                        if ($c_image_url) {
                            echo '<img class="" src="' . esc_url($c_image_url) . '" alt="img">';
                        }
                        ?>
                    </div>
                    <div class="causes-progress">
                        <!-- Add your progress bar code here -->
                    </div>
                    <div class="causes-text">
                        <h3><?php echo esc_html($cause['c_sub_heading']); ?></h3>
                        <p><?php echo esc_html($cause['c_sub_paragraph']); ?></p>
                    </div>
                    <div class="causes-btn">
                        <a class="btn btn-custom" href="<?php echo "/". esc_url($cause['choose_program']); ?>">Learn More</a>
                        <a class="btn btn-custom" href="/donate">Donate Now</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>
<!-- Causes End -->




        <br>
        <br>
        <div class="section-header text-center">
    <h2>Donate</h2>
        <p> <p><?php echo get_field('donate_text') ?></p></p>
    </div>
    <?php
        $background_image = get_field('background_image'); // Retrieve background image URL from ACF field
    ?>
    <section class="donate_section" style="background-image: url('<?php echo esc_url($background_image['url']); ?>'); background-size: cover; margin-bottom: 35px; padding: 87px 20px 107px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 for-padding">
                    <p><?php echo get_field('donate_text') ?></p>
                    <h2><a href="/donate"><?php echo get_field('donate_button') ?></a></h2>
                </div>
            </div>
        </div>
    </section>





        
   <!-- Contact Section Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-header text-center">
            <h2>Contact Us</h2>
            <p>Leave us a message via email</p>
        </div>
    </div>

    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow slideInUp mx-auto" data-wow-delay="0.3s">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;">
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control border-0 bg-light px-4" placeholder="Subject" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-custom w-100 py-3" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact Section End -->

            
<!--                 
        <section class="section-contact ">
                    <div class="container-form">
                        <div class="contactInfo"> 
                            <div>
                                <h2>Contact Info</h2>
                                <ul class="info">
                                    <li>
                                        <span><img src="<?php echo get_theme_file_uri('/images/location.png') ?>"></span>
                                        <span> P.O Box 1119 Wundanyi,<br>
                                          
                                            Kenya</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span><img src="<?php echo get_theme_file_uri('/images/mail.png') ?>"></span> -->
                                        <!-- <span>nassosanagn@gmail.com</span> -->
                                        <!-- <span><a href = "mailto: info@mvonocommunitycentre.org">info@mvonocommunity <br> centre.org</a></span>
                                    </li>
                                    <li>
                                    
                                        <span><img src="<?php echo get_theme_file_uri('/images/call.png'); ?>"></span>
                                        <span>+254 722 648 422</span>
                                    </li>
                                      
        
                                </ul>
                            </div>
                            <ul class="sci">
                                <li><a href="https://www.facebook.com/nassosanagn/"><img src="<?php echo get_theme_file_uri('/images/1.png') ?>"></a></li>
                                <li><a href="https://www.instagram.com/nassosanagn_/?hl=el"><img src="<?php echo get_theme_file_uri('/images/3.png') ?>"></a></li>
                                <li><a href="https://twitter.com/nassosanagn"><img src="<?php echo get_theme_file_uri('/images/2.png') ?>"></a></li>
                                <li><a href="https://www.linkedin.com/in/nassos-anagnostopoulos-2b9631196/"><img src="<?php echo get_theme_file_uri('/images/5.png') ?>"></a></li>
                                
                            </ul>
                        </div>
                        <div class="contactForm">
                                <h2>Send a Message</h2>
                                <div class="formBox">
                                <div class="inputBox w50">
                                    <input type="text" name="" required>
                                    <span>First Name</span>
                                </div>
                                <div class="inputBox w50">
                                    <input type="text" required>
                                    <span>Last Name</span>
                                </div>
                                <div class="inputBox w50">
                                    <input type="email" required>
                                    <span>Email Address</span>
                                </div>
                                <div class="inputBox w50">
                                    <input type="text" required>
                                    <span>Mobile Number</span>
                                </div>
                                <div class="inputBox w100">
                                    <textarea required></textarea>
                                    <span>Write your message here...</span>
                                </div>
                                <div class="inputBox w100">
                                    <input type="submit" value="Send">
                                </div>
                            </div>
                        </div>
                            
                            
                            
                     
                </section> -->
  

   


<?php get_footer(); ?>