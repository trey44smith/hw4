<?php

namespace trey\hw4\controller\viewcontroller;
require_once 'controller.php';

use trey\hw4\controller as C;

class ViewController extends C\Controller{


  function renderView(){
    ?>
      <form action="src/views/helpers/upload.php" method="post" enctype="multipart/form-data">
          New image:
            <input type="file" name="image" accept="image/jpeg, image/gif, image/png">
            <input type="submit" value="Upload" name="submit">
          </form>
  <?php
}


  function __construct(){

  }
}
?>
