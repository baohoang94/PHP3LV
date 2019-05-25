<?php 
function myError($error_level, $error_message, $error_file, $error_line, $error_context) {
print_r($error_level);
$result[] = '<b>Error number</b>: ' . $error_level;
$result[] = '<b>Message</b>: ' . $error_message;
$result = implode('<br>', $result);
die($result);
}
set_error_handler('myError');
echo ($test);
?>
