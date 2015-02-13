<?php wpsc_user_messages(); ?>
<div class="wpsc-checkout wpsc-checkout-shipping-method">
	<p><strong class="wpsc-large"><?php esc_html_e( 'Your Order', 'wpsc' ); ?></strong></p>
	<div class="wpsc-order-preview">
		<?php wpsc_checkout_order_preview(); ?>
	</div>
	<p><strong class="wpsc-large"><?php esc_html_e( 'Customer Details', 'wpsc' ); ?></strong></p>
	<p><strong class="wpsc-large"><?php esc_html_e( 'Select a Shipping Method', 'wpsc' ); ?></strong></p>
	<?php wpsc_checkout_shipping_form(); ?>	
</div>
