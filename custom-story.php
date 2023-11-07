<?php
/*
Template Name: story
*/

get_header();

   ?>
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Our Story</h2>
            </div>
          
        </div>
    </div>
</div>
<!-- Page Header End -->
<div class="sidebar-widget child-nav">
    <div class="tab-post">
        <ul class="nav nav-pills nav-justified nav-all">
            <li class="nav-item">
                <a class=" nav-i " href="<?php echo esc_url(home_url('/who-we-are')); ?>">Who we are</a>
            </li>
            <li class="nav-item">
            <a class=" nav-i " href="<?php echo esc_url(home_url('/team')); ?>">Our Team</a>
            </li>
            <li class="nav-item"><a class=" nav-i active-i" href="<?php echo esc_url(home_url('/story')); ?>">Our Story</a>
            
           
            
        </ul>
    </div>
</div>

<!-- Single Post Start-->
<div class="single">
<div class="container">
<div class="row">
    <div class="col-lg-8">
        <div class="single-content">
        <?php 
        $image1 = get_field('program_image_1');
            if( !empty( $image1 ) ): ?>
                <img src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>" />
                
        <?php endif; ?>
        <?php 
        $image2 = get_field('program_image_2');
            if( !empty( $image2 ) ): ?>
                <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
                
        <?php endif; ?>
        <?php 
        $image3 = get_field('program_image_1');
            if( !empty( $image3 ) ): ?>
                <img src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>" />
                
        <?php endif; ?>
        
           
        </div>
        
        <div class="single-bio">
            <div class="single-bio-img">
                
            </div>
           
        </div>
        <div class="single-related">
            
            <div class="owl-carousel ">
                <div class="post-item">
                    
                    
                </div>
                <div class="post-item">
                    <div class="post-img">
                       
                    </div>
                    <div class="post-text">
                                                      
                    </div>
                </div>
                <div class="post-item">
                    <div class="post-img">
                       
                    </div>
                    <div class="post-text">
                      
                        <div class="post-meta">
                          
                        </div>
                    </div>
                </div>
                <div class="post-item">
                    <div class="post-img">
                      
                    </div>
                    <div class="post-text">
                     
                        <div class="post-meta">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="col-lg-4">
        <div class="sidebar">

                    <?php

            // Check rows exists.
            if( have_rows('program_details') ):

                // Loop through rows.
                while( have_rows('program_details') ) : the_row();

                  
                    ?>

                  
           

            <div class="sidebar-widget">
                <h2 class="widget-title"><?php echo get_sub_field('program_head') ?></h2>
                <div class="recent-post">
                    <h2> <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="programs-impact.html"><?php echo get_sub_field('program_text') ?></a>
                        </li>
                        
                    </ul></h2>
            <p>
            <?php echo get_sub_field('program_sub_title') ?>
            </p>
            <?php
                // End loop.
                endwhile;

            // No value.
            else :
                // Do something...
            endif;

            ?>
           
         

           
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- Single Post End-->   

   



<?php
get_footer();
 ?>