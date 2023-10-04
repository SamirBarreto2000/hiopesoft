<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Software HOPE</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="./images/logo.png" alt="">
                <img class="logo-compact" src="./images/logo-text.png" alt="">
                <img class="brand-title" src="./images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <?php 
            include_once('elements/header.php')
        ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php 
            include_once('elements/sliderbar.php')
        ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">

                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Panel de usuarios</h4>
                            <p class="mb-0" style="color: #888888;">Gestiona y controla los clientes</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target=".bd-example-modal-lg"><i class="bi bi-person-plus"></i>
                                &nbsp;Agregar usuario</button>
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content" style="background-color: #F8F9FE;">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Completa los todos lo campos:</h5>
                                            <button type="button" class="close"
                                                data-dismiss="modal"><span>&times;</span>
                                            </button>
                                        </div>

                                        <!-- FORMULARIO USUARIOS -->
                                        <div class="modal-body">


                                            <div class="basic-form" style="color: #888888; padding: 10px;">
                                                <form>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label>Nombres:</label>
                                                            <input type="text" class="form-control">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label>Apellidos:</label>
                                                            <input type="text" class="form-control">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label>DNI:</label>
                                                            <input type="text" class="form-control">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label>Contraseña:</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Fecha de nacimiento:</label>
                                                            <input type="date" class="form-control">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label>Tipo de usuario:</label>
                                                            <input type="date" class="form-control">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label>Estado:</label>
                                                            <input type="date" class="form-control">
                                                        </div>


                                                        <div class="form-group col-md-6">
                                                            <label>Departamento:</label>  
                                                            <select class="form-control state"></select>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label>Provincia:</label>
                                                            <select class="form-control city"></select>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label>Distrito:</label>
                                                            <select class="form-control district"></select>
                                                        </div>

 

                                                    </div>
                                                </form>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn btn-primary">Guardar</button>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </ol>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header">
                        <h4 style="color: #888888;">Listado de clientes</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-responsive-sm">
                                <thead>
                                    <tr style="background-color: #593BDB; color: white;">
                                        <th>#</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>DNI</th>
                                        <th>Estado</th>
                                        <th>Tipo de usuario</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody style="color: #888888;">
                                    <tr>
                                        <th>1</th>
                                        <td>Samir Enrique</td>
                                        <td>Barreto Jara</td> 
                                        <td>71446894</td> 
                                        <td>Activo</td>
                                        <td>Administrador</td>
                                        <td style="width: 70px">
                                            <div class="btn-group mr-2 mb-2">
                                                <button type="button" class="btn btn-primary"><i
                                                        class="bi bi-pencil-square"></i></button>
                                                <button type="button" class="btn btn-danger"><i
                                                        class="bi bi-trash3"></i></button>
                                                <button type="button" class="btn btn-success" style="color: white;"><i
                                                        class="bi bi-eye"></i></button>

                                            </div>
                                        </td>


                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <!--<div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p> 
            </div>
        </div>-->
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="./vendor/raphael/raphael.min.js"></script>
    <script src="./vendor/morris/morris.min.js"></script>


    <script src="./vendor/circle-progress/circle-progress.min.js"></script>
    <script src="./vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="./vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="./vendor/flot/jquery.flot.js"></script>
    <script src="./vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="./vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="./vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="./vendor/jquery.counterup/jquery.counterup.min.js"></script>


    <script src="./js/dashboard/dashboard-1.js"></script>
    <script>

                    //CARGAMOS LOS DEPARTAMENTOS
                    $(document).ready(function () {
                        $.ajax({
                            type: 'POST',
                            url: 'api/data.php',
                            data: { action: 'get-states' },
                            dataType: 'JSON',
                            success: function (response) {
                                var options = '<option value="">Seleccione</option>';
                                $.each(response, function (index, value) {
                                    options += '<option value="' + value.id + '">' + value.nombre + '</option>';
                                });
                                $('.state').html(options);
                                $('.city').html('<option value="">Seleccione</option>');
                                $('.district').html('<option value="">Seleccione</option>');
                                $('.ubigeo').val(null);
                            }
                        }).fail(function (jqXHR, textStatus, errorThrown) {
                            console.log(jqXHR);
                        });
                    });

                    //OBTENEMOS LAS CIUDADES POR DEPARTAMENTO
                    $('.state').on('change', function () {
                        var id = $(this).val();
                        $.ajax({
                            type: 'POST',
                            url: 'api/data.php',
                            data: { action: 'get-cities', id: id },
                            dataType: 'JSON',
                            success: function (response) {
                                var options = '<option value="">Seleccione</option>';
                                $.each(response, function (index, value) {
                                    options += '<option value="' + value.id + '">' + value.nombre + '</option>';
                                });
                                $('.city').html(options);
                                $('.district').html('<option value="">Seleccione</option>');
                                $('.ubigeo').val(null);
                            }
                        }).fail(function (jqXHR, textStatus, errorThrown) {
                            console.log(jqXHR);
                        });
                    });

                    //OBTENEMOS LOS DISTRITOS POR CIUDAD
                    $('.city').on('change', function () {
                        var id = $(this).val();
                        $.ajax({
                            type: 'POST',
                            url: 'api/data.php',
                            data: { action: 'get-districts', id: id },
                            dataType: 'JSON',
                            success: function (response) {
                                var options = '<option value="">Seleccione</option>';
                                $.each(response, function (index, value) {
                                    options += '<option value="' + value.id + '" ubigeo="' + value.ubigeo + '">' + value.nombre + '</option>';
                                });
                                $('.district').html(options);
                                $('.ubigeo').val(null);
                            }
                        }).fail(function (jqXHR, textStatus, errorThrown) {
                            console.log(jqXHR);
                        });
                    });

                    $('.district').on('change', function () {
                        var ubigeo = $(this).find('option:selected').attr('ubigeo');
                        $('.ubigeo').val(ubigeo);
                    });
                </script>

</body>

</html>