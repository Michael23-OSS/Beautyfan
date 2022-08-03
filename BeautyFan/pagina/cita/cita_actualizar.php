


<?php session_start();
if(empty($_SESSION['id'])):
endif;
include('../../dist/includes/dbcon.php');

		$id_cita = $_POST['id_cita'];
	$id_medico = $_POST['id_barbero'];
	$observaciones = $_POST['observaciones'];
	$fecha = $_POST['fecha'];


	mysqli_query($con,"update cita set id_barbero='$id_barbero',observaciones='$observaciones',fecha='$fecha' where id_cita='$id_cita'")or die(mysqli_error());


echo "<script>document.location='../cita/cita.php'</script>";	

?>
