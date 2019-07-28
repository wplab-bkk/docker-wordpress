<?php
/**
 * Plugin Name: Form Creation Shortcode
 * Plugin URI: http://www.thinnycode.com/wordpress/plugins/form-creation
 * Description: The very first plugin that I have ever created.
 * Version: 1.0.0
 * Author: Sutin injitt
 * Author URI: http://www.thinnycode.com
 */
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function form_creation(){
    echo '
    <div class="custom-form">
    <h4>Custom Forms Plugins</h4>
        <form> 
            First name: <input type="text" name="firstname"><br> 
            Last name: <input type="text" name="lastname"><br> 
            Message: <textarea name="message"> </textarea> 
        </form> 
    </div>
    ';
}

add_shortcode("test","form_creation");
