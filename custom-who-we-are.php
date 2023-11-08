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
            <a class=" nav-i " href="<?php echo esc_url(home_url('/our-team')); ?>">Our Team</a>
            </li>
            <li class="nav-item"><a class=" nav-i " href="<?php echo esc_url(home_url('/story')); ?>">Our Story</a>
            
           
            
        </ul>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row text-left mb-5">
            <div class="col-12">
                <h2 class="font-weight-bold heading text-primary mb-4"><?php echo get_field('who_head'); ?></h2>
            </div>
            <div class="col-lg-6">
                <p class="text-black-50">
                    <?php echo get_field('who_text_1'); ?>
                </p>
                <p class="text-black-50">
                    <?php echo get_field('who_text_2'); ?>
                </p>
                <p class="text-black-50">
                    <?php echo get_field('who_text_3'); ?>
                </p>
            </div>
            <div class="col-lg-6">
                <p class="text-black-50">
                    <?php echo get_field('who_text_4'); ?>
                </p>
                <p class="text-black-50">
                    <?php echo get_field('who_text_5'); ?>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="section pt-0">
    <div class="container">
        <div class="row justify-content-between mb-5">
            <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
                <div class="img-about dots">
                    <img src="<?php echo esc_url(get_field('head_image')['url']); ?>" alt="Image" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex feature-h">
                    <span class="wrap-icon me-3">
                        <span class="icon-home2"></span>
                    </span>
                    <div class="feature-text">
                        <h2 class="heading font-weight-bold heading text-primary mb-4"><?php echo esc_html(get_field('values_heading')); ?></h2>
                        <ul>
                        <?php
                            $values_list = get_field('values_list');
                            if ($values_list) {
                                $values_array = explode("\n", $values_list);
                                foreach ($values_array as $value) {
                                    echo '<li><h4 class="heading">' . esc_html($value) . '</h4></li>';
                                }
                            }
                            ?>

                        </ul>
                    </div>
                </div>            
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <?php
            $image_urls = array(
                get_field('image_1'),
                get_field('image_2'),
                get_field('image_3')
            );

            $delays = array(0, 100, 200);

            foreach ($image_urls as $index => $image_url) {
            ?>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="<?php echo esc_attr($delays[$index]); ?>">
                    <img src="<?php echo esc_url($image_url['url']); ?>" alt="Image" class="img-fluid" />
                </div>
            <?php
            }
            ?>
        </div>
        <div class="row section-counter mt-5">
            <?php
            $counter_delays = array(300, 400, 500, 600);

            for ($i = 1; $i <= 4; $i++) {
            ?>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="<?php echo esc_attr($counter_delays[$i - 1]); ?>">
                    <div class="counter-wrap mb-5 mb-lg-0">
                        <!-- Counter Content Here -->
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>



<?php
get_footer();
 ?>