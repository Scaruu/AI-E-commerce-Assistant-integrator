<?php
/*
Plugin Name: Ultimate AI Chat
Description: Affiche un chat IA intelligent.
Version: 1.0
Author: Martin SCAURI
*/

if (!defined('ABSPATH')) {
    exit; 
}

function chat_widget_enqueue_scripts() {
    $css_version = '1.1.3';
    $js_version = '1.0.1';
    
    wp_enqueue_style('chat-widget-style', plugin_dir_url(__FILE__) . 'css/chat-widget.css', array(), $css_version);
    wp_enqueue_script('chat-widget-script', plugin_dir_url(__FILE__) . 'js/chat-widget.js', array('jquery'), $js_version, true);
}
add_action('wp_enqueue_scripts', 'chat_widget_enqueue_scripts');

function chat_widget_add_icon() {
    echo '<div id="chat-widget-icon" class="chat-widget-icon"></div>';
    echo '<div id="chat-widget-modal" class="chat-widget-modal"><iframe src="https://iframechatms.netlify.app/" width="100%" height="100%" frameborder="0"></iframe></div>';
}
add_action('wp_footer', 'chat_widget_add_icon');
?>
