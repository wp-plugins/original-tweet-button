<?php 
/*
Plugin Name:  Original Tweet Button
Plugin URI:   http://beyn.org/original-tweet-button/
Description:  Adds Twitter's original Tweet button to the end of your posts
Version:      1.0
Author:       Baris Unver
Author URI:   http://beyn.org/
*/

function original_tweet_button($content) {
	if(is_singular()) {
		$original_tweet_button_code = '<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script><a href="http://twitter.com/share" class="twitter-share-button">Tweet</a>';
		return $content.$original_tweet_button_code;
	} else {return $content;}
}
add_filter('the_content', 'original_tweet_button');

?>