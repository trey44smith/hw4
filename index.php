<?php
  require 'vendor/autoload.php';
  require_once dirname(__FILE__). '/src/views/layouts/header.php';
  require_once dirname(__FILE__). '/src/controllers/viewcontroller.php';
  require_once dirname(__FILE__). '/src/views/elements/displayjpgview.php';

  use trey\hw4\views\layouts\header as H;
  use trey\hw4\controller\viewcontroller as VC;
  use trey\hw4\views\elements\displayjpgview as DJV;


    $header  = new H\Header();
    $header->render();
    $viewController = new VC\viewController();
    $viewController->renderView();
    if(file_exists('src/resources/active_image.jpg')){
      $jpgView = new DJV\DisplayJpgView();
      $jpgView -> render();
    }

?>
