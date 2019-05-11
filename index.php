<?php 
include("app/config/config.php");
include("app/modules/api_connect.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Consumo de API</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Consumindo API de clima e tempo</h1>
  <?php
$climaTempo = new climaTempoSP('promissao');
$resultado = $climaTempo->requestClimaTempoSP();
   ?> 
</div>

<div class="container">
<div class="row">
 
  <div class="col text-center">
    
    <h2><?php echo $resultado['cidade'] ?>
    <?php echo $resultado['diaSemana'] ?>
      <?php echo $resultado['mesAno'] ?>
    </h2>
    <h2>Horário: <?php echo $resultado['horario'] ?></h2>
    <h1 class="center">Temperatura: <?php echo $resultado['temperatura'] ?>º</h1>
    <h2><?php echo $resultado['temp_descricao'] ?></h2>

  </div>
  </div>
</body>
</html>
