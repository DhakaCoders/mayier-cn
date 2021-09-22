<?php get_header(); ?>
<?php get_template_part('templates/breadcrumbs'); ?>
<section class="page-404-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-404-dsc-wrp">
          <h2 class="title-404">404!</h2>
          <span><?php _e('We keep focus on details.', 'mayier'); ?></span>
          <p><?php _e('It looks like nothing was found at this location.', 'mayier'); ?></p>
          <div class="page-404-btn clearfix">
            <a class="fl-orange-btn" href="<?php echo esc_url( home_url('/') ); ?>"><?php _e('HOME', 'mayier'); ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>