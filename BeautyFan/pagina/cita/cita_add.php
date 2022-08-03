<?php
session_start();
include('../../dist/includes/dbcon.php');
$id_usuario=$_SESSION['id'];



          $id_barbero = $_POST['id_barbero'];

$id_beneficiario = $_POST['id_beneficiario'];

$observaciones = $_POST['observaciones'];
$fecha = $_POST['fecha'];
$horario = $_POST['horario'];

$estado_cita = "reservado";
//$caja=0;


$id_usuario=$_SESSION['id'];
//		$update=mysqli_query($con,"update usuario set caja=caja+'$monto' where id='$id_usuario' ");

		mysqli_query($con,"INSERT INTO cita(id_beneficiario,id_barbero,fecha,estado_cita,observaciones,horario)
				VALUES('$id_beneficiario','$id_barbero','$fecha','$estado_cita','$observaciones','$horario')")or die(mysqli_error($con));

			

	echo "<script>document.location='../cita/cita.php'</script>";	

?>
