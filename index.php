<?php
include 'functions/functions.php';
include 'dados/dados.php';

//HEADER
include 'pages/header.php';

//CARREGA PAGINAS
(isset($_GET['p'])) ? $page = $_GET['p'] :  $page = 'home';


if (file_exists('pages/' . $page . '.php')) :
  include('pages/' . $page . '.php');
else :
  include('pages/home.php');
endif;

//FOOTER
include 'pages/footer.php';
