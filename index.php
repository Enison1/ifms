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
      <h1>O que é um algoritmo de ordenação?</h1>
      <br>
      <p class="lead"> Os algoritmos de ordenação são um conjunto de instruções que recebem um
        array ou lista como entrada e organizam os itens em uma ordem
        específica.</p>
      <p class="lead">As ordenações mais comumente realizadas são a numérica ou a alfabética
        (também chamada de lexicográfica) e podem ser em ordem crescente (A-Z,
        0-9) ou decrescente (Z-A, 9-0).</p>
      <h2>Por que algoritmos de ordenação são importantes?</h2>
      <p class="lead">Os algoritmos de ordenação são importantes em Ciência da Computação
        porque a ordenação pode, muitas vezes, reduzir a complexidade de um
        problema. Esses algoritmos têm aplicações diretas em algoritmos de
        busca, algoritmos de banco de dados, métodos de divisão e conquista,
        algoritmos de estrutura de dados e muito mais.</p>
      <h2>Vantagens e desvantagens dos algoritmos</h2>
      <p class="lead">Ao usar algoritmos diferentes, algumas perguntas devem ser feitas. Qual
        o tamanho da coleção que está sendo ordenada? Quanta memória está
        disponível para uso? A coleção precisa crescer?</p>
      <p class="lead">As respostas a essas perguntas podem determinar qual algoritmo
        funcionará melhor para a situação. Alguns algoritmos como a ordenação
        por intercalação (<em>merge sort</em>, em inglês) podem precisar de
        muito espaço para serem executados, enquanto a ordenação por inserção
        nem sempre é a mais rápida, mas não requer muitos recursos para isso.</p>
      <p class="lead">Você deve determinar quais são os requisitos do sistema e suas
        limitações antes de decidir qual algoritmo usar.</p>
      <h2>Algoritmos de ordenação comuns</h2>
      <p class="lead">Alguns dos algoritmos de ordenação mais comuns são:</p>
      <ul>
        <li>Bubble Sort</li>
        <li>Comb Sort</li>
        <li>Count Sort</li>
        <li>Insertion Sort</li>
        <li>Merge Sort</li>
        <li>Quick Sort</li>
        <li>Radix Sort</li>
        <li>Selection Sort</li>
        <li>Shell Sort</li>
        <li>Tim Sort</li>
      </ul>
      <p class="lead">Antes de detalharmos cada um deles, contudo, vamos aprender um pouco
        mais sobre como são classificados os algoritmos de ordenação.</p>
      <h2>Classificação de um algoritmo de ordenação</h2>
      <p class="lead">Os algoritmos de ordenação podem ser categorizados com base nos
        seguintes parâmetros:</p>
      <ol>
        <li>
          <strong>Baseado no número de trocas ou inversões necessários:</strong>
          Este é o número de vezes que o algoritmo troca os elementos para
          ordenar uma entrada. A ordenação por seleção requer o número mínimo
          de trocas.
        </li>
        <li>
          <strong>Baseado no número de comparações:</strong> Este é o número
          de vezes que o algoritmo compara elementos para ordenar uma entrada.
          Usando os exemplos de algoritmos de ordenação listados acima
          requerem, pelo menos, <code>O(nlogn)</code> comparações no melhor
          caso e <code>O(n^2)</code> comparações no pior caso para a maioria
          das saídas.
        </li>
        <li>
          <strong>Baseado no uso ou não de recursão:</strong> Alguns
          algoritmos, tal como <code>Quick Sort</code> (ordenação rápida), usa
          técnicas recursivas para ordenar uma entrada. Outros algoritmos de
          ordenação, como &nbsp;<code>Selection Sort</code> (ordenação por
          seleção) ou &nbsp;<code>Insertion Sort</code> (ordenação por
          inserção), usam técnicas não recursivas. Por fim, alguns algoritmos
          de ordenação, como &nbsp;<code>Merge Sort</code> (ordenação por
          intercalação), usam tanto técnicas recursivas como não recursivas
          para ordenar uma entrada.
        </li>
        <li>
          <strong>Baseado na estabilidade:</strong> Algoritmos de ordenação
          são considerados &nbsp;<code>estáveis</code> se o algoritmo mantiver
          a ordem relativa dos elementos com chaves iguais. Em outras
          palavras, dois elementos equivalentes permanecem, após a ordenação,
          na mesma ordem em que estavam antes da ordenação.<br />Imagine, por
          exemplo, que tenhamos um array de entrada
          <code>[1, 2, 3, 2, 4]</code>. Para ajudar na diferenciação entre os
          valores que são iguais – neste caso, os <code>2</code> – usaremos
          <code>2a</code> e <code>2b</code>, tornando o array &nbsp;<code>[1, 2a, 3, 2b, 4]</code>.<br />Algoritmos de ordenação estáveis manterão a ordem de
          <code>2a</code> e <code>2b</code>. Ou seja, teremos o algoritmo
          ordenado <code>[1, 2a, 2b, 3, 4]</code>. Já os instáveis, por sua
          vez, não mantêm a ordem dos valores iguais, resultando em
          <code>[1, 2b, 2a, 3, 4]</code>. <code>Insertion sort</code> ,
          &nbsp;<code>Merge Sort</code> &nbsp;e &nbsp;<code>Bubble Sort</code>
          são estáveis, enquanto <code>Heap Sort</code> &nbsp;e
          <code>Quick Sort</code> não são.
        </li>
        <li>
          <strong>Baseado na necessidade de espaço adicional:</strong> Alguns
          algoritmos podem ordenar uma lista sem criar outra inteiramente
          nova. Chamamos um algoritmo assim de algoritmo de ordenação
          &nbsp;<code>in loco</code> e ele requer um espaço adicional
          <code>O(1)</code> constante para a ordenação. Quando os algoritmos
          não são <code>in loco</code>, &nbsp;uma outra lista é criada durante
          a ordenação.<br /><code>Insertion sort</code> &nbsp;e &nbsp;<code>Quick sort</code>
          realizam a ordenação <code>in loco</code>, já que os elementos são
          movidos em torno de um ponto fixo e não utilizam um array à parte
          durante o processo de ordenação. <br />No <code>Merge sort</code>,
          por outro lado, o tamanho da entrada deve ser alocado de antemão
          para armazenar a saída durante o processo de ordenação. Isso exige
          um espaço adicional na memória para o processo de ordenação.
        </li>
      </ol>
      <p class="lead"></p>
      <p class="lead"></p>
      <p class="lead"></p>
      <p class="lead"></p>
    </div>
  </main>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>