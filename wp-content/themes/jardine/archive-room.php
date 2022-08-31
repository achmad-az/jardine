<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jardine_Master_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php echo the_breadcrumb(); ?>

		<?php
		if ( have_posts() ) : ?>

			<div class="page-archive-title">
				<?php
					echo '<h1>ROOM EXPERIENCE</h1>';
				?>
        <div class="select-wrapper">
          <select class="room-select" name="room-select">
            <option value="all" selected>All Rooms</option>
            <option value="deluxe">Deluxe Room</option>
            <option value="club">Club Room</option>
          </select>
        </div>

			</div><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'room_loop' );

			endwhile;


		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
