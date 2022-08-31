<?php
  $subtitle = get_field('subtitle');
  $loop = get_posts(array(
    'numberposts' => -1,
    'post_type' => array('page', 'villa', 'special_offer')
  ));
  $post_id = array();
  $loopimage = array();
  foreach ($loop as $key => $value) {
    $image = get_post_thumbnail_id($value->ID);
    if(!empty($image)) {
      if(!empty($image)) {
        $loopimage[] = $image;
      }
    }
  }
  //let's do shuffle
  $keys = array_keys($loopimage);
  shuffle($keys);
  foreach($keys as $key) {
      $new[$key] = $loopimage[$key];
  }
  $loopimage = $new;
  $background = get_field('background');
  echo '<div class="wow fadeIn content-wrapper gallery-home" style="background: '.$background.'">';
  echo '<div class="jardine-container">';
  echo '<div class="ize-masonry-wrapper" >';
  echo '<h2>'.get_field('title').'</h2>';
  if ($subtitle != '') {
    echo '<p class="subtitle">'.$subtitle.'</p>';
  }
  echo '<div id="gallery-grid">';
  ?>
  <?php
  $count = 0;
  foreach ($loopimage as $key => $value) {
    if($count == 0) {
      $src = wp_get_attachment_image_src($value, 'large')[0];
      echo '<div class="grid-item width-30"><a href="'.$src.'"  data-toggle="lightbox" data-gallery="gallery-home" data-type="image"><div class="the-image" style="background-image:url('.$src.');"></div></a></div>';
    }
    if($count == 1 || $count == 2) {
      $src = wp_get_attachment_image_src($value, 'large')[0];
      echo '<div class="grid-item width-70"><a href="'.$src.'"  data-toggle="lightbox" data-gallery="gallery-home" data-type="image"><div class="the-image" style="background-image:url('.$src.');"></div></a></div>';
    }
    if($count == 3) {
      $src = wp_get_attachment_image_src($value, 'large')[0];
      echo '<div class="grid-item width-30"><div class="grid-item-child"><a  href="'.$src.'" data-toggle="lightbox" data-gallery="gallery-home" data-type="image"><div class="the-image" style="background-image:url('.$src.');"></div></a></div>';
    }
    if($count == 4) {
      $src = wp_get_attachment_image_src($value, 'large')[0];
      echo '<div class="grid-item-child the-last" style="text-align: right"><a  class="explore-more push-right" href="'.get_home_url().'/gallery">'.get_field('show_more_text').'</a><div class="the-image" style="background-image:url('.$src.');"></div></div></div>';
    }
    $count ++;
  }
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';