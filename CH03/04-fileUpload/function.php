<?php
	// check file size
	function checkSize($size, $min, $max) {
		$flag = false;
		if($size >= $min && $size <= $max) $flag = true;
		return $flag;
	}
	// check extension 
	function checkExtensions($fileName, $arrExtension) {
		$ext = pathinfo($fileName, PATHINFO_EXTENSION);
		$flag = false;
		if (in_array(strtolower($ext), $arrExtension)==true) {
			$flag = true;
		}
		return $flag;
	}

?>