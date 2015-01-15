<?php
/**
 *
 * @package   GS_Testimonial
 * @author    Golam Samdani <samdani1997@gmail.com>
 * @license   GPL-2.0+
 * @link      http://www.gsamdani.me
 * @copyright 2015 Golam Samdani
 *
 * @wordpress-plugin
 * Plugin Name:			GS Testimonial
 * Plugin URI:			http://www.gsamdani.me/gs-testimonial-slider
 * Description:       	GS Testimonial Slider is a WordPress plugin which create custom post type to add client's testimonials / recommendations to display anywhere of your site using shortcode. [gs_testimonial]
 * Version:           	1.0.0
 * Author:       		Golam Samdani
 * Author URI:       	http://www.gsamdani.me
 * Text Domain:       	golamsamdani
 * License:           	GPL-2.0+
 * License URI:       	http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


//--------- CPT Testimonial ----------------------- 
require_once dirname( __FILE__ ) . '/gs-testimonial-cpt.php';


//--------- CPT's MetaBox ------------------ 
require_once dirname( __FILE__ ) . '/gs-testimonial-metabox.php';


//--------- CPT's Columns ------------------ 
require_once dirname( __FILE__ ) . '/gs-testimonial-column.php';


//--------- CPT's Shortcode ---------------- 
require_once dirname( __FILE__ ) . '/gs-testimonial-shortcode.php';


//--------- Enqueue Scripts & Style Files --
require_once dirname( __FILE__ ) . '/gs-testimonial-script.php';


add_action('do_meta_boxes', 'gs_testimonial_change_image_box');
function gs_testimonial_change_image_box()
{
    remove_meta_box( 'postimagediv', 'gs_testimonial', 'side' );
    add_meta_box('postimagediv', __('Testimonial Author Image'), 'post_thumbnail_meta_box', 'gs_testimonial', 'normal', 'high');
}