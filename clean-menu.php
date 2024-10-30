<?php
/*
Plugin Name: Clean Menu
Description: Hide the menus on the dashboard
Version: 1.0
Author: Tomek
Author URI: http://wp-learning-net
Text Domain: clean-menu
Domain Path: /lang
*/

load_plugin_textdomain( 'clean-menu', '', dirname( plugin_basename( __FILE__ ) ) . '/lang' );

	if(get_option('clean_menu_administrator_dashboard') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_dashboard' );
			
		function clean_menu_remove_administrator_dashboard(){
			if ( current_user_can('administrator') ) {
				remove_menu_page( 'index.php' );
			}
		}
	}
	if(get_option('clean_menu_administrator_dashboard_home') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_dashboard_home' );
			
		function clean_menu_remove_administrator_dashboard_home(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['index.php'][5]);
			}
		}
	}
	if(get_option('clean_menu_administrator_dashboard_updates') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_dashboard_updates' );
			
		function clean_menu_remove_administrator_dashboard_updates(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['index.php'][10]);
			}
		}
	}
	if(get_option('clean_menu_administrator_posts') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_posts' );
			
		function clean_menu_remove_administrator_posts(){
			if ( current_user_can('administrator') ) {
				remove_menu_page( 'edit.php' );
			}
		}
	}
	if(get_option('clean_menu_administrator_posts_all_posts') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_posts_all_posts' );
			
		function clean_menu_remove_administrator_posts_all_posts(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['edit.php'][5]);
			}
		}
	}
	if(get_option('clean_menu_administrator_posts_add_new') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_posts_add_new' );
			
		function clean_menu_remove_administrator_posts_add_new(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['edit.php'][10]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_posts_categories') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_posts_categories' );
			
		function clean_menu_remove_administrator_posts_categories(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['edit.php'][15]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_posts_tags') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_posts_tags' );
			
		function clean_menu_remove_administrator_posts_tags(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['edit.php'][16]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_media') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_media' );
			
		function clean_menu_remove_administrator_media(){
			if ( current_user_can('administrator') ) {
				remove_menu_page( 'upload.php' );
			}
		}
	}
	if(get_option('clean_menu_administrator_media_libary') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_media_libary' );
			
		function clean_menu_remove_administrator_media_libary(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['upload.php'][5]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_media_add_new') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_media_add_new' );
			
		function clean_menu_remove_administrator_media_add_new(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['upload.php'][10]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_pages') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_pages' );
			
		function clean_menu_remove_administrator_pages(){
			if ( current_user_can('administrator') ) {
				remove_menu_page( 'edit.php?post_type=page' );
			}
		}
	}
	if(get_option('clean_menu_administrator_pages_all_pages') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_pages_all_pages' );
			
		function clean_menu_remove_administrator_pages_all_pages(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['edit.php?post_type=page'][5]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_pages_add_new') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_pages_add_new' );
			
		function clean_menu_remove_administrator_pages_add_new(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['edit.php?post_type=page'][10]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_comments') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_comments' );
			
		function clean_menu_remove_administrator_comments(){
			if ( current_user_can('administrator') ) {
				remove_menu_page( 'edit-comments.php' );
			}
		}
	}	
	if(get_option('clean_menu_administrator_appearance') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_appearance' );
			
		function clean_menu_remove_administrator_appearance(){
			if ( current_user_can('administrator') ) {
				remove_menu_page( 'themes.php' );
			}
		}
	}	
	if(get_option('clean_menu_administrator_appearance_themes') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_appearance_themes', 102 );
			
		function clean_menu_remove_administrator_appearance_themes(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['themes.php'][5]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_appearance_customize') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_appearance_customize', 102 );
			
		function clean_menu_remove_administrator_appearance_customize(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['themes.php'][6]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_appearance_widgets') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_appearance_widgets', 102 );
			
		function clean_menu_remove_administrator_appearance_widgets(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['themes.php'][7]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_appearance_menus') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_appearance_menus', 102 );
			
		function clean_menu_remove_administrator_appearance_menus(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['themes.php'][10]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_appearance_header') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_appearance_header', 102 );
			
		function clean_menu_remove_administrator_appearance_header(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['themes.php'][11]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_appearance_background') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_appearance_background', 102 );
			
		function clean_menu_remove_administrator_appearance_background(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['themes.php'][12]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_appearance_editor') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_appearance_editor', 102 );
			
		function clean_menu_remove_administrator_appearance_editor(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['themes.php'][13]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_plugins') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_plugins' );
			
		function clean_menu_remove_administrator_plugins(){
			if ( current_user_can('administrator') ) {
				remove_menu_page( 'plugins.php'  );
			}
		}
	}	
	if(get_option('clean_menu_administrator_plugins_installed_plugins') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_plugins_installed_plugins' );
			
		function clean_menu_remove_administrator_plugins_installed_plugins(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['plugins.php'][5]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_plugins_add_new') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_plugins_add_new' );
			
		function clean_menu_remove_administrator_plugins_add_new(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['plugins.php'][10]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_plugins_editor') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_plugins_editor' );
			
		function clean_menu_remove_administrator_plugins_editor(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['plugins.php'][15]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_users') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_users' );
			
		function clean_menu_remove_administrator_users(){
			if ( current_user_can('administrator') ) {
				remove_menu_page( 'users.php'  );
			}
		}
	}	
	if(get_option('clean_menu_administrator_users_all_users') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_users_all_users' );
			
		function clean_menu_remove_administrator_users_all_users(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['users.php'][5]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_users_add_new') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_users_add_new' );
			
		function clean_menu_remove_administrator_users_add_new(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['users.php'][10]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_users_your_profile') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_users_your_profile' );
			
		function clean_menu_remove_administrator_users_your_profile(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['users.php'][15]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_tools') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_tools' );
			
		function clean_menu_remove_administrator_tools(){
			if ( current_user_can('administrator') ) {
				remove_menu_page( 'tools.php' );
			}
		}
	}
	if(get_option('clean_menu_administrator_tools_available_tools') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_tools_available_tools' );
			
		function clean_menu_remove_administrator_tools_available_tools(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['tools.php'][5]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_tools_import') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_tools_import' );
			
		function clean_menu_remove_administrator_tools_import(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['tools.php'][10]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_tools_export') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_tools_export' );
			
		function clean_menu_remove_administrator_tools_export(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['tools.php'][15]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_tools_sitehealth') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_tools_sitehealth' );
			
		function clean_menu_remove_administrator_tools_sitehealth(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['tools.php'][20]);
			}
		}
	}	
	
	if(get_option('clean_menu_administrator_tools_exportpersdata') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_tools_exportpersdata' );
			
		function clean_menu_remove_administrator_tools_exportpersdata(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['tools.php'][25]);
			}
		}
	}	

	if(get_option('clean_menu_administrator_tools_erasepersdata') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_tools_erasepersdata' );
			
		function clean_menu_remove_administrator_tools_erasepersdata(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['tools.php'][30]);
			}
		}
	}	
		
	if(get_option('clean_menu_administrator_settings') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_settings' );
			
		function clean_menu_remove_administrator_settings(){
			if ( current_user_can('administrator') ) {
				remove_menu_page( 'options-general.php' );
			}
		}
	}	
	if(get_option('clean_menu_administrator_settings_general') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_settings_general' );
			
		function clean_menu_remove_administrator_settings_general(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['options-general.php'][10]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_settings_writing') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_settings_writing' );
			
		function clean_menu_remove_administrator_settings_writing(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['options-general.php'][15]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_settings_reading') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_settings_reading' );
			
		function clean_menu_remove_administrator_settings_reading(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['options-general.php'][20]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_settings_discussion') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_settings_discussion' );
			
		function clean_menu_remove_administrator_settings_discussion(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['options-general.php'][25]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_settings_media') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_settings_media' );
			
		function clean_menu_remove_administrator_settings_media(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['options-general.php'][30]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_settings_permalinks') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_settings_permalinks' );
			
		function clean_menu_remove_administrator_settings_permalinks(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['options-general.php'][40]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_settings_privacy') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_administrator_settings_privacy' );
			
		function clean_menu_remove_administrator_settings_privacy(){
			if ( current_user_can('administrator') ) {
				global $submenu;
				unset($submenu['options-general.php'][45]);
			}
		}
	}	
	if(get_option('clean_menu_administrator_collapse_menu') == true ){
		add_action( 'admin_head', 'clean_menu_remove_administrator_collapse_menu' );
			
		function clean_menu_remove_administrator_collapse_menu(){
			if ( current_user_can('administrator') ) {
				echo "<style>#collapse-menu{display:none !important;} </style>";
			}
		}
	}	
	if(get_option('clean_menu_contributor_dashboard') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_contributor_dashboard' );
			
		function clean_menu_remove_contributor_dashboard(){
			if ( current_user_can('contributor') ) {
				remove_menu_page( 'index.php' );
			}
		}
	}	
	if(get_option('clean_menu_contributor_posts') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_contributor_posts' );
			
		function clean_menu_remove_contributor_posts(){
			if ( current_user_can('contributor') ) {
				remove_menu_page( 'edit.php' );
			}
		}
	}	
	if(get_option('clean_menu_contributor_posts_all_posts') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_contributor_posts_all_posts' );
			
		function clean_menu_remove_contributor_posts_all_posts(){
			if ( current_user_can('contributor') ) {
				global $submenu;
				unset($submenu['edit.php'][5]);
			}
		}
	}	
	if(get_option('clean_menu_contributor_posts_add_new') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_contributor_posts_add_new' );
			
		function clean_menu_remove_contributor_posts_add_new(){
			if ( current_user_can('contributor') ) {
				global $submenu;
				unset($submenu['edit.php'][10]);
			}
		}
	}	
	if(get_option('clean_menu_contributor_comments') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_contributor_comments' );
			
		function clean_menu_remove_contributor_comments(){
			if ( current_user_can('contributor') ) {
				remove_menu_page( 'edit-comments.php' );
			}
		}
	}	
	if(get_option('clean_menu_contributor_profile') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_contributor_profile' );
			
		function clean_menu_remove_contributor_profile(){
			if ( current_user_can('contributor') ) {
				remove_menu_page( 'profile.php' );
			}
		}
	}	
	if(get_option('clean_menu_contributor_tools') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_contributor_tools' );
			
		function clean_menu_remove_contributor_tools(){
			if ( current_user_can('contributor') ) {
				remove_menu_page( 'tools.php' );
			}
		}
	}	
	if(get_option('clean_menu_contributor_collapse_menu') == true ){
		add_action( 'admin_head', 'clean_menu_remove_contributor_collapse_menu' );
			
		function clean_menu_remove_contributor_collapse_menu(){
			if ( current_user_can('contributor') ) {
				echo "<style>#collapse-menu{display:none !important;} </style>";
			}
		}
	}	
	if(get_option('clean_menu_author_dashboard') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_author_dashboard' );
			
		function clean_menu_remove_author_dashboard(){
			if ( current_user_can('author') ) {
				remove_menu_page( 'index.php' );
			}
		}
	}	
	if(get_option('clean_menu_author_posts') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_author_posts' );
			
		function clean_menu_remove_author_posts(){
			if ( current_user_can('author') ) {
				remove_menu_page( 'edit.php' );
			}
		}
	}	
	if(get_option('clean_menu_author_posts_all_posts') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_author_posts_all_posts' );
			
		function clean_menu_remove_author_posts_all_posts(){
			if ( current_user_can('author') ) {
				global $submenu;
				unset($submenu['edit.php'][5]);
			}
		}
	}	
	if(get_option('clean_menu_author_posts_add_new') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_author_posts_add_new' );
			
		function clean_menu_remove_author_posts_add_new(){
			if ( current_user_can('author') ) {
				global $submenu;
				unset($submenu['edit.php'][10]);
			}
		}
	}	
	if(get_option('clean_menu_author_media') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_author_media' );
			
		function clean_menu_remove_author_media(){
			if ( current_user_can('author') ) {
				remove_menu_page( 'upload.php' );
			}
		}
	}	
	if(get_option('clean_menu_author_media_libary') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_author_media_libary' );
			
		function clean_menu_remove_author_media_libary(){
			if ( current_user_can('author') ) {
				global $submenu;
				unset($submenu['upload.php'][5]);
			}
		}
	}	
	if(get_option('clean_menu_author_media_add_new') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_author_media_add_new' );
			
		function clean_menu_remove_author_media_add_new(){
			if ( current_user_can('author') ) {
				global $submenu;
				unset($submenu['upload.php'][10]);
			}
		}
	}	
	if(get_option('clean_menu_author_comments') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_author_comments' );
			
		function clean_menu_remove_author_comments(){
			if ( current_user_can('author') ) {
				remove_menu_page( 'edit-comments.php' );
			}
		}
	}	
	if(get_option('clean_menu_author_profile') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_author_profile' );
			
		function clean_menu_remove_author_profile(){
			if ( current_user_can('author') ) {
				remove_menu_page( 'profile.php' );
			}
		}
	}	
	if(get_option('clean_menu_author_tools') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_author_tools' );
			
		function clean_menu_remove_author_tools(){
			if ( current_user_can('author') ) {
				remove_menu_page( 'tools.php' );
			}
		}
	}	
	if(get_option('clean_menu_author_collapse_menu') == true ){
		add_action( 'admin_head', 'clean_menu_remove_author_collapse_menu' );
			
		function clean_menu_remove_author_collapse_menu(){
			if ( current_user_can('author') ) {
				echo "<style>#collapse-menu{display:none !important;} </style>";
			}
		}
	}	
	if(get_option('clean_menu_editor_dashboard') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_editor_dashboard' );
			
		function clean_menu_remove_editor_dashboard(){
			if ( current_user_can('editor') ) {
				remove_menu_page( 'index.php' );
			}
		}
	}	
	if(get_option('clean_menu_editor_posts') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_editor_posts' );
			
		function clean_menu_remove_editor_posts(){
			if ( current_user_can('editor') ) {
				remove_menu_page( 'edit.php' );
			}
		}
	}	
	if(get_option('clean_menu_editor_posts_add_new') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_editor_posts_add_new' );
			
		function clean_menu_remove_editor_posts_add_new(){
			if ( current_user_can('editor') ) {
				global $submenu;
				unset($submenu['edit.php'][10]);
			}
		}
	}	
	if(get_option('clean_menu_editor_posts_all_posts') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_editor_posts_all_posts' );
			
		function clean_menu_remove_editor_posts_all_posts(){
			if ( current_user_can('editor') ) {
				global $submenu;
				unset($submenu['edit.php'][5]);
			}
		}
	}	
	if(get_option('clean_menu_editor_posts_categories') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_editor_posts_categories' );
			
		function clean_menu_remove_editor_posts_categories(){
			if ( current_user_can('editor') ) {
				global $submenu;
				unset($submenu['edit.php'][15]);
			}
		}
	}
	if(get_option('clean_menu_editor_posts_tags') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_editor_posts_tags' );
			
		function clean_menu_remove_editor_posts_tags(){
			if ( current_user_can('editor') ) {
				global $submenu;
				unset($submenu['edit.php'][16]);
			}
		}
	}	
	if(get_option('clean_menu_editor_media') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_editor_media' );
			
		function clean_menu_remove_editor_media(){
			if ( current_user_can('editor') ) {
				remove_menu_page( 'upload.php' );
			}
		}
	}	
	if(get_option('clean_menu_editor_media_libary') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_editor_media_libary' );
			
		function clean_menu_remove_editor_media_libary(){
			if ( current_user_can('editor') ) {
				global $submenu;
				unset($submenu['upload.php'][5]);
			}
		}
	}	
	if(get_option('clean_menu_editor_media_add_new') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_editor_media_add_new' );
			
		function clean_menu_remove_editor_media_add_new(){
			if ( current_user_can('editor') ) {
				global $submenu;
				unset($submenu['upload.php'][10]);
			}
		}
	}	
	if(get_option('clean_menu_editor_pages') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_editor_pages' );
			
		function clean_menu_remove_editor_pages(){
			if ( current_user_can('editor') ) {
				remove_menu_page( 'edit.php?post_type=page' );
			}
		}
	}	
	if(get_option('clean_menu_editor_pages_all_pages') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_editor_pages_all_pages' );
			
		function clean_menu_remove_editor_pages_all_pages(){
			if ( current_user_can('editor') ) {
				global $submenu;
				unset($submenu['edit.php?post_type=page'][5]);
			}
		}
	}	
	if(get_option('clean_menu_editor_pages_add_new') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_editor_pages_add_new' );
			
		function clean_menu_remove_editor_pages_add_new(){
			if ( current_user_can('editor') ) {
				global $submenu;
				unset($submenu['edit.php?post_type=page'][10]);
			}
		}
	}	
	if(get_option('clean_menu_editor_comments') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_editor_comments' );
			
		function clean_menu_remove_editor_comments(){
			if ( current_user_can('editor') ) {
				remove_menu_page( 'edit-comments.php' );
			}
		}
	}	
	if(get_option('clean_menu_editor_profile') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_editor_profile' );
			
		function clean_menu_remove_editor_profile(){
			if ( current_user_can('editor') ) {
				remove_menu_page( 'profile.php' );
			}
		}
	}	
	if(get_option('clean_menu_editor_tools') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_editor_tools' );
			
		function clean_menu_remove_editor_tools(){
			if ( current_user_can('editor') ) {
				remove_menu_page( 'tools.php' );
			}
		}
	}	
	if(get_option('clean_menu_editor_collapse_menu') == true ){
		add_action( 'admin_head', 'clean_menu_remove_editor_collapse_menu' );
			
		function clean_menu_remove_editor_collapse_menu(){
			if ( current_user_can('editor') ) {
				echo "<style>#collapse-menu{display:none !important;} </style>";
			}
		}
	}	
	if(get_option('clean_menu_subscriber_dashboard') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_subscriber_dashboard' );
			
		function clean_menu_remove_subscriber_dashboard(){
			if ( current_user_can('subscriber') ) {
				remove_menu_page( 'index.php' );
			}
		}
	}	
	if(get_option('clean_menu_subscriber_profile') == true ){
		add_action( 'admin_menu', 'clean_menu_remove_subscriber_profile' );
			
		function clean_menu_remove_subscriber_profile(){
			if ( current_user_can('subscriber') ) {
				remove_menu_page( 'profile.php' );
			}
		}
	}	
	if(get_option('clean_menu_subscriber_collapse_menu') == true ){
		add_action( 'admin_head', 'clean_menu_remove_subscriber_collapse_menu' );
			
		function clean_menu_remove_subscriber_collapse_menu(){
			if ( current_user_can('subscriber') ) {
				echo "<style>#collapse-menu{display:none !important;} </style>";
			}
		}
	}	
	if(get_option('clean_menu_wplearning_news') == true ){
		add_action( 'wp_dashboard_setup', 'clean_menu_wplearning_news_widgets' );

		function clean_menu_wplearning_news_widgets() {
			wp_add_dashboard_widget('wplearning_news','WP-LEARNING','clean_menu_show_wplearning_news');	
		}

		function clean_menu_show_wplearning_news() {
			echo '<div class="rss-widget">';  
				wp_widget_rss_output(array(  
					'url' => 'https://www.wp-learning.net/blog/feed/',  
					'title' => 'WP-LEARNING',  
					'items' => '5', 
					'show_summary' => '1',  
					'show_author' => '0',  
					'show_date' => '0'  
				));  
			echo "</div>";  
		} 
	}	

