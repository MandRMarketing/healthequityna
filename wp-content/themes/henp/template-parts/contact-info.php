<?php
$phone = get_option('options_mandr_phone');
$address = get_field('mandr_address', 'options');
$address_link = get_option('options_mandr_address_link');
$email = get_option('options_mandr_email');

if ($phone || $address || $email) :
?>
	<div class="contact-info">
		<?php if ($address) : ?>
			<p class="contact-address">
				<?php if ($address_link) : ?>
					<a href="<?= $address_link; ?>" target="_blank">
					<?php endif; ?>
					<?= $address; ?>
					<?php if ($address_link) : ?>
					</a>
				<?php endif; ?>
			</p>
		<?php endif; ?>
		<img src="/wp-content/themes/henp/assets/images/henp_footer_logo.png" alt="henp logo" />
		<?php if ($email && $phone) : ?>
			<p class="contact-email">
				<?= phone_link($phone); ?>
				<br />
				<?= email_link($email); ?>
			</p>
		<?php endif; ?>
	</div>
<?php
endif;
