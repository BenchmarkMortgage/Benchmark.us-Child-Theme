<?php
/**
 * @package Make Child
 */

/**
 * The theme version.
 */
define( 'TTFMAKE_CHILD_VERSION', '1.6.1' );

/**
 * Turn off the parent theme styles.
 *
 * If you would like to use this child theme to style Make from scratch, rather
 * than simply overriding specific style rules, simply remove the '//' from the
 * 'add_filter' line below. This will tell the theme not to enqueue the parent
 * stylesheet along with the child one.
 */
//add_filter( 'make_enqueue_parent_stylesheet', '__return_false' );

/**
 * Add your custom theme functions here.
 */
// Prevent unwanted next and prev link downloads
if(function_exists('remove_action')) { 
	remove_action('wp_head', 'start_post_rel_link', 10, 0 );
	remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); 
};

function benchmark_scripts() {
    if (is_page('make-a-payment')) {
        wp_enqueue_script('magnific', get_stylesheet_directory_uri() . '/assetts/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_style('magnific-css', get_stylesheet_directory_uri() . '/assetts/magnific-popup.css', array(), '1.0.0', false);
        wp_enqueue_script('benchmark.mfp', get_stylesheet_directory_uri() . '/js/benchmark.mfp.js', array('magnific'), '1.0.0', true);
    }
    if (is_page('lifetime-loan-old')) {
    wp_enqueue_script('benchmark.wow', get_stylesheet_directory_uri() . '/js/benchmark.wow.js', array('jquery'), '1.1', true);
    }
};
add_action( 'wp_enqueue_scripts', 'benchmark_scripts');

function corporate_scripts() {
    wp_enqueue_script('corporateHide', get_stylesheet_directory_uri() . '/js/corporateHide.js', array(), '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'corporate_scripts');

function wow_scripts() {
    if ( is_page('lifetime-loan')) {
        wp_enqueue_script('wow', get_stylesheet_directory_uri() . '/js/wow.min.js', array(), '1.1.0', true);
        wp_enqueue_style('animatecss', get_stylesheet_directory_uri() . '/animate.min.css', array(), '3.4.0', false);
    }
}
add_action( 'wp_enqueue_scripts', 'wow_scripts');

function applyUI() {
    if ( is_page('apply')) {
        wp_enqueue_script('applyUI', get_stylesheet_directory_uri() . '/js/applyUI.js', array(), '1.0', true);
    }
}
add_action( 'wp_enqueue_scripts', 'applyUI');

function benchmark_login() { ?>
    <style type="text/css">
        .login{
            background-image:url(../wp-content/uploads/2015/09/sail-into-the-blue-optimized.jpg);
            background-size:cover;
            background-position:left bottom;
            padding-top:0;
            overflow:hidden;
            
        }
        @media screen and (max-width:800px){
            .login{
                background-position:center bottom;
            }
        }
        .login h1 a {
            background-image:url(../wp-content/uploads/2015/07/BenchmarkMortgage72dpi.png);
            width:320px;
            background-size:300px;
            background-repeat:no-repeat;
            background-color:rgba(255, 255, 255, 0.1);
            background-position:center;
            /*border-radius:10px;
            box-shadow:0 1px 8px rgba(0, 0, 0, 0.5);*/
            border:2px solid rgba(6, 35, 115, 0.8);
        }
        .login form {
            background-color:rgba(255, 255, 255, 0.6);
            box-shadow:0 2px 20px rgba(0, 0, 0, 0.4);
        }
        .wp-core-ui .button-primary {
            background-color:#ddd;
            border:none;width:120px;
            box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);
            color:#3f6a9a;
            text-shadow:0 1px 0 #eee;
            font-size:1rem;
        }
        .login-action-lostpassword .button-primary, 
        .login-action-rp .button-primary {
            width:165px !important;
        }
        .wp-core-ui .button-primary:hover {
            background-color:#3f6a9a;
            color:#fff;
            box-shadow:0 1px 2px rgba(0, 0, 0, 0.8);
            font-weight:600;
            text-shadow:none;
        }
        .login #login_error {
            background-color: rgba(255, 0, 0, 0.1);
            border: 1px solid #f00;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.7);
            margin-bottom:-10px;
            color:#333;
        }
        .login input {
            background-color:rgba(255, 255, 255, 0.95);
        }
        .login input:focus {
            border-color: #ddd;
            box-shadow:inset 0 0 2px rgba(63, 106, 154, 0.9);
            background-color:rgba(255, 255, 255, 0.97);
        }
        .login #backtoblog a, .login #nav a {
            color:#062373;
            background-color:rgba(255, 255, 255, 0.5);
            border-radius:3px;
            padding:5px;
            display:inline-block;
        }
        .login #nav {
            padding:0;
        }
        .login #nav a {
            padding:5px 40px;
        }
        .login #backtoblog {
            padding:0;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'benchmark_login' );
