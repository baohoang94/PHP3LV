<?php
	$subject = 'PHP is easy';
	$pattern = '/PHP/';
	preg_match($pattern, $subject, $match);
	echo '<pre>';
	print_r($match);
	echo '</pre>';
?>