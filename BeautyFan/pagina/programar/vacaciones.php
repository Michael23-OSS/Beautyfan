
<?php include '../layout/header.php';


//$branch_id = $_GET['id'];
?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../layout/dist/css/skins/_all-skins.min.css">
  <body class="nav-md">
    <?php 

   // if ($alumnos=="si") {
      # code...
    
?>
    <div class="container body">
      <div class="main_container">
        <?php include '../layout/main_sidebar.php';?>

        <!-- top navigation -->
       <?php include '../layout/top_nav.php';?>      <!-- /top navigation -->
       <style>
label{

color: black;
}
li {
  color: white;
}
ul {
  color: white;
}
#buscar{
  text-align: right;
}
       </style>
  <?php



?>
        <!-- page content -->
        <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->
 </div>
                    <?php
                    $id_usuario=$_SESSION['id'];
                            $fecha = date('Y-m-d');
                

                //  if ($guardar=="si") {
                    
                      ?>


 <button type="button" class="btn btn-primary btn-lg btn-print" data-toggle="modal" data-target="#miModal">
  AGREGAR
</button>
     <?php
                 //     }
                      ?>
<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
                        <div class="box-body">
                  <!-- Date range -->
                  <form method="post" action="vacaciones_add.php" enctype="multipart/form-data" class="form-horizontal">
         

               <div class="col-md-12 btn-print">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Medico</label>
                        <div class="input-group col-sm-8">
       <select class="form-control select2" name="id_barbero" required>
                            
                            <?php

              $queryc=mysqli_query($con,"select * from usuario where tipo='barbero'  ")or die(mysqli_error());
                while($rowc=mysqli_fetch_array($queryc)){
                ?>
                            <option value="<?php echo $rowc['id'];?>"><?php echo $rowc['nombre'];?></option>
                            <?php }?>
                          </select>
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                    </div>
   
                  



   <div class="col-md-12 btn-print">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Fecha</label>
                        <div class="input-group col-sm-8">
                          <input type="date" class="form-control pull-right" id="fecha" name="fecha" required >
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                    </div>



   

                    <div class="col-md-12">
                       <div class="col-md-12">
                        <button class="btn btn-lg btn-primary btn-print" id="daterange-btn"  name="">Agregar</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
                         </div>

                    </div>

          </form>

          </div>
      </div>
   
    </div>
  </div>
</div>
 <!--end of modal-->




     <?php
                 //     }
                      ?>










<br>

 <a class = "btn btn-success btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Impresión</a>

<br>
<form class = "btn btn-white btn-print">
                      Busqueda: <input id="txtBusqueda" type="text" onkeyup="Buscar();" />

</form>


                  <div class="box-header btn btn-primary" >
                  <h3 class="box-title"> LISTA VACACIONES</h3>
                </div><!-- /.box-header -->
                <div class="box-body ">
                
                  <table id="example22" class="table table-bordered table-striped">
                    <thead>
                      <tr class=" btn-success">


                        
                          

                          <th> Fecha</th>
       
                       <th class="btn-print"> Accion </th>

                      </tr>
                    </thead>
                    <tbody>
<?php

   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from vacaciones  ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){

$id_vacaciones=$row['id_vacaciones'];

?>
                      <tr >
              <td><?php echo $row['fecha'];?></td>

      

                        <td class="btn-print">
                                   <?php
                    //  if ($eliminar=="si") {
                    
                      ?>
   <a class="small-box-footer btn-print"  href="<?php  echo "../programar/eliminar_vacaciones.php?id_vacaciones=$id_vacaciones";?>" onClick="return confirm('¿Está seguro de que quieres eliminar horario ??');"><i class="glyphicon glyphicon-remove"></i></a>
   <?php
                  //    }
                      ?>
                               <?php
                 //     if ($editar=="si") {
                    
                      ?>

            <?php
                  //    }
                      ?>

            </td>
                      </tr>
        <div id="updateordinance<?php echo $row['id_empresas'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">ACCION DETALLES EMPRESA</h4>
              </div>
              <div class="modal-body">
        <form class="form-horizontal" method="post" action="empresa_update.php" enctype='multipart/form-data'>

        <div class="form-group">
          <div class="col-lg-9">
            <input type="hidden" class="form-control" id="id" name="id_empresas" value="<?php echo $row['id_empresas'];?>" required>
          </div>
        </div>
               <div class="form-group">
          <label class="control-label col-lg-3" for="price">cuenta</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="price" name="cuenta" value="<?php echo $row['cuenta'];?>"   required>
          </div>
        </div>
               <div class="form-group">
          <label class="control-label col-lg-3" for="price">Ruc/Nit/Id fiscal</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="ruc_nit" name="ruc_nit" value="<?php echo $row['ruc_nit'];?>"   required>
          </div>
        </div>
                      <div class="form-group">
          <label class="control-label col-lg-3" for="price">Razon Social</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="razon_social" name="razon_social" value="<?php echo $row['razon_social'];?>"   required>
          </div>
        </div>
              <div class="modal-footer">
    <button type="submit" class="btn btn-primary">GUARDAR</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
              </div>
        </form>
            </div>

        </div><!--end of modal-dialog-->
 </div>
 <!--end of modal-->

<?php $i++;}?>
                    </tbody>

                  </table>


                                   <script type="text/javascript">// < ![CDATA[
function Eliminar (i) {
    document.getElementsByTagName("table")[0].setAttribute("id","tableid");
    document.getElementById("tableid").deleteRow(i);
}
function Buscar() {
            var tabla = document.getElementById('example22');
            var busqueda = document.getElementById('txtBusqueda').value.toLowerCase();
            var cellsOfRow="";
            var found=false;
            var compareWith="";
            for (var i = 1; i < tabla.rows.length; i++) {
                cellsOfRow = tabla.rows[i].getElementsByTagName('td');
                found = false;
                for (var j = 0; j < cellsOfRow.length && !found; j++) { compareWith = cellsOfRow[j].innerHTML.toLowerCase(); if (busqueda.length == 0 || (compareWith.indexOf(busqueda) > -1))
                    {
                        found = true;
                    }
                }
                if(found)
                {
                    tabla.rows[i].style.display = '';
                } else {
                    tabla.rows[i].style.display = 'none';
                }
            }
        }
// ]]></script>
                </div><!-- /.box-body -->

            </div><!-- /.col -->


          </div><!-- /.row -->




                </div><!-- /.box-body -->

            </div>
        </div>
      </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
                             <a href="https://BeautyFan.com/">Beauty Fan</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

  <?php include '../layout/datatable_script.php';?>



        <script>
        $(document).ready( function() {
                $('#example2').dataTable( {
                 "language": {
                   "paginate": {
                      "previous": "anterior",
                      "next": "posterior"
                    },
                    "search": "Buscar:",


                  },

                  "info": false,
                  "lengthChange": false,
                  "searching": false,


  "searching": true,
                }

              );
              } );
    </script>

    <?php 
          # code...
   // }
?>
    <!-- /gauge.js -->
  </body>
</html>
