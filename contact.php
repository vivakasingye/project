
<?php
require 'includes/header.php';
?>

<div class="uni-banner product-uni-banner">
<div class="container-fluid container-large">
<div class="uni-banner-text-area">
<h1>Contact Us</h1>
<ul>
<li><a href="index.html">Home</a></li>
<li>Contact Us</li>
</ul>
</div>
</div>
</div>


<div class="contact ptb-100">
<div class="container">
<div class="row g-5">
<div class="col-lg-6">
<div class="contact-form-text-area">
<form id="contactForm">
<div class="row">
<div class="col-md-6 col-sm-6 col-12">
<div class="form-group">
 <input type="text" class="form-control" placeholder="Name" id="name" required data-error="Please enter your name">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-12">
<div class="form-group">
<input type="email" name="email" class="form-control" placeholder="Email" id="email" required data-error="Please enter your Email">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-12">
<div class="form-group">
<input type="text" name="phone_number" class="form-control" placeholder="Phone Number" id="phone_number" required data-error="Please enter your phone number">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-12">
<div class="form-group">
<input type="text" name="msg_subject" class="form-control" placeholder="Subject" id="msg_subject" required data-error="Please enter your subject">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-12 col-sm-12 col-12">
<div class="form-group">
<textarea name="message" id="message" class="form-control" placeholder="Your Messages.." cols="30" rows="5" required data-error="Please enter your message"></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-12 col-sm-12 col-12">
<button class="default-button" type="submit"><span>Send Message</span></button>
<div id="msgSubmit" class="h6 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
</div>
<div class="col-lg-6">
<div class="customer-support-area">
<h4>Customer Support</h4>
<p>Need some help? Get in touch with us.</p>
<ul class="contact-list">
<li><i class="flaticon-phone-call"></i><a href="tel:+123456778">+256704667084, +256782677048 </a></li>
<li><i class="flaticon-email"></i><a href="mailto:sales@telecorner.ug">sales@telecorner.ug </a></li>
<li><i class="flaticon-location"></i><a href="https://goo.gl/maps/D8eSMhkTP4a7n1Pd8" target="_blank">JP Plaza Plot 57 Nkrumah Rd, Kampala, (U) </a></li>
</ul>
<h4>Working Hours</h4>
<ul class="working-time">
<li><span>Mon - Sat</span> <span>9:00AM - 9:00PM</span></li>
<li><span>Sun</span><span>Closed</span></li>
</ul>
</div>
</div>
</div>
 </div>
</div>


<div class="contact-google-map">
<iframe class="g-map" src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d31918.00348292003!2d32.58136771711551!3d0.3342323843930724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d0.35541239999999996!2d32.6164298!4m5!1s0x177dbc816b300001%3A0xd2af0c07da7409f2!2sTelecorner%20Uganda%20limited!3m2!1d0.3130386!2d32.5782346!5e0!3m2!1sen!2sug!4v1687790494869!5m2!1sen!2sug"></iframe>
</div>

<?php
require 'includes/footer.php';
?>

