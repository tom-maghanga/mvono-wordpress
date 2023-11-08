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

    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header text-center">
          <span><?php echo get_field('page_title')?></span>
          <h2><?php echo get_field('programs_title') ?></h2>

        </div>

        <div class="row gy-4">
                <?php
                $programs = get_field('programs_repeater');
                if ($programs) {
                    foreach ($programs as $program) {
                        $image = $program['program_image']['url'];
                        $title = $program['program_title'];
                        $link = $program['program_link'];
                        $description = $program['program_description'];
                        ?>
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="card">
                                <div class="card-img">
                                    <img src="<?php echo esc_url($image); ?>" alt="" class="img-fluid">
                                </div>
                                <h3><a href="<?php echo esc_url($link); ?>" class="stretched-link"><?php echo esc_html($title); ?></a></h3>
                                <p><?php echo esc_html($description); ?></p>
                            </div>
                        </div>
                        <!-- End Card Item -->
            <?php
        }
    }
    ?>
</div>

        

        </div>

      </div>
    </section><!-- End Services Section -->



    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header text-center">
          <span><?php echo get_field('achievements_title')?></span>
          <h2><?php echo get_field('achievements_text') ?></h2>

        </div>

        <div class="row gy-4">
                <?php
                $achievements = get_field('achievements_repeater');
                if ($achievements) {
                    foreach ($achievements as $achievement) {
                        $a_image = $achievement['program_image']['url'];
                        $a_title = $achievement['program_title'];
                        $a_link = $achievement['program_link'];
                        $a_description = $achievement['program_description'];
                        ?>
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="card">
                                <div class="card-img">
                                    <img src="<?php echo esc_url($a_image); ?>" alt="" class="img-fluid">
                                </div>
                                <h3><a href="<?php echo esc_url($a_link); ?>" class="stretched-link"><?php echo esc_html($a_title); ?></a></h3>
                                <p><?php echo esc_html($a_description); ?></p>
                            </div>
                        </div>
                        <!-- End Card Item -->
            <?php
        }
    }
    ?>
</div>

        

        </div>

      </div>
    </section><!-- End Services Section -->
    <br>
    <br>
    <br>
    <br>

    <section id="features" class="features">
        <div class="container">
            
            <?php if (have_rows('item_program_repeater')): ?>
            <?php while (have_rows('item_program_repeater')): the_row(); ?>
            <h2 class="text-center"><?php echo get_sub_field('item_program_title'); ?></h2>
                <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                <div class="col-md-5 <?php if (get_sub_field('item_program_image_alignment') == 'right'): ?>order-1 order-md-2<?php else: ?>order-md-1<?php endif; ?>">
                    <img src="<?php echo get_sub_field('item_program_image')['url']; ?>" class="img-fluid" alt="">
                </div>

                <div class="col-md-7 <?php if (get_sub_field('item_program_image_alignment') == 'right'): ?>order-2 order-md-1<?php else: ?>order-md-2<?php endif; ?>">
                    <h3><?php echo get_sub_field('item_program_subtitle'); ?></h3>

                    <p class="fst-italic"><?php echo get_field('item_program_text'); ?></p>

                    <ul>
                    <?php
                    $description_lines = explode("\n", esc_html(get_sub_field('item_program_description')));

                    foreach ($description_lines as $line) {
                        echo '<li class="bi bi-check">' . esc_html($line) . '</li>';
                    }
                    ?>
                    </ul>
                </div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        </section>```


        <section id="features" class="features">
        <div class="container">
            
            <?php if (have_rows('item_funding_repeater')): ?>
            <?php while (have_rows('item_funding_repeater')): the_row(); ?>
            <h2 class="text-center"><?php echo get_sub_field('item_funding_title'); ?></h2>
                <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                <div class="col-md-5 <?php if (get_sub_field('item_funding_image_alignment') == 'right'): ?>order-1 order-md-2<?php else: ?>order-md-1<?php endif; ?>">
                    <img src="<?php echo get_sub_field('item_funding_image')['url']; ?>" class="img-fluid" alt="">
                </div>

                <div class="col-md-7 <?php if (get_sub_field('item_funding_image_alignment') == 'right'): ?>order-2 order-md-1<?php else: ?>order-md-2<?php endif; ?>">
                    <h3><?php echo get_sub_field('item_funding_subtitle'); ?></h3>

                    <p class="fst-italic"><?php echo get_field('item_funding_text'); ?></p>

                    <ul>
                    <?php
                    $f_description_lines = explode("\n", esc_html(get_sub_field('item_funding_description')));

                    foreach ($f_description_lines as $_line) {
                        echo '<li class="bi bi-check">' . esc_html($_line) . '</li>';
                    }
                    ?>
                    </ul>
                </div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        </section>```



<?php
get_footer();
?>
