<?php

/*
Template Name: what-we-do
*/

get_header();
?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Our Programs and Impact </h2>
            </div>
          
        </div>
    </div>
</div>
<!-- Page Header End -->

<div class="sidebar-widget child-nav">
    <div class="tab-post">
        <ul class="nav nav-pills nav-justified nav-all">
            <li class="nav-item">
                <a class=" nav-i " href="<?php echo esc_url(home_url('/programs')); ?>">Our Programs and Impact</a>
            </li>
            <li class="nav-item">
            <a class=" nav-i " href="<?php echo esc_url(home_url('/orphans')); ?>">Orphans</a>
            </li>
            <li class="nav-item"><a class=" nav-i " href="<?php echo esc_url(home_url('/youth')); ?>">Youth in Technology (ICT)</a>
            
            </li>
            <li class="nav-item">
            <li class="nav-item"><a class=" nav-i " href="<?php echo esc_url(home_url('/refuge')); ?>">Refuge & Nutrition for the Vulnerable</a>
            
            </li>
            <li class="nav-item"> 
            <li class="nav-item"><a class=" nav-i " href="<?php echo esc_url(home_url('/sustainability')); ?>">Sustainability</a>
                
            </li>
        </ul>
    </div>
</div>


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
                                    <a class="btn btn-static" href="./donate.html">Donate Now</a>
                                    <a class="btn m" href="orphans.html">Learn More</a>
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


<?php

get_footer();
?>