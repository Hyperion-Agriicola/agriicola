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
                        <?php
                            print_r($data->getViewCropByID($_POST['get_id_cultivo'])[0]);
                        ?>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</header>

    
    
    <div class="container">

        <div class="row mb-5 py-5 border-bottom border-success" style="border-bottom: 2px solid #388E3C!important;">
                
            <div class="col-md-4 col-sm-10" >
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
                        <h4>Datos del cultivo</h4>
                    </div>

                    <div class="card-body pt-3">
                        <a data-toggle="modal" data-target="#modalModifCultivo" class="close">
                            <img src="../../img/svg/edit-24px.svg"class="mb-2" alt="">
                        </a>
                        <a data-toggle="modal" data-target="#modalDatos" class="text-success text-left text-decoration-none" href="#">Ver informacion

                        </a>
                        
                    </div>
                           
                </div>      
            </div>

            <div class="col-md-4 col-sm-12 pb-4">  
                <div class="card bg-light p-1 shadow p-0 mb-0 bg-light" style="Border-Radius: 10px;"> 
                    <div class="card-header bg-light">
                        <img src="../../img/svg/growing-plant.svg" style="height:35px" class="mb-2" alt="">
                        <a href="" data-toggle="modal" data-target="#modalEliminar">
                            <button type="button" class="close"><span>&times</span></button>
                        </a>
                        <br>
                        <h4>Datos del suelo</h4>
                    </div>

                    <div class="card-body pt-3">
                        <a data-toggle="modal" data-target="#modalModifSuelo" class="close">
                            <img src="../../img/svg/edit-24px.svg"class="mb-2" alt="">
                        </a>
                        <a data-toggle="modal" data-target="#modalSuelo" class="text-success text-left text-decoration-none" href="#">Ver informacion

                        </a>
                    </div>
                           
                </div>      
            </div>

            <div class="col-md-4 col-sm-12 pb-4">  
                <div class="card bg-light p-1 shadow p-0 mb-0 bg-light" style="Border-Radius: 10px;"> 
                    <div class="card-header bg-light">
                        <img src="../../img/svg/plant-sample.svg" style="height:35px" class="mb-2" alt="">
                        <a href="" data-toggle="modal" data-target="#modalEliminar">
                            <button type="button" class="close"><span>&times</span></button>
                        </a>
                        <br>
                        <h4>Datos de agroquímico</h4>
                    </div>

                    <div class="card-body pt-3">
                        <a data-toggle="modal" data-target="#modalModifCultivo" class="close">
                            <img src="../../img/svg/edit-24px.svg"class="mb-2" alt="">
                        </a>
                        <a data-toggle="modal" data-target="#modalAgro" class="text-success text-left text-decoration-none" href="#">Ver informacion

                        </a>
                    </div>
                          
                </div>      
            </div>

            <?php
                if(isset($_POST['get_id_cultivo'])){
                    echo $_POST['get_id_cultivo'];
                    echo $_POST['get_tipo_suelo'];
                    
                    $data->getAgroViewByID($_POST['get_id_cultivo'])[0];
                }else{
                    header('Location: dashboard.php');
                }
                
            ?>

            
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

    <!---Modal de cultivo-->
    <div class="modal fade" id="modalDatos" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <?php
                        
                            print_r($data->getViewCropByID($_POST['get_id_cultivo'])[0]);
                        
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
                                
                                    print_r($data->getViewCropByID($_POST['get_id_cultivo'])[1]);
                                
                                ?>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="lead">Tipo de Especie</p>
                            <p class="text-muted">
                                <?php
                               
                                    print_r($data->getViewCropByID($_POST['get_id_cultivo'])[2]);
                                
                                ?>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="lead">Subespecie</p>
                            <p class="text-muted">
                                <?php
                                
                                    print_r($data->getViewCropByID($_POST['get_id_cultivo'])[3]);
                                
                                ?>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="lead">Variedad</p>
                            <p class="text-muted">
                                <?php
                               
                                    print_r($data->getViewCropByID($_POST['get_id_cultivo'])[4]);
                                
                                ?>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="lead">Fecha de Inicio</p>
                            <p class="text-muted">
                                <?php
                                
                                    
                                
                                    $fecha = $data->getViewCropByID($_POST['get_id_cultivo'])[5];
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
                               
                                    print_r($data->getViewCropByID($_POST['get_id_cultivo'])[6]);
                                
                                ?>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="lead">Municipio</p>
                            <p class="text-muted">
                                <?php
                                
                                    print_r($data->getViewCropByID($_POST['get_id_cultivo'])[7]);
                                
                                ?>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="lead">Localidad</p>
                            <p class="text-muted">
                                <?php
                               
                                print_r($data->getViewCropByID($_POST['get_id_cultivo'])[8]);
                            
                                ?>
                            </p>
                        </div>
                    </div>
                
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        
                </div>
            </div>
        </div>
    </div>
                                        
    <!---Modal de suelo-->
    <div class="modal fade" id="modalSuelo" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <?php
                        print_r($data->getGroundViewByID($_POST['get_id_cultivo'])[0]);
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
                                print_r($data->getGroundViewByID($_POST['get_id_cultivo'])[1]);
                                ?>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="lead">Riego</p>
                            <p class="text-muted">
                                <?php   
                                print_r($data->getGroundViewByID($_POST['get_id_cultivo'])[2]);
                                ?>
                            </p>
                        </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        
                </div>
            </div>
        </div>
    </div>
                                       
    <!---Modal de agro-->
    <div class="modal fade" id="modalAgro" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <?php
                        print_r($data->getAgroViewByID($_POST['get_id_cultivo'])[0]);
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
                                print_r($data->getAgroViewByID($_POST['get_id_cultivo'])[1]);
                                ?>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="lead">Precio</p>
                            <p class="text-muted">
                                <?php
                                print_r($data->getAgroViewByID($_POST['get_id_cultivo'])[2]);
                                ?>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="lead">Moneda</p>
                            <p class="text-muted">
                                <?php
                                print_r($data->getAgroViewByID($_POST['get_id_cultivo'])[3]);
                                ?>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="lead">Cantidad</p>
                            <p class="text-muted">
                                <?php
                                print_r($data->getAgroViewByID($_POST['get_id_cultivo'])[4]);
                                ?>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="lead">Unidad</p>
                            <p class="text-muted">
                                <?php
                                print_r($data->getAgroViewByID($_POST['get_id_cultivo'])[5]);
                                ?>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="lead">Fecha Inicio</p>
                            <p class="text-muted">
                                <?php
                                $fecha = $data->getAgroViewByID($_POST['get_id_cultivo'])[6];
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
                                $fechaa = $data->getAgroViewByID($_POST['get_id_cultivo'])[7];
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
                        
                </div>
            </div>
        </div>
    </div>

    <!--Modal modifiacr cultivo--> 
    <div class="modal fade" id="modalModifCultivo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Modificar cultivo
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST">
                        <input type="text" name="inputID_cultivo" id="id_cultivo" 
                            value="<?php 
                                        print_r($data->getViewCropByID($_POST['get_id_cultivo'])[11]);
                                    ?>" style="display: none;">            
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="inputName">Nombre predio</label>
                                    <input type="text" class="form-control" id="inputName" name="name" value="<?php 
                                        print_r($data->getViewCropByID($_POST['get_id_cultivo'])[0]);
                                    ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="inputHectare">Hectáreas</label>
                                    <input type="number" class="form-control" id="inputHectare" name="hectares"value="<?php 
                                        print_r($data->getViewCropByID($_POST['get_id_cultivo'])[1]);
                                    ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="inputSpecie">Tipo de especie</label>
                                    <select name="specieType" class="form-control" id="inputSpecie" value="<?php 
                                        print_r($data->getViewCropByID($_POST['get_id_cultivo'])[2]);
                                    ?>">
                                        <option disabled>Selecciona una especie</option>
                                        <?php 
                                            $data->getSpecie();
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="inputSubspecie">Subespecie</label>
                                    <select name="subspecie" class="form-control" id="inputSubspecie"value="<?php 
                                        print_r($data->getViewCropByID($_POST['get_id_cultivo'])[3]);
                                    ?>">
                                        <option disabled>Selecciona una subespecie</option>
                                        <?php 
                                            $data->getSubspecie();
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="inputVariation">Variedad</label>
                                    <input type="text" name="variation" class="form-control" id="inputVariation" value="<?php 
                                        print_r($data->getViewCropByID($_POST['get_id_cultivo'])[4]);
                                    ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="inputDate">Fecha de inicio</label>
                                    <input type="date" class="form-control" id="inputDate" name="bornDate" value="<?php 
                                        print_r($data->getViewCropByID($_POST['get_id_cultivo'])[5]);
                                    ?>">
                                </div>
                            </div>

                        </div>
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Ubicación</h5>
                        <div class="row mt-4">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="inputState">Estado</label>
                                    <input type="text" class="form-control state" id="inputState" name="state"
                                    value="<?php 
                                        print_r($data->getViewCropByID($_POST['get_id_cultivo'])[6]);
                                    ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="inputTownship">Municipio</label>
                                    <input type="text" class="form-control township" id="inputTownship" name="township"
                                    value="<?php 
                                        print_r($data->getViewCropByID($_POST['get_id_cultivo'])[7]);
                                    ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="inputTown">Localidad</label>
                                    <input type="text" class="form-control town" id="inputTown" name="town"
                                    value="<?php 
                                        print_r($data->getViewCropByID($_POST['get_id_cultivo'])[8]);
                                    ?>">
                                </div>
                            </div>
                            <!--
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="inputTipoSuelo">Tipo de suelo</label>
                                    <select name="groundType" class="form-control" id="inputTipoSuelo">
                                        <option value="natural">Natural</option>
                                        <option value="artificial">Artificial</option>
                                    </select>
                                </div>
                            </div>-->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button name="modifCrop" type="submit" class="btn btn-success">Aceptar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    

    <!--Modal modifiacr suelo--> 
    <div class="modal fade" id="modalModifSuelo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Modificar cultivo
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                        $data->getGroundForm($_POST['get_id_cultivo'], $_POST['get_tipo_suelo']);
                        
                    ?>
                </div>
                
            </div>
        </div>
    </div>   

   <?php
        if (isset($_POST['modifCrop'])){
            $id_cultivo = $_POST['inputID_cultivo'];
            $nombre_predio = $_POST['name'];
            $hectareas = $_POST['hectares'];
            $tipo_especie = $_POST['specieType'];
            $subspecie = $_POST['subspecie'];
            $variedad = $_POST['variation'];
            $fecha_inicio = $_POST['bornDate'];
            $estado = $_POST['state'];
            $municipio = $_POST['township'];
            $localidad = $_POST['town'];

            $data->modifyCrop($id_cultivo, $nombre_predio, $hectareas, $tipo_especie, $subspecie, $variedad, $fecha_inicio, $estado, $municipio, $localidad);
        }

        
   ?>