<?php
session_start();
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
	$id_barbero = $_POST['id_barbero'];
	$dia_laborable = $_POST['dia_laborable'];

	$hora_inicio = $_POST['hora_inicio'];
	$hora_fin = $_POST['hora_fin'];
$cita_duracion = $_POST['cita_duracion'];



	

		mysqli_query($con,"INSERT INTO horario_barbero(dia_laborable,hora_inicio,hora_fin,cita_duracion,id_barbero)
				VALUES('$dia_laborable','$hora_inicio','$hora_fin','$cita_duracion','$id_barbero')")or die(mysqli_error($con));

			

  echo "<script>document.location='../programar/horario_barbero.php'</script>";

?>
