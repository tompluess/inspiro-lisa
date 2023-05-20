<?php
/**
 * Displays footer site info
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.0.0
 * @version 1.0.0
 */

?>
<div class="site-info">
	<?php
	if (function_exists('the_privacy_policy_link')) {
		the_privacy_policy_link('', '<span role="separator" aria-hidden="true"></span>');
	}
	?>
	<span class="copyright">
		<span>&copy;
			<?php
			echo date_i18n(
				/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
				_x('Y', 'copyright date format', 'twentytwenty')
			);
			?>
			<a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>

		</span>
		<span>
			<?php esc_html_e('Supported by'); ?> <a
				href="<?php echo 'https://tompluess.ch/'; ?>" target="_blank">Tom Plüss</a>
		</span>
	</span>
</div><!-- .site-info -->