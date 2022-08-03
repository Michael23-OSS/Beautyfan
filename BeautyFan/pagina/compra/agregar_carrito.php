
<?php
include('../layout/dbcon.php');






$cosmetico = $_POST["cosmetico"];
$cantidad = $_POST["cantidad"];
$frecuencia = $_POST["frecuencia"];
$dias = $_POST["dias"];
$instruccion = $_POST["instruccion"];



$sentencia = $base_de_datos->prepare("SELECT * FROM empresa  WHERE id_empresa = ? LIMIT 1;");
$sentencia->execute([1]);
$compra = $sentencia->fetch(PDO::FETCH_OBJ);


session_start();
# Buscar producto dentro del cartito
$indice = false;

# Si no existe, lo agregamos como nuevo
if ($indice === false) {
    $compra->cosmetico = $cosmetico;
   $compra->cantidad = $cantidad;
     $compra->frecuencia = $frecuencia;
       $compra->dias = $dias;
     $compra->instruccion = $instruccion;
//        $producto->impu = $producto->precio_venta*$cantidad;
    array_push($_SESSION["carrito_pres"], $compra);
} 
  echo "<script>document.location='../compra/compra_agregar.php'</script>";
//header("Location: ../pos.php");
