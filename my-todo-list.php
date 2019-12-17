<?php
/**
 * Plugin Name: My Todo List
 * Description: Simple Todo List
 * Version: 0.1
 * Author: Konan Yamada
 */

if(!defined('ABSPATH')){
	exit;
}

require_once (plugin_dir_path(__FILE__).'/includes/my-todo-list-scripts.php');

require_once (plugin_dir_path(__FILE__).'/includes/my-todo-list-shortcodes.php');

if(is_admin()) {
	//Load Custom Post Type
	require_once (plugin_dir_path(__FILE__).'/includes/my-todo-list-cpt.php');
	require_once (plugin_dir_path(__FILE__).'/includes/my-todo-list-fields.php');
}