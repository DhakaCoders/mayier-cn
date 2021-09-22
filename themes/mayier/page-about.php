<?php 
/*
Template Name: About Us
*/
get_header(); 
$thisID = get_the_ID();
$customtitle = get_field('custom_page_title', $thisID);
$page_title = !empty($customtitle)? $customtitle: get_the_title($thisID);
get_template_part('templates/breadcrumbs');
?>

<section class="about-us-sec">
  <div class="about-us-lft-img-ctlr">
    <img src="<?php echo THEME_URI; ?>/assets/images/about-us-1.jpg" alt="">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="about-us-lft"></div>
      </div>
      <div class="col-md-6">
        <div class="about-us-rgt">
          <div class="about-us-sec-entry-heading">
            <h1 class="about-us-heading-title fl-h1"><?php echo $page_title; ?></h1>
          </div>
          <div class="about-us-des">
            <h2>Mayier International Rent a Car</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam from edit that posibiliteies bla truc from now</p>
            <p>Pro inimicus sapientem an, ad cibo velit mollis mei, ne vim adhuc gubergren. Vis no intellegebat voluptatibus, vim an partem admodum copiosae, has ei mutat maluisset comprehensam.Lorem ipsum dolor sit amet, vix verterem sensibus erroribus eu, cu mel iusto iudico labore. Magna pertinax urbanitas.</p>
            <p>Pro inimicus sapientem an, ad cibo velit mollis mei, ne vim adhuc gubergren. Vis no intellegebat voluptatibus, vim an partem admodum copiosae, has ei mutat maluisset comprehensam.Lorem ipsum dolor sit amet, vix verterem sensibus erroribus eu, cu mel iusto iudico labore. Magna pertinax urbanitas.</p>
            <h2>Core Values</h2>
            <p>We go through extensive factory training so that we may provide you with the knowledge you need to make an educated decision in choosing the vehicle that is right for your lifestyle.</p>
          </div>
        </div>
      </div>
    </div>
  </div> 
</section>


<section class="about-us-rental-services-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="rental-services-con-cntlr">
          <div class="rental-services-sec-entry-heading">
            <h2 class="rental-services-heading-title fl-h1">Luxury Car Rental Services</h2>
          </div>
          <div class="rental-services-grids-cntlr">
            <ul class="reset-list">
              <li>
                <div class="rental-services-grid-item">

                    <div class="rental-services-grid-item-img mHc">
                      <i>
                        <img src="<?php echo THEME_URI; ?>/assets/images/luxury-img-1.png" alt="">
                      </i>
                    </div>
                    <h3 class="fl-h4 rental-services-grid-item-title mHc1">Variety of Car Brands</h3>
                    <div class="rental-services-grid-item-desc">
                      <p>We go through extensive factory training so that we may provide you with the knowledge you need to make an educated decision in choosing the vehicle that is right for your lifestyle.</p>
                    </div>

                </div>
              </li>
              <li>
                <div class="rental-services-grid-item">

                    <div class="rental-services-grid-item-img mHc">
                      <i>
                        <img src="<?php echo THEME_URI; ?>/assets/images/luxury-img-2.png" alt="">
                      </i>
                    </div>
                    <h3 class="fl-h4 rental-services-grid-item-title mHc1">Best Rate Guarantee</h3>
                    <div class="rental-services-grid-item-desc">
                      <p>We go through extensive factory training so that we may provide you with the knowledge you need to make an educated decision in choosing the vehicle that is right for your lifestyle.</p>
                    </div>

                </div>
              </li>
              <li>
                <div class="rental-services-grid-item">

                    <div class="rental-services-grid-item-img mHc">
                      <i>
                        <img src="<?php echo THEME_URI; ?>/assets/images/luxury-img-3.png" alt="">
                      </i>
                    </div>
                    <h3 class="fl-h4 rental-services-grid-item-title mHc1">Awesome Customer Support</h3>
                    <div class="rental-services-grid-item-desc">
                      <p>We go through extensive factory training so that we may provide you with the knowledge you need to make an educated decision in choosing the vehicle that is right for your lifestyle.</p>
                    </div>

                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="luxury-fleets-sec">
  <div class="luxury-fleets-sec-rgt-img-ctlr">
    <img src="<?php echo THEME_URI; ?>/assets/images/about-us-2.jpg" alt="">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="luxury-brand-con">
          <div class="sec-entry-hdr">
            <h2 class="sec-entry-hdr-title fl-h1">Luxury Fleets</h2>
          </div>
          <div class="brand-cntlr">
            <ul class="reset-list">
              <li>
                <div class="brand-item">
                  <a class="mHc" href="#"><img src="<?php echo THEME_URI; ?>/assets/images/brand-1.png" alt=""></a> 
                </div>
              </li>
              <li>
                <div class="brand-item">
                  <a class="mHc" href="#"><img src="<?php echo THEME_URI; ?>/assets/images/brand-2.png" alt=""></a>
                </div>
              </li>
              <li>
                <div class="brand-item">
                  <a class="mHc" href="#"><img src="<?php echo THEME_URI; ?>/assets/images/brand-3.png" alt=""></a> 
                </div>
              </li>
              <li>
                <div class="brand-item">
                  <a class="mHc" href="#"><img src="<?php echo THEME_URI; ?>/assets/images/brand-4.png" alt=""></a>
                </div>
              </li>
              <li>
                <div class="brand-item">
                  <a class="mHc" href="#"><img src="<?php echo THEME_URI; ?>/assets/images/brand-5.png" alt=""></a> 
                </div>
              </li>
              <li>
                <div class="brand-item">
                  <a class="mHc" href="#"><img src="<?php echo THEME_URI; ?>/assets/images/brand-6.png" alt=""></a> 
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<?php get_footer(); ?>