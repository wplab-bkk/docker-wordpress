<?php
/**
 * Plugin Name: Add Footer
 * Plugin URI: http://www.thinnycode.com/wordpress/plugins
 * Description: The very first plugin that I have ever created.
 * Version: 1.0.0
 * Author: Sutin injitt
 * Author URI: http://www.thinnycode.com
 */
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function add_custom_attribution () {
    $date = date('Y');
    echo '
    <p>&copy; 2007 - ${$date} All Rights Reserved</p>
    <p>Site design by 
        <a href="http://andrewnorcross.com/" title="Andrew Norcross -  This Is Where The Awesome Happens" target="_blank">
            Andrew Norcross
        </a>
    </p>
    ';
}

add_action('thesis_hook_before_footer', 'add_custom_attribution'); 