<?php

  namespace trey\hw4\views\helpers\upload;

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
    $didupload = move_uploaded_file($tmpname, $path);
    if($didupload){
      $message.= "File uploaded\n";
    }
    else{
      $message.= "File not uploaded\n";
    }
  }

  echo $message;
  echo '<a href="../../../" >Continue </a>';

?>
