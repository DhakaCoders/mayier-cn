<?php 
/*
Template Name: Contact Us
*/
get_header(); 
$thisID = get_the_ID();
$customtitle = get_field('custom_page_title', $thisID);
$page_title = !empty($customtitle)? $customtitle: get_the_title($thisID);
get_template_part('templates/breadcrumbs');
$shortcode = get_field('shortcode', $thisID);
$mapcode = get_field('mapcode', $thisID);
?>


<section class="contact-form-sec-wrp">
  <div class="container-md">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-forn-con-cntlr">
          <div class="contact-sec-entry-hdr">
            <h1 class="contact-sec-entry-hdr-title fl-h1"><?php echo $page_title; ?></h1>
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
                  <?php if( !empty($shortcode) ) echo do_shortcode($shortcode); ?>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </div>
</section>


<?php if( $mapcode ): ?>
<section class="contact-google-map-sec-wrp">
  <div class="contact-google-map-wrp">
    <div class="contact-google-map">
      <?php echo $mapcode; ?>
    </div> 
  </div>
</section>
<?php endif; ?>


<?php get_footer(); ?>