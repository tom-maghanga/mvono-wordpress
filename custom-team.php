<?php
/*
Template Name: team
*/

get_header();

   ?>
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Our Team</h2>
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
            <a class=" nav-i active-i" href="<?php echo esc_url(home_url('/our-team')); ?>">Our Team</a>
            </li>
            <li class="nav-item"><a class=" nav-i " href="<?php echo esc_url(home_url('/story')); ?>">Our Story</a>
            
           
            
        </ul>
    </div>
</div>



<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="section-title bg-white text-center text-primary px-3"><?php echo get_field('team_title') ?></h2>
            <h1 class="mb-5"><?php echo get_field('team_subtitle') ?></h1>
        </div>
        <div class="row g-4">

        <ul>
                        <?php
                            $values_list = get_field('team_text');
                            if ($values_list) {
                                $values_array = explode("\n", $values_list);
                                foreach ($values_array as $value) {
                                    echo '<li><h4 class="heading">' . esc_html($value) . '</h4></li>';
                                }
                            }
                            ?>

                        </ul>

            <?php
            // Get the repeater field values
            $team = get_field('team'); // Replace '' with your ACF repeater field name

            if ($team) {
                foreach ($team as $tm) {
            ?>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="<?php echo esc_attr($tm['delay']) . 's'; ?>">
                        <div class="team-item bg-light">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="<?php echo esc_url($tm['tm_image']['url']); ?>" alt="">
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                    <a class="btn btn-static btn-sm-square  mx-1" href="<?php echo esc_url($tm['facebook']); ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-static btn-sm-square  mx-1" href="<?php echo esc_url($tm['twitter']); ?>"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-static btn-sm-square  mx-1" href="<?php echo esc_url($tm['instagram']); ?>"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0"><?php echo esc_html($tm['name']); ?></h5>
                                <small><?php echo esc_html($tm['designation']); ?></small>
                            </div>
                        </div>
                    </div>

            <?php
                }
            } else {
                echo 'We are updating this soon, Hang on.';
            }
            ?>

        </div>
    </div>
</div>
<!-- Team End -->

   


<?php
get_footer();
 ?>