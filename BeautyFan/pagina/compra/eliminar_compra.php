<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../../dist/includes/dbcon.php');


          if(isset($_REQUEST['id_compra']))
            {
              $id_compra=$_REQUEST['id_compra'];
            }
            else
            {
            $id_compra=$_POST['id_compra'];
          }



  mysqli_query($con,"delete from compra where id_compra='$id_compra'")or die(mysqli_error());

  echo "<script>document.location='../compra/compra.php'</script>";  
     // header('Location:../usuario.php');
?>