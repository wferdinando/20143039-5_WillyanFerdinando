<!-- START JUMBOTRON-->
<div class="container-fluid container-custom">
  <div class="jumbotron jumbotron-fluid jb-custom">
    <div class="container">
      <h1 class="display-4">Os Melhores Bolos Gourmet!</h1>
      <p class="lead">Feito com amor e carinho, para você e sua família!</p>
    </div>
  </div>
</div>
<!-- END JUMBOTRON-->

<section class="container">
  <div class="row">

    <div class="col-md-12">
      <div class="titulo_section_produtos">
        <h1>Bolos Gourmets</h1>
      </div>
    </div>
    <?php foreach ($produtos as $produto): ?>
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="<?php echo $produto['IMAGEM'] ;?>" alt="<?php echo $produto['IMAGEM'] ;?>" style="height: 225px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17b12d06995%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17b12d06995%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.7265625%22%20y%3D%22120.3%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
          <div class="card-body">
            <h2 class="card_titulo text-center"><?php echo $produto["NOME_PRODUTO"] ;?></h2>
            <p class="card-text text-center card-text-custom-home"><?php echo $produto["DESCRICAO"] ;?></p>
            <div class="d-flex justify-content-center align-items-center">
              <div class="btn-group">
                <a href="?p=produto<?php echo '&id='.$produto['ID'].'&nome='.$produto['NOME_PRODUTO'].'&desc='.$produto['DESCRICAO'].'&preco='.$produto['PRECO'].'&imagem='.$produto['IMAGEM'] ;?>" class="btn btn-sm btn-outline-secondary">Ver Mais</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach ;?>
  </div>
</section>