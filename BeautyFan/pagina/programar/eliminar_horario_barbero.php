<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../../dist/includes/dbcon.php');

       if(isset($_REQUEST['id_horario_barbero']))
            {
              $id_horario_barbero=$_REQUEST['id_horario_barbero'];
            }
            else
            {
            $id_horario_barbero=$_POST['id_horario_barbero'];
          }




   
  mysqli_query($con,"delete from horario_barbero where id_horario_barbero='$id_horario_barbero'")or die(mysqli_error());



  echo "<script>document.location='../programar/horario_barbero.php'</script>";
     // header('Location:../usuario.php');
?>