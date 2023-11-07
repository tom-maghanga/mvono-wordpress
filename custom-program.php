<?php
/*
Template Name: program
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

<!-- Sidebar Widget Start -->
<div class="sidebar-widget">
    <div class="sidebar-widget child-nav">
        <div class="tab-post">
            <ul class="nav nav-pills nav-justified nav-all">
                <li class="nav-item">
                    <a class="nav-i active-i" href="<?php echo esc_url(home_url('/programs')); ?>">Our Programs and Impact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-i" href="<?php echo esc_url(home_url('/orphans')); ?>">Orphans</a>
                </li>
                <li class="nav-item">
                    <a class="nav-i" href="<?php echo esc_url(home_url('/youth')); ?>">Youth in Technology (ICT)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-i" href="<?php echo esc_url(home_url('/refuge')); ?>">Refuge and nutrition for the Vulnerable</a>
                </li>
                <li class="nav-item">
                    <a class="nav-i" href="<?php echo esc_url(home_url('/sustainability')); ?>">Sustainability</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Sidebar Widget End -->

<!-- Single Post Start -->
<div class="single">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-content">
                    <?php
                    $images = array(
                        get_field('program_image_1'),
                        get_field('program_image_2'),
                        get_field('program_image_3')
                    );

                    foreach ($images as $image) {
                        if (!empty($image)) {
                            echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" />';
                        }
                    }
                    ?>
                </div>

                <div class="single-bio">
                    <div class="single-bio-img">

                    </div>
                </div>

                <div class="single-related">
                    <div class="owl-carousel">
                        <?php
                        // Output your related posts here.
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="sidebar">
                    <?php
                    // Check if program details exist.
                    if (have_rows('program_details')) {
                        while (have_rows('program_details')) : the_row();
                    ?>
                            <div class="sidebar-widget">
                                <h2 class="widget-title"><?php echo get_sub_field('program_head') ?></h2>
                                <div class="recent-post">
                                    <h2>
                                        <ul class="nav nav-pills nav-justified">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="pill" href="<?php echo esc_url(home_url('/programs')); ?>"><?php echo get_sub_field('program_sub_title') ?></a>
                                            </li>
                                        </ul>
                                    </h2>
                                    <p>
                                        <?php echo get_sub_field('program_text') ?>
                                    </p>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single Post End -->

<?php
get_footer();
?>
