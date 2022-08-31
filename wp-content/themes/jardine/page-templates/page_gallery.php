<?php
  global $post;
  /**
  * Template Name: Gallery
  */
  get_header();
  ?>
<div class="jardine-container">
  <?php echo the_breadcrumb(); ?>

<div class="gallery-wrapper">
  <div class="page-gallery-title">
    <?php
      echo '<h1>'.$post->post_title.'</h1>';
      $terms = get_terms([
          'taxonomy' => 'gallery_cat',
          'hide_empty' => false,
      ]);
    ?>
    <div class="select-wrapper">
      <select class="room-select" name="room-select">
        <option value="all" selected>All Albums</option>
        <?php
          foreach ($terms as $key => $value) {
            echo '<option value="'.$value->slug.'">'.$value->name.'</option>';
          }
        ?>
      </select>
    </div>
  </div>
  <div class="gallery-content">
    <div class="content">
          <?php echo $post->post_content; ?>
    </div>
    <div id="gallery-grid">
      <div class="ms-sizer"></div>
      <?php echo show_gallery_image();?>
    </div>
    <div class="load-more-button">
      <input type="hidden" id="gallery-ajax-offset" value=""/>
      <a href="#" class="button-more load-more-image">Load more images</a>
    </div>
  </div>
</div>

</div>
<?php
get_footer();
