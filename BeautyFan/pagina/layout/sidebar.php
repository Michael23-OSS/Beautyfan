<?php 
$id=$_SESSION['id'];
?>

<?php

?>
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                                   <li><a href = "../layout/inicio.php"><i class="fa fa-dashboard"></i> inicio <span class="fa fa-chevron-right"></span></a></li>
           


             

     

                             <?php
                        if ($tipo=="administrador" ) {
                    
                      ?>



                          <li><a><i class="fa fa-database"></i> Barbero<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
 
<li><a href="../barbero/barbero.php">Barbero</a></li>
<li><a href="../barbero/barbero_historial.php">Historial </a></li>




                    </ul>
                  </li>
                    <?php
                      }
                      ?>

                  <?php

                  
                        if ($tipo=="administrador" or $tipo=="recepcionista" or $tipo=="barbero") {
                    
                      ?>
                                  <li><a><i class="fa fa-database"></i> Programar<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
            
<li><a href="../programar/horario_barbero.php">Programar</a></li>
<li><a href="../programar/vacaciones.php">Vacaciones</a></li>




                    </ul>
                  </li>
                    <?php
                      }
                      ?>
                 <?php
                        if ($tipo=="administrador" or $tipo=="recepcionista") {
                    
                      ?>

                                  <li><a><i class="fa fa-database"></i> Actividades financieras<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
             
<li><a href="../actividades_financieras/pagos.php">Pagos</a></li>
<li><a href="../actividades_financieras/pago_agregar.php">Agregar pago</a></li>
<li><a href="../procedimiento_pago/procedimiento_pago.php">Servicios y sus Costos</a></li>
<li><a href="../gastos/gastos.php">Gastos</a></li>
<li><a href="../gastos/gastos_agregar.php">Agregar gastos</a></li>
<li><a href="../gastos/gastos_categoria.php">Categoria gastos</a></li>




                    </ul>
                  </li>
                    <?php
                      }
                      ?>
                      
                                      <?php
                        if ($tipo=="administrador" or $tipo=="recepcionista" or $tipo=="barbero") {
                    
                      ?>
                      <li><a><i class="fa fa-database"></i>Beneficiarios<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
              
<li><a href="../beneficiario/beneficiario.php">Lista de beneficiarios</a></li>
<li><a href="../beneficiario/pago_beneficiario_todos.php">Pagos</a></li>


  


                    </ul>
                  </li>
                    <?php
                      }
                      ?>
                      <?php
                        if ($tipo=="administrador" or $tipo=="recepcionista" or $tipo=="barbero") {
                    
                      ?>
                 <li><a><i class="fa fa-database"></i> Citas<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
        
<li><a href="../cita/cita.php">Lista de citas</a></li>
<li><a href="../cita/cita_agregar.php">Agregar</a></li>
<li><a href="../cita/cita_hoy.php">Hoy</a></li>




                    </ul>
                  </li>

  <?php
                      }
                      ?>

                                    <?php
                        if ($tipo=="administrador" or $tipo=="vendedor") {
                    
                      ?>
                   <li><a><i class="fa fa-database"></i> Cosmeticos<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                
<li><a href="../cosmetico/cosmetico.php">Lista de cosmeticos</a></li>
<li><a href="../cosmetico/cosmetico_agregar.php">Agragar cosmetico</a></li>






                    </ul>
                  </li>
                    <?php
                      }
                      ?>
                      

                                   <?php
                        if ($tipo=="administrador" or $tipo=="vendedor") {
                    
                      ?>
               <li><a><i class="fa fa-database"></i> Estante<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                 
<li><a href="../estante/pagos.php">Lista de ventas</a></li>
<li><a href="../estante/pago_agregar.php">Agragar estante</a></li>
<li><a href="../gastos_estante/gastos_estante.php">Gastos</a></li>
  <li><a href="../gastos_estante/categoria.php">Gastos categoria</a></li>

  <li><a href="../estante/reportes_pagos.php">Pagos</a></li>







                    </ul>
                  </li>
  <?php
                      }
                      ?>
                                    <?php
                        if ($tipo=="administrador" or $tipo=="barbero") {
                    
                      ?>
 
       <li><a href = "../compra/compra.php"><i class="fa fa-archive"></i> Compra<span class="fa fa-chevron-right"></span></a>


             <?php
                      }
                      ?>        

                  
 


                                   <?php
                        if ($tipo=="beneficiario" ) {
                    
                      ?>
 
       <li><a href = "../cita/cita_beneficiario.php"><i class="fa fa-archive"></i> cita beneficiario<span class="fa fa-chevron-right"></span></a>
       <li><a href = "../compra/compra_beneficiario.php"><i class="fa fa-archive"></i> compra beneficiario<span class="fa fa-chevron-right"></span></a>

           <li><a href = "../actividades_financieras/pagos_beneficiario.php"><i class="fa fa-archive"></i> Pagos atencion<span class="fa fa-chevron-right"></span></a>
           <li><a href = "../estante/pagos_estante_beneficiario.php"><i class="fa fa-archive"></i> Pagos estante<span class="fa fa-chevron-right"></span></a>
             <?php
                      }
                      ?>    



    


                                  <?php
        
                      ?>
                    
                
           <?php
                
                    
                      ?>
            

                                       <?php
                        if ($tipo=="administrador" ) {
                    
                      ?>

                                  <li><a><i class="fa fa-user"></i> Recursos humanos<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

   <li><a href="../barbero/barbero.php">Barbero</a></li>
        <li><a href="../vendedor/vendedor.php">Vendedor</a></li>

 <li><a href="../recepcionista/recepcionista.php">recepcionista</a></li>

                       

                    </ul>
                  </li>
                              <?php
                      }
                      ?>     
                      <?php
                      
                      ?>
   



                 <li><a><i class="fa fa-gear"></i> Configuracion<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                       <?php
                      if ($tipo=="administrador" ) {
                    
                      ?>
                      <li><a href="../configuracion/configuracion.php">Empresa</a></li>
                                 <?php
                      }
                      ?>

    
                        <li><a href="../otros/editar_password.php">Editar password</a></li>  
     
                    </ul>
                  </li>


                             <?php
                      if ($tipo=="administrador" ) {
                    
                      ?>

                     <li><a><i class="fa fa-database"></i> Base de datos<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

                      <li><a href="../otros/vaciar_bd.php" onClick="return confirm('¿Está seguro de que quieres vaciar la base de datos ??');">Vaciar base de datos</a></li>
       
                       <li><a href="../otros/respaldo_add.php">Respaldo</a></li>

                    </ul>
                  </li>
             <?php
                      }
                      ?>


                   
              </div>
             <!--- <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>--->

            </div>
