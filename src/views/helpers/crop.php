<?php

namespace trey\hw4\views\helpers\crop;

$filename = 'active_image.jpg';
$newfilename = '/Applications/MAMP/htdocs/hw4/src/resources/active_image.jpg';

$imageSize = getimagesize($filename);
$currentWidth = $imageSize[0];
$currentHeight = $imageSize[1];



$newfilename = '/Applications/MAMP/htdocs/hw4/src/resources/active_image.jpg';
$currentImage = imagecreatefromjpeg($filename);
$currentImage = imagescale($currentImage, 360, 360);
imagejpeg($currentImage,$newfilename,100);


echo "Image cropped succesfully";

 ?>
