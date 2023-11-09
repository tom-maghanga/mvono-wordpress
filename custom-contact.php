<?php
/*
Template Name: contact
*/

get_header();

   ?>
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Contact</h2>
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
            <a class=" nav-i " href="<?php echo esc_url(home_url('/volunteer')); ?>">Volunteer</a>
            </li>
            <li class="nav-item"><a class=" nav-iactive-i " href="<?php echo esc_url(home_url('/contact')); ?>">Contact us</a></li >
            <li class="nav-item"><a class=" nav-i " href="<?php echo esc_url(home_url('/join-event')); ?>">Join us at the Next Event</a></li >
            
        </ul>
    </div>
</div>


        
   <!-- ======= Contact Section ======= -->
   <section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

  <div class="section-header text-center">
  <h2><?php echo get_field('contact_title') ?></h2>
    <p><?php echo get_field('contact_sub_title') ?></p>
  </div>

    <div class="row gy-4 mt-4">

      <div class="col-lg-4">

        <div class="">
          <i class="bi bi-geo-alt "> </i>
          <div>
            <h4>Visit Us:</h4>
            <p><?php echo get_field('contact_location') ?></p>
          </div>
        </div><!-- End Info Item -->

        <div class="">
          <i class="bi bi-phone flex-shrink-0"></i>
          <div>
            <h4>Call Us:</h4>
            <p><?php echo get_field('contact_number') ?></p>
          </div>
        </div><!-- End Info Item -->

        <div class="">
          <i class="bi bi-facebook flex-shrink-0"></i>
          <div>
            <h4>Follow Us:</h4>
            <p><?php echo get_field('contact_media') ?></p>
          </div>
        </div><!-- End Info Item -->

        <div class=" ">
          <i class="bi bi-calendar-event flex-shrink-0"></i>
          <div>
            <h4>Join Our Next Event:</h4>
            <p><?php echo get_field('contact_venue') ?></p>
          </div>
        </div><!-- End Info Item -->

      </div>

      <div class="col-lg-8">
      <form action="" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <select class="form-control" name="subject" required>
              <option value="" disabled selected>Select Subject</option>
              <option value="general">General Enquiry</option>
              <option value="donation">Donation</option>
              <option value="volunteer">Volunteer</option>
              <option value="team">Join the Team</option>
            </select>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="carousel-btn"><button type="submit" class="btn btn-static">Send Message</button></div>

        </form>
      </div><!-- End Contact Form -->

      <?php
                if (isset($_POST['submit'])) {

                // Get form data
                $name = $_POST['name'];
                $email = $_POST['email'];
                $subject = $_POST['subject'];
                $message = $_POST['message'];

                // Validate form data
                if (empty($name) || empty($email) || empty($subject) || empty($message)) {
                    echo "Please fill out all required fields.";
                    return;
                }

                // Prepare email content
                $to = "recipient@example.com"; // Replace with your recipient email address
                $from = $email;
                $subject = "Contact Form Submission: " . $subject;
                $message = "Name: " . $name . "\n\nEmail: " . $email . "\n\nSubject: " . $subject . "\n\nMessage: \n" . $message;

                // Send email
                if (mail($to, $subject, $message, "From: " . $from)) {
                    echo "Your message has been sent. Thank you!";
                } else {
                    echo "There was an error sending your message. Please try again later.";
                }
                }
                ?>

    </div>

  </div>
</section><!-- End Contact Section -->


   


<?php
get_footer();
 ?>