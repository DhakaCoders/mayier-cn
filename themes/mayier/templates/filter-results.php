<?php 
$thisID = get_the_ID();
$customtitle = get_field('custom_page_title', $thisID);
$page_title = !empty($customtitle)? $customtitle: get_the_title($thisID);
$telephone = get_field('telephone', 'options');
$whatsapp = get_field('whatsapp', 'options');
get_template_part('templates/breadcrumbs');
$type = isset($_GET['type']) && !empty($_GET['type'])? $_GET['type']: '';
$sdate = isset($_GET['start_date']) && !empty($_GET['start_date'])? $_GET['start_date']: '';
$edate = isset($_GET['end_date']) && !empty($_GET['end_date'])? $_GET['end_date']: '';

if( !empty($type) && !empty($sdate) && !empty($edate)){
  $meta_query = array('relation' => 'AND');
  $meta_query[] = array(
    'key'       => 'available_status',
    'value'     => '0'
  );
  $meta_query[] = array(
    'key'       => 'overview_start_date',
    'value'       => date('Ymd', strtotime($sdate)),
    'compare'     => '>=',
    'type'        => 'date'
  );
  $meta_query[] = array(
    'key'       => 'overview_end_date',
    'value'       => date('Ymd', strtotime($edate)),
    'compare'     => '<=',
    'type'        => 'date'
  );
  $args = array(  
      'post_type' => 'our-fleet',
      'post_status' => 'publish',
      'posts_per_page' => 6, 
      'orderby' => 'title', 
      'order' => 'desc',
      'tax_query' => array(
        array(
          'taxonomy' => 'car_type',
          'field'    => 'slug',
          'terms'    => array( $type ),
        )
      ),
      'meta_query' => $meta_query
  );
}elseif(empty($type) && !empty($sdate) && !empty($edate)){
  $meta_query = array('relation' => 'AND');
  $meta_query[] = array(
    'key'       => 'available_status',
    'value'     => '0'
  );
  $meta_query[] = array(
    'key'       => 'overview_start_date',
    'value'       => date('Ymd', strtotime($sdate)),
    'compare'     => '>=',
    'type'        => 'date'
  );
  $meta_query[] = array(
    'key'       => 'overview_end_date',
    'value'       => date('Ymd', strtotime($edate)),
    'compare'     => '<=',
    'type'        => 'date'
  );
  $args = array(  
      'post_type' => 'our-fleet',
      'post_status' => 'publish',
      'posts_per_page' => 6, 
      'orderby' => 'title', 
      'order' => 'desc',
      'meta_query' => $meta_query
  );
}elseif(empty($type) && empty($sdate) && !empty($edate)){
  $meta_query = array('relation' => 'AND');
  $meta_query[] = array(
    'key'       => 'available_status',
    'value'     => '0'
  );
  $meta_query[] = array(
    'key'       => 'overview_end_date',
    'value'       => date('Ymd', strtotime($edate)),
    'compare'     => '<=',
    'type'        => 'date'
  );
  $args = array(  
      'post_type' => 'our-fleet',
      'post_status' => 'publish',
      'posts_per_page' => 6, 
      'orderby' => 'title', 
      'order' => 'desc',
      'meta_query' => $meta_query
  );
}elseif(empty($type) && !empty($sdate) && empty($edate)){
  $meta_query = array('relation' => 'AND');
  $meta_query[] = array(
    'key'       => 'available_status',
    'value'     => '0'
  );
  $meta_query[] = array(
    'key'       => 'overview_start_date',
    'value'       => date('Ymd', strtotime($sdate)),
    'compare'     => '>=',
    'type'        => 'date'
  );
  $args = array(  
      'post_type' => 'our-fleet',
      'post_status' => 'publish',
      'posts_per_page' => 6, 
      'orderby' => 'title', 
      'order' => 'desc',
      'meta_query' => $meta_query
  );
}elseif(!empty($type) && !empty($sdate) && empty($edate)){
  $meta_query = array('relation' => 'AND');
  $meta_query[] = array(
    'key'       => 'available_status',
    'value'     => '0'
  );
  $meta_query[] = array(
    'key'       => 'overview_start_date',
    'value'       => date('Ymd', strtotime($sdate)),
    'compare'     => '>=',
    'type'        => 'date'
  );
  $args = array(  
      'post_type' => 'our-fleet',
      'post_status' => 'publish',
      'posts_per_page' => 6, 
      'orderby' => 'title', 
      'order' => 'desc',

      'tax_query' => array(
        array(
          'taxonomy' => 'car_type',
          'field'    => 'slug',
          'terms'    => array( $type ),
        )
      ),
      'meta_query' => $meta_query
  );
}elseif(!empty($type) && empty($sdate) && !empty($edate)){
  $meta_query = array('relation' => 'AND');
  $meta_query[] = array(
    'key'       => 'available_status',
    'value'     => '0'
  );
  $meta_query[] = array(
    'key'       => 'overview_end_date',
    'value'       => date('Ymd', strtotime($edate)),
    'compare'     => '<=',
    'type'        => 'date'
  );
  $args = array(  
      'post_type' => 'our-fleet',
      'post_status' => 'publish',
      'posts_per_page' => 6, 
      'orderby' => 'title', 
      'order' => 'desc',
      'tax_query' => array(
        array(
          'taxonomy' => 'car_type',
          'field'    => 'slug',
          'terms'    => array( $type ),
        )
      ),
      'meta_query' => $meta_query
  );
}elseif(!empty($type) && empty($sdate) && empty($edate)){
  $meta_query = array('relation' => 'AND');
  $meta_query[] = array(
    'key'       => 'available_status',
    'value'     => '0'
  );
  $args = array(  
      'post_type' => 'our-fleet',
      'post_status' => 'publish',
      'posts_per_page' => 6, 
      'orderby' => 'title', 
      'order' => 'desc',
      'tax_query' => array(
        array(
          'taxonomy' => 'car_type',
          'field'    => 'slug',
          'terms'    => array( $type ),
        )
      )
  );
}
$query = new WP_Query( $args );
$terms = get_terms( array(
    'taxonomy' => 'brand',
    'hide_empty' => false,
) );
?>
<div class="fleets-page-ctlr">
  <section class="fea-pro-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="fea-pro-sec-inr">
            <div class="sec-entry-hdr text-center" style="padding-bottom: 30px;">
              <h2 class="sec-entry-hdr-title fl-h1"><?php echo $page_title; ?></h2>
            </div>
            <?php if( $query->have_posts() ): ?>
              <!-- Filter -->
            <div class="fea-pro-grds">
              <ul class="reset-list clearfix">
              <?php 
                while($query->have_posts()): $query->the_post(); 
                global $post;
                $imgID = get_post_thumbnail_id(get_the_ID());
                $imgtag = !empty($imgID)? cbv_get_image_tag($imgID): fleet_placeholder('tag');
                $overview = get_field('overview', get_the_ID());
                $prices = $overview['prices'];
              ?> 
                <li>
                  <div class="fea-pro-grd-item">
                    <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                    <div class="fea-pro-hdr text-center mHc">
                      <h3 class="fea-pro-grd-item-title fl-h5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </div>
                    <div class="fea-pro-grd-img-ctlr">
                      <div class="fea-pro-grd-img mHc1">
                        <?php echo $imgtag; ?>
                      </div>
                    </div>

                    <div class="fea-pro-grd-info">
                      <?php if( $prices ): ?>
                      <ul class="reset-list">
                        <?php foreach( $prices as $price ): ?>
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
                          if( !empty($overview['eng_cap']) ) printf('<li><label>Engine Capacity:</label> <span>%s</span></li>', $overview['eng_cap']);
                          if( !empty($overview['secu_dep']) ) printf('<li><label>Security Deposit:</label> <span>%s</span></li>', $overview['secu_dep']);
                          if( !empty($overview['insurance']) ) printf('<li><label>Insurance:</label> <span>%s</span></li>', $overview['insurance']);
                          if( !empty($overview['mileage']) ) printf('<li><label>Mileage:</label> <span>%s</span></li>', $overview['mileage']);
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
                      <?php endif; ?>
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
                <?php endwhile; ?>
              </ul>
            </div>
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
          <div class="jm-pro-grds">
             <?php $no_results = get_field('no_results', 'options'); ?>
              <div class="notfound"><?php echo !empty($no_results)? $no_results: __('No Results.', 'jmcopier'); ?></div>
          </div>
            <?php endif; wp_reset_postdata(); ?>
            <div class="fea-pro-btm-des">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_template_part('templates/brand', 'section'); ?>
</div>