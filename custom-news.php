<?php
/*
Template Name: news
*/

get_header();

   ?>
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>News</h2>
            </div>
          
        </div>
    </div>
</div>
<!-- Page Header End -->
<div class="sidebar-widget child-nav">
    <div class="tab-post">
        <ul class="nav nav-pills nav-justified nav-all">
            <li class="nav-item">
                <a class=" nav-i " href="<?php echo esc_url(home_url('/join-us')); ?>">Upcoming Events</a>
            </li>
            <li class="nav-item">
            <a class=" nav-i  active-i" href="<?php echo esc_url(home_url('/news')); ?>">News</a>
            </li>
            <li class="nav-item"><a class=" nav-i " href="<?php echo esc_url(home_url('/past-events')); ?>">Past Events</a></li >
            <li class="nav-item"><a class=" nav-i " href="<?php echo esc_url(home_url('/gallery')); ?>">Gallery</a></li >
            
        </ul>
    </div>
</div



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

   


<?php
get_footer();
 ?>