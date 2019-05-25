
<?php
	$config = ini_get_all();
	// print_r($config);
	// echo $timeZone = ini_get('date.timezone');
	ini_set('date.timezone', 'Asia/Ho_Chi_Minh');
	echo '<br>' . ini_get('date.timezone');
?>