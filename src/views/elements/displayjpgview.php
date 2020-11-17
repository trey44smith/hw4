<?php

namespace trey\hw4\views\elements\displayjpgview;
require_once 'element.php';

use trey\hw4\views\element as E;

class DisplayJpgView extends E\Element{

  function render(){
    ?>

    <div>
      <div id="box0"></div>
      <div id="box1" onclick="borderChange();"></div>
      <div id="box2" ></div>
      <div id="box3"></div>
      <div id="box4"></div>
      <div id="box5"></div>
      <div id="box6"></div>
      <div id="box7"></div>
      <div id="box8"></div>
    </div>

      <script> var permutation = <?php print json_encode(unserialize(file_get_contents('/Applications/MAMP/htdocs/hw4/src/resources/active_image.txt')));?>;

              function borderChange(){
                document.getElementById("box1").style.border = "3px solid red";

              }
      </script>
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
