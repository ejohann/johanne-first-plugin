<?php 
  /*
    Plugin Name: Johanne First Plugin
    Description: This plugin will transform your WordPress

  */

    add_filter('the_content', 'amazingContentEdits');

    function amazingContentEdits($content){
    	$content = $content . '<p><em>All content belongs to <strong>Fictional University</strong>.</em></p>';
    	return $content;
    }

    add_shortcode('programCount', 'returnProgramCount');

    function returnProgramCount(){

    	$programs = wp_count_posts('program');

    	return $programs->publish;
    }

?>