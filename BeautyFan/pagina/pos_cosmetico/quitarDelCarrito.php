<?php
if(!isset($_GET["indice"])) return;
$indice = $_GET["indice"];
$cid = $_GET["cid"];
session_start();
array_splice($_SESSION["carrito"], $indice, 1);

  echo "<script>document.location='../pos_cosmetico/pos_cosmetico.php?cid=$cid'</script>";
  
?>