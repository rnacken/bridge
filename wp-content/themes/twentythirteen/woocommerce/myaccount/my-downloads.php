<?php
/**
 * My Orders
 *
 * Shows recent orders on the account page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( $downloads = WC()->customer->get_downloadable_products() ) : ?>

	<?php do_action( 'woocommerce_before_available_downloads' ); ?>

	<h2><?php echo apply_filters( 'woocommerce_my_account_my_downloads_title', __( 'Available downloads', 'woocommerce' ) ); ?></h2>

	<ul class="digital-downloads">
		<?php foreach ( $downloads as $download ) : ?>
			<li>
				<?php
					do_action( 'woocommerce_available_download_start', $download );

					if ( is_numeric( $download['downloads_remaining'] ) )
						echo apply_filters( 'woocommerce_available_download_count', '<span class="count">' . sprintf( _n( '%s download remaining', '%s downloads remaining', $download['downloads_remaining'], 'woocommerce' ), $download['downloads_remaining'] ) . '</span> ', $download );
					
					// old content:
					//echo apply_filters( 'woocommerce_available_download_link', '<a href="' . esc_url( $download['download_url'] ) . '">' . $download['download_name'] . '</a>', $download );

					// new content:
					$download_url = $download['download_url'];
					$download_url_arr = explode( '?', $download_url );
					$bridge_id = get_the_author_meta( 'bridge_id', get_current_user_id() );
					$download_url = $download_url_arr[0] . '?page_id=2&product_id=' . $download['product_id'] . '&bridge_id=' . $bridge_id;
					echo apply_filters( 'woocommerce_available_download_link', '<a href="' . esc_url( $download_url ) . '">' . $download['download_name'] . '</a>', $download );

					do_action( 'woocommerce_available_download_end', $download );
				?>
			</li>
		<?php endforeach; ?>
	</ul>

	<?php do_action( 'woocommerce_after_available_downloads' ); ?>

<?php endif; ?>