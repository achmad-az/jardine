<?php
global $post;

$title = get_field('section_title');
$subtitle = get_field('subtitle');
$description = get_field('section_description');
$is_link = get_field('is_link');
$bg_color = (get_field('background_color')) ? get_field('background_color') : '#ffffff';
?>
<div class="wow fadeIn content-wrapper" style="background-color: <?php echo $bg_color; ?>">
    <div class="jardine-container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="home-intro-content">
                <?php
                    if($title != ''){
                        echo '<h1 class="title-home-intro">'.$title.'</h1>';
                    }

                    if ($subtitle != '') {
                        echo '<p class="subtitle">'.$subtitle.'</p>';
                      }

                    if($description != ''){
                        echo '<div class="description">'.wpautop($description).'</div>';
                    }

                    if($is_link == 1){
                        $link_text = get_field('link_text');
                        $url = get_field('url');
                        echo '<div class="link-wrapper"><a href="'.esc_url($url).'">'.$link_text.'</a></div>';
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
</div>