function cleanmenu_settings() {
 ?>
    <h2><?php _e('Clean Menu settings','clean-menu')?></h2>
	<form method="post" action="options.php">
    <?php settings_fields('cleanmenu_settings_page'); ?>
    <?php do_settings_sections('cleanmenu_settings_page'); ?>

				<table class="wp-list-table widefat fixed bookmarks" style="width: 100%; border-radius: 4px;">
					<thead>
						<tr>
							<th><?php _e('Administrator','clean-menu') ?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
									<div><label for="clean_menu_administrator_dashboard">
										<input type="checkbox" name="clean_menu_administrator_dashboard" id="clean_menu_administrator_dashboard" value="1" <?php checked(get_option('clean_menu_administrator_dashboard')); ?>"><?php _e('Dashboard','clean-menu') ?>
									</label></div>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_dashboard_home">
										<input type="checkbox" name="clean_menu_administrator_dashboard_home" id="clean_menu_administrator_dashboard_home" value="1" <?php checked(get_option('clean_menu_administrator_dashboard_home')); ?>"><?php _e('Home','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_dashboard_updates">
										<input type="checkbox" name="clean_menu_administrator_dashboard_updates" id="clean_menu_administrator_dashboard_updates" value="1" <?php checked(get_option('clean_menu_administrator_dashboard_updates')); ?>"><?php _e('Updates','clean-menu') ?>
									</label></span>
									<div><label for="clean_menu_administrator_posts">
										<input type="checkbox" name="clean_menu_administrator_posts" id="clean_menu_administrator_posts" value="1" <?php checked(get_option('clean_menu_administrator_posts')); ?>"><?php _e('Posts','clean-menu') ?>
									</label></div>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_posts_all_posts">
										<input type="checkbox" name="clean_menu_administrator_posts_all_posts" id="clean_menu_administrator_posts_all_posts" value="1" <?php checked(get_option('clean_menu_administrator_posts_all_posts')); ?>"><?php _e('All Posts','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_posts_add_new">
										<input type="checkbox" name="clean_menu_administrator_posts_add_new" id="clean_menu_administrator_posts_add_new" value="1" <?php checked(get_option('clean_menu_administrator_posts_add_new')); ?>"><?php _e('Add New','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_posts_categories">
										<input type="checkbox" name="clean_menu_administrator_posts_categories" id="clean_menu_administrator_posts_categories" value="1" <?php checked(get_option('clean_menu_administrator_posts_categories')); ?>"><?php _e('Categories','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_posts_tags">
										<input type="checkbox" name="clean_menu_administrator_posts_tags" id="clean_menu_administrator_posts_tags" value="1" <?php checked(get_option('clean_menu_administrator_posts_tags')); ?>"><?php _e('Tags','clean-menu') ?>
									</label></span>
									<div><label for="clean_menu_administrator_media">
										<input type="checkbox" name="clean_menu_administrator_media" id="clean_menu_administrator_media" value="1" <?php checked(get_option('clean_menu_administrator_media')); ?>"><?php _e('Media','clean-menu') ?>
									</label></div>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_media_libary">
										<input type="checkbox" name="clean_menu_administrator_media_libary" id="clean_menu_administrator_media_libary" value="1" <?php checked(get_option('clean_menu_administrator_media_libary')); ?>"><?php _e('Libary','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_media_add_new">
										<input type="checkbox" name="clean_menu_administrator_media_add_new" id="clean_menu_administrator_media_add_new" value="1" <?php checked(get_option('clean_menu_administrator_media_add_new')); ?>"><?php _e('Add New','clean-menu') ?>
									</label></span>
									<div><label for="clean_menu_administrator_pages">
										<input type="checkbox" name="clean_menu_administrator_pages" id="clean_menu_administrator_pages" value="1" <?php checked(get_option('clean_menu_administrator_pages')); ?>"><?php _e('Pages','clean-menu') ?>
									</label></div>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_pages_all_pages">
										<input type="checkbox" name="clean_menu_administrator_pages_all_pages" id="clean_menu_administrator_pages_all_pages" value="1" <?php checked(get_option('clean_menu_administrator_pages_all_pages')); ?>"><?php _e('All Pages','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_pages_add_new">
										<input type="checkbox" name="clean_menu_administrator_pages_add_new" id="clean_menu_administrator_pages_add_new" value="1" <?php checked(get_option('clean_menu_administrator_pages_add_new')); ?>"><?php _e('Add New','clean-menu') ?>
									</label></span>
									<div><label for="clean_menu_administrator_comments">
										<input type="checkbox" name="clean_menu_administrator_comments" id="clean_menu_administrator_comments" value="1" <?php checked(get_option('clean_menu_administrator_comments')); ?>"><?php _e('Comments','clean-menu') ?>
									</label></div>
									<div><label for="clean_menu_administrator_appearance">
										<input type="checkbox" name="clean_menu_administrator_appearance" id="clean_menu_administrator_appearance" value="1" <?php checked(get_option('clean_menu_administrator_appearance')); ?>"><?php _e('Appeearance','clean-menu') ?>
									</label></div>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_appearance_themes">
										<input type="checkbox" name="clean_menu_administrator_appearance_themes" id="clean_menu_administrator_appearance_themes" value="1" <?php checked(get_option('clean_menu_administrator_appearance_themes')); ?>"><?php _e('Themes','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_appearance_customize">
										<input type="checkbox" name="clean_menu_administrator_appearance_customize" id="clean_menu_administrator_appearance_customize" value="1" <?php checked(get_option('clean_menu_administrator_appearance_customize')); ?>"><?php _e('Customize','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_appearance_widgets">
										<input type="checkbox" name="clean_menu_administrator_appearance_widgets" id="clean_menu_administrator_appearance_widgets" value="1" <?php checked(get_option('clean_menu_administrator_appearance_widgets')); ?>"><?php _e('Widgets','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_appearance_menus">
										<input type="checkbox" name="clean_menu_administrator_appearance_menus" id="clean_menu_administrator_appearance_menus" value="1" <?php checked(get_option('clean_menu_administrator_appearance_menus')); ?>"><?php _e('Menus','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_appearance_header">
										<input type="checkbox" name="clean_menu_administrator_appearance_header" id="clean_menu_administrator_appearance_header" value="1" <?php checked(get_option('clean_menu_administrator_appearance_header')); ?>"><?php _e('Header','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_appearance_background">
										<input type="checkbox" name="clean_menu_administrator_appearance_background" id="clean_menu_administrator_appearance_background" value="1" <?php checked(get_option('clean_menu_administrator_appearance_background')); ?>"><?php _e('Background','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_appearance_editor">
										<input type="checkbox" name="clean_menu_administrator_appearance_editor" id="clean_menu_administrator_appearance_editor" value="1" <?php checked(get_option('clean_menu_administrator_appearance_editor')); ?>"><?php _e('Editor','clean-menu') ?>
									</label></span>
									<div><label for="clean_menu_administrator_plugins">
										<input type="checkbox" name="clean_menu_administrator_plugins" id="clean_menu_administrator_plugins" value="1" <?php checked(get_option('clean_menu_administrator_plugins')); ?>"><?php _e('Plugins','clean-menu') ?>
									</label></div>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_plugins_installed_plugins">
										<input type="checkbox" name="clean_menu_administrator_plugins_installed_plugins" id="clean_menu_administrator_plugins_installed_plugins" value="1" <?php checked(get_option('clean_menu_administrator_plugins_installed_plugins')); ?>"><?php _e('Installed Plugins','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_plugins_add_new">
										<input type="checkbox" name="clean_menu_administrator_plugins_add_new" id="clean_menu_administrator_plugins_add_new" value="1" <?php checked(get_option('clean_menu_administrator_plugins_add_new')); ?>"><?php _e('Add New','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_plugins_editor">
										<input type="checkbox" name="clean_menu_administrator_plugins_editor" id="clean_menu_administrator_plugins_editor" value="1" <?php checked(get_option('clean_menu_administrator_plugins_editor')); ?>"><?php _e('Editor','clean-menu') ?>
									</label></span>
									<div><label for="clean_menu_administrator_users">
										<input type="checkbox" name="clean_menu_administrator_users" id="clean_menu_administrator_users" value="1" <?php checked(get_option('clean_menu_administrator_users')); ?>"><?php _e('Users','clean-menu') ?>
									</label></div>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_users_all_users">
										<input type="checkbox" name="clean_menu_administrator_users_all_users" id="clean_menu_administrator_users_all_users" value="1" <?php checked(get_option('clean_menu_administrator_users_all_users')); ?>"><?php _e('All Users','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_users_add_new">
										<input type="checkbox" name="clean_menu_administrator_users_add_new" id="clean_menu_administrator_users_add_new" value="1" <?php checked(get_option('clean_menu_administrator_users_add_new')); ?>"><?php _e('Add New','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_users_your_profile">
										<input type="checkbox" name="clean_menu_administrator_users_your_profile" id="clean_menu_administrator_users_your_profile" value="1" <?php checked(get_option('clean_menu_administrator_users_your_profile')); ?>"><?php _e('Your Profile','clean-menu') ?>
									</label></span>
									<div><label for="clean_menu_administrator_tools">
										<input type="checkbox" name="clean_menu_administrator_tools" id="clean_menu_administrator_tools" value="1" <?php checked(get_option('clean_menu_administrator_tools')); ?>"><?php _e('Tools','clean-menu') ?>
									</label></div>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_tools_available_tools">
										<input type="checkbox" name="clean_menu_administrator_tools_available_tools" id="clean_menu_administrator_tools_available_tools" value="1" <?php checked(get_option('clean_menu_administrator_tools_available_tools')); ?>"><?php _e('Available Tools','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_tools_import">
										<input type="checkbox" name="clean_menu_administrator_tools_import" id="clean_menu_administrator_tools_import" value="1" <?php checked(get_option('clean_menu_administrator_tools_import')); ?>"><?php _e('Import','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_tools_export">
										<input type="checkbox" name="clean_menu_administrator_tools_export" id="clean_menu_administrator_tools_export" value="1" <?php checked(get_option('clean_menu_administrator_tools_export')); ?>"><?php _e('Export','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_tools_sitehealth">
										<input type="checkbox" name="clean_menu_administrator_tools_sitehealth" id="clean_menu_administrator_tools_sitehealth" value="1" <?php checked(get_option('clean_menu_administrator_tools_sitehealth')); ?>"><?php _e('Site health','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_tools_exportpersdata">
										<input type="checkbox" name="clean_menu_administrator_tools_exportpersdata" id="clean_menu_administrator_tools_exportpersdata" value="1" <?php checked(get_option('clean_menu_administrator_tools_exportpersdata')); ?>"><?php _e('Export Personal Data','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_tools_erasepersdata">
										<input type="checkbox" name="clean_menu_administrator_tools_erasepersdata" id="clean_menu_administrator_tools_erasepersdata" value="1" <?php checked(get_option('clean_menu_administrator_tools_erasepersdata')); ?>"><?php _e('Erase Personal Data','clean-menu') ?>
									</label></span>
									<div><label for="clean_menu_administrator_settings">
										<input type="checkbox" name="clean_menu_administrator_settings" id="clean_menu_administrator_settings" value="1" <?php checked(get_option('clean_menu_administrator_settings')); ?>"><?php _e('Settings','clean-menu') ?>
									</label></div>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_settings_general">
										<input type="checkbox" name="clean_menu_administrator_settings_general" id="clean_menu_administrator_settings_general" value="1" <?php checked(get_option('clean_menu_administrator_settings_general')); ?>"><?php _e('General','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_settings_writing">
										<input type="checkbox" name="clean_menu_administrator_settings_writing" id="clean_menu_administrator_settings_writing" value="1" <?php checked(get_option('clean_menu_administrator_settings_writing')); ?>"><?php _e('Writing','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_settings_reading">
										<input type="checkbox" name="clean_menu_administrator_settings_reading" id="clean_menu_administrator_settings_reading" value="1" <?php checked(get_option('clean_menu_administrator_settings_reading')); ?>"><?php _e('Reading','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_settings_discussion">
										<input type="checkbox" name="clean_menu_administrator_settings_discussion" id="clean_menu_administrator_settings_discussion" value="1" <?php checked(get_option('clean_menu_administrator_settings_discussion')); ?>"><?php _e('Discussion','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_settings_media">
										<input type="checkbox" name="clean_menu_administrator_settings_media" id="clean_menu_administrator_settings_media" value="1" <?php checked(get_option('clean_menu_administrator_settings_media')); ?>"><?php _e('Media','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_settings_permalinks">
										<input type="checkbox" name="clean_menu_administrator_settings_permalinks" id="clean_menu_administrator_settings_permalinks" value="1" <?php checked(get_option('clean_menu_administrator_settings_permalinks')); ?>"><?php _e('Permalinks','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_administrator_settings_privacy">
										<input type="checkbox" name="clean_menu_administrator_settings_privacy" id="clean_menu_administrator_settings_privacy" value="1" <?php checked(get_option('clean_menu_administrator_settings_privacy')); ?>"><?php _e('Privacy','clean-menu') ?>
									</label></span>
									<div><label for="clean_menu_administrator_collapse_menu">
										<input type="checkbox" name="clean_menu_administrator_collapse_menu" id="clean_menu_administrator_collapse_menu" value="1" <?php checked(get_option('clean_menu_administrator_collapse_menu')); ?>"><?php _e('Copllapse menu','clean-menu') ?>
									</label></div>
							</td>
						</tr>
					</tbody>
				</table>
				<br>
				<table class="wp-list-table widefat fixed bookmarks" style="width: 100%; border-radius: 4px;">
					<thead>
						<tr>
							<th><?php _e('Contributor','clean-menu') ?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
									<div><label for="clean_menu_contributor_dashboard">
										<input type="checkbox" name="clean_menu_contributor_dashboard" id="clean_menu_contributor_dashboard" value="1" <?php checked(get_option('clean_menu_contributor_dashboard')); ?>"><?php _e('Dashboard','clean-menu') ?>
									</label></div>
									<div><label for="clean_menu_contributor_posts">
										<input type="checkbox" name="clean_menu_contributor_posts" id="clean_menu_contributor_posts" value="1" <?php checked(get_option('clean_menu_contributor_posts')); ?>"><?php _e('Posts','clean-menu') ?>
									</label></div>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_contributor_posts_all_posts">
										<input type="checkbox" name="clean_menu_contributor_posts_all_posts" id="clean_menu_contributor_posts_all_posts" value="1" <?php checked(get_option('clean_menu_contributor_posts_all_posts')); ?>"><?php _e('All Posts','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_contributor_posts_add_new">
										<input type="checkbox" name="clean_menu_contributor_posts_add_new" id="clean_menu_contributor_posts_add_new" value="1" <?php checked(get_option('clean_menu_contributor_posts_add_new')); ?>"><?php _e('Add New','clean-menu') ?>
									</label></span>
									<div><label for="clean_menu_contributor_comments">
										<input type="checkbox" name="clean_menu_contributor_comments" id="clean_menu_contributor_comments" value="1" <?php checked(get_option('clean_menu_contributor_comments')); ?>"><?php _e('Comments','clean-menu') ?>
									</label></div>
									<div><label for="clean_menu_contributor_profile">
										<input type="checkbox" name="clean_menu_contributor_profile" id="clean_menu_contributor_profile" value="1" <?php checked(get_option('clean_menu_contributor_profile')); ?>"><?php _e('Profile','clean-menu') ?>
									</label></div>
									<div><label for="clean_menu_contributor_tools">
										<input type="checkbox" name="clean_menu_contributor_tools" id="clean_menu_contributor_tools" value="1" <?php checked(get_option('clean_menu_contributor_tools')); ?>"><?php _e('Tools','clean-menu') ?>
									</label></div>
									<div><label for="clean_menu_contributor_collapse_menu">
										<input type="checkbox" name="clean_menu_contributor_collapse_menu" id="clean_menu_contributor_collapse_menu" value="1" <?php checked(get_option('clean_menu_contributor_collapse_menu')); ?>"><?php _e('Copllapse menu','clean-menu') ?>
									</label></div>
							</td>
						</tr>
					</tbody>
				</table>
				<br>
				<table class="wp-list-table widefat fixed bookmarks" style="width: 100%; border-radius: 4px;">
					<thead>
						<tr>
							<th><?php _e('Author','clean-menu') ?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
									<div><label for="clean_menu_author_dashboard">
										<input type="checkbox" name="clean_menu_author_dashboard" id="clean_menu_author_dashboard" value="1" <?php checked(get_option('clean_menu_author_dashboard')); ?>"><?php _e('Dashboard','clean-menu') ?>
									</label></div>
									<div><label for="clean_menu_author_posts">
										<input type="checkbox" name="clean_menu_author_posts" id="clean_menu_author_posts" value="1" <?php checked(get_option('clean_menu_author_posts')); ?>"><?php _e('Posts','clean-menu') ?>
									</label></div>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_author_posts_all_posts">
										<input type="checkbox" name="clean_menu_author_posts_all_posts" id="clean_menu_author_posts_all_posts" value="1" <?php checked(get_option('clean_menu_author_posts_all_posts')); ?>"><?php _e('All Posts','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_author_posts_add_new">
										<input type="checkbox" name="clean_menu_author_posts_add_new" id="clean_menu_author_posts_add_new" value="1" <?php checked(get_option('clean_menu_author_posts_add_new')); ?>"><?php _e('Add New','clean-menu') ?>
									</label></span>
									<div><label for="clean_menu_author_media">
										<input type="checkbox" name="clean_menu_author_media" id="clean_menu_author_media" value="1" <?php checked(get_option('clean_menu_author_media')); ?>"><?php _e('Media','clean-menu') ?>
									</label></div>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_author_media_libary">
										<input type="checkbox" name="clean_menu_author_media_libary" id="clean_menu_author_media_libary" value="1" <?php checked(get_option('clean_menu_author_media_libary')); ?>"><?php _e('Libary','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_author_media_add_new">
										<input type="checkbox" name="clean_menu_author_media_add_new" id="clean_menu_author_media_add_new" value="1" <?php checked(get_option('clean_menu_author_media_add_new')); ?>"><?php _e('Add New','clean-menu') ?>
									</label></span>
									<div><label for="clean_menu_author_comments">
										<input type="checkbox" name="clean_menu_author_comments" id="clean_menu_author_comments" value="1" <?php checked(get_option('clean_menu_author_comments')); ?>"><?php _e('Comments','clean-menu') ?>
									</label></div>
									<div><label for="clean_menu_author_profile">
										<input type="checkbox" name="clean_menu_author_profile" id="clean_menu_author_profile" value="1" <?php checked(get_option('clean_menu_author_profile')); ?>"><?php _e('Profile','clean-menu') ?>
									</label></div>
									<div><label for="clean_menu_author_tools">
										<input type="checkbox" name="clean_menu_author_tools" id="clean_menu_author_tools" value="1" <?php checked(get_option('clean_menu_author_tools')); ?>"><?php _e('Tools','clean-menu') ?>
									</label></div>
									<div><label for="clean_menu_author_collapse_menu">
										<input type="checkbox" name="clean_menu_author_collapse_menu" id="clean_menu_author_collapse_menu" value="1" <?php checked(get_option('clean_menu_author_collapse_menu')); ?>"><?php _e('Copllapse menu','clean-menu') ?>
									</label></div>
							</td>
						</tr>
					</tbody>
				</table>
				<br>
				<table class="wp-list-table widefat fixed bookmarks" style="width: 100%; border-radius: 4px;">
					<thead>
						<tr>
							<th><?php _e('Editor','clean-menu') ?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
									<div><label for="clean_menu_editor_dashboard">
										<input type="checkbox" name="clean_menu_editor_dashboard" id="clean_menu_editor_dashboard" value="1" <?php checked(get_option('clean_menu_editor_dashboard')); ?>"><?php _e('Dashboard','clean-menu') ?>
									</label></div>
									<div><label for="clean_menu_editor_posts">
										<input type="checkbox" name="clean_menu_editor_posts" id="clean_menu_editor_posts" value="1" <?php checked(get_option('clean_menu_editor_posts')); ?>"><?php _e('Posts','clean-menu') ?>
									</label></div>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_editor_posts_all_posts">
										<input type="checkbox" name="clean_menu_editor_posts_all_posts" id="clean_menu_editor_posts_all_posts" value="1" <?php checked(get_option('clean_menu_editor_posts_all_posts')); ?>"><?php _e('All Posts','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_editor_posts_add_new">
										<input type="checkbox" name="clean_menu_editor_posts_add_new" id="clean_menu_editor_posts_add_new" value="1" <?php checked(get_option('clean_menu_editor_posts_add_new')); ?>"><?php _e('Add New','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_editor_posts_categories">
										<input type="checkbox" name="clean_menu_editor_posts_categories" id="clean_menu_editor_posts_categories" value="1" <?php checked(get_option('clean_menu_editor_posts_categories')); ?>"><?php _e('Categories','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_editor_posts_tags">
										<input type="checkbox" name="clean_menu_editor_posts_tags" id="clean_menu_editor_posts_tags" value="1" <?php checked(get_option('clean_menu_editor_posts_tags')); ?>"><?php _e('Tags','clean-menu') ?>
									</label></span>
									<div><label for="clean_menu_editor_media">
										<input type="checkbox" name="clean_menu_editor_media" id="clean_menu_editor_media" value="1" <?php checked(get_option('clean_menu_editor_media')); ?>"><?php _e('Media','clean-menu') ?>
									</label></div>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_editor_media_libary">
										<input type="checkbox" name="clean_menu_editor_media_libary" id="clean_menu_editor_media_libary" value="1" <?php checked(get_option('clean_menu_editor_media_libary')); ?>"><?php _e('Libary','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_editor_media_add_new">
										<input type="checkbox" name="clean_menu_editor_media_add_new" id="clean_menu_editor_media_add_new" value="1" <?php checked(get_option('clean_menu_editor_media_add_new')); ?>"><?php _e('Add New','clean-menu') ?>
									</label></span>
									<div><label for="clean_menu_editor_pages">
										<input type="checkbox" name="clean_menu_editor_pages" id="clean_menu_editor_pages" value="1" <?php checked(get_option('clean_menu_editor_pages')); ?>"><?php _e('Pages','clean-menu') ?>
									</label></div>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_editor_pages_all_pages">
										<input type="checkbox" name="clean_menu_editor_pages_all_pages" id="clean_menu_editor_pages_all_pages" value="1" <?php checked(get_option('clean_menu_editor_pages_all_pages')); ?>"><?php _e('All Pages','clean-menu') ?>
									</label></span>
									<span style="padding-left: 100px; display:block"><label for="clean_menu_editor_pages_add_new">
										<input type="checkbox" name="clean_menu_editor_pages_add_new" id="clean_menu_editor_pages_add_new" value="1" <?php checked(get_option('clean_menu_editor_pages_add_new')); ?>"><?php _e('Add New','clean-menu') ?>
									</label></span>
									<div><label for="clean_menu_editor_comments">
										<input type="checkbox" name="clean_menu_editor_comments" id="clean_menu_editor_comments" value="1" <?php checked(get_option('clean_menu_editor_comments')); ?>"><?php _e('Comments','clean-menu') ?>
									</label></div>
									<div><label for="clean_menu_editor_profile">
										<input type="checkbox" name="clean_menu_editor_profile" id="clean_menu_editor_profile" value="1" <?php checked(get_option('clean_menu_editor_profile')); ?>"><?php _e('Profile','clean-menu') ?>
									</label></div>
									<div><label for="clean_menu_editor_tools">
										<input type="checkbox" name="clean_menu_editor_tools" id="clean_menu_editor_tools" value="1" <?php checked(get_option('clean_menu_editor_tools')); ?>"><?php _e('Tools','clean-menu') ?>
									</label></div>
									<div><label for="clean_menu_editor_collapse_menu">
										<input type="checkbox" name="clean_menu_editor_collapse_menu" id="clean_menu_editor_collapse_menu" value="1" <?php checked(get_option('clean_menu_editor_collapse_menu')); ?>"><?php _e('Copllapse menu','clean-menu') ?>
									</label></div>
							</td>
						</tr>
					</tbody>
				</table>
				<br>
				<table class="wp-list-table widefat fixed bookmarks" style="width: 100%; border-radius: 4px;">
					<thead>
						<tr>
							<th><?php _e('Subscriber','clean-menu') ?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
									<div><label for="clean_menu_subscriber_dashboard">
										<input type="checkbox" name="clean_menu_subscriber_dashboard" id="clean_menu_subscriber_dashboard" value="1" <?php checked(get_option('clean_menu_subscriber_dashboard')); ?>"><?php _e('Dashboard','clean-menu') ?>
									</label></div>
									<div><label for="clean_menu_subscriber_profile">
										<input type="checkbox" name="clean_menu_subscriber_profile" id="clean_menu_subscriber_profile" value="1" <?php checked(get_option('clean_menu_subscriber_profile')); ?>"><?php _e('Profile','clean-menu') ?>
									</label></div>
									<div><label for="clean_menu_subscriber_collapse_menu">
										<input type="checkbox" name="clean_menu_subscriber_collapse_menu" id="clean_menu_subscriber_collapse_menu" value="1" <?php checked(get_option('clean_menu_subscriber_collapse_menu')); ?>"><?php _e('Copllapse menu','clean-menu') ?>
									</label></div>
							</td>
						</tr>
					</tbody>
				</table>
				<br>
				<table class="wp-list-table widefat fixed bookmarks" style="width: 100%; border-radius: 4px;">
					<thead>
						<tr>
							<th><?php _e('Other','clean-menu') ?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
									<div><label for="clean_menu_wplearning_news">
										<input type="checkbox" name="clean_menu_wplearning_news" id="clean_menu_wplearning_news" value="1" <?php checked(get_option('clean_menu_wplearning_news')); ?>"><?php _e('Show WP-LEARNING news','clean-menu') ?>
									</label></div>
							</td>
						</tr>
					</tbody>
				</table>

	<p class="submit"><input type="submit" name="submit" class="button-primary" value="<?php _e('Save Changes','clean-menu'); ?>"></p>
    </form>
	<i>
	<?php _e('A plugin by ','clean-menu'); ?><a target="_blank" href="http://wp-learning.net"><em>Tomek</em></a>
	</i>

<?php
}

