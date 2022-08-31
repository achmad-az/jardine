<?php
  /**
  * Template Name: accomodation
  */
get_header();
echo the_breadcrumb();
?>
<div class="page-title-single">
  <?php
    echo get_the_title(get_the_ID());
  ?>
</div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
      the_content();
    ?>
</article>

<?php
echo do_shortcode('[room-content]');
get_footer();
