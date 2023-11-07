<?php get_header(); ?>


<?php 
$big_heading = get_field('big_heading'); 
$smaller_heading = get_field('smaller-heading');
$donate_text = get_field('donate-text');
$watch_text = get_field('watch-text');
$donate_link = get_field('donate-link');
$watch_link = get_field('watch-link');


?>
        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="<?php echo get_theme_file_uri('img/carousel-1.jpg')?>" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1><?php echo $big_heading; ?>
                            </h1>
                            <p>
                             <?php echo $smaller_heading ?>

                            </p>
                            
                            <div class="carousel-btn">
                                <a class="btn btn-custom donate-home" href="/donate"> <?php echo $donate_text ?></a>
                                <a class="btn btn-custom btn-play" href="https://www.youtube.com/shorts/VQHQfPRULIo"  target="_blank"> <?php echo $watch_text ?></a>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="<?php echo get_theme_file_uri('img/carousel-2.jpg')?>" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1><?php echo $big_heading; ?>
                            </h1>
                            <p>
                             <?php echo $smaller_heading ?>

                            </p>
                            
                            <div class="carousel-btn">
                                <a class="btn btn-custom donate-home" href="/donate"> <?php echo $donate_text ?></a>
                                <a class="btn btn-custom btn-play" href="https://www.youtube.com/shorts/VQHQfPRULIo"  target="_blank"> <?php echo $watch_text ?></a>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="<?php echo get_theme_file_uri('img/carousel-3.png')?>" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1><?php echo $big_heading; ?>
                            </h1>
                            <p>
                             <?php echo $smaller_heading ?>

                            </p>
                            
                            <div class="carousel-btn">
                                <a class="btn btn-custom donate-home" href="/donate"> <?php echo $donate_text ?></a>
                                <a class="btn btn-custom btn-play" href="https://www.youtube.com/shorts/VQHQfPRULIo"  target="_blank"> <?php echo $watch_text ?></a>

                            </div>
                        </div>
                    </div>
                    
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="<?php echo get_theme_file_uri('img/carousel-4.jpg')?>" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1><?php echo $big_heading; ?>
                            </h1>
                            <p>
                             <?php echo $smaller_heading ?>

                            </p>
                            
                            <div class="carousel-btn">
                                <a class="btn btn-custom donate-home" href="/donate"> <?php echo $donate_text ?></a>
                                <a class="btn btn-custom btn-play" href="https://www.youtube.com/shorts/VQHQfPRULIo"  target="_blank"> <?php echo $watch_text ?></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->



<section id="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-about-area">
                    <!-- Title -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-header text-center">
                                <h2>About Us</h2>
                                <p><?php echo get_post_meta(get_the_ID(), 'about_title', true); ?></p>
                            </div>
                        </div>
                    </div>
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
                            <div class="mu-about-right">
                            <h3>About Us</h3>
                                <p><?php echo get_post_meta(get_the_ID(), 'about_text', true); ?></p>
                                <div class="carousel-btn">
                                    <a class="btn btn-static" href="/about">Learn more</a>
                                </div>
                                <h3>Our Mission</h3>
                                <p><?php echo get_post_meta(get_the_ID(), 'mission_text', true); ?></p>
                                <div class="carousel-btn">
                                    <a class="btn btn-static" href="/what-we-do">Learn more</a>
                                </div>
                                <h3>Our Vision</h3>
                                <p><?php echo get_post_meta(get_the_ID(), 'vision_text', true); ?></p>
                                <div class="carousel-btn">
                                    <a class="btn btn-static" href="/programs">Learn more</a>
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
            <p>What We Do?</p>
            <h3>We give dignity and a future to orphans and the vulnerable in Taita Taveta.</h3>
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
                                <h3><?php echo esc_html(get_sub_field('title')); ?></h3>
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
                                    <a class="btn m" href="">Learn More</a>
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

        
    

        
             <!-- Donate Start -->
             <!-- <div class="donate" data-parallax="scroll" data-image-src="<?php echo get_theme_file_uri('img/donate.jpg') ?>">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="donate-content">
                                <div class="section-header">
                                    <p>Donate Now</p>
                                    <h2>Give now, change lives.</h2>
                                </div>
                                <div class="donate-text">
                                    <p>
                                        Empower Mvono's initiatives with your donation. Together, we create meaningful impacts, offering support and opportunities to individuals and communities in need.
                                      
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="donate-form bank-donate" >
                               
                                <button class="donate-btn donate-btn-custom bank-title"  >Bank Transfer Details</button>
                                <p class="bank-text">1.KCB BANK(K) Limited Voi Branch</p>
                                <p class="bank-text">2.Acc No: 1283680904</p>
                                <p class="bank-text">3.Swift Code: KCBLKENX</p>
                                <p class="bank-text">4.Bank Code: 01</p>
                                <p class="bank-text">5.Branch Code: 186</p>
                                <div>
                                    <button  class="donate-btn donate-btn-custom">Thank you for your donation</button>
                                </div>
                                
                            </div>
                            <br>
                            <br>
                            <div class="donate-form">
                                <button class="donate-btn donate-btn-custom bank-title"  >M-Pesa Transfer</button>
                                <p class="bank-text">Paybill Number - //////</p>
                                <p class="bank-text">Acc No:// 1283680904</p>
                                <div>
                                    <button  class="donate-btn donate-btn-custom">Thank you for your donation</button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Donate End -->
            
        
        <!-- Event Start -->
        <div class="event">
            <div class="container">
                <div class="section-header text-center">
                    <p>Upcoming Events</p>
                    <h2>Be ready for our upcoming charity events</h2>
                </div>
                <div class="row">

                        <div class="event-item">
                            <img src="<?php echo get_theme_file_uri('img/event-1.jpg') ?>" alt="Image">
                            <div class="event-content">
                                <div class="event-meta">
                                    <p><i class="fa fa-calendar-alt"></i><?php echo get_field('date')?></p>
                                    <p><i class="far fa-clock"></i><?php echo get_field('time')?></p>
                                    <p><i class="fa fa-map-marker-alt"></i><?php echo get_field('venue')?></p>
                                </div>
                                <div class="event-text">
                                    <h3><?php echo get_field('event_title')?></h3>
                                    <p><?php echo get_field('event_explain')?></p>
                                    
                                    <a class="btn btn-custom" href="">Join Now</a>
                                </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Event End -->


        
        <!-- Volunteer Start -->
        <div class="volunteer" data-parallax="scroll" data-image-src="<?php echo get_theme_file_uri('img/volunteer.jpg') ?>">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="volunteer-form">
                            <form>
                                <div class="control-group">
                                    <input type="text" class="form-control" placeholder="Name" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" placeholder="Email" required="required" />
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" placeholder="Why you want to become a volunteer?" required="required"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit">Become a volunteer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="volunteer-content">
                            <div class="section-header">
                                <p>Become A Volunteer</p>
                                <h2>Let’s make a difference in the lives of others</h2>
                            </div>
                            <div class="volunteer-text">
                                <p>
                                    Join our mission as a volunteer and be the change you wish to see in the world. Your time and dedication can make a profound impact on the lives of those in need. Get involved today!
                            
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Volunteer End -->


            
                
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
                                        <span><img src="<?php echo get_theme_file_uri('/images/mail.png') ?>"></span>
                                        <!-- <span>nassosanagn@gmail.com</span> -->
                                        <span><a href = "mailto: info@mvonocommunitycentre.org">info@mvonocommunity <br> centre.org</a></span>
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
                            
                            
                            
                     
                </section>
  

   


<?php get_footer(); ?>