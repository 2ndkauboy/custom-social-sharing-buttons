<?php
/*
 * Plugin Name: Custom Social Sharing Buttons
 * Description: An example for adding custom social sharing buttons to a website/post
 * Version: 1.0.0
 * Author: Bernhard Kau
 * Author URI: http://kau-boys.de
 * Plugin URI: https://github.com/2ndkauboy/custom-social-sharing-buttons
 * License: GPLv3
 * License URI: http://www.gnu.org/licenses/gpl-3.0
*/

function custom_social_sharing_buttons_markup() {
	?>
		<ul class="social-icons sharing-links">
			<li>
				<a class="popup facebook" target="_blank" data-service="facebook" data-width="660" data-height="350" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( esc_attr( get_permalink() ) ); ?>&amp;t=<?php echo urlencode( esc_attr( get_the_title() ) ); ?>"></a>
			</li>
			<li>
				<a class="popup google-plus" target="_blank" data-service="googleplus" data-width="550" data-height="500" href="https://plus.google.com/share?hl=de&amp;url=<?php echo urlencode( esc_attr( get_permalink() ) ); ?>"></a>
			</li>
			<li>
				<a class="popup twitter" target="_blank" data-service="twitter" data-width="650" data-height="510" href="https://twitter.com/intent/tweet?text=<?php echo urlencode( esc_attr( get_the_title() ) ); ?>&amp;url=<?php echo urlencode( esc_attr( get_permalink() ) ); ?>"></a>
			</li>
			<li>
				<a class="popup linkedin" target="_blank" data-service="linkedin" data-width="650" data-height="510" href="https://www.linkedin.com/shareArticle?&amp;url=<?php echo urlencode( esc_attr( get_permalink() ) ); ?>"></a>
			</li>
			<li>
				<a class="popup xing" target="_blank" data-service="xing" data-width="650" data-height="510" href="https://www.xing.com/spi/shares/new?url=<?php echo urlencode( esc_attr( get_permalink() ) ); ?>"></a>
			</li>
			<li>
				<a class="email" href="mailto:?subject=<?php echo urlencode( esc_attr( get_the_title() ) . ' | ' . get_bloginfo( 'name' ) ); ?>&body=<?php echo urlencode( esc_attr( get_permalink() ) ); ?>"></a>
			</li>
			<li>
				<a class="whatsapp" style="display: none;" href="whatsapp://send?text=<?php echo urlencode( esc_attr( get_permalink() ) ); ?>"></a>
			</li>
		</ul>
	<?php
}
add_action( 'wp_footer', 'custom_social_sharing_buttons_markup' );

function custom_social_sharing_buttons_styles() {
	wp_enqueue_style( 'custom-social-sharing-buttons-css', plugins_url( '/sharing.css', __FILE__ ) );
	wp_enqueue_script( 'custom-social-sharing-buttons-js', plugins_url( '/sharing.js' , __FILE__ ), array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'custom_social_sharing_buttons_styles' );