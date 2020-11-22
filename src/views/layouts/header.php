<?php

namespace trey\hw4\views\layouts\header;
require_once 'layout.php';
use trey\hw4\views\layouts as L;

class Header extends L\Layout{

  function render(){
    ?>
    <head>
        <link rel='stylesheet' href='/hw4/src/views/layouts/style.css'></link>
	      <title>Community Jigsaw</title>
        <h1>Community Jigsaw</h1>
    </head>


    <?php
  }

  function __construct(){

  }

}
?>
