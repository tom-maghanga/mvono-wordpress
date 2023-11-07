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


        
 
               <!-- Contact Start -->
               <div class="contact">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Get In Touch</p>
                        <h2>Contact for any query</h2>
                    </div>
                    <div class="contact-img">
                        <img src="<?php echo get_theme_file_uri('img/contact.jpg') ?>" alt="Image">
                    </div>
                    <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                <div class="control-group">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit" id="sendMessageButton">Send Message</button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
            <!-- Contact End -->
    
   


<?php
get_footer();
 ?>