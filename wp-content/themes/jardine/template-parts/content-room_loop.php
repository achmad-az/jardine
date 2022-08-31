<?php global $post; ?>
<div class="room-loop-wrapper room-id-<?php echo $post->ID;?>">
  <div class="row">
    <div class="col-md-6">
      <?php
        $imageslider = '<div id="room-'.$post->ID.'" class="owl-carousel run-carousel room-owl-slider" data-owl="image-slider">';
        $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')[0];
        $imageslider .= '<a href="'.get_the_permalink().'">';
        $imageslider .= '<div class="item"><div class="image-slider-item" style="background-image:url('.$src.');"></div></div>';
        $imageslider .= '</a>';
        $imageslider .= '</div>';
        echo $imageslider ;
      ?>
    </div>
    <div class="col-md-6">
      <div class="room-content-wrapper">
        <a href="<?php echo the_permalink(); ?>"><h2><?php echo get_the_title($post->ID);?></h2></a>
        <span class="size-room"><?php echo get_field('price') ?></span>
        <div class="description"><?php echo wp_trim_words( get_the_excerpt(), 20, '...' );;?></div>
        <div class="custom-desc">
          <?php
            $amenities = get_field('aminities', $post->ID);
            if($amenities){
              echo '<ul class="amenities-list list-room-amenities">';
              $count = 0;
              foreach ($amenities as $key => $value) {
                if($count < 4){
                    echo '<li><image class="icon" src="'.wp_get_attachment_image_src($value['icon'], 'full')[0].'"><span>'.$value['item'].'</span></li>';
                }
                $count++;
              }
              echo '</ul>';
            }
          ?>
        </div>
        <a href="<?php echo the_permalink();?>" class="link-more">Explore More</a>
      </div>
    </div>
  </div>
</div>