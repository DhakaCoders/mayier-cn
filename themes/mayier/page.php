<?php get_header(); 
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

<section class="mcr-page-con-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mcr-page-con-sec-inr">
          <div class="mcr-page-con-des">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>