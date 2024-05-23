<?php
/*
Plugin Name: AI E-commerce Assistant
Description: Intégrez un assistant IA à votre site e-commerce et boostez vos conversions.
Version: 1.1
Author: Martin SCAURI
*/

if (!defined('ABSPATH')) {
    exit; 
}

function chat_widget_enqueue_scripts() {
    $version = '1.0.0';
    
    wp_enqueue_style('chat-widget-style', plugin_dir_url(__FILE__) . 'css/chat-widget.css', array(), $version);
    wp_enqueue_script('chat-widget-script', plugin_dir_url(__FILE__) . 'js/chat-widget.js', array('jquery'), $version, true);
}
add_action('wp_enqueue_scripts', 'chat_widget_enqueue_scripts');

function chat_widget_add_icon() {
    ?>
    <div id="chat-widget-icon" class="chat-widget-icon"></div>
    <div id="chat-widget-modal" class="chat-widget-modal">
        <iframe src="#" width="100%" height="100%" frameborder="0"></iframe>
    </div>
    <?php
}
add_action('wp_footer', 'chat_widget_add_icon');
?>
