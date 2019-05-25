<?php
	require_once('function.php');
	$configs = parse_ini_file('config.ini');
	$fileUpload = $_FILES['file-upload'];
	foreach ($fileUpload['name'] as $key => $value) {
		if ($value != null) {
			$fileName = $fileUpload['name'][$key];
			$flagSize = checkSize($fileUpload['size'][$key], $configs['min_size'], $configs['max_size']);
			$flagExtensions = checkExtensions($value, explode('|',$configs['extension']));
			if ($flagSize == true && $flagExtensions == true) {
				move_uploaded_file($fileUpload['tmp_name'][$key], './files/'. $fileName);
			}
		}
	}	
?>