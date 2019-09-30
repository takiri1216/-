<?php
$html_code = "<h1>Hello World!</h1><!--コメント--><p>ハロー！</p>";
$html_code_re = strip_tags($html_code);
echo $html_code_re;
echo "\n";

$array = array(1,2,3);
array_push($array,7,8,9);
print_r($array);

$array1 = array("color" => "red","apple",7);
$array2 = array("melon","color" => "green",13,6);
$result = array_merge($array1,$array2);
print_r($result);

$time1 = time();
echo $time1;
echo "\n";

date_default_timezone_set('Asia/Tokyo');
$time2 = mktime(0, 0, 0, 9, 30, 2019);
echo $time2;
echo "\n";

$week = ['日','月','火','水','木','金','土',];
$date = date('w');
echo $week[$date] . '曜日';