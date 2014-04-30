<?php

function your_theme_add_on_settings_setup() {
	add_options_page(
		'Your Theme Add On Settings',
		'Your Theme Add On Settings',
		'manage_options',
		'your-theme-add-on-settings',
		'your_theme_add_on_render_options_page'
	);
}
add_action('admin_menu', 'your_theme_add_on_settings_setup');

?>