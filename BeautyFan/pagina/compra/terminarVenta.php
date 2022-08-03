<?php

include('../layout/dbcon.php');

session_start();

$id_sesion = $_POST["id_sesion"];

$id_cliente = $_POST["cliente"];
$id_barbero = $_POST["id_barbero"];
$historia = $_POST["historia"];


     $fecha = date('Y-m-d');


//$monto_pagado = $_POST["monto_pagado"];




//$vuelto=$total




$sentencia_pedido = $base_de_datos->prepare("INSERT INTO compra(id_cliente, id_barbero,historia,id_sesion,fecha) VALUES (?, ?, ?,?,?);");
$sentencia_pedido->execute([$id_cliente, $id_barbero,$historia,$id_sesion,$fecha]);

$sentencia = $base_de_datos->prepare("SELECT id_compra FROM compra ORDER BY id_compra DESC LIMIT 1;");
$sentencia->execute();
$resultado = $sentencia->fetch(PDO::FETCH_OBJ);

$id_compra = $resultado === false ? 1 : $resultado->id_compra;



$sentencia = $base_de_datos->prepare("INSERT INTO detalle_compra(cosmetico, cantidad, frecuencia, dias,instruccion,id_compra) VALUES (?, ?, ?, ?, ?, ?);");


foreach ($_SESSION["carrito_pres"] as $compra) {
//	$total += $producto->total;
	$sentencia->execute([$compra->cosmetico, $compra->cantidad, $compra->frecuencia, $compra->dias, $compra->instruccion,$id_compra]);

			/*$update=mysqli_query($con,"update detalle_ingreso set stock_actual=stock_actual-'$producto->cantidad' where estado='abierto' and  	iddetalle_ingreso='$$producto->iddetalle_ingreso' ");
*/
}
//$base_de_datos->commit();
unset($_SESSION["carrito_pres"]);
$_SESSION["carrito_pres"] = [];


//			$update=mysqli_query($con,"update caja set monto=monto+'$sub_total' where estado='abierto' and idsucursal='$idsucursal' ");
  echo "<script>document.location='../compra/compra_agregar.php'</script>";




?>