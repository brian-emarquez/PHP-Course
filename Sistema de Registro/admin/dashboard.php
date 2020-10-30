<?php require_once('includes/session.php');
       require_once('includes/conn.php');
       require_once('check.php');    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>CODIGO FUENTE GRATIS - DASHBOARD</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/awesome/font-awesome.css">
        <link rel="stylesheet" href="assets/css/animate.css">
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" class="sammacmedia">
                <div class="sidebar-header">
                    <h3>CAAZ SMS</h3>
                    <strong>SMS</strong>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="dashboard.php">
                            <i class="fa fa-th"></i>
                           Dashboard
                        </a>
                    </li>
                              <?php
                    if($_SESSION['permission']==1 or $_SESSION['permission']==2 ){
                        
                    
                    ?>
                    <li>
                        <a href="a_employees.php">
                            <i class="fa fa-plus"></i>
                            Añadir empleados

                        </a>
                      
                    </li>
                    <?php }?>
                    <li>
                        <a href="all_employees.php">
                            <i class="fa fa-table"></i>
                          Todos los empleados

                        </a>
                    </li>
                    <li>
                        <a href="invest.php">
                            <i class="fa fa-link"></i>
                            Problemas de informe

                        </a>
                    </li>
                              <?php
                    if($_SESSION['permission']==1 or $_SESSION['permission']==2 ){
                        
                    
                    ?>
                    <li>
                        <a href="v_issue.php">
                            <i class="fa fa-table"></i>
                           Ver Problemas
                        </a>
                    </li>
                    <?php }?>
                             <?php
                    if($_SESSION['permission']==1){
                    ?>
                    <li>
                        <a href="a_users.php">
                            <i class="fa fa-user"></i>
                            Añadir Usuarios

                        </a>
                    </li>
                    <li>
                        <a href="v_users.php">
                            <i class="fa fa-table"></i>
                            Ver Usuarios

                        </a>
                    </li>
                    <?php } ?>
                    <li>
                        <a href="settings.php">
                            <i class="fa fa-cog"></i>
                            Ajustes
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">
             
                <div clas="col-md-12">
                    </div>
         
                
                <nav class="navbar navbar-default sammacmedia">
                    <div class="container-fluid">

                        <div class="navbar-header" id="sams">
                            <button type="button" id="sidebarCollapse" id="makota" class="btn btn-sam animated tada navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Menu</span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right  makotasamuel">
                                <li><a href="#"><?php require_once('includes/name.php');?></a></li>
                                <li ><a href="logout.php"><i class="fa fa-power-off"> Cerrar sesión</i></a></li>
           
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="line"></div>
                <div class="row">
                <div class="col-lg-6 col-md-6 ">
                    <div class="panel panel sammac sammacmedia">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $users;?></div>
                                    <div>Número total de usuarios</div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel strover sammacmedia">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-link fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $cases;?></div>
                                    <div>Número total de casos</div>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>

                    
                    
            </div>
                <div class="line"></div>
                <footer>
            <p class="text-center">
            CAAZ Security Matters System &copy;<?php echo date("Y ");?>Copyright. All Rights Reserved, codigo fuente
            </p>
            </footer>
            </div>
            
        </div>





        <!-- jQuery CDN -->
         <script src="assets/js/jquery-1.10.2.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="assets/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
             $('sams').on('click', function(){
                 $('makota').addClass('animated tada');
             });
         </script>
    </body>
</html>
