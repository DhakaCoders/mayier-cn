<?php
/*
Template Name: Lease
*/
get_header(); 
$thisID = get_the_ID();
$customtitle = get_field('custom_page_title', $thisID);
$page_title = !empty($customtitle)? $customtitle: get_the_title($thisID);
get_template_part('templates/breadcrumbs');
?>
<section class="page-entry-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php 
            if( !empty($page_title) ) printf('<h1 class="peh-title fl-h1">%s</h1>', $page_title); 
        ?>
      </div>
    </div>
  </div>
</section>


<?php
  $args = array( 'post_type' => 'leases', 'posts_per_page' => -1 );
  $loop = new WP_Query( $args );  
  if ( $loop->have_posts() ) : 
?>

<div class="promotions-page-con">
  <section class="promotions-grd-sec">
    <div class="promotions-grds-cntlr">
      <ul class="reset-list">
        <?php
        while ( $loop->have_posts() ) : $loop->the_post(); 
          $leaseFeaImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
          $leaseLink = get_field('link', $thisID);
      ?>
        <li>
          <div class="promotions-grd-item">
            <div class="promotions-grd-item-fea-img">
              <a href="#">
                <img src="<?php echo $leaseFeaImg[0] ?>" alt="<?php the_content(); ?>">
              </a>
            </div>
            <div class="pgi-des">
              <h2 class="fl-h2 pgi-des-title"><a href="<?php echo $leaseLink; ?>"><?php the_title(); ?></a></h2>
              <p><?php the_excerpt(); ?></p>
            </div>
          </div>
        </li>
      <?php endwhile; wp_reset_postdata(); ?>  
      </ul>
    </div>
  </section>
</div>
<?php endif; ?> 



<?php
get_footer();
?>