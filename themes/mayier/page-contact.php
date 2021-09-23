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
$cont_address = get_field('address', $thisID);
$cont_url = get_field('url', $thisID);
$gmaplink = !empty($cont_url)?$cont_url: 'javascript:void()';
$schedule = get_field('schedulesec', 'options');
$telephone = get_field('telephone', 'options');
$email = get_field('booking_email', 'options');
if( empty($cont_address) ){
  $cont_address = get_field('address', 'options');
  $gurl = get_field('gurl', 'options');
  $gmaplink = !empty($gurl)?$gurl: 'javascript:void()';
}
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
                  <?php if( !empty($telephone) ): ?>
                  <div class="cnt-tel cnt-dtails">
                    <i><img src="<?php echo THEME_URI; ?>/assets/images/tel-icon.png" alt=""></i>
                    <?php printf('<a href="tel:%s">%s</a>',phone_preg($telephone), $telephone); ?>
                  </div>
                  <?php 
                    endif;
                    if( !empty($email) ): 
                  ?>
                  <div class="cnt-mail cnt-dtails">
                    <i><img src="<?php echo THEME_URI; ?>/assets/images/mail-icon.png" alt=""></i>
                    <?php printf('<a href="mailto:%s">%s</a>',$email, $email); ?>
                  </div>
                  <?php 
                    endif;
                    if( !empty($cont_address) ): 
                  ?>
                  <div class="cnt-addres cnt-dtails">
                    <i><img src="<?php echo THEME_URI; ?>/assets/images/location-icon.png" alt=""></i>
                    <?php printf('<a href="%s">%s</a>', $gmaplink, $cont_address); ?>
                  </div>
                  <?php endif; ?>
                  <?php if( !empty($schedule) ): ?>
                  <div class="cnt-time cnt-dtails">
                    <i>
                      <img src="<?php echo THEME_URI; ?>/assets/images/time-icon.png" alt="">
                    </i>
                    <div class="cnt-time-inr">
                      <?php 
                        if( !empty($schedule['title']) ) printf('<span>%s</span>', $schedule['title']); 
                        if( !empty($schedule['time']) ) printf('<span>%s</span>', $schedule['time']); 
                      ?>
                    </div>
                  </div>
                  <?php endif; ?>
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