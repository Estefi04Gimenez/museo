<?php
session_start();
if (!isset($_SESSION['nombre-usuarios'])) {
    
    
}
else{
    header('location: login-modal.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Museo Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="dashboard/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i><img src="dashboard/img/museo-40.png"></i>
                </div>
                <div class="sidebar-brand-text mx-3">MUSEO</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i><img src="dashboard/img/menu20.png"></i>
                    <span>Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            

            <!-- Heading -->
            <div class="sidebar-heading">
                Museo
            </div>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="CRUDMuseo/Museo.html">
                    
                    <i><img src="dashboard/img/milo-30.png"></i>
                    <!--<i class="fas fa-fw fa-table"></i>-->
                    <span>Museo</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="CRUDSalas/Salas.html">
                    <i><img src="dashboard/img/piso-30.png"></i>
                    <span>Salas</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i><img src="dashboard/img/exposición-30.png"></i>
                    <span>Exposición</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Admin
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="CRUDGuias/Guias.html">
                    <i><img src="dashboard/img/expositor-30.png"></i>
                    <span>Guías</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i><img src="dashboard/img/turno-30.png"></i>
                    <span>Turnos</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i><img src="dashboard/img/administrador-30.png"></i>
                    <span>Usuarios</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
        </ul>
        <!-- End of Sidebar -->

    
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-secondary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle"
                                    src="dashboard/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="php/logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="row justify-content-center">
                    <!-- Collapsable Card Example -->
                    <div class="card shadow mb-4 m-3 align-items-center">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 font-weight-bold text-primary">Exposición 'La Gioconda' <br> Leonardo da Vinci </h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class=" collapse show" id="collapseCardExample">
                            <div class="col align-items-center" style="width: 10rem; height: 10rem; margin:10px;">
                                <img src="dashboard/img/monalisa.jpg" class="card-img-top" >
                            </div>
                            <!-- Divider -->
                            <hr class="sidebar-divider">
                            <div class="card-body">
                                Horario<br>9:00 hs - 13:00 hs <br> Sala 13, Piso 1 
                            </div>
                        </div>
                    </div>

                    <!-- Collapsable Card Example -->
                    <div class="card shadow mb-4 m-3 align-items-center">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 font-weight-bold text-primary">Exposición 'La joven de la perla'<br> Johannes Vermeer</h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse show " id="collapseCardExample">
                            <div class="col" style="width: 10rem; height: 10rem; margin:10px;">
                                <img src="dashboard/img/joven.jpg" class="card-img-top" >
                            </div>
                            <!-- Divider -->
                            <hr class="sidebar-divider">
                            <div class="card-body">
                                Horario<br>9:00 hs - 13:00 hs <br> Sala 13, Piso 1 
                            </div>
                        </div>
                    </div>

                    <!-- Collapsable Card Example -->
                    <div class="card shadow mb-4 m-3 align-items-center">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 font-weight-bold text-primary">Exposición 'El nacimiento de Venus'<br>Sandro Botticelli </h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="collapseCardExample">
                            <div class="col " style="width: 10rem; height: 10rem; margin:10px; ">
                                <img src="dashboard/img/nacimientodevenus.webp" class="card-img-top" >
                            </div>
                            <!-- Divider -->
                            <hr class="sidebar-divider">
                            <div class="card-body">
                                Horario<br>9:00 hs - 13:00 hs <br> Sala 13, Piso 1 
                            </div>
                        </div>
                    </div>
                    </div>


                    <div class="row justify-content-center">
                        <!-- Collapsable Card Example -->
                        <div class="card shadow mb-4 m-3 align-items-center">
                            <!-- Card Header - Accordion -->
                            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                <h6 class="m-0 font-weight-bold text-primary">Exposición 'La noche estrellada'<br>Vincent van Gogh </h6>
                            </a>
                            <!-- Card Content - Collapse -->
                            <div class="collapse show" id="collapseCardExample">
                                <div class="col " style="width: 10rem; height: 10rem; margin:10px;">
                                    <img src="dashboard/img/lanocheestrellada.jpg" class="card-img-top" >
                                </div>
                                <!-- Divider -->
                                <hr class="sidebar-divider">
                                <div class="card-body">
                                    Horario<br>9:00 hs - 13:00 hs <br> Sala 13, Piso 1 
                                </div>
                            </div>
                        </div>
    
                        <!-- Collapsable Card Example -->
                        <div class="card shadow mb-4 m-3 align-items-center">
                            <!-- Card Header - Accordion -->
                            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                <h6 class="m-0 font-weight-bold text-primary">Exposición 'El Grito'<br>Edvard Munch </h6>
                            </a>
                            <!-- Card Content - Collapse -->
                            <div class="collapse show" id="collapseCardExample">
                                <div class="col " style="width: 10rem; height: 10rem; margin:10px;">
                                    <img src="dashboard/img/elgrito.webp" class="card-img-top" >
                                </div>
                                <!-- Divider -->
                                <hr class="sidebar-divider">
                                <div class="card-body">
                                    Horario<br>9:00 hs - 13:00 hs <br> Sala 13, Piso 1 
                                </div>
                            </div>
                        </div>
    
                        <!-- Collapsable Card Example -->
                        <div class="card shadow mb-4 m-3 align-items-center">
                            <!-- Card Header - Accordion -->
                            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                <h6 class="m-0 font-weight-bold text-primary">Exposición 'Venus de Milo'<br>Alejandro de Antioquía</h6>
                            </a>
                            <!-- Card Content - Collapse -->
                            <div class="collapse show" id="collapseCardExample">
                                <div class="col " style="width: 10rem; height: 10rem; margin:10px;">
                                    <img src="dashboard/img/venusdemilo.jpg" class="card-img-top" >
                                </div>
                                <!-- Divider -->
                                <hr class="sidebar-divider">
                                <div class="card-body">
                                    Horario<br>9:00 hs - 13:00 hs <br> Sala 13, Piso 1 
                                </div>
                            </div>
                        </div>
    
                        </div>

                        <div class="row justify-content-center">
                            <!-- Collapsable Card Example -->
                            <div class="card shadow mb-4 m-3 align-items-center">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary"> Exposición 'El pensador'<br>Auguste Rodin</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="col " style="width: 10rem; height: 10rem; margin:10px;">
                                        <img src="dashboard/img/elpensador.jpg" class="card-img-top" >
                                    </div>
                                    <!-- Divider -->
                                    <hr class="sidebar-divider">
                                    <div class="card-body">
                                        Horario<br>9:00 hs - 13:00 hs <br> Sala 13, Piso 1 
                                    </div>
                                </div>
                            </div>
        
                            <!-- Collapsable Card Example -->
                            <div class="card shadow mb-4 m-3 align-items-center">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary">Exposición 'El Juicio Final'<br>Miguel Ángel</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="col " style="width: 10rem; height: 10rem; margin:10px;">
                                        <img src="dashboard/img/juiciofinal.jpg" class="card-img-top" >
                                    </div>
                                    <!-- Divider -->
                                    <hr class="sidebar-divider">
                                    <div class="card-body">
                                        Horario<br>9:00 hs - 13:00 hs <br> Sala 13, Piso 1 
                                    </div>
                                </div>
                            </div>
        
                            <!-- Collapsable Card Example -->
                            <div class="card shadow mb-4 m-3 align-items-center">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary">Exposición 'Impresión, sol naciente'<br>Claude Monet</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="collapseCardExample">
                                    <div class="col " style="width: 10rem; height: 10rem; margin:10px;">
                                        <img src="dashboard/img/sol.jpg" class="card-img-top" >
                                    </div>
                                    <!-- Divider -->
                                    <hr class="sidebar-divider">
                                    <div class="card-body">
                                        Horario<br>9:00 hs - 13:00 hs <br> Sala 13, Piso 1 
                                    </div>
                                </div>
                            </div>
        
                            </div>
                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Desea cerrar sesión?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="dashboard/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="dashboard/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="dashboard/js/demo/chart-area-demo.js"></script>
    <script src="dashboard/js/demo/chart-pie-demo.js"></script>

</body>

</html>