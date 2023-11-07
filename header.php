<?php ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>MCC- Mvono Community Centre</title>
 

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

      <?php wp_head(); ?>
        <link rel="shortcut icon" type="image/jpg" href="/images/news2.png"/>
                
        </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="top-bar-right">
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a> 
                                                           
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 contact-top">
                        
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Top Bar End -->
 <!-- Nav Bar Start -->
<div class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <a href="<?php echo esc_url(home_url('/')); ?>" class=""><img src="<?php echo get_theme_file_uri('img/mvono-logo.png')?>" width="75px" height="50px" srcset=""></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-item nav-link">Home</a>
                <div class="nav-item dropdown">
                <a href="<?php echo esc_url(home_url('/about')); ?>" class="nav-link dropdown-toggle" data-toggle="dropdown" id="about-us">About us</a>

                    <div class="dropdown-menu">
                        <a href="<?php echo esc_url(home_url('/who-we-are')); ?>" class="dropdown-item child">Who We Are</a>
                        <a href="<?php echo esc_url(home_url('/our-team')); ?>" class="dropdown-item child">Our Team</a>
                        <a href="<?php echo esc_url(home_url('/our-story')); ?>" class="dropdown-item child">Our Story</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="<?php echo esc_url(home_url('/what-we-do')); ?>" class="nav-link dropdown-toggle" data-toggle="dropdown" id="what-we-do">What We Do</a>
                    <div class="dropdown-menu">
                        <a href="<?php echo esc_url(home_url('/programs')); ?>" class="dropdown-item child">Our Programs & Impact</a>
                        <a href="<?php echo esc_url(home_url('/orphans')); ?>" class="dropdown-item child">Orphans</a>
                        <a href="<?php echo esc_url(home_url('/youth')); ?>" class="dropdown-item child">Youth in Technology (ICT)</a>
                        <a href="<?php echo esc_url(home_url('/refuge')); ?>" class="dropdown-item child">Refuge & Nutrition for the Vulnerable</a>
                        <a href="<?php echo esc_url(home_url('/sustainability')); ?>" class="dropdown-item child">Sustainability</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="<?php echo esc_url(home_url('/volunteer')); ?>" class="nav-link dropdown-toggle" data-toggle="dropdown" id="get-involved">Get Involved</a>
                    <div class="dropdown-menu">
                        <a href="<?php echo esc_url(home_url('/donate')); ?>" class="dropdown-item child">Donate</a>
                        <a href="<?php echo esc_url(home_url('/volunteer')); ?>" class="dropdown-item child">Volunteer</a>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="dropdown-item child">Contact us</a>
                        <a href="<?php echo esc_url(home_url('/event')); ?>" class="dropdown-item child">Join Us at the next event</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="<?php echo esc_url(home_url('/news-events')); ?>" class="nav-link dropdown-toggle" data-toggle="dropdown" id="news-events">News & Events</a>
                    <div class="dropdown-menu">
                        <a href="<?php echo esc_url(home_url('upcoming-events')); ?>" class="dropdown-item child">Upcoming events</a>
                        <a href="<?php echo esc_url(home_url('/news')); ?>" class="dropdown-item child">News</a>
                        <a href="<?php echo esc_url(home_url('/past-events')); ?>" class="dropdown-item child">Past events</a>
                        <a href="<?php echo esc_url(home_url('/gallery')); ?>" class="dropdown-item child">Gallery</a>
                    </div>
                </div>
                <div class="carousel-btn">
                    <a class="btn btn-static" href="<?php echo esc_url(home_url('/donate')); ?>">Donate Now</a>
                </div>
                <div class="nav-item dropdown">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="nav-link" id="contact-us">Contact Us</a>
                </div>
                <div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Nav Bar End -->
