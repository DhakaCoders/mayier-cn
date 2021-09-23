<?php 
/*
Template Name: About Us
*/
get_header(); 
$thisID = get_the_ID();
get_template_part('templates/breadcrumbs');

$showhideintro = get_field('showhideintro', $thisID);
if($showhideintro): 
	$intro = get_field('introsec', $thisID);
	if($intro):
?>

<section class="about-us-sec">
	<?php if( !empty($intro['image']) ): ?>
	  <div class="about-us-lft-img-ctlr">
	    <?php echo cbv_get_image_tag( $intro['image'] ); ?>
	  </div>
  	<?php endif; ?>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="about-us-lft"></div>
      </div>
      <div class="col-md-6">
        <div class="about-us-rgt">
          <div class="about-us-sec-entry-heading">
            <h1 class="about-us-heading-title fl-h1"><?php echo !empty($intro['title'])? $intro['title']: get_the_title($thisID); ?></h1>
          </div>
          <div class="about-us-des">
          	<?php  
              if( !empty($intro['description']) ) echo wpautop( $intro['description'] );
            ?>
          </div>
        </div>
      </div>
    </div>
  </div> 
</section>
<?php endif; endif; ?>
<?php
	$showhideservice = get_field('showhideservice', $thisID);
	if($showhideservice): 
		$servicessec = get_field('servicessec', $thisID);
		if($servicessec):
?>
<section class="about-us-rental-services-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="rental-services-con-cntlr">
          <div class="rental-services-sec-entry-heading">
        	<?php 
            if( !empty($servicessec['title']) ) printf( '<h2 class="rental-services-heading-title fl-h1">%s</h2>', $servicessec['title'] ); 
        	?>
          </div>
          <?php 
          	$services = $servicessec['services'];
          	if($services):
          ?>
          <div class="rental-services-grids-cntlr">
            <ul class="reset-list">
          	<?php 
          		foreach($services as $service): 
        			$serviceIcon = !empty($service['icon'])? cbv_get_image_tag( $service['icon'] ): ''; 
        		?>
              <li>
                <div class="rental-services-grid-item">
                  <div class="rental-services-grid-item-img mHc">
                    <i>
                      <?php echo $serviceIcon; ?>
                    </i>
                  </div>
                  <?php 
          					if( !empty($service['title']) ) printf( '<h3 class="fl-h4 rental-services-grid-item-title mHc1">%s</h3>', $service['title'] );
          				?>
                  <div class="rental-services-grid-item-desc">
                  	<?php if( !empty($service['description']) ) echo wpautop( $service['description'] ); ?>
                  </div>
                </div>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; endif; ?>
<?php
	$showhidebrand = get_field('showhidebrand', $thisID);
	if($showhidebrand): 
		$fleetsbrand = get_field('fleetsbrand', $thisID);
		if($fleetsbrand):
			$luxuryFleetsFeaImg = !empty($fleetsbrand['image'])? cbv_get_image_tag( $fleetsbrand['image'] ): ''; 
?>
<section class="luxury-fleets-sec">
  <div class="luxury-fleets-sec-rgt-img-ctlr">
    <?php echo $luxuryFleetsFeaImg; ?>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="luxury-brand-con">
          <div class="sec-entry-hdr">
            <?php 
            if( !empty($fleetsbrand['title']) ) printf( '<h2 class="sec-entry-hdr-title fl-h1">%s</h2>', $fleetsbrand['title'] ); 
          	?>
          </div>
          <?php 
          	$brandobj = $fleetsbrand['select_brand'];
            if( empty($brandobj) ){
                $brandobj = get_terms( 'brand', array(
                      'hide_empty' => false,
                  ) );
            }
            if($brandobj){
		      ?>
          <div class="brand-cntlr">
            <ul class="reset-list">
			      <?php 
                foreach ( $brandobj as $brand ) { 
                $catthumID = get_field('brand_logo', $brand); 
                $cattag = !empty($catthumID)? cbv_get_image_tag($catthumID): '';
              ?>
              <li>
                <div class="brand-item">
                  <a class="mHc" href="<?php echo esc_url( get_category_link( $brand->term_id ) ); ?>"><?php echo $cattag; ?></a>
                </div>
              </li>
             <?php } ?>              
            </ul>
          </div>
          <?php } ?>        
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; endif; ?>
<?php get_footer(); ?>