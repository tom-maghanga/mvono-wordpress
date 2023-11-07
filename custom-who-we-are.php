<?php
/*
Template Name: who-we-are
*/

get_header();

   ?>
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>About Us</h2>
            </div>
          
        </div>
    </div>
</div>
<!-- Page Header End -->
<div class="sidebar-widget child-nav">
    <div class="tab-post">
        <ul class="nav nav-pills nav-justified nav-all">
            <li class="nav-item">
                <a class=" nav-i active-i" href="<?php echo esc_url(home_url('/who-we-are')); ?>">Who we are</a>
            </li>
            <li class="nav-item">
            <a class=" nav-i " href="<?php echo esc_url(home_url('/team')); ?>">Our Team</a>
            </li>
            <li class="nav-item"><a class=" nav-i " href="<?php echo esc_url(home_url('/story')); ?>">Our Story</a>
            
           
            
        </ul>
    </div>
</div>

    <!-- About Start -->
    <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img" data-parallax="scroll" > <img src="<?php echo get_theme_file_uri('img/about.jpg')?>" class='about-img' alt="" srcset=""></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <p>Learn About Us</p>
                            <h2>Taita Taveta County - Community-Based organization</h2>
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
                                    Mvono Community Centre (MCC) is a Taita Taveta County organization focused on helping orphans and widows. 
                                    It was founded under divine guidance in May 2004 by Reverend Violet Chanya, following a direct call from God.
                        
                                </div>
                                <div id="tab-content-2" class="container tab-pane fade">
                                    Empowering and promoting the well-being of the less fortunate.
                                </div>
                                <div id="tab-content-3" class="container tab-pane fade">
                                    To give decent living through providing basic needs and support to orphaned & vulnerable children, widows and Gender Based Violence Victims
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


<?php
get_footer();
 ?>