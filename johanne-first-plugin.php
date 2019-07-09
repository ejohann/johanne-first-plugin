<?php 
  /*
    Plugin Name: Johanne First Plugin
    Description: This plugin will transform your WordPress

  */

    add_filter('the_content', 'amazingContentEdits');

    function amazingContentEdits($content){
    	$content = $content . '<p><em>All content belongs to <strong>Fictional University</strong>.</em></>';
    	return $content;
    }




?>