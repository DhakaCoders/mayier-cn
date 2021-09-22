<?php 
/*
Template Name: Contact Us
*/
get_header(); 
?>


<section class="contact-form-sec-wrp">
  <div class="container-md">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-forn-con-cntlr">
          <div class="contact-sec-entry-hdr">
            <h1 class="contact-sec-entry-hdr-title fl-h1">Contact us</h1>
          </div>
          <div class="contect-form-block clearfix">
            <div class="contact-form-lft">
              <div class="contact-form-info-cntlr">
                <div class="contact-form-info">
                  <div class="cnt-tel cnt-dtails">
                    <i><img src="<?php echo THEME_URI; ?>/assets/images/tel-icon.png" alt=""></i>
                    <a href="tel:+971500000000">+971 50 000 0000</a>
                  </div>
                  <div class="cnt-mail cnt-dtails">
                    <i><img src="<?php echo THEME_URI; ?>/assets/images/mail-icon.png" alt=""></i>
                    <a href="mailto:booking@mayier.ae">booking@mayier.ae</a>
                  </div>
                  <div class="cnt-addres cnt-dtails">
                    <i><img src="<?php echo THEME_URI; ?>/assets/images/location-icon.png" alt=""></i>
                    <a href="#">Office 1001, Building Name,<br>Business Bay, Dubai, UAE</a>
                  </div>
                  <div class="cnt-time cnt-dtails">
                    <i><img src="<?php echo THEME_URI; ?>/assets/images/time-icon.png" alt=""></i>
                    <span>Sat to Thu <br>9:00am to 6:00pm</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="contact-form-rgt">
              <div class="contact-form-dsc-wrp">
                <div class="contact-form-wrp clearfix">
                  <div class="wpforms-container">
                    <div class="wpforms-form needs-validation novalidate">
                      <div class="wpforms-field-container">
                        <div class="wpforms-field">
                          <input type="text" name="name" placeholder="Full Name *" required="">
                          <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Check this field!</label>
                        </div>
                        <div class="wpforms-field">
                          <input type="text" name="text" placeholder="Phone *" required="">
                          <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Check this field!</label>
                        </div>
                        <div class="wpforms-field">
                          <input type="text" name="text" placeholder="Company Name" required="">
                          <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Check this field!</label>
                        </div>
                        
                        <div class="wpforms-field">
                          <input type="email" name="email" placeholder="Email *" required="">
                          <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Check this field!</label>
                        </div>
                        <div class="wpforms-field wpforms-field-textarea">
                          <textarea name="message" placeholder="Message"></textarea>
                        </div>
                      </div>
                      <div class="wpforms-submit-container">
                        <button type="submit" name="submit" class="wpforms-submit">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </div>
</section>



<section class="contact-google-map-sec-wrp">
  <div class="contact-google-map-wrp">
    <div class="contact-google-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14442.15722952595!2d55.265597128817376!3d25.185029010387396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f682def25f457%3A0x3dd4c4097970950e!2sBusiness%20Bay%20-%20Dubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sbd!4v1632120885221!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div> 
  </div>
</section>


<?php get_footer(); ?>