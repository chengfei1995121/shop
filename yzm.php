<?php
session_start();
header("Content-type: image/png");
$im = imagecreate(50, 25);
$str=rand(0,9).rand(0,9).rand(0,9).rand(0,9);
$_SESSION['img']=$str;
imagecolorallocate($im, 240, 150, 255);
$t_color1=imagecolorallocate($im, 0,0,0);
imagestring($im, 5, 8, 5,  $str, $t_color1);
imagepng($im);
imagedestroy($im);
?>