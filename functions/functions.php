<?php

function setTitle()
{

  if (isset($_GET['nome'])) {
    (isset($_GET['nome'])) ? $page = $_GET['nome'] : $page = 'home';
    switch ($page) {
      case $_GET['nome']:
        $title = mb_strtoupper($_GET['nome']);
        break;
      default:
        $title = 'Doceria - Home';
    }
  } else {
    (isset($_GET['p'])) ? $page = $_GET['p'] : $page = 'home';
    switch ($page) {
      case $_GET['p']:
        $title = mb_strtoupper($_GET['p']);
        break;
      default:
        $title = 'Doceria - Home';
    }
  }
  return $title;
}

function getDados()
{
  $nome_produto = $_GET['nome'];
  $descricao = $_GET['desc'];
  $preco = $_GET['preco'];
  $imagem = $_GET['imagem'];

  return array("NOME_PROD" => $nome_produto, "DESCRICAO" => $descricao, "PRECO" => $preco, "IMAGEM" => $imagem);
}
