<?php

namespace trey\hw4\views\elements\displayjpgview;
require_once 'element.php';

use trey\hw4\views\element as E;

class DisplayJpgView extends E\Element{

  function render(){
    
      echo "<img src='/../../models/resources/active_image.jpg' alt='jigsaw image'>";

  }


  function __construct(){

  }
}

/*
$display = new DisplayJpgView();
$test = $display;
$test -> render();
*/

?>
