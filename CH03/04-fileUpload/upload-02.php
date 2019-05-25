<?php
	require_once('function.php');
	$configs = parse_ini_file('config.ini');
	$fileUpload = $_FILES['file-upload'];

	$flagSize = checkSize($fileUpload['size'], $configs['min_size'], $configs['max_size']);
	echo $flagExtensions = checkExtensions($fileUpload['name'], explode('|',$configs['extension']));
	if ($flagSize == true && $flagExtensions == true) {
		move_uploaded_file($fileUpload['tmp_name'], './files/'. $fileUpload['name']);
	}
?>