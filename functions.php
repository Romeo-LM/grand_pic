<?php
function add_style()
{
    wp_enqueue_style('reset-style', get_template_directory_uri() . '/src/styles/reset.css', false);
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', false);
    wp_enqueue_style('switzer-style', get_template_directory_uri() . '/src/fonts/Switzer/WEB/css/switzer.css', false);
    wp_enqueue_style('flikity', 'https://unpkg.com/flickity@2/dist/flickity.min.css', false);
    wp_enqueue_style('Fontawasome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', false);

    if (is_page('Accueil')) {
        wp_enqueue_style('home-style', get_template_directory_uri() . '/src/styles/home.css', false);
    }

    if (is_page('NOS BIÈRES')) {
        wp_enqueue_style('select_beer-style', get_template_directory_uri() . '/src/styles/select_beer.css', false);
    }

    if (is_page('NOS BIÈRES')) {
        wp_enqueue_style('select_beer-style', get_template_directory_uri() . '/src/styles/select_beer.css', false);
    }

    if (is_page() && wp_get_post_parent_id(get_the_ID()) === 14) {
        wp_enqueue_style('beer-style', get_template_directory_uri() . '/src/styles/beer.css');
    }

    if (is_page('a propos')) {
        wp_enqueue_style('about-style', get_template_directory_uri() . '/src/styles/about.css', false);
    }

    if (is_page('contact')) {
        wp_enqueue_style('contact-style', get_template_directory_uri() . '/src/styles/contact.css', false);
    }

    if (is_page('fabrication')) {
        wp_enqueue_style('manufactoring-style', get_template_directory_uri() . '/src/styles/manufactoring.css', false);
    }

    if (is_page('pour les pros')) {
        wp_enqueue_style('pro-style', get_template_directory_uri() . '/src/styles/pro.css', false);
    }

    if (is_404()) { 
        wp_enqueue_style('404-style', get_template_directory_uri() . '/src/styles/404.css', false);
    }
}
add_action('wp_enqueue_scripts', 'add_style');

function add_script()
{
    wp_enqueue_script('header-js', get_template_directory_uri() . '/src/js/main-header.js', array(), false, true);

    if (is_page('fabrication')) {
        wp_enqueue_script('fab-js', get_template_directory_uri() . '/src/js/main-fabrication.js', array(), false, true);
    }

    if (is_page('Nouvelle Biere')) {
        wp_enqueue_script('new_beer-js', get_template_directory_uri() . '/src/js/main-new-beer.js', array(), false, true);
    }

    if (is_page('a propos')) {
        wp_enqueue_script('a_propos-js', get_template_directory_uri() . '/src/js/main-apropos.js', array(), false, true);
    }

    if (is_front_page()) {
        wp_enqueue_script('index-js', get_template_directory_uri() . '/src/js/main-index.js', array(), false, true);
        wp_enqueue_script('lotties-js', "https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min.js", array(), false, true);
        wp_enqueue_script('flikity-js', "https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js", array(), false, true);
    }
}
add_action('wp_enqueue_scripts', 'add_script');

/**
 * Allow SVG uploads for administrator users.
 *
 * @param array $upload_mimes Allowed mime types.
 *
 * @return mixed
 */
add_filter(
	'upload_mimes',
	function ( $upload_mimes ) {
		// By default, only administrator users are allowed to add SVGs.
		// To enable more user types edit or comment the lines below but beware of
		// the security risks if you allow any user to upload SVG files.
		if ( ! current_user_can( 'administrator' ) ) {
			return $upload_mimes;
		}

		$upload_mimes['svg']  = 'image/svg+xml';
		$upload_mimes['svgz'] = 'image/svg+xml';

		return $upload_mimes;
	}
);

/**
 * Add SVG files mime check.
 *
 * @param array        $wp_check_filetype_and_ext Values for the extension, mime type, and corrected filename.
 * @param string       $file Full path to the file.
 * @param string       $filename The name of the file (may differ from $file due to $file being in a tmp directory).
 * @param string[]     $mimes Array of mime types keyed by their file extension regex.
 * @param string|false $real_mime The actual mime type or false if the type cannot be determined.
 */
add_filter(
	'wp_check_filetype_and_ext',
	function ( $wp_check_filetype_and_ext, $file, $filename, $mimes, $real_mime ) {

		if ( ! $wp_check_filetype_and_ext['type'] ) {

			$check_filetype  = wp_check_filetype( $filename, $mimes );
			$ext             = $check_filetype['ext'];
			$type            = $check_filetype['type'];
			$proper_filename = $filename;

			if ( $type && 0 === strpos( $type, 'image/' ) && 'svg' !== $ext ) {
				$ext  = false;
				$type = false;
			}

			$wp_check_filetype_and_ext = compact( 'ext', 'type', 'proper_filename' );
		}

		return $wp_check_filetype_and_ext;

	},
	10,
	5
);
