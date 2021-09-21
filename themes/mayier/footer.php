<?php 
  $logoObj = get_field('ftlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
  $telephone = get_field('telephone', 'options');
  $mobile = get_field('mobile', 'options');
  $email = get_field('emailaddres', 'options');
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
              <div class="ftr-logo">
                <a href="#">
                  <img src="<?php echo THEME_URI; ?>/assets/images/ftr-logo.png" alt="">
                </a>
              </div>
            </div>
            <div class="ftr-col ftr-col-02">
              <div class="ftr-col-desc">
                <p>We know the difference is in the details and that’s why our car rental services, in the tourism and business industry, stand out for their quality and good taste, to offer you an unique experience</p>
              </div>
            </div>
            <div class="ftr-col ftr-col-03">
              <h6 class="fl-h6 ftr-col-title">Quick Links</h6>
              <div class="ftr-menu">
                <ul class="reset-list">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Property for Buy</a></li>
                  <li><a href="#">Property for Rent</a></li>
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Our Team</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="ftr-col ftr-col-04">
              <h6 class="fl-h6 ftr-col-title">View by types</h6>
              <div class="ftr-type">
                <ul class="reset-list">
                  <li><a href="#">Sedan</a></li>
                  <li><a href="#">Hatchback</a></li>
                  <li><a href="#">Suv</a></li>
                  <li><a href="#">4 Wheel</a></li>
                  <li><a href="#">Crossover</a></li>
                  <li><a href="#">Van</a></li>
                </ul>
              </div>
            </div>
            <div class="ftr-col ftr-col-05">
              <h6 class="fl-h6 ftr-col-title">Contact</h6>
              <div class="ftr-details">
                <ul class="reset-list">
                  <li>
                    <div class="ftr-details-col">
                      <span>Phone: <a href="tel:+97140000000">+971 4 000 0000</a></span>
                    </div>
                  </li>
                  <li>
                    <div class="ftr-details-col">
                      <span>Mobile: <a href="tel:+971504587321">+971 50 458 7321</a></span>
                    </div>
                  </li>
                  <li>
                    <div class="ftr-details-col">
                      <span>Email: <a href="mailto:info@mayier.ae">info@mayier.ae</a></span>
                    </div>
                  </li>
                  <li>
                    <div class="ftr-details-col">
                      <span><a href="#" target="_blank">Dubai, UAE</a></span>
                    </div>
                  </li>
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
                <p>Copyright &copy; Mayier International Car Rental LLC</p>
              </div>
              <div class="ftr-btm-nav">
                <ul class="reset-list">
                  <li><a href="#">Terms & Conditions</a></li>
                  <li><a href="#">Privacy & Cookies</a></li>
                </ul>
              </div>
            </div>
            <div class="ftr-socials">
              <ul class="reset-list">
                <li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a target="_blank" href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a target="_blank" href="#"><i class="fab fa-youtube"></i></a></li>
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