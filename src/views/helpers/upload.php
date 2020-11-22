<?php

  namespace trey\hw4\views\helpers\upload;




  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");

  require_once(dirname(__FILE__).'/../../../logger.php');

  $img = $_FILES['image'];
  $size = $img['size'];
  $name = $img['name'];



  $tmpname = $img['tmp_name'];
  $extn = strtolower(end(explode('.', $name)));
  $path = '../../resources/active_image.jpg';
  $error = false;
  $message = "";

  if (in_array($extn, ["jpg", "jpeg", "png", "gif"])){
    $message.="File extension allowed\n";
  }
  else{
    $message.="File extension not allowed\n";
    $error = true;
  }

  if ($size < 2000000){
    $message.="File size allowed\n";
  }
  else{
    $message.="File size not allowed\n";
    $error = true;
  }

  if (!$error){
    $newfilename = '/Applications/MAMP/htdocs/hw4/src/resources/active_image.jpg';
    switch($extn){
      case "jpg":
      case "jpeg":
        $currentImage = imagecreatefromjpeg($tmpname);
        break;
      case "png":
        $currentImage = imagecreatefrompng($tmpname);
        break;
      case "gif":
        $currentImage = imagecreatefromgif($tmpname);
        break;
    }

    $currentImage = imagescale($currentImage, 360, 360);
    imagejpeg($currentImage,$newfilename,100);
    $message.= "File uploaded and scaled\n";

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
  }

  echo $message;
  echo '<a href="../../../" >Continue </a>';

?>
