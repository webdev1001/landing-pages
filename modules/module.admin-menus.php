<?php

// Create Sub-menu
add_action('admin_menu', 'lp_add_menu');

function lp_add_menu()
{
	//echo 1; exit;
	if (current_user_can('manage_options'))
	{

		add_submenu_page('edit.php?post_type=landing-page', __('Forms' , 'landing-pages'), __('Manage Forms' , 'landing-pages'), 'manage_options', 'inbound-forms-redirect',100);

		add_submenu_page('edit.php?post_type=landing-page',__('Templates' , 'landing-pages'), __('Manage Templates' , 'landing-pages'), 'manage_options', 'lp_manage_templates','lp_manage_templates',100);

		add_submenu_page('edit.php?post_type=landing-page', __('Get Addons' , 'landing-pages'), __('Get Addons' , 'landing-pages'), 'manage_options', 'lp_store','lp_store_display',100);

		add_submenu_page('edit.php?post_type=landing-page', __('Global Settings' , 'landing-pages'), __('Global Settings' , 'landing-pages'), 'manage_options', 'lp_global_settings','lp_display_global_settings');

	}
}
