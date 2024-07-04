<?php
/**
*Plugin Name: My First Plugin
*Plugin URI: https://wordpress.org
*Description:This is my first plugin.
*Version: 1.0
*Author: Md. Omit Hasan
*Author URI: https://google.com
*License: GPLv2 or Later
*Text Domain: word_count
*Domain Path:/langurages/
*/
// function wordcount_load_textdomain(){
//     load_plugin_textdomain( 'word-count',false,dirname(__FILE__)."/languages");
// };
// add_action("plugins_loaded",'wordcount_load_textdomain');


add_filter( 'the_content', 'wordcount_count_words');
function wordcount_count_words($content){

$string_count = strip_tags($content);

$word_number = str_word_count($string_count);
$label = __('Total Number Of Words','word-count');

$content .= sprintf('<h1>%s: %s</h1>',$label,$word_number);
return $content;
};

?>
