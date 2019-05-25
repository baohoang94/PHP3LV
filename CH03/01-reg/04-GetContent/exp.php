<?php 
	$content = file_get_contents('https://vnexpress.net/thoi-su');
	$pattern = '#<article class="list_news">(.*)</p>\s*</article>"#imsU';
	preg_match_all($pattern, $content, $match);
	echo '<pre>';
	print_r($match);
	echo '</pre>';
?>