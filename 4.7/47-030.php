<?php
 function redirect($url) {
 if (! mb_ereg("\\A[-_.!~*'();\\/?:@&=+\\$,%#a-zA-Z0-9]+\\z",
 $url)) {
	die('Bad URL');
 	}
 header('Location: ' . $url);
 }
 $url = filter_input(INPUT_GET, 'url');
 redirect($url);
?>
