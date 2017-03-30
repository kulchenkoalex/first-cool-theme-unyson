<?php if (!defined('FW')) die('Forbidden');

$manifest = array();

$manifest['name']         = __( 'My extension name', MY_THEME_TEXTDOMAIN );
//$manifest['uri']          = 'http://extension-homepage.com/';
$manifest['description']  = __( 'My extension description', MY_THEME_TEXTDOMAIN );
$manifest['version']      = '1.0';
$manifest['author']       = 'AlexeyKulchenko';
///$manifest['author_uri']   = 'http://themefuse.com/';
$manifest['requirements'] = array(
    'wordpress' => array(
        'min_version' => '4.0',
        /*'max_version' => '4.99.9'*/
    ),
    'framework' => array(
        /*'min_version' => '1.0.0',
        'max_version' => '1.99.9'*/
    ),
    'extensions' => array(
        /*'extension_name' => array(),*/
        /*'extension_name' => array(
            'min_version' => '1.0.0',
            'max_version' => '2.99.9'
        ),*/
    )
);
/**
 * @type bool Display on the Extensions page or it's a hidden extension
 */
$manifest['display'] = true;
/**
 * @type bool If extension can exist alone
 * false - There is no sense for it to exist alone, it exists only when is required by some other extension.
 * true  - Can exist alone without bothering about other extensions.
 */
$manifest['standalone'] = false;
/**
 * @type string Thumbnail used on the Extensions page
 * All framework extensions has thumbnails set in the available extensions list
 * but if your extension is not in that list and id located in the theme, you can set the thumbnail via this parameter
 */
$manifest['thumbnail'] = null;