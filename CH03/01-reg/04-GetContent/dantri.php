<?php 
	$content = file_get_contents('https://dantri.com.vn/the-thao.htm');
	$pattern = '#class="img130" src="(.*)">.*<a href="(.*)" title=".*">(.*)</a></h2>.*</span>(.*)\s<h3 class="h3relate">#imsU';
	preg_match_all($pattern, $content, $listData);
	
	// echo $content;
	$result = [];
	foreach ($listData[1] as $key => $value) {
		$result[$key]['image'] = $listData[1][$key];
	}
	echo "<pre>";
	print_r($result);
	echo "</pre>";
 ?>