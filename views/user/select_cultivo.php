
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
                            print_r($data->getViewCropByID($_GET['id_cultivo'])[0]);
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
            <a href="dashboard.php?id_cultivo=<?php echo $_GET['id_cultivo'];?>&id_suelo=<?php echo $_GET['id_suelo'];?>" class="href text-decoration-none">
                <button type="button" class="btn0 btn-light btn-block p-3 shadow mb-4 text-white" style="font-size: 20px; text-align:center; background-color:#388E3C;">
                    <i class="fas fa-align-left float-left"></i>
                    Datos
                </button>
            </a>
        </div>

        <div class="col-md-4 col-sm-10">
            <a href="dashboard.php?Tracing=<?php echo $_GET['id_cultivo'];?>&Ground=<?php echo $_GET['id_suelo'];?>" class="href text-decoration-none" name="seguimiento">
                <button type="button" class=" btn1 btn btn-light btn-block p-3 shadow mb-4" style="font-size: 20px; text-align:center;">
                    <i class="far fa-chart-bar float-left"></i>
                    Seguimiento
                </button>
            </a>    
        </div>

        <div class="col-md-4 col-sm-10">
            <a href="dashboard.php?Spend=<?php echo $_GET['id_cultivo'];?>&Ground=<?php echo $_GET['id_suelo'];?>" class="href text-decoration-none">
                <button type="button" class="btn2 btn-light btn-block p-3 shadow mb-4" style="font-size: 20px; text-align:center">
                    <i class="fas fa-dollar-sign float-left"></i>
                    Gastos
                </button>
            </a>   
        </div> 
    </div>


    <div class="row mb-5 py-5 border-bottom border-success" style="border-bottom: 2px solid #388E3C!important; ;">

        <div class="col-md-6 col-sm-12 pb-4 px-5 ">  
            <div class="card bg-light p-1 shadow p-0 mb-0 bg-light" style="Border-Radius: 10px;"> 
                <div class="card-header bg-light">
                    <img src="../../img/svg/grain.svg" style="height:35px" class="mb-2" alt="">
                    
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

        <div class="col-md-6 col-sm-12 pb-4 px-5">  
            <div class="card bg-light p-1 shadow p-0 mb-0 bg-light" style="Border-Radius: 10px;"> 
                <div class="card-header bg-light">
                    <img src="../../img/svg/growing-plant.svg" style="height:35px" class="mb-2" alt="">
                    
                    <br>
                    <h4>Datos del suelo</h4>
                </div>

                <div class="card-body pt-3">
                    <a data-toggle="modal" data-target="<?php 
                        if($_GET['id_suelo'] == 'artificial'){
                            echo '#modalModifSueloArt';
                        }else{
                            echo '#modalModifSueloNat';
                        }
                            
                        
                    
                    ?>" class="close">
                        <img src="../../img/svg/edit-24px.svg"class="mb-2" alt="">
                    </a>
                    <a data-toggle="modal" data-target="#modalSuelo" class="text-success text-left text-decoration-none" href="#">Ver informacion

                    </a>
                </div>                                     
            </div>      
        </div>

                       
    </div> 

    <div class="text-center">
        <h1 class="text-success mt-4">Agroquímicos</h1>
           
    </div>

    <div class="row p-3">
            <a id="addNewAgro" href="dashboard.php?agro" class="btn btn-success ml-auto rounded-circle" role="button"
                data-toggle="tooltip" data-placement="left" title="Agregar nuevo agroquímico">
                <i class="fas fa-plus"></i>
            </a>
    </div>    
                            
    <div class="row"> 
        <?php
            $data->getCardAgro($_GET['id_cultivo']);
        ?> 
    </div>

