<?php
	$menu = [];
	$menu[] = ['id'=>1, 'name'=>'Home', 'parents'=>0];
	$menu[] = ['id'=>2, 'name'=>'About', 'parents'=>0];
	$menu[] = ['id'=>3, 'name'=>'News', 'parents'=>0];
	$menu[] = ['id'=>4, 'name'=>'Producs', 'parents'=>0];
	$menu[] = ['id'=>5, 'name'=>'Contact', 'parents'=>0];
	$menu[] = ['id'=>6, 'name'=>'Tin trong nước', 'parents'=>3];
	$menu[] = ['id'=>7, 'name'=>'Tin ngoài nước', 'parents'=>3];
	$menu[] = ['id'=>8, 'name'=>'CNTT', 'parents'=>6];
	$menu[] = ['id'=>9, 'name'=>'Lập trình', 'parents'=>6];
	$menu[] = ['id'=>10, 'name'=>'IT', 'parents'=>7];
	$menu[] = ['id'=>11, 'name'=>'Programing', 'parents'=>7];
	$menu[] = ['id'=>12, 'name'=>'Software', 'parents'=>4];
	$menu[] = ['id'=>13, 'name'=>'Mobile', 'parents'=>4];
	$menu[] = ['id'=>14, 'name'=>'Anti Virus', 'parents'=>12];
	$menu[] = ['id'=>15, 'name'=>'Nokia', 'parents'=>13];
	$menu[] = ['id'=>16, 'name'=>'Samsung', 'parents'=>13];
	$menu[] = ['id'=>17, 'name'=>'S1', 'parents'=>16];
	$menu[] = ['id'=>18, 'name'=>'S1.1', 'parents'=>17];
	function recursive($source, $parent, &$newString) {
		if (count($source) > 0) {
			$newString .= '<ul>';
			foreach ($source as $key => $value) {
				if ($value['parents'] == $parent) {
					$value['name'] = '<a href="category.php?catid=' . $value['id'] . '">' . $value['name'] . '</a>';
					$newString .= '<li>' . $value['name'];
					unset($source[$key]);
					$newParent = $value['id'];
					recursive($source, $newParent, $newString);
					$newString .= '</li>';
				}
			}
			$newString .= '</ul>';
		}
	}
	recursive($menu, 0, $newString);
	$newString = str_replace('<ul></ul>', '', $newString);
	echo $newString;
?>
