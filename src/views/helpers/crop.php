<?php

namespace trey\hw4\views\helpers\crop;

$filename = 'active_image.jpg';
$newfilename = 'new.jpg';

$imageSize = getimagesize($filename);
$currentWidth = $imageSize[0];
$currentHeight = $imageSize[1];



$canvas =imagecreatetruecolor(360, 360);
$currentImage = imagecreatefromjpeg($filename);
imagecopy($currentImage, $canvas,0,0,0,0,$currentWidth,$currrentHeight);
imagejpeg($canvas,$newfilename,100);

echo "Image cropped succesfully";

 ?>
