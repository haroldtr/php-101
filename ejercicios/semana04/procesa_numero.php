<?php
include_once("../php/header.php");
?>
<div class="container-fluid">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="./condicionalesv1.php">Condicionales V1</a></li>
      <li class="breadcrumb-item active" aria-current="page">Operadores Aritmeticos</li>
    </ol>
  </nav>
  <hr>
  <h1>Condicionales</h1>
  <hr>
  <h2>Resultado de verificar si un número es positivo, negativo o cero</h2>
  <?php
  if (isset($_POST['numero'])) {
    $numero = $_POST['numero'];
    if ($numero > 0) {
      echo "<p class='alert alert-success'>El numero $numero es positivo</p>";
    } elseif ($numero < 0) {
      echo "<p class='alert alert-success'> El numero $numero es negativo</p>";
    } else {
      echo "<p class='alert alert-success'> El numero digitado es cero</p>";
    }
  } else {
    echo "Variable no definida";
  }
  ?>
  <?php
  include_once("../php/footer.php");
  ?>