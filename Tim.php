<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.104.2">
  <title>IFMS SORT</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbar-fixed/">





  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }


    /* Show it is fixed to the top */
    body {
      min-height: 75rem;
      padding-top: 4.5rem;
    }
  </style>


</head>

<body>
  <?php
  include_once "menu.php";
  ?>

  <main class="container">
    <div class="bg-light p-5 rounded">
      <h1>Tim Sort</h1>
      <br>
      <p class="lead"> TimSort é um algoritmo de classificação baseado em Insertion Sort e
        Merge Sort. Primeiro, classifique as partes pequenas usando o
        Insertion Sort e, em seguida, mescle as partes usando uma mesclagem de
        classificação por mesclagem. Dividimos o Array em blocos conhecidos como
        Run . Classificamos essas execuções usando a classificação por inserção
        uma a uma e, em seguida, mesclamos essas execuções usando a função de
        combinação usada na classificação por mesclagem. Se o tamanho do Array
        for menor que run, o Array será classificado apenas usando o Insertion
        Sort. O tamanho da execução pode variar de 32 a 64, dependendo do
        tamanho da matriz. Observe que a função de mesclagem funciona bem quando
        os subarrays de tamanho são potências de 2. A ideia é baseada no fato de
        que a classificação por inserção funciona bem para arrays pequenos.</p>

      <h4><strong>Complexidade</strong></h4>
      <p class="lead">Melhor caso: <strong>O(n)</strong></p>
      <p class="lead">Caso médio: <strong>O(n*log(n))</strong></p>
      <p class="lead">Pior caso: <strong>O(n*log(n))</strong></p>

      <br>

      <p class="lead">Grafico dos dados coletados:</p>
      <img src="imagens\tim\grafico.png" />
      <br>
      <p class="lead">Tabela dos dados coletados</p>
      <img src="imagens\tim\tabela.png" />
      <br>
      <p class="lead">Código usado:</p>
      <img src="imagens\tim\code1.png" />
        <br>
        <img src="imagens\tim\code2.png" />
        <br>
        <img src="imagens\tim\code3.png" />
        <br>
        <img src="imagens\tim\code4.png" />
    </div>
  </main>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>