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

<br>
<br>
<br>


<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing pt-0">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
    <h2>Volunteer</h2>
    <p>Contact us to learn about volunteer opportunities </p>
    </div>
    <?php
            // Get volunteer plans data from ACF
        $volunteer_plans = get_field('volunteer_plans');

        if ($volunteer_plans) {
            echo '<div class="row gy-4">'; // Start row

            foreach ($volunteer_plans as $plan) {
                $plan_title = $plan['volunteer_plan_title'];
                $plan_description = $plan['volunteer_plan_description'];
                $plan_button_text = $plan['volunteer_plan_button_text'];

                ?>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="<?php echo $plan_price ? '300' : '100'; ?>">
                    <div class="pricing-item featured<?php echo $plan_price ? 'featured' : ''; ?>">
                        <h3><?php echo $plan_title; ?></h3>
                        <?php if ($plan_description) { ?>
                            <p><?php echo $plan_description; ?></p>
                        <?php } ?>
                        <?php if ($plan_price) { ?>
                            <span class="price"><?php echo $plan_price; ?></span>
                        <?php } ?>
                        <a href="/donate-now" class="btn btn-custom "><?php echo $plan_button_text; ?></a>
                    </div>
                </div><?php
            }

            echo '</div>'; // End row
}
?>


  </div>
</section><!-- End Pricing Section -->  






<?php
get_footer();
 ?>