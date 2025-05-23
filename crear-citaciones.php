<?php
require_once __DIR__.'\sistema\BLL\apoderados.php';
require_once __DIR__.'\sistema\BLL\alumnos.php';
require_once __DIR__.'\sistema\BLL\citaciones.php';
$apoderados=json_decode(listarApoderados());
$alumnos=json_decode(listarAlumnos());
$estado_citaciones=json_decode(listarEstadosCitacion());
session_start();
    if (isset($_SESSION['alerta_modal'])) {
        echo $_SESSION['alerta_modal'];
        unset($_SESSION['alerta_modal']); // Mostrar solo una vez
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

    <title>portAPPtebien - Citaciones</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php require_once "menu.php"; ?>

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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
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
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
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
                
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Crear una nueva citacion</h1>
                    
                    <div class="row pb-2">
                        <div class="col-sm-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Registro de citaciones</h6>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="sistema/BLL/citaciones.php">

                                        <div class="row g-3 align-items-center pb-2">
                                            <div class="col-5">
                                                <label for="nombre" class="col-form-label">Apoderado: </label>
                                            </div>
                                            <div class="col-7">
                                                <input type="text" class="form-control" list="datalistOptions" name="rutapoderado" id="rutapoderado" placeholder="Type to search...">
                                                <datalist id="datalistOptions">
                                                    <?php
                                                        foreach ($apoderados as $apoderado) {
                                                            echo "<option value='".$apoderado->rut."'>".$apoderado->nombre." ".$apoderado->apellido_paterno."</option>";
                                                        }
                                                    ?>
                                                </datalist>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-items-center pb-2">
                                            <div class="col-5">
                                                <label for="asignatura" id="nombreapoderado" name="nombreapoderado" class="col-form-label">Nombre Apoderado: </label>
                                            </div>
                                            <div class="col-7">
                                                <input type="text" class="form-control" list="datalistAumnos" name="rutalumno" id="rutalumno" placeholder="Type to search...">
                                                <datalist id="datalistAumnos">
                                                    <?php
                                                        foreach ($alumnos as $alumno) {
                                                            echo "<option value='".$alumno->rut."'>".$alumno->nombre." ".$alumno->apellido_paterno."</option>";
                                                        }
                                                    ?>
                                                </datalist>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-items-center pb-2">
                                            <div class="col-5">
                                                <label for="creationDate" class="col-form-label">Fecha creacion:</label>
                                            </div>
                                            <div class="col-7">
                                                <input type="date" id="creationDate" name="creationDate" class="form-control" value="<?php echo date('Y-m-d'); ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-items-center pb-2">
                                            <div class="col-5">
                                                <label for="inputPassword6" class="col-form-label">Fecha citacion:</label>
                                            </div>
                                            <div class="col-7">
                                                <input type="date" id="date" name="fechacitacion" class="form-control" aria-describedby="passwordHelpInline">
                                            </div>
                                        </div>
                                        <div class="row g-3 align-items-center pb-2">
                                            <div class="input-group-prepend col-5">
                                                <label for="nombre" class="col-form-label">Estado:</label>
                                            </div>
                                            <div class="col-7">
                                            <select class="custom-select" name="estado" id="estado">
                                                <?php
                                                    echo '<option selected>Seleccione...</option>';
                                                    foreach ($estado_citaciones as $estado) {
                                                        echo "<option value='".$estado->id."'>".$estado->descripcion."</option>";
                                                    }
                                                ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-items-center pb-2">
                                            <div class="col-5">
                                                <label for="inputPassword6" class="col-form-label">Motivo:</label>
                                            </div>
                                            <div class="col-7">
                                                <textarea class="form-control" id="motivo" name="motivo" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-4 d-md-block pb-2">
                                            <button class="btn btn-primary" type="submit" name="guardar_citacion">Guardar Citacion</button>
                                            <a href="crear-citaciones.php" class="btn btn-secondary" type="button">Cancelar Citacion</a>
                                        </div> 
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
                 
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; portAPPtebien 2025</span>
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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>