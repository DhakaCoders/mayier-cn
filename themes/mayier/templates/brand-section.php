<?php
$showhidebrand = get_field('showhidebrand', HOMEID);
if($showhidebrand): 
$brands = get_field('brands', HOMEID);
if($brands):
?>
<section class="hm-brands-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-brands-cno-cntlr">
          <div class="hm-brands-con">
            <div class="sec-entry-hdr text-center">
              <?php if( !empty($brands['title']) ) printf('<h2 class="sec-entry-hdr-title fl-h1">%s</h2>', $brands['title']); ?>
            </div>
            <?php 
              $brandobj = $brands['select_brand'];

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
                  foreach( $brandobj as $brand ):
                  $catthumID = get_field('brand_logo', $brand); 
                  $cattag = !empty($catthumID)? cbv_get_image_tag($catthumID): '';
                ?>
                <li>
                  <div class="brand-item"> 
                    <a class="mHc" href="<?php echo esc_url( get_category_link( $brand->term_id ) ); ?>"><?php echo $cattag; ?></a>
                  </div>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
             <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>