<?php

namespace trey\hw4\views\elements\displayjpgview;
require_once 'element.php';

use trey\hw4\views\element as E;

class DisplayJpgView extends E\Element{

  function render(){
    ?>
    <body>
      <div>
        <div id="box0" class= "box" onclick="borderChange(0);"></div>
        <div id="box1" class= "box" onclick="borderChange(1);"></div>
        <div id="box2" class= "box" onclick="borderChange(2);"></div>
        <div id="box3" class= "box" onclick="borderChange(3);"></div>
        <div id="box4" class= "box" onclick="borderChange(4);"></div>
        <div id="box5" class= "box" onclick="borderChange(5);"></div>
        <div id="box6" class= "box" onclick="borderChange(6);"></div>
        <div id="box7" class= "box" onclick="borderChange(7);"></div>
        <div id="box8" class= "box" onclick="borderChange(8);"></div>
      </div>

      <script>
              function borderChange(box_num) {
                var box = "box" + box_num;
                if (first_box == -1) {
                  document.getElementById(box).className = "box selected";
                  first_box = box_num;
                }
                else if (first_box == box_num) {
                document.getElementById(box).className = "box";
                first_box = -1;
                }
                else {
                  var tmp = permutation[box_num];
                  permutation[box_num] = permutation[first_box];
                  permutation[first_box] = tmp;
                  scramble(permutation);
                  box = "box" + first_box;
                  document.getElementById(box).className = "box";
                  first_box = -1;
                  if(isSolved() == true){
                    setTimeout(function() {
                      alert("Congrats! Jigsaw solved!");
                    },1)
                  }
                }
              }

              function scramble(permutation){
                for(i=0; i < 9; i++){
                  var boxnumber = document.getElementById("box"+i);
                  var x  =  Math.round(permutation[i] % 3) * -120;
                  var y  =  Math.floor(permutation[i] / 3) * -120;
                  boxnumber.style.backgroundPosition = '' + x + 'px  ' + y + 'px';
                  }
                }

              function isSolved(){
                var solved = '';
                if( document.getElementById("box0").style.backgroundPosition == '0px 0px' &&
                    document.getElementById("box1").style.backgroundPosition == '-120px 0px' &&
                    document.getElementById("box2").style.backgroundPosition == '-240px 0px' &&
                    document.getElementById("box3").style.backgroundPosition == '0px -120px' &&
                    document.getElementById("box4").style.backgroundPosition == '-120px -120px' &&
                    document.getElementById("box5").style.backgroundPosition == '-240px -120px' &&
                    document.getElementById("box6").style.backgroundPosition == '0px -240px' &&
                    document.getElementById("box7").style.backgroundPosition == '-120px -240px' &&
                    document.getElementById("box8").style.backgroundPosition == '-240px -240px'){
                    return true;
                    }
                else{
                  solved = 'Jigsaw not solved!';
                  return false;
                }
              }


              var permutation = <?php print json_encode(unserialize(file_get_contents('/Applications/MAMP/htdocs/hw4/src/resources/active_image.txt')));?>;
              scramble(permutation);
              isSolved();
              var first_box = -1;


      </script>
    </body>
    <?php
  }
  function __construct(){

  }
}

?>
