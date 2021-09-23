<?php 
  $car_types = get_terms( array(
      'taxonomy' => 'car_type',
      'hide_empty' => false,
  ) );
?>
<form action="<?php echo esc_url(home_url('our-fleet/')); ?>" method="get">
  <div class="hm-bnr-info-inr clearfix">
    <div class="hm-select hm-select-down-icon filter-col">
      <select class="hm-bnr-custom-select select-2-cntlr" name="type">
        <option value="" selected>Choos a Car</option>
        <?php 
          if( !empty($car_types) ): 
          foreach( $car_types as $car_type ): 
        ?>
        <option value="<?php echo $car_type->slug; ?>"><?php echo $car_type->name; ?></option>
        <?php 
          endforeach; 
          endif; 
        ?>
      </select>
    </div>
    <div class="hm-date-start filter-col">
      <div class="hm-date-start-inr">
        <div class="">
          <input class="start-flatpickr" type="text" name="start_date" placeholder="start date">
        </div>
      </div>
    </div>
    <div class="hm-date-end filter-col">
      <div class="hm-date-end-inr">
        <div class="">
          <input class="end-flatpickr" type="text" name="end_date" placeholder="end date">
        </div>
      </div>
    </div>
    <div class="hm-search">
      <div class="hm-seach-inr">
        <button class="hm-search-icon" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </div>
</form>