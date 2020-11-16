<?php

  $array = array(0, 1, 2, 3, 4, 5, 6, 7 ,8);
  for ($i=0; $i < 8; $i++) {
    $temp = $array[$i];
    $index = rand($i+1, 8);
    $array[$i] = $array[$index];
    $array[$index] = $temp;
  }

  $file = fopen('/Applications/MAMP/htdocs/hw4/src/resources/active_image.txt', 'w');
  fwrite($file, serialize($array));
  fclose($file);

 ?>
