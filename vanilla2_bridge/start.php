<?php

function vanilla2bridge_init() {
	$plugin_name="vanilla2bridge";
	$actions = dirname(__FILE__) . '/actions';
	elgg_register_action('authenticate', "$actions/auth.php");
	elgg_register_action('register', "$actions/register.php");
	elgg_register_action('signin', "$actions/signin.php");
	elgg_register_action('signout', "$actions/signout.php");
	elgg_register_plugin_hook_handler('register', 'menu:user_hover', 'vanilla2bridge_user_hover_menu');
	
	if (elgg_is_logged_in()) {
		$user = elgg_get_logged_in_user_entity();
		$discussions_text=get_plugin_setting($name, $plugin_name );
		elgg_register_menu_item('filter', array(
			'name' => 'Discussions',
			'href' => "/activity/discussions",
			'text' => "$discussions_text",
			'priority' => 500,
			'contexts' => array('activity'),
		));
	}
	
	elgg_register_page_handler('activity', 'vanilla2bridge_activity_page_handler');
	
	
}

function vanilla2bridge_activity_page_handler($segments, $handle) {
	switch ($segments[0]) {
		case 'following':
			require_once dirname(__FILE__) . '/pages/activity/following.php';
			return;
		default:
			global $following_original_activity_page_handler;
			return call_user_func($following_original_activity_page_handler, $segments, $handle);
	}
}

function vanilla2bridge_user_hover_menu($hook, $type, $return, $params) {
	$user = $params['entity'];

	if (elgg_is_logged_in() && elgg_get_logged_in_user_guid() != $user->guid) {
		
		if (check_entity_relationship(elgg_get_logged_in_user_guid(), 'follower', $user->guid)) {
			$url = elgg_add_action_tokens_to_url("action/unfollow?object_guid=$user->guid");
			$item = new ElggMenuItem('unfollow', elgg_echo('unfollow:user'), $url);
		} else {
			$url = elgg_add_action_tokens_to_url("action/follow?object_guid=$user->guid");
			$item = new ElggMenuItem('follow', elgg_echo('follow:user'), $url);
		}
		
		$item->setSection('action');
		$return[] = $item;
	}

	return $return;
}

elgg_register_event_handler('init', 'system', 'vanilla2bridges_init');