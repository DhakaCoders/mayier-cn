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
$schedule = get_field('schedulesec', 'options');
$email = get_field('booking_email', 'options');
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
                         <?php if( !empty($logo_tag) ): ?>
                          <div class="logo">
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                              <?php echo $logo_tag; ?>
                            </a>
                          </div>
                          <?php endif; ?>
                      </div>
                      <div class="upper-right">
                          <div class="top-info clearfix">
                              <ul class="clearfix">
                                <?php if( !empty($telephone) ): ?>
                                  <li class="phone">
                                    <span class="icon"><img src="<?php echo THEME_URI; ?>/assets/images/tel-icon.png" alt=""></span>
                                    <span class="subtitle"><?php _e('Call Us Today!', 'mayier'); ?></span>
                                    <a href="tel:<?php echo phone_preg($telephone); ?>"><?php echo $telephone; ?></a>
                                  </li>
                                  <?php endif; ?>
                                  <?php if( !empty($telephone) ): ?>
                                  <li class="email">
                                    <span class="icon"><img src="<?php echo THEME_URI; ?>/assets/images/mail-icon.png" alt=""></span>
                                    <span class="subtitle"><?php _e('Book via Email', 'mayier'); ?></span>
                                    <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                                  </li>
                                  <?php endif; ?>
                                  <?php if( !empty($schedule) ): ?>
                                  <li class="hdr-time">
                                    <span class="icon"><img src="<?php echo THEME_URI; ?>/assets/images/time-icon.png" alt=""></span>
                                    <?php 
                                      if( !empty($schedule['title']) ) printf('<span class="subtitle">%s</span>', $schedule['title']); 
                                      if( !empty($schedule['time']) ) printf('<a>%s</a>', $schedule['time']); 
                                    ?>
                                  </li>
                                  <?php endif; ?>
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
                                    <?php 
                                      $menuOptions = array( 
                                          'theme_location' => 'cbv_main_menu', 
                                          'menu_class' => 'navigation clearfix',
                                          'container' => '',
                                          'container_class' => ''
                                        );
                                      wp_nav_menu( $menuOptions ); 
                                    ?>
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