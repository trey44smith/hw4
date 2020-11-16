<?php

namespace trey\hw4\views\elements\displayjpgview;
require_once 'element.php';

use trey\hw4\views\element as E;

class DisplayJpgView extends E\Element{

  function render(){
    ?>
    <img src="<?php echo '/hw4/src/resources/active_image.jpg'?>" />
    <?php
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
