<?php 
get_header();
$telephone = get_field('telephone', 'options');
$whatsapp = get_field('whatsapp', 'options');
if( !empty($whatsapp) ):
?>

<div class="fixed-whatsapp-icon">
  <div class="fixed-whatsapp-icon-inr">
    <a href="https://api.whatsapp.com/send?phone=<?php echo phone_preg($whatsapp); ?>"><img src="<?php echo THEME_URI; ?>/assets/images/whatsapp-icon-lg.png"></a>
  </div>
</div>
<?php endif; ?>
<?php  
  $hbanner = get_field('banner', HOMEID);
  $banner = !empty($hbanner['image'])? cbv_get_image_src( $hbanner['image'] ): '';
  $image_2 = !empty($hbanner['image_2'])? cbv_get_image_src( $hbanner['image_2'] ): '';
?>
<section class="hm-banner">
  <div class="hm-bnr-img show-sm">
    <img src="<?php echo THEME_URI; ?>/assets/images/hm-bnr-img-01.png">
  </div>
  <div class="hm-bnr-overlay"></div>
  <div class="hm-page-banner">
    <div class="page-banner-bg inline-bg" style="background:url(<?php echo $banner; ?>)"></div>
    <div class="hm-page-bnr-des">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="hm-page-bnr-des-inr">
              <?php if( !empty($image_2) ): ?>
              <div class="hm-bnr-img hide-sm">
                <img src="<?php echo THEME_URI; ?>/assets/images/hm-bnr-img-01.png">
              </div>
              <?php endif; ?>
              <div class="">
                <div class="sec-entry-hdr hm-bnr-hdr text-center">
                  <?php if( !empty($banner['title']) ) printf('<h1 class="hm-bnr-title sec-entry-hdr-title fl-h4">%s</h1>', $banner['title']); ?>
                </div>
                <div class="hm-bnr-info">
                  <?php get_template_part('templates/car', 'filter'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$showhideintro = get_field('showhideintro', HOMEID);
if($showhideintro): 
$intro = get_field('introsec', HOMEID);
if($intro):
?>
<section class="car-offer-sec">
  <div class="car-offer-lft-img">
    <img src="<?php echo THEME_URI; ?>/assets/images/car-offer-bg2.png">
  </div>
  <?php if( !empty($intro['image']) ): ?>
  <div class="car-offer-rgt-img">
    <?php echo cbv_get_image_tag($intro['image']); ?>
  </div>
  <?php endif; ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="car-offer-sec-inr">
          <div class="car-offer-des">
          <?php 
            if( !empty($intro['title']) ) printf( '<h2 class="car-offer-des-title fl-h1">%s</h2>', $intro['title'] ); 
            if( !empty($intro['description']) ) echo wpautop( $intro['description'] );
          ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>
<?php
$showhidecar = get_field('showhidecar', HOMEID);
if($showhidecar): 
$pcars = get_field('popularcars', HOMEID);
if($pcars):
?>
<section class="fea-pro-sec sec-bg-pink">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="fea-pro-sec-inr">
          <div class="sec-entry-hdr text-center">
            <?php if( !empty($pcars['title']) ) printf('<h2 class="sec-entry-hdr-title fl-h1">%s</h2>', $pcars['title']); ?>
          </div>
          <?php 
            $carIDs = $pcars['select_cars'];
            if( empty($carIDs) ){
                $pcarobj = get_posts( array(
                  'post_type' => 'our-fleet',
                  'posts_per_page'=> 6,
                  'orderby' => 'rand'
                ) );
            }else{
              $pcarobj = get_posts( array(
                  'post_type' => 'our-fleet',
                  'posts_per_page'=> 6,
                  'post__in' => $carIDs,
                  'orderby' => 'rand'
                ) );
            }
            if($pcarobj){
          ?>
          <div class="fea-pro-grds">
            <ul class="reset-list clearfix">
              <?php 
                foreach( $pcarobj as $fleet ) {
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
                    <?php if( !empty($telephone) ): ?>
                        <li>
                          <div class="fea-pro-grd-btn">
                            <a href="tel:<?php echo phone_preg($telephone); ?>">
                              <?php _e('Call', 'mayier'); ?>
                              <i><img src="<?php echo THEME_URI; ?>/assets/images/white-tell-icon.png"></i>
                            </a>
                          </div>
                        </li>
                      <?php 
                        endif; 
                        if( !empty($whatsapp) ):
                      ?>
                        <li class="">
                          <div class="fea-pro-grd-btn whatsapp">
                            <a href="https://api.whatsapp.com/send?phone=<?php echo phone_preg($whatsapp); ?>">
                              <?php _e('WhatsApp', 'mayier'); ?>
                              <i><img src="<?php echo THEME_URI; ?>/assets/images/white-whatsapp-icon.png"></i>
                            </a>
                          </div>  
                        </li>
                      <?php 
                        endif; 
                      ?>
                        <li class="">
                          <div class="fea-pro-grd-btn mail">
                            <a href="mailto:">
                              <?php _e('Email', 'mayier'); ?>
                              <i><img src="<?php echo THEME_URI; ?>/assets/images/white-mail-icon.png"></i>
                            </a>
                          </div>
                        </li>
                    </ul>
                  </div>
                </div>
              </li>
              <?php } ?>
            </ul>
          </div>
          <?php } ?>
          <?php if( !empty($pcars['description']) ): ?>
          <div class="fea-pro-btm-des">
            <?php echo wpautop($pcars['description']); ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>
<?php
$showhidepromo = get_field('showhidepromo', HOMEID);
if($showhidepromo): 
$promo = get_field('promotion', HOMEID);
if($promo):
?>
<div class="promotion-grds-sec-ctlr">
  <section class="promotions-grd-sec">
    <div class="container">
      <div class="col-md-12">
        <div class="sec-entry-hdr text-center">
          <?php if( !empty($promo['title']) ) printf('<h2 class="sec-entry-hdr-title fl-h1">%s</h2>', $promo['title']); ?>
        </div>
      </div>
    </div>
    <?php 
      $promoIDs = $promo['select_promotion'];
      if( empty($promoIDs) ){
          $promoobj = get_posts( array(
            'post_type' => 'promotion',
            'posts_per_page'=> 2,
            'orderby' => 'rand'
          ) );
      }else{
        $promoobj = get_posts( array(
            'post_type' => 'promotion',
            'posts_per_page'=> 2,
            'post__in' => $promoIDs,
            'orderby' => 'rand'
          ) );
      }
      if($promoobj){
    ?>
    <div class="promotions-grds-cntlr">
      <ul class="reset-list">
        <?php 
          foreach( $promoobj as $promo_row ) {
          global $post;
          $promoimgID = get_post_thumbnail_id($promo_row->ID);
          $promoimgtag = !empty($promoimgID)? cbv_get_image_tag($promoimgID): '';
          $promolink = get_field('promo_link', $promo_row->ID);
        ?>
        <li>
          <div class="promotions-grd-item">
            <div class="promotions-grd-item-fea-img">
                <?php 
                  if( !empty($promolink) ) printf('<a href="%s">', $promolink);
                  echo $promoimgtag; 
                  if( !empty($promolink) ) printf('</a>');
                ?>
            </div>
          </div>
        </li>
        <?php } ?>
      </ul>
    </div>
    <?php } ?>
  </section>
</div>
<?php endif; ?>
<?php endif; ?>
<?php get_template_part('templates/brand', 'section'); ?>
<?php get_footer(); ?>