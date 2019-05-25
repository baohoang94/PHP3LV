<?php 
	$value = '084-08.234567';

	$options = [
		'options' => ['regexp' => '#^084-[0-9]{2}\.[0-9]{6}$#']
	];

	if (!filter_var($value, FILTER_VALIDATE_REGEXP, $options)) {
		echo "$value ko phai la so dien thoai";
	} else {
		echo "$value là số điện thoại";
	}
?>