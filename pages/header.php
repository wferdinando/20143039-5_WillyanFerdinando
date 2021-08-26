<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Willyan Ferdinando - RA 20143035-9">

  <title>Doceria - <?php echo setTitle() ;?></title>


  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="css/offcanvas.css" rel="stylesheet">

</head>

<body class="bg-light">

  <nav class="navbar navbar-expand-lg fixed-top navbar-light" style="background-color: #FFF;" aria-label="Main navigation">
    <div class="container">
      <a class="navbar-brand" href="<?php echo '?p=home' ?>">
        <img src="images/logoDoceria.png" alt="" width="120">
      </a>
      <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo '?p=home' ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo '?p=quem-somos' ?>">Quem Somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo '?p=contato' ?>">Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo '?p=onde-estamos' ?>">Onde Estamos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="mt-1">