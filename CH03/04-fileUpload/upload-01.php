<?php
	require_once('function.php');
	$fileUpload = $_FILES['file-upload'];
	echo "<pre>";
	print_r($fileUpload);
	echo "</pre>";

	$flagSize = checkSize($fileUpload['size'], 1*1024, 5*1024*1024);
	echo $flagExtensions = checkExtensions($fileUpload['name'], array('jpg','png'));
	if ($flagSize == true && $flagExtensions == true) {
		move_uploaded_file($fileUpload['tmp_name'], './files/'. $fileUpload['name']);
	}
?>