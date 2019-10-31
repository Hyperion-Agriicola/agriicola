<header class="bg-light p-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <a href="dashboard.php" class="close">
                    <i class="fas fa-times text-danger"></i>
                </a>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <img src="../../img/svg/grain.svg" style="height:60px;">
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="text-muted">
                        Mi predio uno
                    </h4>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="container">

    <div class="row mb-5 py-5 border-bottom border-success">

        <div class="col-md-4 col-sm-10">
            <a href="dashboard.php?viewCrop" class="href text-decoration-none">
                <button type="button" class="btn0 btn-light btn-block p-3 shadow mb-4 text-white" style="font-size: 20px; text-align:center; background-color:#388E3C;">
                    <i class="fas fa-align-left float-left"></i>
                    Datos
                </button>
            </a>
        </div>

        <div class="col-md-4 col-sm-10">
            <a href="select_seguimiento.php" class="href text-decoration-none" name="seguimiento">
                <button type="button" class=" btn1 btn btn-light btn-block p-3 shadow mb-4" style="font-size: 20px; text-align:center;">
                    <i class="far fa-chart-bar float-left"></i>
                    Seguimiento
                </button>
            </a>
        </div>

        <div class="col-md-4 col-sm-10">
            <a href="select_gastos.php" class="href text-decoration-none">
                <button type="button" class="btn2 btn-light btn-block p-3 shadow mb-4" style="font-size: 20px; text-align:center">
                    <i class="fas fa-dollar-sign float-left"></i>
                    Gastos
                </button>
            </a>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4 col-sm-12 pb-4">
            <div class="card bg-light p-1 shadow p-0 mb-0 bg-light" style="Border-Radius: 10px;">
                <div class="card-header bg-light">
                    <img src="../../img/svg/grain.svg" style="height:35px" class="mb-2" alt="">
                    <a href="" data-toggle="modal" data-target="#modalEliminar">
                        <button type="button" class="close"><span>&times</span></button>
                    </a>
                    <br>
                    <a href="#" data-toggle="modal" data-target="#modalDatos" class="text-decoration-none text-body">
                        <h4>Datos del cultivo</h4>
                </div>

                <div class="card-body pt-3">Click aquí para ver más información
                </div>
                </a>
            </div>
        </div>

        <div class="col-md-4 col-sm-12 pb-4">
            <div class="card bg-light p-1 shadow p-0 mb-0 bg-light" style="Border-Radius: 10px;">
                <div class="card-header bg-light">
                    <img src="../../img/svg/growing-plant-green.svg" style="height:35px" class="mb-2" alt="">
                    <a href="" data-toggle="modal" data-target="#modalEliminar">
                        <button type="button" class="close"><span>&times</span></button>
                    </a>
                    <br>
                    <a href="#" data-toggle="modal" data-target="#modalSuelo" class="text-decoration-none text-body">
                        <h4>Datos del suelo</h4>
                </div>

                <div class="card-body pt-3">Click aquí para ver más información
                </div>
                </a>
            </div>
        </div>

        <div class="col-md-4 col-sm-12 pb-4">
            <div class="card bg-light p-1 shadow p-0 mb-0 bg-light" style="Border-Radius: 10px;">
                <div class="card-header bg-light">
                    <img src="../../img/svg/plant-sample-green.svg" style="height:35px" class="mb-2" alt="">
                    <a href="" data-toggle="modal" data-target="#modalEliminar">
                        <button type="button" class="close"><span>&times</span></button>
                    </a>
                    <br>
                    <a href="#" data-toggle="modal" data-target="#modalAgro" class="text-decoration-none text-body">
                        <h4>Datos de agroquímico</h4>
                </div>

                <div class="card-body pt-3">Click aquí para ver más información
                </div>
                </a>
            </div>
        </div>




    </div>
</div>

