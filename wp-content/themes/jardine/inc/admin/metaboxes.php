<?php
/**
 * Generated by the WordPress Meta Box generator
 * at http://jeremyhixon.com/tool/wordpress-meta-box-generator/
 */

function custom_css_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function custom_css_add_meta_box() {
	add_meta_box(
		'custom_css-custom-css',
		__( 'Custom CSS', 'custom_css' ),
		'custom_css_html',
		array('page', 'post'),
		'side',
		'high'
	);
}
add_action( 'add_meta_boxes', 'custom_css_add_meta_box' );

function custom_css_html( $post) {
	wp_nonce_field( '_custom_css_nonce', 'custom_css_nonce' ); ?>

	<p style="text-align:center">
    <button type="button" name="button" id="add-custom-css">Add Custom CSS</button>
    <textarea name="custom-css-code" style="display:none"><?php echo custom_css_get_meta( 'custom-css-code' ); ?></textarea>
	</p><?php
}

function custom_css_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['custom_css_nonce'] ) || ! wp_verify_nonce( $_POST['custom_css_nonce'], '_custom_css_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['custom-css-code'] ) )
		update_post_meta( $post_id, 'custom-css-code', esc_attr( $_POST['custom-css-code'] ) );
}
add_action( 'save_post', 'custom_css_save' );

function jardine_special_offer() {
	add_meta_box(
		'jardine-villa_special_offer',
		__('Special Offer', 'jardine'),
		'jardine_special_offer_cb',
		array('villa'),
		'normal'
	);
}
add_action( 'add_meta_boxes', 'jardine_special_offer' );

function jardine_special_offer_cb() {
	$id = $_GET['post'];
	wp_nonce_field('_villa_special_offer', 'villa_special_offer_nonce');
	?>

	<p>
		<textarea name="villa_special_offer" cols="15" rows="4" style="width: 100%"><?php echo get_post_meta($id, 'villa_special_offer', true); ?></textarea>
	</p>

	<?php
}

function villa_special_offer_save($post_id) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['villa_special_offer_nonce'] ) || ! wp_verify_nonce( $_POST['villa_special_offer_nonce'], '_villa_special_offer' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['villa_special_offer_nonce'] ) )
		update_post_meta( $post_id, 'villa_special_offer', esc_attr( $_POST['villa_special_offer'] ) );
}
add_action( 'save_post', 'villa_special_offer_save' );

/*
	Usage: custom_css_get_meta( 'custom_css_test' )
*/
