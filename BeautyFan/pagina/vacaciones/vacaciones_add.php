<?php
session_start();
include('../../dist/includes/dbcon.php');
	//$branch=$_SESSION['branch'];
	$id_barbero = $_POST['id_barbero'];
	$fecha = $_POST['fecha'];




	

		mysqli_query($con,"INSERT INTO vacaciones(fecha,id_barbero)
				VALUES('$fecha','$id_barbero')")or die(mysqli_error($con));

			

  echo "<script>document.location='../vacaciones/vacaciones.php?cid=$id_barbero'</script>";

?>
