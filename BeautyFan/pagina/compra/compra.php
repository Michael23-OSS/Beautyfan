
<?php include '../layout/header.php';


?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../layout/dist/css/skins/_all-skins.min.css">
  <body class="nav-md">
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

        <!-- page content -->
        <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->
 </div>
 

                 <div class="panel-heading">


        </div>
 
 <!--end of modal-->


                  <div class="box-header">
                  <h3 class="box-title"> </h3>

                </div><!-- /.box-header -->
                 <a class = "btn btn-success btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Impresión</a>
                <a class="btn btn-warning btn-print" href="compra_agregar.php"    style="height:25%; width:15%; font-size: 12px " role="button">REGISTRAR COMPRA</a>


                









                <div class="box-body">
                
         

 
                        
            

          
      






      
 <!--end of modal-->











                  <div class="box-header">
                  <h3 class="box-title"> LISTA COMPRA</h3>
                </div><!-- /.box-header -->
              


                <div class="box-body">
                
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr class=" btn-success">

                
               
                        <th>Beneficiario</th>
                    <th>Barbero</th>
                       
         
                           

    <th>Fecha</th>
      <th>Historia</th>
 
 <th class="btn-print"> Accion </th>
                      </tr>
                    </thead>
                    <tbody>
<?php

$auto="";

   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select m.nombre as  barbero,p.nombre as  beneficiario,c.fecha,c.historia,c.id_compra from compra c inner join usuario m on c.id_barbero = m.id inner join usuario p on p.id = c.id_cliente ")or die(mysqli_error());
    $i=0;
    
    while($row=mysqli_fetch_array($query)){

$id_compra=$row['id_compra'];


    $i++;
?>
                      <tr >





    

        <td><?php echo $row['barbero'];?></td>              
         <td><?php echo $row['beneficiario'];?></td>     
           <td><?php echo $row['fecha'];?></td>    
            <td><?php echo $row['historia'];?></td>  
                                          

                          <td>
                                 <?php
                   




                    
                      ?>
<a class="btn btn-danger btn-print" href="<?php  echo "../boleta_preescripcion/generar_boleta.php?id_compra=$id_compra";?>"  target="_blank"  role="button">Ver</a>

<a class="btn btn-primary btn-print" href="<?php  echo "../compra/eliminar_compra.php?id_compra=$id_compra";?>"  onClick="return confirm('¿Está seguro de que quieres eliminar??');"  role="button">Eliminar</a>
      <?php
                      
                      ?>






            </td>
                      </tr>

 <!--end of modal-->

<?php }?>
                    </tbody>

                  </table>
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
           "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],


  "searching": true,
                }

              );
              } );
    </script>




    <!-- /gauge.js -->
  </body>
</html>
