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
      <h1>Radix Sort</h1>
      <br>
      <p class="lead"> O limite inferior para o algoritmo de classifica????o baseado em
        compara????o (Merge Sort, Heap Sort, Quick-Sort .. etc) ?? ??(nLogn), ou
        seja, eles n??o podem fazer melhor que nLogn . A classifica????o por
        contagem ?? um algoritmo de classifica????o de tempo linear que classifica
        em tempo O(n+k) quando os elementos est??o no intervalo de 1 a k. E se os
        elementos estiverem no intervalo de 1 a n 2 ? N??o podemos usar a
        classifica????o por contagem porque a classifica????o por contagem levar??
        O(n 2 ), o que ?? pior do que os algoritmos de classifica????o baseados em
        compara????o. Podemos classificar tal matriz em tempo linear? Radix Sort ??
        a resposta. A ideia do Radix Sort ?? classificar d??gito por d??gito,
        come??ando do d??gito menos significativo para o d??gito mais
        significativo. Radix sort usa classifica????o por contagem como uma
        sub-rotina para classificar.</p>

      <h4><strong>Complexidade</strong></h4>

      <p class="lead">Sejam d d??gitos nos inteiros de entrada. Radix Sort leva tempo O(d*(n+b)) onde b ?? a base para representar n??meros, por exemplo, para o sistema decimal, b ?? 10. Qual ?? o valor de d? Se k ?? o valor m??ximo poss??vel, ent??o d seria O(log b (k)). Portanto, a complexidade de tempo geral ?? <strong>O((n+b) * log b (k))</strong></p>

      <br>
      <p class="lead">Grafico dos dados coletados:</p>
      <img src="imagens\radix\grafico.png" />
      <br>
      <p class="lead">Tabela dos dados coletados</p>
      <img src="imagens\radix\tabela.png" />
      <br>
      <p class="lead">C??digo usado:</p>
      <img src="imagens\radix\code1.png" />
      <br>
      <img src="imagens\radix\code2.png" />

    </div>
  </main>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>