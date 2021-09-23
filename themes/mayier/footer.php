<?php 
  $logoObj = get_field('ftlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
  $fttext = get_field('fttext', 'options');
  $telephone = get_field('telephone', 'options');
  $mobile = get_field('mobile', 'options');
  $email = get_field('emailaddres', 'options');
  $address = get_field('address', 'options');
  $gurl = get_field('gurl', 'options');
  $gmaplink = !empty($gurl)?$gurl: 'javascript:void()';
  $smedias = get_field('socialinfo', 'options');
  $copyright_text = get_field('copyright_text', 'options');
?>
<footer class="footer-wrp">
  <div class="ftr-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="ftr-top-cntlr clearfix">
            <div class="ftr-col ftr-col-01">
              <?php if( !empty($logo_tag) ): ?>
              <div class="ftr-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
                </a>
              </div>
              <?php endif; ?>
            </div>
            <?php if( !empty($fttext) ): ?>
            <div class="ftr-col ftr-col-02">
              <div class="ftr-col-desc">
                <?php echo wpautop($fttext); ?>
              </div>
            </div>
            <?php endif; ?>
            <div class="ftr-col ftr-col-03">
              <h6 class="fl-h6 ftr-col-title"><?php _e('Quick Links', 'mayier'); ?></h6>
              <div class="ftr-menu">
                <?php 
                  $ftmenuOptions1 = array( 
                      'theme_location' => 'cbv_footer_menu1', 
                      'menu_class' => 'reset-list',
                      'container' => '',
                      'container_class' => ''
                    );
                  wp_nav_menu( $ftmenuOptions1 ); 
                ?>
              </div>
            </div>
            <div class="ftr-col ftr-col-04">
              <h6 class="fl-h6 ftr-col-title"><?php _e('View by types', 'mayier'); ?></h6>
              <div class="ftr-type">
                <?php 
                  $ftmenuOptions2 = array( 
                      'theme_location' => 'cbv_footer_menu2', 
                      'menu_class' => 'reset-list',
                      'container' => '',
                      'container_class' => ''
                    );
                  wp_nav_menu( $ftmenuOptions2 ); 
                ?>
              </div>
            </div>
            <div class="ftr-col ftr-col-05">
              <h6 class="fl-h6 ftr-col-title"><?php _e('Contact', 'mayier'); ?></h6>
              <div class="ftr-details">
                <ul class="reset-list">
                  <?php 
                    if( !empty($telephone) ) printf('<li><div class="ftr-details-col"><span>Phone: <a href="tel:%s">%s</a></span></div></li>', phone_preg($telephone), $telephone); 
                    if( !empty($mobile) ) printf('<li><div class="ftr-details-col"><span>Mobile: <a href="tel:%s">%s</a></span></div></li>', phone_preg($mobile), $mobile); 
                    if( !empty($email) ) printf('<li><div class="ftr-details-col"><span>Email: <a href="mailto:%s">%s</a></span></div></li>', $email, $email); 
                    if( !empty($address) ) printf('<li><div class="ftr-details-col"><span><a href="%s" target="_blank">%s</a></span></div></li>', $gmaplink, $address); 
                  ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
  <div class="ftr-btm">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="ftr-btm-cntlr">
            <div class="ftr-btm-lft">
              <div class="ftr-copyright">
                <?php if( !empty( $copyright_text ) ) printf( '%s', $copyright_text); ?> 
              </div>
              <div class="ftr-btm-nav">
              <?php 
                $copymenuOptions = array( 
                    'theme_location' => 'cbv_copyright_menu', 
                    'menu_class' => 'reset-list',
                    'container' => '',
                    'container_class' => ''
                  );
                wp_nav_menu( $copymenuOptions ); 
              ?>
              </div>
            </div>
            <div class="ftr-socials">
              <ul class="reset-list">
              <?php 
                if( !empty($smedias['facebook_url']) ) printf('<li><a target="_blank" href="%s"><i class="fab fa-facebook-f"></i></a></li>', $smedias['facebook_url']); 
                if( !empty($smedias['linkedin_url']) ) printf('<li><a target="_blank" href="%s"><i class="fab fa-linkedin-in"></i></a></li>', $smedias['facebook_url']); 
                if( !empty($smedias['instagram_url']) ) printf('<li><a target="_blank" href="%s"><i class="fab fa-instagram"></i></a></li>', $smedias['facebook_url']); 
                if( !empty($smedias['twitter_url']) ) printf('<li><a target="_blank" href="%s"><i class="fab fa-twitter"></i></a></li>', $smedias['facebook_url']); 
                if( !empty($smedias['facebook_url']) ) printf('<li><a target="_blank" href="%s"><i class="fab fa-youtube"></i></a></li>', $smedias['facebook_url']); 
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>