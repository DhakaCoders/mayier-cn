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
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $args = array( 
    'post_type' => 'leases', 
    'posts_per_page' => 4, 
    'paged' => $paged,
    'orderby' => 'title',
    'order' => 'desc'  
  );
  $query = new WP_Query( $args );  
?>

<div class="promotions-page-con">
  <section class="promotions-grd-sec">
    <div class="promotions-grds-cntlr">
      <?php if ( $query->have_posts() ) : ?>
      <ul class="reset-list">
        <?php
        while ( $query->have_posts() ) : $query->the_post(); 
          $promoimgID = get_post_thumbnail_id(get_the_ID());
          $promotionsFeaImg = !empty($promoimgID)? cbv_get_image_tag($promoimgID): '';
          $promolink = get_field('link', get_the_ID());
      ?>
        <li>
          <div class="promotions-grd-item">
            <div class="promotions-grd-item-fea-img">
            <?php 
              if( !empty($promolink) ) printf('<a href="%s">', $promolink);
              echo $promotionsFeaImg; 
              if( !empty($promolink) ) printf('</a>');
            ?>
            </div>
            <div class="pgi-des">
              <h2 class="fl-h2 pgi-des-title">
              <?php 
                if( !empty($promolink) ) printf('<a href="%s">', $promolink);
                the_title();
                if( !empty($promolink) ) printf('</a>');
              ?>
              </h2>
              <p><?php the_excerpt(); ?></p>
            </div>
          </div>
        </li>
      <?php endwhile; ?>  
      </ul>
      <?php if( $query->max_num_pages > 1 ): ?>
      <div class="fl-pagination-ctlr clearfix">
      <?php
        $big = 999999999; // need an unlikely integer
        $query->query_vars['paged'] > 1 ? $current = $query->query_vars['paged'] : $current = 1;

        echo paginate_links( array(
          'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
          'type'      => 'list',
          'prev_next' => false,
          'prev_text' => __('Previous'),
          'next_text' => __('Next'),
          'format'    => '?paged=%#%',
          'current'   => $current,
          'total'     => $query->max_num_pages
        ) );
      ?>
      </div>
      <?php endif; ?>
      <?php else: ?>
        <div class="notfound"><?php echo _e('No Results.', 'mayier') ?></div>
      <?php endif; wp_reset_postdata(); ?> 
    </div>
  </section>
</div>
<?php
get_footer();
?>