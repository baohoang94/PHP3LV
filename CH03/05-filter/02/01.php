<?php
	$x = 1; // 1, true, on la kieu boolean
	if (!filter_var($x, FILTER_VALIDATE_BOOLEAN)) {
		echo "<br> $x khong la kieu boolean";
	}
	else {
		echo "<br> $x la kieu boolean";
	}
?>