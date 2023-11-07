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

<!-- Donate Start -->
<div class="donate" data-parallax="scroll" data-image-src="<?php echo esc_url(get_template_directory_uri() . '/img/donate.jpg'); ?>">
    <div class="container">
        <div class="row align-items-center justify-content-center"> <!-- Added justify-content-center class -->
            <div class="col-lg-12">
                <div class="donate-content">
                    <div class="section-header">
                        <p><?php the_field('donate_title'); ?></p>
                        <h2><?php the_field('donate_head'); ?></h2>
                    </div>
                    <div class="donate-text">
                        <p>
                            <?php the_field('donate_text'); ?>
                        </p>
                    </div>
                </div>
            </div>

            <?php
            // Check if bank details exist.
            if (have_rows('bank_details')) {
                while (have_rows('bank_details')) : the_row();
            ?>
                    <div class="col-lg-5">
                        <div class="donate-form bank-donate">
                            <button class="donate-btn donate-btn-custom bank-title">
                                <?php the_sub_field('button_text'); ?>
                            </button>
                            <ul>
                                <?php
                                $description_lines = explode("\n", esc_html(get_sub_field('bank_details')));
                                foreach ($description_lines as $line) {
                                    echo '<li>' . esc_html($line) . '</li>';
                                }
                                ?>
                            </ul>
                            <div>
                                <button class="donate-btn donate-btn-custom">
                                    <?php the_sub_field('thank_you_button'); ?>
                                </button>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            }
            ?>

            <?php
            // Check if mpesa details exist.
            if (have_rows('mpesa_details')) {
                while (have_rows('mpesa_details')) : the_row();
            ?>
                    <div class="col-lg-5">
                        <div class="donate-form mpesa-donate">
                            <button class="donate-btn donate-btn-custom mpesa-title">
                                <?php the_sub_field('button_text'); ?>
                            </button>
                            <ul>
                                <?php
                                $description_lines = explode("\n", esc_html(get_sub_field('mpesa_details')));
                                foreach ($description_lines as $line) {
                                    echo '<li>' . esc_html($line) . '</li>';
                                }
                                ?>
                            </ul>
                            <div>
                                <button class="donate-btn donate-btn-custom">
                                    <?php the_sub_field('thank_you_button'); ?>
                                </button>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            }
            ?>

        </div>
    </div>
</div>
<!-- Donate End -->



<?php
get_footer();
?>
