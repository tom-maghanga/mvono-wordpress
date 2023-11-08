<?php
/*
Template Name: Story
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
                <a class="nav-i" href="<?php echo esc_url(home_url('/who-we-are')); ?>">Who we are</a>
            </li>
            <li class="nav-item">
                <a class="nav-i" href="<?php echo esc_url(home_url('/our-team')); ?>">Our Team</a>
            </li>
            <li class="nav-item">
                <a class="nav-i active-i" href="<?php echo esc_url(home_url('/our-story')); ?>">Our Story</a>
            </li>
        </ul>
    </div>
</div>

<div class="section" style="margin-top : 60px">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="font-weight-bold heading text-primary mb-4"><?php echo get_field('story_head'); ?></h2>
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <p class="text-black-50">
                        <?php echo get_field("story_text_$i"); ?>
                    </p>
                <?php endfor; ?>
            </div>
            <div class="col-lg-6">
                <div class="img-about dots">
                    <img src="<?php echo esc_url(get_field('story_image')['url']); ?>" alt="Image" class="img-fluid" style="min-height: 400px;" />
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
