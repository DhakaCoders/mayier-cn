<?php 
get_header(); 
$thisID = get_the_ID();
get_template_part('templates/breadcrumbs');
$overview = get_field('overview', get_the_ID());
$continfo = get_field('contactinfo', get_the_ID());
$carparts = get_field('carparts', get_the_ID());
$options = get_field('options', get_the_ID());
$payments = get_field('payments', get_the_ID());
$others = get_field('others', get_the_ID());
?>
<section class="pro-single-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pro-single-cntlr">
          <h1 class="fl-h1 pro-single-title"><?php the_title(); ?></h1>
          <div class="pro-single-hding">
            <div class="pro-single-hding-info">
              <?php if( $prices = $overview['prices'] ): ?>
              <ul class="reset-list">
                <?php foreach( $prices as $price ): ?>
                <li>
                  <div class="pro-single-hding-info-item">
                    <?php 
                      if( !empty($price['currency']) ) printf('<span>%s</span>', $price['currency']);
                      if( !empty($price['price']) ) printf('<strong>%s</strong>', $price['price']);
                      if( !empty($price['label']) ) printf('<span>%s</span>', $price['label']);
                    ?>
                  </div>
                </li>
                <?php endforeach; ?>
              </ul>
              <?php endif; ?>
            </div>
            <div class="pro-single-hding-rgt">
              <h6 class="fl-h6 pro-single-hding-title"><?php _e('BOOK NOW', 'mayier'); ?></h6>
              <div class="pro-single-hding-rgt-btn">
                <?php if( $continfo ): ?>
                <ul class="reset-list clearfix">
                  <?php if( !empty($continfo['telephone']) ): ?>
                  <li>
                    <div class="fea-pro-grd-btn">
                      <a href="tel:<?php echo phone_preg($continfo['telephone']); ?>">
                        <?php _e('Call', 'mayier'); ?>
                        <i><img src="<?php echo THEME_URI; ?>/assets/images/white-tell-icon.png"></i>
                      </a>
                    </div>
                  </li>
                  <?php 
                    endif; 
                    if( !empty($continfo['whatsapp']) ):
                  ?>
                  <li class="">
                    <div class="fea-pro-grd-btn whatsapp">
                      <a href="https://wa.me/<?php echo phone_preg($continfo['whatsapp']); ?>">
                        <?php _e('WhatsApp', 'mayier'); ?>
                        <i><img src="<?php echo THEME_URI; ?>/assets/images/white-whatsapp-icon.png"></i>
                      </a>
                    </div>  
                  </li>
                  <?php 
                    endif; 
                    if( !empty($continfo['email_address']) ):
                  ?>
                  <li class="">
                    <div class="fea-pro-grd-btn mail">
                      <a href="mailto:<?php echo $continfo['email_address']; ?>">
                        <?php _e('Email', 'mayier'); ?>
                        <i><img src="<?php echo THEME_URI; ?>/assets/images/white-mail-icon.png"></i>
                      </a>
                    </div>
                  </li>
                  <?php endif; ?>
                </ul>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="pro-single-con">
            <div class="pro-single-con-lft">
              <div class="pro-details-cntlr">
                <div class="pro-details">
                  <?php if($carparts): ?>
                  <ul class="reset-list">
                    <li>
                      <div class="pro-details-item">
                        <div class="pro-details-item-img">
                          <img src="<?php echo THEME_URI; ?>/assets/images/pro-details-item-img-001.png" alt="">
                        </div>
                        <span class="pro-details-item-title"><?php _e('SEATS', 'mayier');?></span>
                        <?php if( !empty($carparts['seats']) ) printf('<strong class="pro-details-item-sub-title">%s</strong>', $carparts['seats']); ?>
                      </div>
                    </li>
                    <li>
                      <div class="pro-details-item ">
                        <div class="pro-details-item-img">
                          <img src="<?php echo THEME_URI; ?>/assets/images/pro-details-item-img-002.png" alt="">
                        </div>
                        <span class="pro-details-item-title"><?php _e('DOORS', 'mayier');?></span>
                        <?php if( !empty($carparts['doors']) ) printf('<strong class="pro-details-item-sub-title">%s</strong>', $carparts['doors']); ?>
                      </div>
                    </li>
                    <li>
                      <div class="pro-details-item">
                        <div class="pro-details-item-img">
                          <img src="<?php echo THEME_URI; ?>/assets/images/pro-details-item-img-003.png" alt="">
                        </div>
                        <span class="pro-details-item-title"><?php _e('TRANSMITION', 'mayier');?></span>
                        <?php if( !empty($carparts['transmition']) ) printf('<strong class="pro-details-item-sub-title">%s</strong>', $carparts['transmition']); ?>
                      </div>
                    </li>
                    <li>
                      <div class="pro-details-item">
                        <div class="pro-details-item-img">
                          <img src="<?php echo THEME_URI; ?>/assets/images/pro-details-item-img-004.png" alt="">
                        </div>
                        <span class="pro-details-item-title"><?php _e('BODY TYPE', 'mayier');?></span>
                        <?php if( !empty($carparts['body_type']) ) printf('<strong class="pro-details-item-sub-title">%s</strong>', $carparts['body_type']); ?>
                      </div>
                    </li>
                    <li>
                      <div class="pro-details-item">
                        <div class="pro-details-item-img">
                          <img src="<?php echo THEME_URI; ?>/assets/images/pro-details-item-img-005.png" alt="">
                        </div>
                        <span class="pro-details-item-title"><?php _e('FUEL TYPE', 'mayier');?></span>
                        <?php if( !empty($carparts['fuel_type']) ) printf('<strong class="pro-details-item-sub-title">%s</strong>', $carparts['fuel_type']); ?>
                      </div>
                    </li>
                    <li>
                      <div class="pro-details-item">
                        <div class="pro-details-item-img">
                          <img src="<?php echo THEME_URI; ?>/assets/images/pro-details-item-img-006.png" alt="">
                        </div>
                        <span class="pro-details-item-title"><?php _e('Engine', 'mayier');?></span>
                        <?php if( !empty($carparts['engine']) ) printf('<strong class="pro-details-item-sub-title">%s</strong>', $carparts['engine']); ?>
                      </div>
                    </li>
                  </ul>
                <?php endif; ?>
                </div>
              </div>
              <?php 
                $imgID = get_post_thumbnail_id(get_the_ID());
                $imgtag = !empty($imgID)? cbv_get_image_tag($imgID): fleet_placeholder('tag');
              ?>
              <div class="pro-fea-img-cntlr">
                <div class="pro-fea-img">
                  <?php echo $imgtag; ?>
                  <?php if( $overview['model'] ): ?>
                  <div class="pro-fea-img-label">
                    <span class="pro-name"><?php _e('model', 'mayier'); ?></span>
                    <?php printf('<strong class="pro-year">%s</strong>', $overview['model']); ?>
                  </div>
                <?php endif; ?>
                </div>
              </div>
              <div class="pro-single-con-desc">
                <?php the_content(); ?>
              </div>
              <div class="pro-con-lft-btn-cntlr">
                <div class="pro-con-lft-btn-inr">
                  <h6 class="fl-h6 pro-con-lft-btn-title"><?php _e('BOOK NOW', 'mayier'); ?></h6>
                  <div class="pro-con-lft-btn">
                    <ul class="reset-list clearfix">
                      <?php if( !empty($continfo['telephone']) ): ?>
                      <li>
                        <div class="fea-pro-grd-btn">
                          <a href="tel:<?php echo phone_preg($continfo['telephone']); ?>">
                            <?php _e('Call', 'mayier'); ?>
                            <i><img src="<?php echo THEME_URI; ?>/assets/images/white-tell-icon.png"></i>
                          </a>
                        </div>
                      </li>
                      <?php 
                        endif; 
                        if( !empty($continfo['whatsapp']) ):
                      ?>
                      <li class="">
                        <div class="fea-pro-grd-btn whatsapp">
                          <a href="https://wa.me/<?php echo phone_preg($continfo['whatsapp']); ?>">
                            <?php _e('WhatsApp', 'mayier'); ?>
                            <i><img src="<?php echo THEME_URI; ?>/assets/images/white-whatsapp-icon.png"></i>
                          </a>
                        </div>  
                      </li>
                      <?php 
                        endif; 
                        if( !empty($continfo['email_address']) ):
                      ?>
                      <li class="">
                        <div class="fea-pro-grd-btn mail">
                          <a href="mailto:<?php echo $continfo['email_address']; ?>">
                            <?php _e('Email', 'mayier'); ?>
                            <i><img src="<?php echo THEME_URI; ?>/assets/images/white-mail-icon.png"></i>
                          </a>
                        </div>
                      </li>
                      <?php endif; ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="pro-single-con-rgt">
              <div class="car-desc-cntlr">
                <?php if( $options ): ?>
                <div class="car-desc-module-cntlr">
                  <h6 class="fl-h6 car-desc-title"><?php _e('Car options', 'mayier'); ?></h6>
                  <div class="car-desc-module">
                    <ul class="reset-list">
                      <?php foreach( $options as $option ): ?>
                      <li>
                        <div class="car-desc-module-item">
                          <?php 
                            if( !empty($option['label']) ) printf('<span class="module-item-name">%s</span>', $option['label']);
                            if( !empty($option['value']) && $option['value'] == 'yes' )
                              printf('<span class="module-item-rgt">%s</span>', __('YES', 'mayier'));
                            else
                              printf('<span class="module-item-rgt">%s</span>', __('NO', 'mayier'));
                          ?>
                        </div>
                      </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                </div>
                <?php endif; ?>
                <?php if( $payments ): ?>
                <div class="car-desc-module-cntlr">
                  <h6 class="fl-h6 car-desc-title"><?php _e('PAYMENTS', 'mayier'); ?></h6>
                  <div class="car-desc-module">
                    <ul class="reset-list">
                      <?php foreach( $payments as $payment ): ?>
                      <li>
                        <div class="car-desc-module-item">
                          <?php
                            if( !empty($payment['label']) ) printf('<span class="module-item-name">%s</span>', $payment['label']); 
                            if( !empty($payment['value']) ) printf('<span class="module-item-rgt">%s</span>', $payment['value']); 
                          ?>
                        </div>
                      </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                </div>
                <?php endif; ?>
                <?php if( $others ): ?>
                <div class="car-desc-module-cntlr">
                  <h6 class="fl-h6 car-desc-title"><?php _e('Others', 'mayier'); ?></h6>
                  <div class="car-desc-module">
                    <ul class="reset-list">
                      <?php foreach( $others as $other ): ?>
                      <li>
                        <div class="car-desc-module-item">
                          <?php 
                            if( !empty($other['label']) ) printf('<span class="module-item-name">%s</span>', $other['label']);
                            if( !empty($other['value']) && $other['value'] == 'yes' )
                              printf('<span class="module-item-rgt">%s</span>', __('YES', 'mayier'));
                            else
                              printf('<span class="module-item-rgt">%s</span>', __('NO', 'mayier'));
                          ?>
                        </div>
                      </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                </div>
                <?php endif; ?>
              </div>
              <?php 
                $get_requir = get_field('requirement_for_fleet', 'options'); 
                if( $get_requir ):
              ?>
              <div class="requirements-module-cntlr">
                <div class="rqrmnt-mdul-hding">
                  <h6 class="fl-h6 rqrmnt-mdul-hding-title"><?php _e('Requirements for', 'mayier'); ?> <br><?php _e('UAE Residents', 'mayier'); ?></h6>
                  <h6 class="fl-h6 rqrmnt-mdul-tourists-title"><?php _e('Requirements', 'mayier'); ?> <br><?php _e('for Tourists', 'mayier'); ?></h6>
                </div>
                <div class="rqrmnt-mdul">
                  <?php echo wpautop($get_requir); ?>
                </div>
              </div>
             <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 

