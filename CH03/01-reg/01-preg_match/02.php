<?php
	$subject = 'PHP is easy as PHP';
	$pattern = '/PHP/';
	preg_match_all($pattern, $subject, $match);
	echo '<pre>';
	print_r($match);
	echo '</pre>';
?>
