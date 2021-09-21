<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="theme-color" content="#f85700">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
  <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
  <?php } ?>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->	

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
$telephone = get_field('telephone', 'options');
$logoObj = get_field('hdlogo', 'options');
if( is_array($logoObj) ){
$logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
}else{
$logo_tag = '';
}
$telephone = get_field('telephone', 'options');
$whatsapp = get_field('whatsapp', 'options');
$email = get_field('emailaddres', 'options');
?> 
<!-- Main Header-->
<header class="main-header">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
            <!-- Header Upper -->
          <div class="header-upper">        
              <div class="auto-container">
                  <!-- Main Box -->
                  <div class="main-box clearfix">
                      <!--Logo-->
                      <div class="logo-box">
                          <div class="logo"><a href="index.html" title="MAB CONTRACTING L.L.C"><img src="<?php echo THEME_URI; ?>/assets/images/logo.png" alt="" title=""></a></div>
                      </div>
                      <div class="upper-right">
                          <div class="top-info clearfix">
                              <ul class="clearfix">
                                  <li class="phone">
                                    <span class="icon"><img src="<?php echo THEME_URI; ?>/assets/images/tel-icon.png" alt=""></span>
                                    <span class="subtitle">Call Us Today!</span>
                                    <a href="tel:+971500000000">+971 50 000 0000</a>
                                  </li>
                                  <li class="email">
                                    <span class="icon"><img src="<?php echo THEME_URI; ?>/assets/images/mail-icon.png" alt=""></span>
                                    <span class="subtitle">Book via Email</span>
                                    <a href="mailto:booking@mayier.ae">booking@mayier.ae</a>
                                  </li>
                                  <li class="hdr-time">
                                    <span class="icon"><img src="<?php echo THEME_URI; ?>/assets/images/time-icon.png" alt=""></span>
                                    <span class="subtitle">Sat to Thu</span>
                                    <a>9:00am to 6:00pm</a>
                                  </li>
                              </ul>
                          </div>
                          <!--Nav Outer-->
                          <div class="nav-outer clearfix">                
                              <nav class="main-menu navbar-expand-md navbar-light">
                                  <div class="navbar-header">
                                      <!-- Toggle Button -->
                                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                          <span class="icon"><img src="<?php echo THEME_URI; ?>/assets/images/menu-icon.png" alt=""></span>
                                      </button>
                                  </div>
                                  
                                  <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                      <ul class="navigation clearfix">
                                          <li class="current-menu-item"><a href="#">HOME</a></li>
                                          <li><a href="#">Our Fleets</a></li>
                                          <li class="menu-item-has-children">
                                            <a href="#">Lease</a>
                                            <ul class="sub-menu">
                                              <li><a href="#">Sub Menu 1</a></li>
                                              <li><a href="#">Sub Menu 2</a></li>
                                              <li><a href="#">Sub Menu 3</a></li>
                                            </ul>
                                          </li>
                                          <li><a href="#">Promotions</a></li>
                                          <li><a href="#">About Us</a></li>
                                          <li><a href="#">Contact us</a></li>
                                      </ul>
                                  </div>
                              </nav>
                              <!-- Main Menu End-->

                          </div>
                          <!--Nav Outer End-->
                          <!-- Hidden Nav Toggler -->
                          <div class="nav-toggler">
                              <button class="hidden-bar-opener"><span class="icon"><img src="<?php echo THEME_URI; ?>/assets/images/menu-icon.png" alt=""></span></button>
                          </div><!-- / Hidden Nav Toggler -->

                      </div>
                  </div>
              </div>
              <!-- End Header Upper -->
              
          </div> 
        </div>
      </div>
  </div>
</header>
<!--End Main Header -->

<!--Menu Backdrop-->
<div class="menu-backdrop"></div>