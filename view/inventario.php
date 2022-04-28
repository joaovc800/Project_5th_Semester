<?php
include('../model/session.php');
?>
<!doctype html>
<html lang="pt-BR">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <title>Landing Page 1 - Ace Admin</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/regular.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/brands.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/solid.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&amp;display=swap"> 
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&display=swap">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../includes/css/ace.min.css">
    <link rel="stylesheet" type="text/css" href="../includes/css/ace-themes.min.css">
    <link rel="stylesheet" type="text/css" href="../includes/css/ace.css">
    <link rel="stylesheet" type="text/css" href="../includes/css/ace-themes.css"></link>
    <link rel="stylesheet" href="../includes/css/ace.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <style>
        .navbar-brand span {
          font-family: 'Open Sans'
        }
    </style>
  </head>

<body>
	<div class="body-container">
        <?php include("../includes/navbar.php"); ?>
      	<div class="main-container">
			  <?php include("../includes/sidebar.php"); ?>
        <section id="tabela" style="position: absolute; right:20%; top:40%; padding:5%;">
<table class="table-light table-striped table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">valor 3</th>
      <th scope="col">Valor 4</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php ?></th>
      <td><?php ?></td>
      <td><?php ?></td>
      <td><?php ?></td>
    </tr>
    <tr>
      <th scope="row"><?php ?></th>
      <td><?php ?></td>
      <td><?php ?></td>
      <td><?php ?></td>
    </tr>
    <tr>
      <th scope="row"><?php ?></th>
      <td><?php ?></td>
      <td><?php ?></td>
      <td><?php ?></td>
    </tr>
  </tbody>
</table>
</section>
      	</div>
    </div>

  <script src="../controller/controller_home.js"></script>
  <script src="../controller/controller_sidebar.js"></script>
  <!-- <script src="../includes/js/sidebar.js"></script> -->
  <script src="../includes/bootstrap.js"></script>
  <script src="../includes/ace.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