</div>
    <!--Modales-->
    

    <!---Modal de cultivo-->
    <div class="modal fade" id="modalDatos" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <?php
                        
                            print_r($data->getViewCropByID($_GET['id_cultivo'])[0]);
                        
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
                                
                                    print_r($data->getViewCropByID($_GET['id_cultivo'])[1]);
                                
                                ?>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="lead">Tipo de Especie</p>
                            <p class="text-muted">
                                <?php
                               
                                    print_r($data->getViewCropByID($_GET['id_cultivo'])[2]);
                                
                                ?>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="lead">Subespecie</p>
                            <p class="text-muted">
                                <?php
                                
                                    print_r($data->getViewCropByID($_GET['id_cultivo'])[3]);
                                
                                ?>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="lead">Variedad</p>
                            <p class="text-muted">
                                <?php
                               
                                    print_r($data->getViewCropByID($_GET['id_cultivo'])[4]);
                                
                                ?>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="lead">Fecha de Inicio</p>
                            <p class="text-muted">
                                <?php
                                
                                    
                                
                                    $fecha = $data->getViewCropByID($_GET['id_cultivo'])[5];
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
                               
                                    print_r($data->getViewCropByID($_GET['id_cultivo'])[6]);
                                
                                ?>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="lead">Municipio</p>
                            <p class="text-muted">
                                <?php
                                
                                    print_r($data->getViewCropByID($_GET['id_cultivo'])[7]);
                                
                                ?>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="lead">Localidad</p>
                            <p class="text-muted">
                                <?php
                               
                                print_r($data->getViewCropByID($_GET['id_cultivo'])[8]);
                            
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
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <?php
                        print_r($data->getGroundViewByID($_GET['id_cultivo'])[0]);
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
                                print_r($data->getGroundViewByID($_GET['id_cultivo'])[1]);
                                ?>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="lead">Riego</p>
                            <p class="text-muted">
                                <?php   
                                print_r($data->getGroundViewByID($_GET['id_cultivo'])[2]);
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
        <div class="modal-dialog modal-lg" role="document">
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
                    <form class="crop" action="#" method="POST">
                        <input type="text" name="inputID_cultivo" id="id_cultivo" 
                            value="<?php 
                                        print_r($data->getViewCropByID($_GET['id_cultivo'])[11]);
                                    ?>" style="display: none;">            
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="inputName">Nombre predio</label>
                                    <input type="text" class="form-control" id="inputName" name="namecrop" value="<?php 
                                        print_r($data->getViewCropByID($_GET['id_cultivo'])[0]);
                                    ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="inputHectare">Hectáreas</label>
                                    <input type="number" class="form-control" id="inputHectare" name="hectares"value="<?php 
                                        print_r($data->getViewCropByID($_GET['id_cultivo'])[1]);
                                    ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="inputSpecie">Tipo de especie</label>
                                    <select name="specieType" class="form-control" id="inputSpecie">
                                  
                                        <option disabled>Selecciona una especie</option>
                                        
                                        <?php
                                            //echo '<option value="'. $data->getViewCropByID($_GET["id_cultivo"])[2] .'" selected ></option>' ;
                                            $data->getSpecie($data->getViewCropByID($_GET["id_cultivo"])[2]);
                                            
                                        ?>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="inputSubspecie">Subespecie</label>
                                    <select name="subspecie" class="form-control" id="inputSubspecie">
                                        <option disabled>Selecciona una subespecie</option>
                                        <?php 
                                            $data->getSubspecie($data->getViewCropByID($_GET['id_cultivo'])[3]);
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="inputVariation">Variedad</label>
                                    <input type="text" name="variation" class="form-control" id="inputVariation" value="<?php 
                                        print_r($data->getViewCropByID($_GET['id_cultivo'])[4]);
                                    ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="inputDate">Fecha de inicio</label>
                                    <input type="date" class="form-control" id="inputDate" name="bornDate" value="<?php 
                                        print_r($data->getViewCropByID($_GET['id_cultivo'])[5]);
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
                                        print_r($data->getViewCropByID($_GET['id_cultivo'])[6]);
                                    ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="inputTownship">Municipio</label>
                                    <input type="text" class="form-control township" id="inputTownship" name="township"
                                    value="<?php 
                                        print_r($data->getViewCropByID($_GET['id_cultivo'])[7]);
                                    ?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="inputTown">Localidad</label>
                                    <input type="text" class="form-control town" id="inputTown" name="town"
                                    value="<?php 
                                        print_r($data->getViewCropByID($_GET['id_cultivo'])[8]);
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


    <!--Modal modifiacr suelo artificial--> 
    <div class="modal fade" id="modalModifSueloArt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Modificar suelo artificial
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="" method="post">
                    <input type="text" name="inputID_Cultivo" id="id_cultivo" value="
                        <?php 
                            print_r($data->getViewCropByID($_GET['id_cultivo'])[11]);
                        ?>" style="display: none;">
                    <input type="text" name ="inputID_suelo_art" style="display: none;" value="
                        <?php 
                            print_r($data->getGroundViewByID($_GET['id_cultivo'])[3]);
                        ?>
                    ">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="inputSustrato">Sustrato</label>
                                <select class="form-control" id="inputSustrato" name="inputSustrato">
                                    <option disabled>Seleccione un sustrato</option>
                                    <?php
                                    $data->getSubstract($data->getGroundViewByID($_GET['id_cultivo'])[0]);
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="inputInfra">Infraestructura</label>
                                <select class="form-control" id="inputInfra" name="inputInfra">
                                    <option disabled>Seleccione la Infraestructura</option>
                                    <?php
                                    $data->getInfrastucture($data->getGroundViewByID($_GET['id_cultivo'])[1]);
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="inputWatering">Riego</label>
                                <select class="form-control" id="inputWatering" name="inputWatering">
                                    <option disabled>Seleccione el riego</option>
                                    <?php
                                    $data->getWatering($data->getGroundViewByID($_GET['id_cultivo'])[2]);
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button name="modifGroundArt" type="submit" class="btn btn-success">Aceptar</button>
                    </div>
                </form>
                </div>
                
            </div>
        </div>
    </div> 
    
    <!--Modal modifiacr suelo natural--> 
    <div class="modal fade" id="modalModifSueloNat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Modificar suelo natural
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form class="groundre" action="" method="POST">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <input type="text" name="inputID_Cultivo" id="id_cultivo" value="
                                    <?php 
                                        print_r($data->getViewCropByID($_GET['id_cultivo'])[11]);
                                    ?>" style="display: none;">
                                <input type="text" name ="inputID_suelo_nat" style="display: none;" value="
                                    <?php 
                                        print_r($data->getGroundViewByID($_GET['id_cultivo'])[18]);
                                    ?>
                                ">
                                <label for="inputType">Tipo</label>
                                <select class="form-control" id="inputType" name="inputType">
                                    <option disabled>Elige un suelo</option>
                                    <?php
                                    $data->getGroundType($data->getGroundViewByID($_GET['id_cultivo'])[0]);
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="inputInfra">Infraestructura</label>
                                <select class="form-control" id="inputInfra" name="inputInfra">
                                    <option disabled>Elige una infraestructura</option>
                                    <?php
                                    $data->getInfrastucture($data->getGroundViewByID($_GET['id_cultivo'])[1]);
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="inputWatering">Riego</label>
                                <select class="form-control" id="inputWatering" name="inputWatering">
                                    <option disabled>Elige una infraestructura</option>
                                    <?php
                                    $data->getWatering($data->getGroundViewByID($_GET['id_cultivo'])[2]);
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="inputPH">PH</label>
                                <input type="number" class="form-control" id="inputPH" name="inputPH"  min="0" max="14" value = 
                                    <?php 
                                        print_r($data->getGroundViewByID($_GET['id_cultivo'])[3]);
                                    ?>
                                >
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="inputSalinity">Salinidad</label>
                                <input type="number" class="form-control" id="inputSalinity" name="inputSalinity"  min="0" value = 
                                    <?php 
                                        print_r($data->getGroundViewByID($_GET['id_cultivo'])[4]);
                                    ?>
                                >
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="inputConduc">Conductividad eléctrica</label>
                                <input type="number" class="form-control" id="inputConduc" name="inputConduc" value = 
                                    <?php 
                                        print_r($data->getGroundViewByID($_GET['id_cultivo'])[5]);
                                    ?>
                                >
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="container" style="margin-top: 20px; margin-bottom: 40px; ">
                    <h3 class="modal-title text-muted text-center" id="exampleModalScrollableTitle">Nutrición</h3>
                    </div> 
                    <div class="row mt-4">
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <label for="rangeOrganic">Materia orgánica</label>
                            <input type="range" class="custom-range" min="0" max="100" step="1" autocomplete="off" id="rangeOrganic" name="rangeOrganic" value = 
                                    <?php 
                                        print_r($data->getGroundViewByID($_GET['id_cultivo'])[6]);
                                    ?>
                                >
                            <div id="etiqueta1" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <label for="rangeZinc">Zinc</label>
                            <input type="range" class="custom-range" min="0"  max="100" step="1" id="rangeZinc" name="rangeZinc" value = 
                                    <?php 
                                        print_r($data->getGroundViewByID($_GET['id_cultivo'])[7]);
                                    ?>
                                >
                            <div id="etiqueta2" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <label for="rangeNitrates">Nitrátos</label>
                            <input type="range" class="custom-range " min="0"  max="100" step="1" id="rangeNitrates" name="rangeNitrates" value = 
                                    <?php 
                                        print_r($data->getGroundViewByID($_GET['id_cultivo'])[8]);
                                    ?>
                                >
                            <div id="etiqueta3" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <label for="rangePhosphor">Fósforo</label>
                            <input type="range" class="custom-range " min="0"  max="100" step="1" id="rangePhosphor" name="rangePhosphor" value = 
                                    <?php 
                                        print_r($data->getGroundViewByID($_GET['id_cultivo'])[9]);
                                    ?>
                                >
                            <div id="etiqueta4" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <label for="rangePota">Potasio</label>
                            <input type="range" class="custom-range " min="0"  max="100" step="1" id="rangePota" name="rangePota" value = 
                                    <?php 
                                        print_r($data->getGroundViewByID($_GET['id_cultivo'])[10]);
                                    ?>
                                >
                            <div id="etiqueta5" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <label for="rangeMang">Manganeso</label>
                            <input type="range" class="custom-range " min="0"  max="100" step="1" id="rangeMang" name="rangeMang" value = 
                                    <?php 
                                        print_r($data->getGroundViewByID($_GET['id_cultivo'])[11]);
                                    ?>
                                >
                            <div id="etiqueta6" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <label for="rangeCalc">Calcio</label>
                            <input type="range" class="custom-range " min="0" max="100" step="1" id="rangeCalc" name="rangeCalc" value = 
                                    <?php 
                                        print_r($data->getGroundViewByID($_GET['id_cultivo'])[12]);
                                    ?>
                                >
                            <div id="etiqueta7" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <label for="rangeCopper">Cobre</label>
                            <input type="range" class="custom-range " min="0" max="100" step="1" id="rangeCopper" name="rangeCopper" value = 
                                    <?php 
                                        print_r($data->getGroundViewByID($_GET['id_cultivo'])[13]);
                                    ?>
                                >
                            <div id="etiqueta8" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <label for="rangeAz">Óxido de azufre</label>
                            <input type="range" class="custom-range " min="0" max="100" step="1" id="rangeAz" name="rangeAz" value = 
                                    <?php 
                                        print_r($data->getGroundViewByID($_GET['id_cultivo'])[14]);
                                    ?>
                                >
                            <div id="etiqueta9" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <label for="rangeBor">Boro</label>
                            <input type="range" class="custom-range " min="0"  max="100" step="1" id="rangeBor" name="rangeBor" value = 
                                    <?php 
                                        print_r($data->getGroundViewByID($_GET['id_cultivo'])[15]);
                                    ?>
                                >
                            <div id="etiqueta10" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <label for="rangeMag">Magnesio</label>
                            <input type="range" class="custom-range " min="0" max="100" step="1" id="rangeMag" name="rangeMag" value = 
                                    <?php 
                                        print_r($data->getGroundViewByID($_GET['id_cultivo'])[16]);
                                    ?>
                                >
                            <div id="etiqueta11" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <label for="rangeOxygen">Oxígeno</label>
                            <input type="range" class="custom-range " min="0" max="100" step="1" id="rangeOxygen" name="rangeOxygen" value = 
                                    <?php 
                                        print_r($data->getGroundViewByID($_GET['id_cultivo'])[17]);
                                    ?>
                                >
                            <div id="etiqueta12" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button name="modifGroundNat" type="submit" class="btn btn-success">Aceptar</button>
                    </div>
                </form>
                </div>
                
            </div>
        </div>
    </div>   

   <?php
        if (isset($_POST['modifCrop'])){
            $id_cultivo = $_POST['inputID_cultivo'];
            $nombre_predio = $_POST['namecrop'];
            $hectareas = $_POST['hectares'];
            $tipo_especie = $_POST['specieType'];
            $subspecie = $_POST['subspecie'];
            $variedad = $_POST['variation'];
            $fecha_inicio = $_POST['bornDate'];
            $estado = $_POST['state'];
            $municipio = $_POST['township'];
            $localidad = $_POST['town'];

            $data->modifyCrop($id_cultivo, $nombre_predio, $hectareas, $tipo_especie, $subspecie, $variedad, $fecha_inicio, $estado, $municipio, $localidad);
            header('Location: dashboard.php?id_cultivo='.$_GET['id_cultivo'].'&id_suelo='.$_GET['id_suelo'].'');
        }
        
        if (isset($_POST['modifGroundNat'])){
            $id_cultivo = $_POST['inputID_Cultivo'];
            $id_suelo_natural = $_POST['inputID_suelo_nat'];
            $tipo_suelo = $_POST['inputType'];
            $infraestructura = $_POST['inputInfra'];
            $riego = $_POST['inputWatering'];
            $ph = $_POST['inputPH'];
            $salinidad = $_POST['inputSalinity'];
            $conduc_elec = $_POST['inputConduc'];
            $materia_organica = $_POST['rangeOrganic'];
            $zinc = $_POST['rangeZinc'];
            $nitratos = $_POST['rangeNitrates'];
            $fosforo = $_POST['rangePhosphor'];
            $potasio = $_POST['rangePota'];
            $manganeso = $_POST['rangeMang'];
            $calcio = $_POST['rangeCalc'];
            $cobre = $_POST['rangeCopper'];
            $oxido_azufre = $_POST['rangeAz'];
            $boro = $_POST['rangeBor'];
            $magnesio = $_POST['rangeMag'];
            $oxigeno = $_POST['rangeOxygen'];

            $data->modifyNaturalGround($id_cultivo, $id_suelo_natural, $tipo_suelo, $infraestructura, $riego, $ph, $salinidad, $conduc_elec, $materia_organica, $zinc, $nitratos, $fosforo, $potasio, $manganeso, $calcio, $cobre, $oxido_azufre, $boro, $magnesio, $oxigeno);
            header('Location: dashboard.php?id_cultivo='.$_GET['id_cultivo'].'&id_suelo='.$_GET['id_suelo'].'');
        }

        if (isset($_POST['modifGroundArt'])){
            $id_cultivo = $_POST['inputID_Cultivo'];
            $id_suelo_artificial = $_POST['inputID_suelo_art'];
            $sustrato = $_POST['inputSustrato'];
            $infraestructura = $_POST['inputInfra'];
            $riego = $_POST['inputWatering'];

            $data->modifyGroundArt($id_cultivo, $id_suelo_artificial, $sustrato, $infraestructura, $riego);
            header('Location: dashboard.php?id_cultivo='.$_GET['id_cultivo'].'&id_suelo='.$_GET['id_suelo'].'');
        }

        if (isset($_POST['modifAgro'])){
            $id_cultivo = $_POST['input_id_cultivo'];
            $id_agroquimico = $_POST['input_id_agroquimico'];
            $origen = $_POST['origin'];
            $nombre_comercial = $_POST['name_agroq'];
            $precio = $_POST['precio'];
            $moneda = $_POST['moneda'];
            $cantidad = $_POST['cantidad'];
            $unidad = $_POST['unidad'];
            $dosis = $_POST['dosis'];
            $tiempo = $_POST['tiempo'];
            $frecuencia = $_POST['frecuencia'];
            $fecha_inicio = $_POST['fecha_inicio'];
            $fecha_fin = $_POST['fecha_fin'];
            $existencia = $_POST['existencia'];

            if ($origen == "Enfermedad") {
                $tipo_causa = $_POST['enfermedad'];
            } else if ($origen == "Plaga") {
                $tipo_causa = $_POST['plaga'];
            } else {
                $tipo_causa = $_POST['nutricion'];
            }
            

            $data->modifyAgro($id_cultivo, $id_agroquimico, $origen, $nombre_comercial, $precio, $moneda, $cantidad, $unidad, $dosis, $tiempo, $tipo_causa, $frecuencia, $fecha_inicio, $fecha_fin, $existencia);
            header('Location: dashboard.php?id_cultivo='.$_GET['id_cultivo'].'&id_suelo='.$_GET['id_suelo'].'');
        }
   ?>

    
