<?php
include '../clases/filtroConsulta.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consulta</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/ki.png" />
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap4.min.css">
        <!-- Custom styles for this template-->
        <link rel="stylesheet" href="../../librerias/alertifyjs/css/alertify.css">
        <link rel="stylesheet" href="../../librerias/alertifyjs/css/themes/default.css">
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <?php include "../html/menu.php"; ?>
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                <i class="ti ti-bell-ringing"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li>
                    </ul>

                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                <!--  Row 1 -->
                <div class="row">
                    <!-- Filtro de Busqueda -->
                    <div class="col-xxl">
                        <div class="card mb-4">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="mb-0">Filtro de Busqueda</h5>
                                <small class="text-muted float-end">Busqueda de Productos</small>
                            </div>
                            <div class="card-body">
                            <form id="frmRegistro" method="POST">

<div class="row">
    <div class="col-md-6">
        <div class="form-group row">
            <div class="mb-3">
                <label class="form-label" for="basic-icon-default-fullname">Producto / Modelo</label>
                <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-text"></i></span>
                    <input type="text" class="form-control" id="modelo" name="modelo" />
                </div>
                <div class="list-group" id="show-list-Equipo">
                    <!-- Here autocomplete list will be display -->
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group row">
            <div class="mb-3">
                <label class="form-label" for="basic-icon-default-fullname">Serie</label>
                <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-text"></i></span>
                    <input type="text" class="form-control" id="serie" name="serie" aria-describedby="basic-icon-default-fullname2" />
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group row">
            <div class="mb-3">
                <label class="form-label" for="basic-icon-default-fullname">Localizacion</label>
                <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-text"></i></span>
                    <input type="text" class="form-control" id="localizacion" name="localizacion" aria-describedby="basic-icon-default-fullname2" />
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group row">
            <div class="mb-3">
                <label class="form-label" for="basic-icon-default-fullname">Almacen</label>
                <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-text"></i></span>
                    <input type="text" class="form-control" id="almacen" name="almacen" aria-describedby="basic-icon-default-fullname2" />
                </div>
            </div>
        </div>
    </div>
</div>
<button type="submit" id="buscar" name="buscar" class="btn btn-primary">Buscar</button>
</form>
                            </div>
                        </div>
                    </div>

                    <!-- Total Revenue -->
                    <div class="card order-md-3 order-lg-2">
                        <h5 class="card-header m-0 me-2 pb-3">Consulta de Productos</h5>
                        <div class="table-responsive">
                            <style>
                                #dataTableAlmacen table {

                                    overflow-x: auto;
                                }

                                #dataTableAlmacen table td {
                                    word-wrap: break-word;
                                    max-width: 200px;
                                    text-align: center;
                                }

                                #dataTableAlmacen td {
                                    white-space: inherit;
                                    text-align: center;
                                }

                                #dataTableAlmacen th {
                                    white-space: inherit;
                                    text-align: center;
                                }
                            </style>
                            <table class="display table dt-responsive nowrap" id="dataTableAlmacen">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Modelo</th>
                                        <th>Serie</th>
                                        <th>localizacion</th>
                                        <th>Almacen</th>
                                        <th>Existencias</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <?php while ($ver = mysqli_fetch_row($result)) : ?>
                                        <tr>
                                            <td><?php echo $ver[0] ?></td>
                                            <td><?php echo $ver[1] ?></td>
                                            <td><?php echo $ver[2] ?></td>
                                            <td><?php echo $ver[3] ?></td>
                                            <td><?php echo $ver[4] ?></td>
                                            <td><?php echo $ver[5] ?></td>
                                            <td style="text-align: center;">
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalActualizar"  
                                                    onclick="actualizarStock('<?php echo $ver[0] ?>', '<?php echo $ver[1] ?>', '<?php echo $ver[2] ?>' , '<?php echo $ver[3] ?>', '<?php echo $ver[4] ?>', '<?php echo $ver[5] ?>')"><i class="bx bx-detail me-1"></i> Actualizar Producto</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modalActualizar" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel1">Actualizar Estatus</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" id="frmActualizarStock" method="post">
                                <div class="row g-2">
                                    <div class="col mb-0">
                                        
                                         <label for="emailBasic" class="form-label">Producto Modelo</label>
                                        
                                        <input type="text" id="equipo" name="equipo" class="form-control" />
                                        <input type="number" id="idAlmacen" name="idAlmacen" class="form-control" readonly hidden />
                                    </div>
                                    <br>
                                    <div class="col mb-0">
                                        <label for="dobBasic" class="form-label">Serie</label>
                                        <input type="text" id="serieProd" name="serieProd" class="form-control">
                                    </div>
                                </div>
                               <br>
                                    <div class="col mb-0">
                                        <label for="dobBasic" class="form-label">localizacion</label>
                                        <input type="text" id="ubicacion" name="ubicacion" class="form-control">
                                    </div>
                                    <br>
                                    <div class="col mb-0">
                                        <label for="dobBasic" class="form-label">Almacen</label>
                                        <input type="text" id="almace" name="almace" class="form-control">
                                    </div>
                                    <br>
                                    <div class="col mb-0">
                                        <label for="dobBasic" class="form-label">Existencias</label>
                                        <input type="text" id="cantidad" name="cantidad" class="form-control">
                                    </div>
                                    <br>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Cerrar
                            </button>
                            <button type="button" id="btnActualizarStock" name="btnActualizarStock" class="btn btn-primary">Guardar Cambios</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>

    <script src="../js/funcionesGenerales.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/sidebarmenu.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.js"></script>

    <script src="../js/funciones.js"></script>
    <script src="../js/almacen.js"></script>
    <script src="../../librerias/alertifyjs/alertify.js"></script>


</body>

</html>