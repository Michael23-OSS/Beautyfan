
<?php
include('../layout/dbcon.php');
if (!isset($_POST["id_procedimiento_pago"])) {
    return;
}





$cantidad = $_POST["cantidad"];
$id_procedimiento_pago = $_POST["id_procedimiento_pago"];
$id_cliente = $_POST["id_cliente"];


$sentencia = $base_de_datos->prepare("SELECT * FROM procedimiento_pago  WHERE id_procedimiento_pago = ? LIMIT 1;");
$sentencia->execute([$id_procedimiento_pago]);
$cosmetico = $sentencia->fetch(PDO::FETCH_OBJ);
# Si no existe, salimos y lo indicamos
if (!$cosmetico) {
      echo "<script>document.location='../pos_cosmetico/pos_cosmetico.php?cid=$id_cliente'</script>";
//    header("Location: ../pos.php?status=4");
    exit;
}
# Si no hay existencia...

session_start();
# Buscar producto dentro del cartito
$indice = false;
for ($i = 0; $i < count($_SESSION["carrito"]); $i++) {
    if ($_SESSION["carrito"][$i]->id_procedimiento_pago === $id_procedimiento_pago) {
        $indice = $i;
        break;
    }
}
# Si no existe, lo agregamos como nuevo
if ($indice === false) {
    $cosmetico->cantidad = $cantidad;
    $cosmetico->total = $cosmetico->precio_venta*$cantidad;
       $cosmetico->nombre = $cosmetico->nombre;
              $cosmetico->id_procedimiento_pago = $id_procedimiento_pago;
//        $producto->impu = $producto->precio_venta*$cantidad;
    array_push($_SESSION["carrito"], $cosmetico);
} else {
    # Si ya existe, se agrega la cantidad
    # Pero espera, tal vez ya no haya
    $cantidadExistente = $_SESSION["carrito"][$indice]->cantidad;
    # si al sumarle uno supera lo que existe, no se agrega

    $_SESSION["carrito"][$indice]->cantidad++;
        $_SESSION["carrito"][$indice]->total = $_SESSION["carrito"][$indice]->cantidad * $_SESSION["carrito"][$indice]->precio_venta;


}
  echo "<script>document.location='../pos_cosmetico/pos_cosmetico.php?cid=$id_cliente'</script>";
//header("Location: ../pos.php");
