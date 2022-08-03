<?php
if(!isset($_GET["indice"])) return;
$indice = $_GET["indice"];

session_start();
array_splice($_SESSION["carrito_estante"], $indice, 1);

  echo "<script>document.location='../estante/pago_agregar.php?status=3'</script>";
  
?>