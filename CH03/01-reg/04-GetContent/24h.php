<?php 
	$content = file_get_contents('https://www.24h.com.vn/');
	// $pattern = '#(?<=Content_HomeSideBar_RatesBox_ExchangeRates_ExrateView">).*(?=</table>)#imsu';
	// preg_match($pattern, $content, $matches);
	// echo "<pre>";
	// print_r($matches);
	// echo "</pre>";
	// $result = '<table border="1">'.$matches[0].'</table>';
	echo $content;
 ?>