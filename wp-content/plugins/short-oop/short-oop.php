<?php 
/**
 * Plugin Name: ShortCode OOP
 * Plugin URI: http://www.thinnycode.com/wordpress/plugins
 * Description: The very first plugin that I have ever created.
 * Version: 1.0.0
 * Author: Sutin injitt
 * Author URI: http://www.thinnycode.com
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
define('STYLE_URL', plugin_dir_url(__FILE__).'css/');
define('SCRIPT_URL', plugin_dir_url(__FILE__).'js/');
define('COMPONENT_URL', plugin_dir_url(__FILE__).'components/');
define('WEBCOMPONENTS_URL', plugin_dir_url(__FILE__).'components/bower_components');




class ShortOOP 
{
    public function __construct()
    {
        add_shortcode('custom_text', array($this, 'makeShortcode'));
        $this->includeStyles('sc_styles.css');
        $this->includeScript('sc_app.js');
    }

    public function makeShortcode()
    {
        echo '
            <b>make shortcode with OOP</b>
            <button onclick="testAlert()">click</button>
        ';
    }

    public function includeStyles($style_name)
    {
        wp_enqueue_style('sc_stylest', STYLE_URL.$style_name);

    }
    public function includeScript($script_name)
    {
        wp_enqueue_script('sc_app', SCRIPT_URL.$script_name);

    }
    
}

$shortOOP = new ShortOOP();
