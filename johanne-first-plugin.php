<?php 
  /*
    Plugin Name: Johanne First Plugin
    Description: This plugin will transform your WordPress

  */

    add_filter('the_content', 'amazingContentEdits');
    add_filter('the_title', 'amazingTitleEdits');

    function amazingContentEdits($content){
    	$content = $content . '<p><em>All content belongs to <strong>Fictional University</strong>.</em></p>';
    	return $content;
    }


     function amazingTitleEdits($title){

     	if(get_post_type(get_the_ID()) == 'event')
     	 {
    	   $title = $title . ' Event';
    	 } 

    	if(get_post_type(get_the_ID()) == 'program')
     	 {
    	   $title = $title . ' Program';
    	 }
    	return $title;
    }

?>