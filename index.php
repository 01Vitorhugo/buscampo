<?php
include('menu.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/scrollreveal"></script>
  <link rel="stylesheet" href="css/index.css">
  <title>BusCampo</title>
</head>

<body>

  <div class="img-gif">
    <img src="img/gif_futebol.gif" alt="" width="100%" height="100%">
  </div>

  <div class="frase-1">
    <h1><i> ALGUMA COISA ESCRITA</i></h1>
  </div>
  <div class="topicos-index">
    <div class="topico-1" id="topicos">
      <img src="img/cartoon-2.png" alt="">
    </div>
    <div class="topico-2" id="topicos">
      <div class="icon-campo">
        <img src="img/icon-campo.png" alt="">
      </div>
      <h2><i>Os melhores lugares estão aqui</i></h2>
      <p>Encontre a quadra que se encaixa em suas preferências.</p>

    </div>
    <div class="topico-3" id="topicos">
      <div class="icon-lupa">
        <img src="img/icon-lupa.png" alt="">
      </div>
      <h2><i>Os melhores lugares estão aqui</i></h2>
      <p>Encontre a quadra que se encaixa em suas preferências.</p>
    </div>
  </div>

  <div class="conteudo">
    <div class="conteudo-1">
      <h1>Encontre o melhor lugar</h1>
      <h1 class="txt-con">em apenas alguns cliques!</h1>
      <p>
        <a href="">Modalidades</a>
      </p>
    </div>
    <div class="conteudo-2">
      <img src="img/cartoon-4.png" alt="" width="50%" height="100%">
    </div>
  </div>

  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="1500">
      <img src="img/basquete.png" class="d-block w-100" alt="" height="900px">
    </div>
    <div class="carousel-item" data-bs-interval="1500">
      <img src="img/basqueter.jpg" class="d-block w-100" alt="" height="900px">
    </div>
    <div class="carousel-item" data-bs-interval="1500">
      <img src="img/campo.jpg" class="d-block w-100" alt="" height="900px">
    </div>
    <div class="carousel-item" data-bs-interval="1500">
      <img src="img/quada.jpg" class="d-block w-100" alt="" height="900px">
    </div>
    <div class="carousel-item" data-bs-interval="1500">
      <img src="img/quadra2.jpg" class="d-block w-100" alt="" height="900px">
    </div>
    <div class="carousel-item" data-bs-interval="1500">
      <img src="img/volei-futvolei.jpg" class="d-block w-100" alt="" height="900px">
    </div>
    <div class="carousel-item" data-bs-interval="1500">
      <img src="img/volei-futvolei2.jpg" class="d-block w-100" alt="" height="900px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>













  <footer>
    <div class="img-footer">
      <img src="img/logoofc.png" alt="" height="100%" width="100%">
    </div>
    <p class="pag-footer">Copyright © 2023 BusCampo</p>
    <div class="footer-topicos">
      <p><a href="#">Política de privacidade</a></p>
      <p><a href="#">Termos de uso</a></p>
      <p><a href="#">Contato</a></p>
    </div>
    <div class="redes-sociais">
      <div class="instagram" id="redes">
        <a href=""><img src="img/instagram.png" alt=""></a>
      </div>
      <div class="facebook" id="redes">
        <a href=""><img src="img/facebook.png" alt=""></a>
      </div>
      <div class="youtube" id="redes">
        <a href=""><img src="img/youtube.png" alt=""></a>
      </div>
    </div>
  </footer>



</body>

<script src="script.js"></script>

</html>