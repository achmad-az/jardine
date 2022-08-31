<?php
$rooms = get_field('villas');
$title = get_field('title');
$subtitle = get_field('subtitle');
$number_show = count($rooms);
$sections = get_field('accomodation_section');
$bg_color = (get_field('background_color')) ? get_field('background_color') : '#ffffff';

?>

<div class="wow fadeIn" style="background-color: <?php echo $bg_color; ?>">
  <div class="jardine-container">
  
    <div id="accrooms-0" class="home-accomodation-layout">
      <div class="accomodation-wrapper">
        <div class="row">
          <div class="col-md-12">
            <div class="accomodation-heading-wrapper">
              <?php
              if($title != '') {
                echo '<h2>'.$title.'</h2>';
              }

              if ($subtitle != '') {
                echo '<p class="subtitle">'.$subtitle.'</p>';
              }
              ?>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="accomodation-list-wrapper">
              <ul class="accomodation-list">
                <?php
    
                foreach ($rooms as $key => $value) {
                    $size = '';
                    $term = '';
                    $src = wp_get_attachment_image_src(get_post_thumbnail_id( $value->ID ), 'large')[0];
                    $terms = get_the_terms($value->ID, 'villa_location');

                    if ($terms) {
                      $term = $terms[0]->name;
                    }

                    echo '<li class="room" data-room="'.$key.'">';
                    echo '<div class="room-list-wrapper">';
                    echo '<a href="'.get_permalink($value->ID).'"><div class="image" style="background-image:url('.$src.');"><span class="button">Explore More</span></div></a>';
                    echo '<div class="content">';
                    echo '<span class="villa-category">'.$term.'</span>';
                    echo '<h4>'.get_the_title($value->ID).'</h4>';
                    echo '<span class="villa-price">'.get_field('price', $value->ID).'</span>';
                    echo '<a href="'.get_permalink($value->ID).'" class="more-link">Explore More</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</li>';
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="col-md-8 pull-right">
            <div class="accomodation-button-wrapper">
                <?php 
                    $link_type = get_field('link_type');
    
                    if ($link_type === 'internal') {
                        $url = get_field('page_link');
                    } else {
                        $url = get_field('url');
                    }
                ?>
              <a href="<?php echo esc_url($url); ?>" class="button-more"><?php echo get_field('link_text'); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>