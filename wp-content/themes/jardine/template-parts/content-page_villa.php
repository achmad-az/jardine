<?php global $opt_settings, $post; ?>
<div class="content-room-wrapper">
  <div class="row">
  <div class="col-md-7">
    <div class="content-room">
      <div class="title-room">
        <h1><?php echo get_the_title();?></h1>
        <span class="villa-location">
        <i class="fa fa-map-marker"></i>
        <?php 
          $term = '';
          $terms = get_the_terms($post->ID, 'villa_location');

          if ($terms) {
            $term = $terms[0]->name;
          }

          echo $term;
        ?>
        </span>
      </div>
      <div class="room-description">
        <?php echo the_breadcrumb(); ?>
        <?php the_content();?>
      </div>
      <div class="room-customdesc">
        <div class="title">
          <h2>Room Features</h2>
        </div>
        <div class="content">
          <?php
          $features = get_field('features', $post->ID);
          if (is_array($features)) {
            if(count($features) > 0) {
              echo '<ul class="amenities-list">';
              foreach ($features as $key => $value) {
                echo '<li><image class="icon" src="'.wp_get_attachment_image_src($value['icon'], 'full')[0].'"><span>'.$value['item'].'</span></li>';
              }
              echo '</ul>';
            }
          }
          ?>
        </div>
      </div>
      <div class="room-customdesc">
        <div class="title">
          <h2>Amenities</h2>
        </div>
        <div class="content">
          <?php
            $amenities = get_field('aminities', $post->ID);
            if (is_array($amenities)) {
              if(count($amenities) > 0) {
                echo '<ul class="amenities-list">';
                foreach ($amenities as $key => $value) {
                  echo '<li><image class="icon" src="'.wp_get_attachment_image_src($value['icon'], 'full')[0].'"><span>'.$value['item'].'</span></li>';
                }
                echo '</ul>';
              }
            }
          ?>
        </div>
      </div>
      <div class="room-customdesc">
        <div class="title">
          <h2>Special Offers</h2>
        </div>
        <div class="content">
          <?php echo wpautop(get_post_meta($post->ID, 'villa_special_offer', true)); ?>
          <?php 
            $book_text = get_field('booking_text', $post->ID);
            $book_url = get_field('booking_url', $post->ID)
          ?>
          <?php
            if($book_text) {
              echo '<a href="'.$book_url.'" class="button-more" target="_blank">'.$book_text.'</a>';
            }
          ?>

        </div>
      </div>
    </div>
  </div>
  <div class="col-md-5">

      <?php if ($opt_settings['opt-set-booking']==1){
        ?>
        <div class="room-booking-btn hidden-sm hidden-xs">
          <div class="button-wrapper">
            <a href="<?php echo $opt_settings['opt-simple-booking-url'];?>" target="_blank" class="button-book-now" style="color:<?php echo $opt_settings['opt-btnbook-color'];?>;background-color:<?php echo $opt_settings['opt-btnbook-backcolor'];?>;">Book Now</a>
          </div>
        </div>
        <?php
      } else {
        ?>
        <div class="booking-wrapper">
          <div class="room-booking-widget">
            <?php echo do_shortcode('[booking-widget]');  ?>
          </div>
        </div>
      <?php } ?>
  </div>
  <div class="col-md-12">
    <?php echo do_shortcode('[related]');?>
  </div>
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor">&times;</span>
  <div class="modal-content">
      <iframe src="<?php echo ($link)?$link:'#';?>" frameborder="0" width=70% height=450 allowfullscreen data-token="k6f7rb"></iframe>
  </div>
</div>