function cleanmenu_submenu() {
    add_menu_page( 
        __( 'Clean menu', 'clean-menu' ),
        __( 'Clean menu', 'clean-menu' ),
        'administrator',
        'cleanmenu',
        'cleanmenu_settings',
        'dashicons-list-view'
    ); 
}

function cleanmenu_init() {
    register_setting('cleanmenu_settings_page','clean_menu_administrator_dashboard');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_dashboard_home');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_dashboard_updates');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_posts');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_posts_all_posts');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_posts_add_new');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_posts_categories');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_posts_tags');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_media');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_media_libary');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_media_add_new');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_pages');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_pages_all_pages');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_pages_add_new');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_comments');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_appearance');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_appearance_themes');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_appearance_customize');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_appearance_widgets');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_appearance_menus');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_appearance_header');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_appearance_background');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_appearance_editor');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_plugins');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_plugins_installed_plugins');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_plugins_add_new');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_plugins_editor');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_users');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_users_all_users');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_users_add_new');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_users_your_profile');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_tools');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_tools_available_tools');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_tools_import');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_tools_export');
	register_setting('cleanmenu_settings_page','clean_menu_administrator_tools_sitehealth');
	register_setting('cleanmenu_settings_page','clean_menu_administrator_tools_exportpersdata');
	register_setting('cleanmenu_settings_page','clean_menu_administrator_tools_erasepersdata');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_settings');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_settings_general');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_settings_writing');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_settings_reading');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_settings_discussion');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_settings_media');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_settings_permalinks');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_settings_privacy');
    register_setting('cleanmenu_settings_page','clean_menu_administrator_collapse_menu');

    register_setting('cleanmenu_settings_page','clean_menu_contributor_dashboard');
    register_setting('cleanmenu_settings_page','clean_menu_contributor_posts');
    register_setting('cleanmenu_settings_page','clean_menu_contributor_posts_all_posts');
    register_setting('cleanmenu_settings_page','clean_menu_contributor_posts_add_new');
    register_setting('cleanmenu_settings_page','clean_menu_contributor_comments');
    register_setting('cleanmenu_settings_page','clean_menu_contributor_profile');
    register_setting('cleanmenu_settings_page','clean_menu_contributor_tools');
    register_setting('cleanmenu_settings_page','clean_menu_contributor_collapse_menu');

    register_setting('cleanmenu_settings_page','clean_menu_author_dashboard');
    register_setting('cleanmenu_settings_page','clean_menu_author_posts');
    register_setting('cleanmenu_settings_page','clean_menu_author_posts_all_posts');
    register_setting('cleanmenu_settings_page','clean_menu_author_posts_add_new');
    register_setting('cleanmenu_settings_page','clean_menu_author_media');
	register_setting('cleanmenu_settings_page','clean_menu_author_media_libary');
    register_setting('cleanmenu_settings_page','clean_menu_author_media_add_new');
    register_setting('cleanmenu_settings_page','clean_menu_author_comments');
    register_setting('cleanmenu_settings_page','clean_menu_author_profile');
    register_setting('cleanmenu_settings_page','clean_menu_author_tools');
    register_setting('cleanmenu_settings_page','clean_menu_author_collapse_menu');

    register_setting('cleanmenu_settings_page','clean_menu_editor_dashboard');
    register_setting('cleanmenu_settings_page','clean_menu_editor_posts');
    register_setting('cleanmenu_settings_page','clean_menu_editor_posts_all_posts');
    register_setting('cleanmenu_settings_page','clean_menu_editor_posts_add_new');
    register_setting('cleanmenu_settings_page','clean_menu_editor_posts_categories');
    register_setting('cleanmenu_settings_page','clean_menu_editor_posts_tags');
    register_setting('cleanmenu_settings_page','clean_menu_editor_media');
    register_setting('cleanmenu_settings_page','clean_menu_editor_media_libary');
    register_setting('cleanmenu_settings_page','clean_menu_editor_media_add_new');
    register_setting('cleanmenu_settings_page','clean_menu_editor_pages');
    register_setting('cleanmenu_settings_page','clean_menu_editor_pages_all_pages');
    register_setting('cleanmenu_settings_page','clean_menu_editor_pages_add_new');
    register_setting('cleanmenu_settings_page','clean_menu_editor_comments');
    register_setting('cleanmenu_settings_page','clean_menu_editor_profile');
    register_setting('cleanmenu_settings_page','clean_menu_editor_tools');
    register_setting('cleanmenu_settings_page','clean_menu_editor_collapse_menu');

    register_setting('cleanmenu_settings_page','clean_menu_subscriber_dashboard');
    register_setting('cleanmenu_settings_page','clean_menu_subscriber_profile');
    register_setting('cleanmenu_settings_page','clean_menu_subscriber_collapse_menu');

    register_setting('cleanmenu_settings_page','clean_menu_wplearning_news');
}

function cleanmenu_settings_link( $links, $file ) {
    if ( $file != plugin_basename( __FILE__ ))
        return $links;

    $cleanmenu_settings_link = '<a href="options-general.php?page=cleanmenu">'.__('Settings','clean-menu').'</a>';
    array_unshift( $links, $cleanmenu_settings_link );
    return $links;
}

add_action('admin_menu','cleanmenu_submenu');
add_action('admin_init','cleanmenu_init');
add_filter('plugin_action_links','cleanmenu_settings_link',10,2);
?>