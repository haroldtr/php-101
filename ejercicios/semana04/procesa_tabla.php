<?php
include_once("../php/header.php");
?>
<div class="container-fluid">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="./ciclosv1.php">Ciclos V1</a></li>
      <li class="breadcrumb-item active" aria-current="page">Tabla Dinamica</li>
    </ol>
  </nav>
  <hr>
  <h1>Ciclos</h1>
  <hr>
  <h2>Resultado</h2>
  <?php
  if (isset($_POST['filas'])) {
    $filas = $_POST['filas'];
    echo "<table class= 'table table-striped'>";
    echo "<thead>";
    echo "<th>#</th>";
    echo "<th>Contenido</th>";
    echo "</thead>";
    echo "<tbody>";
    for ($i = 1; $i < $filas + 1; $i++) {
      echo "<tr>";
      echo "<td>$i</td>";
      echo "<td>2 X $i = " . 2 * $i . " </td>";
      echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
  } else {
    echo "Variable no definida";
  }
  ?>
  <?php
  include_once("../php/footer.php");
  ?>