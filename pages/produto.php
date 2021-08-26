<div class="container" style="padding: 40px 0;">
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center" style="padding-bottom: 40px;">
        <?php echo getDados()['NOME_PROD'] ?>
      </h1>
    </div>
    <div class="col-md-4">
      <img class="img-fluid" src="<?php echo getDados()['IMAGEM'] ?>" alt="" style="border: 1px solid #000;">
    </div>
    <div class="col-md-8" style="margin-top: 40px;">
      <p>Descrição:</p>
      <p><?php echo getDados()['DESCRICAO'] ?></p>
      <p>
        <?php echo 'R$' . ' ' . number_format(getDados()['PRECO'], 2, ",", ".") ?>
      </p>
      <button class="btn btn-lg btn-success"">FAÇA SUA RESERVA</button>
    </div>
  </div>
</div>