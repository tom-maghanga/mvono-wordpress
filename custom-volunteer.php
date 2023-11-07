<?php
/*
Template Name: Volunteer
*/

get_header();

   ?>
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Volunteer</h2>
            </div>
          
        </div>
    </div>
</div>
<!-- Page Header End -->
<div class="sidebar-widget child-nav">
    <div class="tab-post">
        <ul class="nav nav-pills nav-justified nav-all">
            <li class="nav-item">
                <a class=" nav-i " href="<?php echo esc_url(home_url('/donate')); ?>">Donate</a>
            </li>
            <li class="nav-item">
            <a class=" nav-i active-i" href="<?php echo esc_url(home_url('/volunteer')); ?>">Volunteer</a>
            </li>
            <li class="nav-item"><a class=" nav-i " href="<?php echo esc_url(home_url('/contact')); ?>">Contact us</a></li >
            <li class="nav-item"><a class=" nav-i " href="<?php echo esc_url(home_url('/join-event')); ?>">Join us at the Next Event</a></li >
            
        </ul>
    </div>
</div>


        
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
        

   


<?php
get_footer();
 ?>