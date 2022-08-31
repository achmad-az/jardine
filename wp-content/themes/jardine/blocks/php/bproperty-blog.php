<?php

$items = get_field('posts');
$title = get_field('title');
$subtitle = get_field('subtitle');
$show_more = get_field('show_more_text');
$bg_color = (get_field('background_color')) ? get_field('background_color') : '#ffffff';

echo "<div class=wow fadeIn content-wrapper style='background-color: {$bg_color}'>";
echo "<div class=jardine-container>";
echo "<div class=row>";
echo "<div class=col-md-12>";

if(count($items) > 0) {
  echo '<div class="post-carousel-layout">';
  echo '<h2>'.$title.'</h2>';
  if ($subtitle != '') {
    echo '<p class="subtitle">'.$subtitle.'</p>';
  }
  echo '<div id="postCar-1" class="owl-carousel run-carousel post-carousel">';
  foreach ($items as $key => $value) {
      
    if(get_post_type($value->ID) == 'special_offer'){
      $src = wp_get_attachment_image_src(get_post_thumbnail_id( $value->ID ), 'large')[0];
      $link = get_the_permalink($value->ID);
      $post_content = $value->post_content;
      //$json = json_encode($post_content);
      echo '<div class="item">';
      echo '<div class="wrapper-item-carousel">';
      echo '<a href="'.(($link !== '')?$link:'#').'"><div class="image" style="background-image:url('.$src.')">';
      echo '<span class="button-image">Reserve Now</span>';
      echo '</div></a>';
      echo '<div class="content">';
      echo '<h3>'.get_the_title($value->ID).'</h3>';
      echo '<a href="'.(($link !== '')?$link:'#').'" class="button-link">Read More</a>';

      echo '<input type="hidden" value="'.htmlspecialchars(wpautop($post_content)).'" data-index="'.$key.'">';
      echo '</div>';
      echo '</div>';
      echo '</div>';
    } else {
      $src = wp_get_attachment_image_src(get_post_thumbnail_id( $value->ID ), 'large')[0];
      echo '<div class="item">';
      echo '<div class="wrapper-item-carousel">';
      echo '<a href="'.get_permalink($value->ID).'"><div class="image" style="background-image:url('.$src.')">';
      echo '<span class="button-image">Read More</span>';
      echo '</div></a>';
      echo '<div class="content">';
      echo '<h3>'.get_the_title($value->ID).'</h3>';
      echo '<p class="description">'.izeTruncate(wp_trim_words(get_post_field('post_content', $value->ID), 40, ''), 150, ' ').'</p>';
      echo '<a href="'.get_permalink($value->ID).'" class="button-link">Read More</a>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
    }

  }
  echo '</div>';
    $text = get_field('show_more_text');
    if (get_field('link_type') === 'internal') {
        $link = get_field('show_more_link');
        $blank = '';
    } else {
        $link = get_field('url');
        $blank = '_blank';
    }
    echo '<a href="'.$link.'" class="show-more-link" target="'.$blank.'">'.$text.'</a>';
  echo '</div>';
}

echo '</div>';
echo "</div>";
echo "</div>";
echo "</div>";