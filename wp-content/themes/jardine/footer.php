<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jardine_Master_Theme
 */
	global $opt_settings;
?>
		<footer class="jardine-footer">
			 <div class="footer-contact-information" style="background-color: <?php echo $opt_settings['opt-footer-top-bgcolor'] ?>">
				 <div class="jardine-container">
				 	<?php //dynamic_sidebar('footer-1'); ?>
					<div class="row">
						<div class="col-md-8">
							<div class="contact-info-content">
								<?php dynamic_sidebar('footer-1'); ?>
							</div>
						</div>
						<div class="col-md-4">
							<h4>Keep Updated</h4>
							<p>Subscribe to our newsletter</p>
							<!-- <div class="form-group newsletter-wrapper">
								<input type="email" class="newsletter" name="newsletter" placeholder="Enter Your Email">
								<button class="button-newsletter">OK</button>
							</div> -->
							<?php echo do_shortcode ($opt_settings['opt-mailchimp-code']); ?>
							<div class="social-media-list">
								<?php echo do_shortcode('[social-media-icon]');?>
							</div>
						</div>
					</div>
			 	</div>
			 </div>
			 <div class="footer-bottom" style="background: <?php echo $opt_settings['opt-footer-bottom-bgcolor'] ?>">
				 <div class="jardine-container">
					 <div class="footer-menu">
						<div class="row">
							<div class="col-sm-4">
								<?php dynamic_sidebar( 'footer-menu-1' ); ?>
							</div>
							<div class="col-sm-4">
								<?php dynamic_sidebar( 'footer-menu-2' ); ?>
							</div>
							<div class="col-sm-4">
								<?php dynamic_sidebar( 'footer-menu-3' ); ?>
							</div>
						</div>
					 </div>
					 <div class="copyright">
						 <?php echo do_shortcode('[copyright-text]'); ?>
					 </div>
				 </div>
			 </div>
			 <?php if ($opt_settings['opt-set-booking']==1){
				?>
				<div id="mobile-bottom-cta" class="button-wrapper hidden-lg hidden-md">
				<a href="<?php echo $opt_settings['opt-simple-booking-url'];?>" class="button-book-now" style="color:<?php echo $opt_settings['opt-btnbook-color'];?>;background-color:<?php echo $opt_settings['opt-btnbook-backcolor'];?>;">Book Now</a>
			</div>
				<?php
			} else {
				?>
				<div id="mobile-bottom-cta" class="button-wrapper hidden-lg hidden-md">
					<a href="<?php echo home_url('/villas') ?>" class="button-book-now" id="button-book-now">Book Now</a>
				</div>
				<?php
			} ?>
		</footer>
	</div><!-- #contentSection -->
</div><!-- #page -->
<!-- Modal -->
<div id="specialOfferModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">

      </div>
    </div>

  </div>
</div>
<!-- Modal -->
<div id="bookingModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    	<button type="button" class="close" data-dismiss="modal" style="margin: 10px;">&times;</button>
      <?php echo do_shortcode('[booking-widget]');?>
    </div>

  </div>
</div>
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <div class="slides"></div>
    <h3 class="title"></h3>
		<div class="description"></div>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
<?php wp_footer(); ?>
<?php
if( $opt_settings['opt-footer-code'] != '' ) {
	echo '<!-- code below are generated dynamically by theme options -->';
	echo $opt_settings['opt-footer-code'];
	echo '<!-- // -->';
}
?>
</body>
</html>