$types = get_the_terms($thisID, 'car_type');

if( !empty($types) ){
    foreach( $types as $type ){
      $slugs[] = $type->slug;
    }
    $fleetobj = get_posts( array(
      'post_type' => 'our-fleet',
      'posts_per_page'=> 3,
      'post__not_in' => array($thisID),
      'orderby' => 'date',
      'order'=> 'rand',
      'tax_query' => array(
        array(
          'taxonomy' => 'car_type',
          'field'    => 'slug',
          'terms'    => $slugs,
        )
      )

    ) );
}

if( empty($fleetobj) ){
    $fleetobj = get_posts( array(
      'post_type' => 'our-fleet',
      'posts_per_page'=> 3,
      'post__not_in' => array($thisID),
      'orderby' => 'date',
      'order'=> 'rand'
    ) );
}

if($fleetobj){
?>
<section class="fea-pro-sec pro-single-fea-pro-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="fea-pro-sec-inr">
          <div class="sec-entry-hdr text-center">
            <h2 class="sec-entry-hdr-title fl-h1"><?php _e('You may like these', 'mayier'); ?></h2>
          </div>
          <div class="fea-pro-grds">
            <ul class="reset-list clearfix">
              <?php 
                foreach( $fleetobj as $fleet ) {
                global $post;
                $imgID = get_post_thumbnail_id($fleet->ID);
                $imgtag = !empty($imgID)? cbv_get_image_tag($imgID): product_placeholder('tag');
                $oview = get_field('overview', $fleet->ID);
                $con_tinfo = get_field('contactinfo', $fleet->ID);
                $r_prices = $oview['prices'];
              ?>
              <li>
                <div class="fea-pro-grd-item">
                  <a href="<?php the_permalink($fleet->ID); ?>" class="overlay-link"></a>
                  <div class="fea-pro-hdr text-center mHc">
                    <h3 class="fea-pro-grd-item-title fl-h5"><a href="<?php the_permalink($fleet->ID); ?>"><?php echo get_the_title($fleet->ID); ?></a></h3>
                  </div>
                  <div class="fea-pro-grd-img-ctlr">
                    <div class="fea-pro-grd-img mHc1">
                      <?php echo $imgtag; ?>
                    </div>
                  </div>
                  <div class="fea-pro-grd-info">
                    <?php if( $r_prices ): ?>
                    <ul class="reset-list">
                      <?php foreach( $r_prices as $price ): ?>
                      <li>
                        <div class="fea-pro-grd-info-item">
                          <?php 
                            if( !empty($price['currency']) ) printf('<span>%s</span>', $price['currency']);
                            if( !empty($price['price']) ) printf('<strong>%s</strong>', $price['price']);
                            if( !empty($price['label']) ) printf('<span>%s</span>', $price['label']);
                          ?>
                        </div>
                      </li>
                      <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                  </div>
                  <div class="fea-pro-grd-des">
                    <ul class="reset-list clearfix">
                      <?php 
                        if( !empty($oview['eng_cap']) ) printf('<li><label>Engine Capacity:</label> <span>%s</span></li>', $oview['eng_cap']);
                        if( !empty($oview['secu_dep']) ) printf('<li><label>Security Deposit:</label> <span>%s</span></li>', $oview['secu_dep']);
                        if( !empty($oview['insurance']) ) printf('<li><label>Insurance:</label> <span>%s</span></li>', $oview['insurance']);
                        if( !empty($oview['mileage']) ) printf('<li><label>Mileage:</label> <span>%s</span></li>', $oview['mileage']);
                      ?>
                    </ul>
                  </div>
                  <div class="fea-pro-grds-button">
                    <ul class="reset-list clearfix">
                      <?php if( !empty($con_tinfo['telephone']) ): ?>
                      <li>
                        <div class="fea-pro-grd-btn">
                          <a href="tel:<?php echo phone_preg($con_tinfo['telephone']); ?>">
                            <?php _e('Call', 'mayier'); ?>
                            <i><img src="<?php echo THEME_URI; ?>/assets/images/white-tell-icon.png"></i>
                          </a>
                        </div>
                      </li>
                    <?php 
                      endif; 
                      if( !empty($con_tinfo['whatsapp']) ):
                    ?>
                      <li class="">
                        <div class="fea-pro-grd-btn whatsapp">
                          <a href="https://wa.me/<?php echo phone_preg($con_tinfo['whatsapp']); ?>">
                            <?php _e('WhatsApp', 'mayier'); ?>
                            <i><img src="<?php echo THEME_URI; ?>/assets/images/white-whatsapp-icon.png"></i>
                          </a>
                        </div>  
                      </li>
                    <?php 
                      endif; 
                      if( !empty($con_tinfo['email_address']) ):
                    ?>
                      <li class="">
                        <div class="fea-pro-grd-btn mail">
                          <a href="mailto:<?php echo $con_tinfo['email_address']; ?>">
                            <?php _e('Email', 'mayier'); ?>
                            <i><img src="<?php echo THEME_URI; ?>/assets/images/white-mail-icon.png"></i>
                          </a>
                        </div>
                      </li>
                      <?php endif; ?>
                    </ul>
                  </div>
                </div>
              </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>
<div class="modal fade show" id="hdr-rgt-btm-add-card" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-right:0;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fas fa-times"></i>
        </button>
        <div class="form-modal-cntlr">
          <div class="form-modal">
            <div class="form-model-img">
              <div class="form-img">
                <img src="<?php echo THEME_URI; ?>/assets/images/modal-bg.jpg" alt="">
              </div>
              <div class="form-logo">
                <img src="<?php echo THEME_URI; ?>/assets/images/modal-logo.png" alt="">
              </div>
            </div>
            <div class="form-heading">
              <h4 class="form-heading-title">Book a Car</h4>
            </div>
            <div class="contact-form-wrp clearfix">
              <div class="wpforms-container">
                <div class="wpforms-form needs-validation novalidate">
                  <div class="wpforms-field-container">
                    <div class="wpforms-field">
                      <input type="text" name="name" placeholder="Full Name *" required="">
                      <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Check this field!</label>
                      <label class="wpforms-input-icon" for=""><i class="far fa-user"></i></label>
                    </div>
                    <div class="wpforms-field">
                      <input type="text" name="text" placeholder="Phone *" required="">
                      <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Check this field!</label>
                      <label class="wpforms-input-icon phone" for=""><i class="fas fa-mobile-alt"></i></label>
                    </div> 
                    <div class="wpforms-field">
                      <input type="email" name="email" placeholder="Email *" required="">
                      <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Check this field!</label>
                      <label class="wpforms-input-icon email" for=""><i class="far fa-envelope"></i></label>
                    </div>
                    <div class="wpforms-field wpforms-field-textarea">
                      <textarea name="message" placeholder=""></textarea>
                    </div>
                  </div>
                  <div class="wpforms-submit-container">
                    <button type="submit" name="submit" class="wpforms-submit">Send Enquiry</button>
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
<?php get_footer(); ?>