<?php
get_header();
/*
Template Name: orphans
*/
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
            <a class=" nav-i active-i " href="<?php echo esc_url(home_url('/orphans')); ?>">Orphans</a>
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
<section id="details-section" class="basic-3">
    <div class="container">
        <div class="section-header text-center">
                    <h2><?php echo esc_html(get_sub_field('section_header')); ?></h2>
                    <p><?php echo esc_html(get_sub_field('section_description')); ?></p>
        </div>

        <?php if (have_rows('details_section')): ?>
            <?php while (have_rows('details_section')): the_row(); ?>
                
                <div class="row">
                    <?php
                    $alignment_class = (get_sub_field('image_alignment') == 'right') ? 'order-lg-1' : 'order-lg-2';
                    ?>
                    <div class="col-lg-6 col-xl-7">
                        <div class="text-container">
                            <h2><?php echo esc_html(get_sub_field('program_item')); ?></h2>
                            <ul>
                                <?php
                                $program_text = explode("\n", esc_html(get_sub_field('program_text')));

                                foreach ($program_text as $_line) {
                                    echo '<li class="bi bi-check">' . esc_html($_line) . '</li>';
                                }
                                ?>
                            </ul>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6 col-xl-5 <?php echo $alignment_class; ?>">
                        <div class="image-container">
                            <img class="img-fluid" src="<?php echo esc_url(get_sub_field('image')['url']); ?>" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            <?php endwhile; ?>
        <?php endif; ?>
    </div> <!-- end of container -->
</section> <!-- end of basic-3 -->


<?php
get_footer();

?>