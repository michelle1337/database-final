<?php 
header("Content-type: 1.jpg"); 
$number = rand (100000 , 999999 ); 
setcookie("numberC", $number); 
$img = imagecreatefrompng('1.jpg'); 
$font = 'arial.ttf'; 
#magepsslantfont($font, 5); 
$color = imagecolorexact($img,106 ,90 ,205); 
imagettftext($img, 20, 5, 30, 38, $color, $font, $number); 
imagepng($img); 
imagedestroy($img); 
?>