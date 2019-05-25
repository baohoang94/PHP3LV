<?php
	$subject = 'hb9445@gmail.com';
	$pattern = '#^[a-z][a-z0-9_\.]{4,31}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$#';
	if(preg_match($pattern, $subject) == true) {
		echo 'Địa chỉ email hợp lệ';
	} else {
		echo 'Địa chỉ email không hợp lệ';
	}
?>