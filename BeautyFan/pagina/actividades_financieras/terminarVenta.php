<?php
if(!isset($_POST["total"])) exit;
include('../layout/dbcon.php');

session_start();

$id_sesion = $_POST["id_sesion"];
$total = $_POST["total"];
$id_cliente = $_POST["cliente"];
$id_barbero = $_POST["id_barbero"];
$monto_pagado = $_POST["total"];


     $fecha = date('Y-m-d');

$tipo_venta = $_POST["tipo_venta"];

//$monto_pagado = $_POST["monto_pagado"];

$sub_total=0;


//$vuelto=$total




$sentencia_pedido = $base_de_datos->prepare("INSERT INTO pedidos(fecha, id_sesion,id_cliente,tipo_venta,monto_pagado,total,id_barbero) VALUES (?, ?, ?,?,?,?,?);");
$sentencia_pedido->execute([$fecha, $id_sesion,$id_cliente,$tipo_venta,$monto_pagado,$total,0]);

$sentencia = $base_de_datos->prepare("SELECT id_pedido FROM pedidos ORDER BY id_pedido DESC LIMIT 1;");
$sentencia->execute();
$resultado = $sentencia->fetch(PDO::FETCH_OBJ);

$id_pedido = $resultado === false ? 1 : $resultado->id_pedido;



$sentencia = $base_de_datos->prepare("INSERT INTO detalles_pedido(id_pedido, id_producto, cantidad, id_cliente) VALUES (?, ?, ?, ?);");


foreach ($_SESSION["carrito_actividad"] as $producto1) {
//	$total += $producto->total;
	$sentencia->execute([$id_pedido, $producto1->id_procedimiento_pago, $producto1->cantidad, $id_cliente]);

			/*$update=mysqli_query($con,"update detalle_ingreso set stock_actual=stock_actual-'$producto->cantidad' where estado='abierto' and  	iddetalle_ingreso='$$producto->iddetalle_ingreso' ");
*/
}
//$base_de_datos->commit();
unset($_SESSION["carrito_actividad"]);
$_SESSION["carrito_actividad"] = [];


//			$update=mysqli_query($con,"update caja set monto=monto+'$sub_total' where estado='abierto' and idsucursal='$idsucursal' ");
  echo "<script>document.location='../actividades_financieras/pago_agregar.php'</script>";




?>