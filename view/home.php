<?php
include('../model/session.php');
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/regular.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/brands.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/solid.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&amp;display=swap"> 
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&display=swap">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../includes /css/ace.min.css">
    <link rel="stylesheet" type="text/css" href="../includes/css/ace-themes.min.css">
    <link rel="stylesheet" type="text/css" href="../includes/css/ace.css">
    <link rel="stylesheet" type="text/css" href="../includes/css/ace-themes.css"></link>
    <link rel="stylesheet" href="../includes/css/ace.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../includes/css/home.css"></link>
    <!-- nossos -->
    <link rel="stylesheet" href="../includes/card.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .navbar-brand span {
          font-family: 'Open Sans'
        }
        label {
          cursor: text;
        }
    </style>
  </head>
<body>
	<div class="body-container">
    <?php include("../includes/navbar.php"); ?>
    <div class="main-container">
      <?php include("../includes/sidebar.php"); ?>
      <div id="main_container" class="py-5 container-fluid d-flex flex-column text-center justify-content-between align-items-center">
        <h1>HOME</h1>
        <div class="block1 p-5 m-4 m-md-4">
          <h4 class="font-weight-bold">
            Bem-vindo ao nosso sistema de gerência!
          </h4>
          <h4 class="font-weight-bold">
            Proporcionamos a melhor Experiência de gerência de 
          </h4>
          <h4 class="font-weight-bold">
            estoque baseada na segurança e satisfação de nossos funcionarios.
          </h4> 
        </div>
        <div class="block2 p-5 font-weight-bold">
          <h4 class="font-weight-bold"> Para iniciar:</h4>
          <h4 class="font-weight-bold">Selecione a pagina referênte abaixo!</h4>
          <p class="pr-md-5 pt-md-5 mr-md-5" style="text-align: justify;">
            Vizualização Estado Geral do Estoque: <a href="/view/dashboard.php">DASHBOARD</a>
          </p>
          <p class="pr-md-5 mr-md-5" style="text-align: justify;">
            Adicionar Novos Produtos ao Estoque: <a href="/view/inserir_produtos.php">PRODUTOS</a>
          </p>
          <p class="pr-md-5 mr-md-5" style="text-align: justify;">
          Analisar, Exibir e Rastrear Estoque: <a href="/view/inserir_produtos.php">INVENTÁRIO</a>
          </p>
          <p class="pr-md-5 mr-md-5" style="text-align: justify;">
            Vizualização de Atualização do Estoque: <a href="/view/grafico_data.php">VIZUALIZAÇÃO</a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <script src="../controller/controller_home.js"></script>
  <script src="../controller/controller_sidebar.js"></script>
  <script src="../includes/graph.js"></script>
  <script src="../includes/bootstrap.js"></script>
  <script src="../includes/ace.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