<!--Modales-->
<!--Modal eliminar-->
<div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¡Atención!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Estas seguro de eliminar este cultivo?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success">Aceptar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Cultivo -->
<div class="modal fade" id="modalDatos" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <?php
                    print_r($data->getViewCropByID()[0]);
                    ?>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="lead">Hectáreas</p>
                        <p class="text-muted">
                            <?php
                            print_r($data->getViewCropByID()[1]);
                            ?>
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="lead">Tipo de Especie</p>
                        <p class="text-muted">
                            <?php
                            print_r($data->getViewCropByID()[2]);
                            ?>
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="lead">Subespecie</p>
                        <p class="text-muted">
                            <?php
                            print_r($data->getViewCropByID()[3]);
                            ?>
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="lead">Variedad</p>
                        <p class="text-muted">
                            <?php
                            print_r($data->getViewCropByID()[4]);
                            ?>
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="lead">Fecha de Inicio</p>
                        <p class="text-muted">
                            <?php
                                $fecha = $data->getViewCropByID()[5];
                                $niu_fecha = explode("-", $fecha);

                                $month = array(
                                    'Enero',
                                    'Febrero',
                                    'Marzo',
                                    'Abril',
                                    'Mayo',
                                    'Junio',
                                    'Julio',
                                    'Agosto',
                                    'Septiembre',
                                    'Octubre',
                                    'Noviembre',
                                    'Diciembre');

                                print_r($niu_fecha[2] . " de " . $month[$niu_fecha[1] - 1] . " de " . $niu_fecha[0]);
                            ?>
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="lead">Estado</p>
                        <p class="text-muted">
                            <?php
                            print_r($data->getViewCropByID()[6]);
                            ?>
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="lead">Municipio</p>
                        <p class="text-muted">
                            <?php
                            print_r($data->getViewCropByID()[7]);
                            ?>
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="lead">Localidad</p>
                        <p class="text-muted">
                            <?php
                            print_r($data->getViewCropByID()[8]);
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>






<!-- Modal de Cultivo -->
<div class="modal fade" id="modalSuelo" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                <?php 
                    print_r($data->getGroundViewByID()[0]);
                ?>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="lead">Infraestructura</p>
                        <p class="text-muted">
                            <?php
                            print_r($data->getGroundViewByID()[1]);
                            ?>
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="lead">Riego</p>
                        <p class="text-muted">
                            <?php   
                            print_r($data->getGroundViewByID()[2]);
                            ?>
                        </p>
                    </div>
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>







<!-- Modal de SUELO -->
<div class="modal fade" id="modalAgro" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">xº
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <?php 
                        print_r($data->getAgroViewByID()[0]);
                    ?>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="lead">Nombre comercial</p>
                        <p class="text-muted">
                            <?php
                            print_r($data->getAgroViewByID()[1]);
                            ?>
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="lead">Precio</p>
                        <p class="text-muted">
                            <?php
                            print_r($data->getAgroViewByID()[2]);
                            ?>
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="lead">Moneda</p>
                        <p class="text-muted">
                            <?php
                            print_r($data->getAgroViewByID()[3]);
                            ?>
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="lead">Cantidad</p>
                        <p class="text-muted">
                            <?php
                            print_r($data->getAgroViewByID()[4]);
                            ?>
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="lead">Unidad</p>
                        <p class="text-muted">
                            <?php
                            print_r($data->getAgroViewByID()[5]);
                            ?>
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="lead">Fecha Inicio</p>
                        <p class="text-muted">
                            <?php
                            $fecha = $data->getAgroViewByID()[6];
                            $niu_fecha = explode("-", $fecha);

                            $month = array(
                                'Enero',
                                'Febrero',
                                'Marzo',
                                'Abril',
                                'Mayo',
                                'Junio',
                                'Julio',
                                'Agosto',
                                'Septiembre',
                                'Octubre',
                                'Noviembre',
                                'Diciembre');

                            print_r($niu_fecha[2] . " de " . $month[$niu_fecha[1] - 1] . " de " . $niu_fecha[0]);
                            ?>
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="lead">Fecha Fin</p>
                        <p class="text-muted">
                            <?php
                            $fechaa = $data->getAgroViewByID()[7];
                            $niu_fechaa = explode("-", $fechaa);

                            $month = array(
                                'Enero',
                                'Febrero',
                                'Marzo',
                                'Abril',
                                'Mayo',
                                'Junio',
                                'Julio',
                                'Agosto',
                                'Septiembre',
                                'Octubre',
                                'Noviembre',
                                'Diciembre');

                            print_r($niu_fechaa[2] . " de " . $month[$niu_fechaa[1] - 1] . " de " . $niu_fechaa[0]);
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>