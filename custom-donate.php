<?php
/*
Template Name: donate
*/

get_header();
?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Donate</h2>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Sidebar Widget Start -->
<div class="sidebar-widget child-nav">
    <div class="tab-post">
        <ul class="nav nav-pills nav-justified nav-all">
            <li class="nav-item">
                <a class="nav-i active-i" href="<?php echo esc_url(home_url('/donate')); ?>">Donate</a>
            </li>
            <li class="nav-item">
                <a class="nav-i" href="<?php echo esc_url(home_url('/volunteer')); ?>">Volunteer</a>
            </li>
            <li class="nav-item">
                <a class="nav-i" href="<?php echo esc_url(home_url('/contact')); ?>">Contact us</a>
            </li>
            <li class="nav-item">
                <a class="nav-i" href="<?php echo esc_url(home_url('/join-event')); ?>">Join us at the Next Event</a>
            </li>
        </ul>
    </div>
</div>
<!-- Sidebar Widget End -->


<?php
// Get services data from ACF
$donate_ways = get_field('donate_ways');

if ($donate_ways) {
    echo '<div class="row g-5 services-inner">'; // Start row

    foreach ($donate_ways as $donate) {
        $donate_title = $donate['donate_title'];
        $donate_description = $donate['donate_description'];
        $donate_icon = wp_get_attachment_image_url($donate['service_icon'], 'thumbnail');

        ?>
        <div class="col-lg-4 wow fadeIn" data-wow-delay=".3s">
            <div class="services-item bg-light">
                <div class="p-4 text-center services-content">
                    <div class="services-content-icon">
                        <i class="<?php echo $donate_icon; ?> fa-7x mb-4 text-primary"></i>
                        <h4 class="mb-3"><?php echo $donate_title; ?></h4>
                        <p class="mb-4"><?php echo $donate_description; ?></p>
                        <a href="/donate-now" class="btn btn-custom px-5 py-3 rounded-pill">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    echo '</div>'; // End row
}
?>
<?php
get_footer();
?>
