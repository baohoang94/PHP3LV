<?php
	$value = 'hb9445@gmail.com';
	if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
		echo "<br> $value khong la email";
	}
	else {
		echo "<br> $value la email";
	}
?>