<?php 
/*
Plugin Name: Customize Admin
Plugin URI: https://github.com/chechepech/
Description: Remove some dashboad widgets and add a note to the post editng screen
Version: 0.1
Author: Cheche Pech
Author URI: https://chechepech.gq
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: myadmin
*/

/*******************************************************
	Edit dashboard widget
*******************************************************/

function myadmin_remove_dashboard_widgets(){

	remove_meta_box('dashboard_activity', 'dashboard', 'normal');
	remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
	remove_meta_box('dashboard_primary', 'dashboard', 'side');
}

add_action('wp_dashboard_setup', 'myadmin_remove_dashboard_widgets');

/*******************************************************
	Add a textbox to the post editing screen
*******************************************************/
function myadmin_add_welcome_widget(){

	add_meta_box('myadmin_welcome_widget','Welcome','myadmin_welcome_widget_callback','dashboard','side','high');
}

add_action('wp_dashboard_setup','myadmin_add_welcome_widget');

function myadmin_welcome_widget_callback(){ ?>

	<p>This content management system lets you edit the pages and posts on your website.</p>
		<h4> <>Editing and adding content </h4>
		<p> Your site consists of the following content, which you can access via the menu on the left:</p>
		<ul>
			<li>
				<strong> Posts </strong> - blog posts - you can edit these and add more
			</li>
			<li>
				<strong> Media </strong> - images and documents which you can upload via the Media menu on the left or within each post or page. Most media is uploaded into a post, page or resource except articles which you upload using the Media page
			</li>
			<li>
				<strong> Pages </strong> - static pages which you can edit
			</li>
			<li>
				<strong> Comments </strong> - manage comments posted by your members here or in the post editing screen
			</li>
			<li>
				<strong> Products </strong> - everything you sell via this website or via an affiliate link 
			</li>
		</ul>
	
	<p> On each editing screen there are instructions to help you add and edit content. </p>
	
	<h4>Configuring settings</h4>
	<p>There are also a number of screens which let you configure various options. Ones you may sometimes need to use are:</p>
	
<ul>
	<li>
		<strong>WooCommerce </strong> - here you can amend your shop settings, such as PayPal details, the email notifications sent to customers, shipping, tax and more.
	</li>
	<li>
		<strong> Appearance </strong> - add new pages to the navigation menu or add widgets to the sidebar or footer. It is unlikely you will need to use any of these.
	</li>
	<li>
		<strong> Settings </strong> - here you can change settings for your site such as the way urls are displayed and the size of media. Again it is unlikely you will need to use this.
	</li>	
</ul>
	
<p>At the bottom of the menu to the left, the  <strong> anual </strong> link takes you to a set of video guides which will help you learn how to use WordPress.</p>

<p>Below these instructions are some more widgets which give you access to information on purchases made via your e-commerce system, which is called WooCommerce.</p>	
<?php
}


/*******************************************************
	Add a textbox to the post editing screen
*******************************************************/

function mymenu_add_post_editing_metabox(){
	add_meta_box('mymenu_post_editing_meta','Using this screen','mymenu_post_editing_callback','post','side','hign');
}

add_action('add_meta_boxes','mymenu_add_post_editing_metabox');

function mymenu_post_editing_callback(){

	echo '<p>' . __( 'Use this screen to create new blog posts and edit existing ones. Some tips:', 'tutsplus' ) . '</p>';
	echo '<ul>';
		echo '<li>' . __( 'To type your post, just start typing in the main editing pane. You can format your content using the formatting menu above the text', 'tutsplus' ) . '</li>';
		echo '<li>' . __( 'To add an image, click on ', 'tutsplus' ) . '<strong>' . __( 'Add Media', 'tutsplus' ) . '</strong>' .  __( ' to upload images from your PC', 'tutsplus' ) . '</li>';
		echo '<li>' . __( 'After creating your post, you can preview it before saving by clicking the ', 'tutsplus' ) . '<strong>' . __( 'Preview', 'tutpslus' ) . '</strong>' . __( ' button.', 'tutsplus' ) . '</li>';
		echo '<li>' . __( 'Specify topics and applications for your post by clicking the check boxes below.', 'tutsplus' ) . '</li>';
		echo '<li>' . __( 'To save your post, click ', 'tutsplus' ) . '<strong>' . __( 'Publish', 'tutsplus' ) . '</strong>.</li>';
		echo '<li>' . __( 'After editing an existing post, click ', 'tutsplus' ) . '<strong>' . __( 'Update', 'tutsplus' ) . '</strong>' . __( ' to save your changes.', 'tutsplus' ) . '</li>';
 	echo '</ul>';	
}