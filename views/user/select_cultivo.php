<header class="bg-light p-4 pt-5 mt-4">
    <div class="container text-center">
        <div class="row mb-2">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <a href="dashboard.php" class="close float-left">
                    <i class="fas fa-arrow-left" style="color: #B59B7B;"></i>
                </a>
                <a id="endCrop" class="mt-2 mb-2 text-white btn text-uppercase brown-button float-right" href="#!">Finalizar cultivo</a>
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

    <div class="row mb-5 py-5 border-bottom border-success" style="border-bottom: 2px solid #388E3C !important;">

        <div class="col-md-4 col-sm-10">
            <a href="" class="href text-decoration-none">
                <button type="button" class="btn0 btn-light btn-block p-3 shadow mb-4 text-white"
                    style="font-size: 20px; text-align:center; background-color:#388E3C;">
                    <i class="fas fa-align-left float-left"></i>
                    Datos
                </button>
            </a>
        </div>

        <div class="col-md-4 col-sm-10">
            <a href="dashboard.php?Tracing=<?php echo $_GET['id_cultivo'];?>&Ground=<?php echo $_GET['tipo_suelo'];?>"
                class="href text-decoration-none" name="seguimiento">
                <button type="button" class=" btn1 btn btn-light btn-block p-3 shadow mb-4"
                    style="font-size: 20px; text-align:center;">
                    <i class="far fa-chart-bar float-left"></i>
                    Seguimiento
                </button>
            </a>
        </div>

        <div class="col-md-4 col-sm-10">
            <a href="dashboard.php?Spend=<?php echo $_GET['id_cultivo'];?>&Ground=<?php echo $_GET['tipo_suelo'];?>"
                class="href text-decoration-none">
                <button type="button" class="btn2 btn-light btn-block p-3 shadow mb-4"
                    style="font-size: 20px; text-align:center">
                    <i class="fas fa-dollar-sign float-left"></i>
                    Gastos
                </button>
            </a>
        </div>
    </div>


    <div class="row mb-5 py-5 border-bottom border-success" style="border-bottom: 2px solid #388E3C !important;">

        <div class="col-md-6 col-sm-12 pb-4 px-md-5 px-lg-5">
            <div class="card bg-light p-1 shadow p-0 mb-0 bg-light" style="Border-Radius: 10px;">
                <div class="card-header bg-light">
                    <img src="../../img/svg/grain.svg" style="height:35px" class="mb-2" alt="">

                    <br>
                    <h4>Datos del cultivo</h4>
                </div>

                <div class="card-body pt-3">
                    <a id="modalModifCultivo" class="close">
                        <img src="../../img/svg/edit-24px.svg" class="mb-2" alt="">
                    </a>
                    <a id="modalVer" class="text-success text-left text-decoration-none" href="#!">Ver información

                    </a>

                </div>

            </div>
        </div>

        <div class="col-md-6 col-sm-12 pb-4 px-md-5 px-lg-5">
            <div class="card bg-light p-1 shadow p-0 mb-0 bg-light" style="Border-Radius: 10px;">
                <div class="card-header bg-light">
                    <img src="../../img/svg/growing-plant.svg" style="height:35px" class="mb-2" alt="">

                    <br>
                    <h4>Datos del suelo</h4>
                </div>

                <div class="card-body pt-3">
                    <a id="<?php 
                        if($_GET['tipo_suelo'] == 'artificial'){
                            echo 'modalModifSueloArt';
                        }else{
                            echo 'modalModifSueloNat';
                        }
                    ?>" class="close">
                        <img src="../../img/svg/edit-24px.svg" class="mb-2" alt="">
                    </a>
                    <a id="modalSuelo" class="text-success text-left text-decoration-none" href="#!">Ver información

                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <h1 class="text-success mt-4">Agroquímicos</h1>
        <a id="addNewAgro" class="mt-2 mb-2 text-white btn text-uppercase bg-success" href="#!">Nuevo agroquímico</a>
    </div>



    <div class="row mt-4">
        <?php
            $data->getCardAgro($_GET['id_cultivo']);
        ?>
    </div>



</div>

<!--Modales-->

<!---Modal de cultivo-->
<div style="display: none;">
    <div id="viewCrop">
        <img src='../../img/svg/grain.svg' style='height:70px' class='mb-2'>
        <div class='row'>
            <div class='col-lg-6 col-md-6 col-sm-12'>
                <p class='font-weight-bold'>Nombre del predio</p>
                <p class='text-muted'><?php print_r($data->getViewCropByID($_GET['id_cultivo'])[0]);?></p>
            </div>
            <div class='col-lg-6 col-md-6 col-sm-12'>
                <p class='font-weight-bold'>Hectáreas</p>
                <p class='text-muted'><?php print_r($data->getViewCropByID($_GET['id_cultivo'])[1]);?></p>
            </div>
            <div class='col-lg-6 col-md-6 col-sm-12'>
                <p class='font-weight-bold'>Tipo de Especie</p>
                <p class='text-muted'><?php print_r($data->getViewCropByID($_GET['id_cultivo'])[2]);?></p>
            </div>
            <div class='col-lg-6 col-md-6 col-sm-12'>
                <p class='font-weight-bold'>Subespecie</p>
                <p class='text-muted'><?php print_r($data->getViewCropByID($_GET['id_cultivo'])[3]);?></p>
            </div>
            <div class='col-lg-6 col-md-6 col-sm-12'>
                <p class='font-weight-bold'>Variedad</p>
                <p class='text-muted'><?php print_r($data->getViewCropByID($_GET['id_cultivo'])[4]);?></p>
            </div>
            <div class='col-lg-6 col-md-6 col-sm-12'>
                <p class='font-weight-bold'>Fecha de Inicio</p>
                <p class='text-muted'>
                    <?php $fecha = $data->getViewCropByID($_GET['id_cultivo'])[5];$niu_fecha = explode('-', $fecha);$month = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');print_r($niu_fecha[2] . ' de ' . $month[$niu_fecha[1] - 1] . ' de ' . $niu_fecha[0]);?>
                </p>
            </div>
            <div class='col-lg-6 col-md-6 col-sm-12'>
                <p class='font-weight-bold'>Estado</p>
                <p class='text-muted'><?php print_r($data->getViewCropByID($_GET['id_cultivo'])[6]);?></p>
            </div>
            <div class='col-lg-6 col-md-6 col-sm-12'>
                <p class='font-weight-bold'>Municipio</p>
                <p class='text-muted'><?php print_r($data->getViewCropByID($_GET['id_cultivo'])[7]);?></p>
            </div>
            <div class='col-lg-6 col-md-6 col-sm-12'>
                <p class='font-weight-bold'>Localidad</p>
                <p class='text-muted'><?php print_r($data->getViewCropByID($_GET['id_cultivo'])[8]);?></p>
            </div>
        </div>

    </div>
</div>
<script>
    var viewCrop = document.getElementById("viewCrop");
    document.getElementById("modalVer").addEventListener("click", function () {

        Swal.fire({
            title: "<?php print_r($data->getViewCropByID($_GET['id_cultivo'])[0]);?>",
            showCloseButton: true,
            width: '45rem',
            html: viewCrop,
            showCancelButton: false,
            confirmButtonColor: "#d33",
            confirmButtonText: "Cerrar"
        }).then((result) => {
            if (result.value) {
                //document.location = "dashboard.php?cultivo='.$row['id_cultivo'].'";
            }
        })

    });
</script>

<!---Modal de suelo-->
<div style="display: none;">
    <div id="viewGroundArt">
        <img src='../../img/svg/growing-plant.svg' style='height:70px' class='mb-2'>
        <div class='row'>
            <div class='col-lg-6 col-md-6 col-sm-12'>
                <p class='font-weight-bold'>Infraestructura</p>
                <p class='text-muted'><?php print_r($data->getGroundViewByID($_GET['id_cultivo'])[1]);?></p>
            </div>
            <div class='col-lg-6 col-md-6 col-sm-12'>
                <p class='font-weight-bold'>Riego</p>
                <p class='text-muted'><?php  print_r($data->getGroundViewByID($_GET['id_cultivo'])[2]);?></p>
            </div>
        </div>
    </div>

    <div id="viewGroundNat">
        <img src='../../img/svg/growing-plant.svg' style='height:70px' class='mb-2'>
        <div class='row'>
            <div class='col-lg-6 col-md-6 col-sm-12'>
                <p class='font-weight-bold'>Infraestructura</p>
                <p class='text-muted'><?php print_r($data->getGroundViewByID($_GET['id_cultivo'])[1]);?></p>
            </div>

            <div class='col-lg-6 col-md-6 col-sm-12'>
                <p class='font-weight-bold'>Riego</p>
                <p class='text-muted'><?php  print_r($data->getGroundViewByID($_GET['id_cultivo'])[2]);?></p>
            </div>

            <div class='col-lg-6 col-md-6 col-sm-12'>
                <p class='font-weight-bold'>PH</p>
                <p class='text-muted'><?php  print_r($data->getGroundViewByID($_GET['id_cultivo'])[3]);?>
                </p>
            </div>

            <div class='col-lg-6 col-md-6 col-sm-12'>
                <p class='font-weight-bold'>Salinidad</p>
                <p class='text-muted'><?php  print_r($data->getGroundViewByID($_GET['id_cultivo'])[4]);?></p>
            </div>

            <div class='col-lg-6 col-md-6 col-sm-12'>
                <p class='font-weight-bold'>Conductividad eléctrica</p>
                <p class='text-muted'><?php  print_r($data->getGroundViewByID($_GET['id_cultivo'])[5]);?></p>
            </div>

            <div class='col-lg-6 col-md-6 col-sm-12'>
                <p class='font-weight-bold'>Materia orgánica</p>
                <p class='text-muted'><?php  print_r($data->getGroundViewByID($_GET['id_cultivo'])[6]);?></p>
            </div>
            <div class='col-lg-6 col-md-6 col-sm-12'>
                <p class='font-weight-bold'>Zinc</p>
                <p class='text-muted'><?php  print_r($data->getGroundViewByID($_GET['id_cultivo'])[7]);?></p>
            </div>
            <div class='col-lg-6 col-md-6 col-sm-12'>
                <p class='font-weight-bold'>Nitratos</p>
                <p class='text-muted'><?php  print_r($data->getGroundViewByID($_GET['id_cultivo'])[8]);?></p>
            </div>
            <div class='col-lg-6 col-md-6 col-sm-12'>
                <p class='font-weight-bold'>Fósforo</p>
                <p class='text-muted'><?php  print_r($data->getGroundViewByID($_GET['id_cultivo'])[9]);?></p>
            </div>
            <div class='col-lg-6 col-md-6 col-sm-12'>
                <p class='font-weight-bold'>Potasio</p>
                <p class='text-muted'><?php  print_r($data->getGroundViewByID($_GET['id_cultivo'])[10]);?></p>
            </div>
            <div class='col-lg-6 col-md-6 col-sm-12'>
                <p class='font-weight-bold'>Manganeso</p>
                <p class='text-muted'><?php  print_r($data->getGroundViewByID($_GET['id_cultivo'])[11]);?></p>
            </div>
            <div class='col-lg-6 col-md-6 col-sm-12'>
                <p class='font-weight-bold'>Calcio</p>
                <p class='text-muted'><?php  print_r($data->getGroundViewByID($_GET['id_cultivo'])[12]);?></p>
            </div>
            <div class='col-lg-6 col-md-6 col-sm-12'>
                <p class='font-weight-bold'>Cobre</p>
                <p class='text-muted'><?php  print_r($data->getGroundViewByID($_GET['id_cultivo'])[13]);?></p>
            </div>
            <div class='col-lg-6 col-md-6 col-sm-12'>
                <p class='font-weight-bold'>Óxido de azufre</p>
                <p class='text-muted'><?php  print_r($data->getGroundViewByID($_GET['id_cultivo'])[14]);?></p>
            </div>
            <div class='col-lg-6 col-md-6 col-sm-12'>
                <p class='font-weight-bold'>Boro</p>
                <p class='text-muted'><?php  print_r($data->getGroundViewByID($_GET['id_cultivo'])[15]);?></p>
            </div>
            <div class='col-lg-6 col-md-6 col-sm-12'>
                <p class='font-weight-bold'>Magnesio</p>
                <p class='text-muted'><?php  print_r($data->getGroundViewByID($_GET['id_cultivo'])[16]);?></p>
            </div>
            <div class='col-lg-6 col-md-6 col-sm-12'>
                <p class='font-weight-bold'>Oxígeno</p>
                <p class='text-muted'><?php  print_r($data->getGroundViewByID($_GET['id_cultivo'])[17]);?></p>
            </div>

        </div>
    </div>
</div>

<script>

    var viewGround;
    var type = "<?php echo $_GET['tipo_suelo'] ?>";
    if (type == "natural") {
        viewGround = document.getElementById("viewGroundNat");
    } else if (type == "artificial") {
        viewGround = document.getElementById("viewGroundArt");
    }
    document.getElementById("modalSuelo").addEventListener("click", function () {

        Swal.fire({
            title: "<?php
                                 print_r($data-> getGroundViewByID($_GET['id_cultivo'])[0]);
                    
                            ?> ",
        showCloseButton: true,
            width: '45rem',
                //icon: 'info',
                html: viewGround,
                    showCancelButton: false,
                        confirmButtonColor: "#d33",
                            confirmButtonText: "Cerrar"
    }).then((result) => {
        if (result.value) {
            //document.location = "dashboard.php?cultivo='.$row['id_cultivo'].'";
        }
    })
            
        });
</script>

<!--Modal modifiacar cultivo-->
<div style="display: none;">
    <form id="crop-form" name="crop" class="crop" action="#" method="POST">
        <input type="text" name="inputID_cultivo" id="id_cultivo" value="<?php 
                            print_r($data->getViewCropByID($_GET['id_cultivo'])[11]);
                        ?>" style="display: none;">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputName">Nombre predio
                        <i class="icon-grey-color fas fa-question-circle" data-toggle="tooltip" data-placement="top"
                            title='Este es el nombre para tu predio, ej. Predio "San José"'></i>
                    </label>
                    <input type="text" class="form-control" id="inputName" name="namecrop" value="<?php 
                            print_r($data->getViewCropByID($_GET['id_cultivo'])[0]);
                        ?>">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputHectare">Hectáreas
                        <i class="icon-grey-color fas fa-question-circle" data-toggle="tooltip" data-placement="top"
                            title="Selecciona un número con las flechas de la derecha o escríbelo"></i>
                    </label>
                    <input type="number" class="form-control" id="inputHectare" name="hectares" value="<?php 
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
                    <label for="inputVariation">Variedad
                        <i class="icon-grey-color fas fa-question-circle" data-toggle="tooltip" data-placement="top"
                            title="¿Qué tipo de cultivo es? Ej. Cherry"></i>
                    </label>
                    <input type="text" name="variation" class="form-control" id="inputVariation" value="<?php 
                            print_r($data->getViewCropByID($_GET['id_cultivo'])[4]);
                        ?>">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputDate">Fecha de inicio
                        <i class="icon-grey-color fas fa-question-circle" data-toggle="tooltip" data-placement="top"
                            title="¿Qué día comienza el cultivo oficialmente?"></i>
                    </label>
                    <input class="form-control" id="inputDate" name="bornDate" value="<?php 
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
                    <input type="text" class="form-control state" id="inputState" name="state" value="<?php 
                            print_r($data->getViewCropByID($_GET['id_cultivo'])[6]);
                        ?>">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputTownship">Municipio</label>
                    <input type="text" class="form-control township" id="inputTownship" name="township" value="<?php 
                            print_r($data->getViewCropByID($_GET['id_cultivo'])[7]);
                        ?>">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputTown">Localidad</label>
                    <input type="text" class="form-control town" id="inputTown" name="town" value="<?php 
                            print_r($data->getViewCropByID($_GET['id_cultivo'])[8]);
                        ?>">
                </div>
            </div>

        </div>
        <div class="swal2">
            <button name="modifCrop" type="submit" class="swal2-confirm swal2-styled"
                style="background-color: #388e3c;">Aceptar</button>
        </div>
    </form>
</div>

<script>
    var form = document.getElementById("crop-form");
    document.getElementById("modalModifCultivo").addEventListener("click", function () {

        Swal.fire({
            title: "Modificar datos del cultivo",
            showCloseButton: true,
            width: '45rem',
            html: form,
            showCancelButton: false,
            showConfirmButton: false,

        }).then((result) => {
            if (result.value) {
                // form.submit();
            }
        })

    });
</script>

<!--Modal modifiacr suelo artificial-->
<div style="display: none;">
    <form id="artground-form" action="" method="post">
        <input type="text" name="inputID_Cultivo" id="id_cultivo" value="
                <?php 
                    print_r($data->getViewCropByID($_GET['id_cultivo'])[11]);
                ?>" style="display: none;">
        <input type="text" name="inputtipo_suelo_art" style="display: none;" value="
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
        <div class="swal2">

            <button name="modifGroundArt" type="submit" class="swal2-confirm swal2-styled"
                style="background-color: #388e3c;">Aceptar</button>
        </div>
    </form>
</div>

<script>
    var formart = document.getElementById("artground-form");
    document.getElementById("modalModifSueloArt").addEventListener("click", function () {

        Swal.fire({
            title: "Modificar datos del suelo",
            showCloseButton: true,
            width: '45rem',
            html: formart,
            showCancelButton: false,
            showConfirmButton: false,

        }).then((result) => {
            if (result.value) {
                //form.submit();
            }
        })

    });
</script>


<!--Modal modifiacr suelo natural-->
<div style="display: none;">
    <form id="natground-form" class="groundre" action="" method="POST">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <input type="text" name="inputID_Cultivo" id="id_cultivo" value="
                            <?php 
                                print_r($data->getViewCropByID($_GET['id_cultivo'])[11]);
                            ?>" style="display: none;">
                    <input type="text" name="inputtipo_suelo_nat" style="display: none;" value="
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
                    <label for="inputPH">PH
                        <i class="icon-grey-color fas fa-question-circle" data-toggle="tooltip" data-placement="top"
                            title="Selecciona un número con las flechas de la derecha o escríbelo"></i>
                    </label>
                    <input type="number" class="form-control" id="inputPH" name="inputPH" min="0" max="14" value=<?php 
                                print_r($data->getGroundViewByID($_GET['id_cultivo'])[3]);
                            ?>>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputSalinity">Salinidad
                        <i class="icon-grey-color fas fa-question-circle" data-toggle="tooltip" data-placement="top"
                            title="Selecciona un número con las flechas de la derecha o escríbelo"></i>
                    </label>
                    <input type="number" class="form-control" id="inputSalinity" name="inputSalinity" min="0" value=<?php 
                                print_r($data->getGroundViewByID($_GET['id_cultivo'])[4]);
                            ?>>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputConduc">Conductividad eléctrica
                        <i class="icon-grey-color fas fa-question-circle" data-toggle="tooltip" data-placement="top"
                            title="Selecciona un número con las flechas de la derecha o escríbelo"></i>
                    </label>
                    <input type="number" class="form-control" id="inputConduc" name="inputConduc" value=<?php 
                                print_r($data->getGroundViewByID($_GET['id_cultivo'])[5]);
                            ?>>


                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 20px; margin-bottom: 40px; ">
            <h3 class="modal-title text-muted text-center" id="exampleModalScrollableTitle">Nutrición</h3>
        </div>
        <div class="row mt-4">
            <div class="col-md-6 col-lg-6 col-sm-12">
                <label for="rangeOrganic">Materia orgánica</label>
                <input type="range" class="custom-range" min="0" max="100" step="1" autocomplete="off" id="rangeOrganic"
                    name="rangeOrganic" value=<?php 
                                print_r($data->getGroundViewByID($_GET['id_cultivo'])[6]);
                            ?>>
                <div id="etiqueta1" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12">
                <label for="rangeZinc">Zinc</label>
                <input type="range" class="custom-range" min="0" max="100" step="1" id="rangeZinc" name="rangeZinc"
                    value=<?php 
                                print_r($data->getGroundViewByID($_GET['id_cultivo'])[7]);
                            ?>>
                <div id="etiqueta2" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12">
                <label for="rangeNitrates">Nitrátos</label>
                <input type="range" class="custom-range " min="0" max="100" step="1" id="rangeNitrates"
                    name="rangeNitrates" value=<?php 
                                print_r($data->getGroundViewByID($_GET['id_cultivo'])[8]);
                            ?>>
                <div id="etiqueta3" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12">
                <label for="rangePhosphor">Fósforo</label>
                <input type="range" class="custom-range " min="0" max="100" step="1" id="rangePhosphor"
                    name="rangePhosphor" value=<?php 
                                print_r($data->getGroundViewByID($_GET['id_cultivo'])[9]);
                            ?>>
                <div id="etiqueta4" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12">
                <label for="rangePota">Potasio</label>
                <input type="range" class="custom-range " min="0" max="100" step="1" id="rangePota" name="rangePota"
                    value=<?php 
                                print_r($data->getGroundViewByID($_GET['id_cultivo'])[10]);
                            ?>>
                <div id="etiqueta5" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12">
                <label for="rangeMang">Manganeso</label>
                <input type="range" class="custom-range " min="0" max="100" step="1" id="rangeMang" name="rangeMang"
                    value=<?php 
                                print_r($data->getGroundViewByID($_GET['id_cultivo'])[11]);
                            ?>>
                <div id="etiqueta6" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12">
                <label for="rangeCalc">Calcio</label>
                <input type="range" class="custom-range " min="0" max="100" step="1" id="rangeCalc" name="rangeCalc"
                    value=<?php 
                                print_r($data->getGroundViewByID($_GET['id_cultivo'])[12]);
                            ?>>
                <div id="etiqueta7" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12">
                <label for="rangeCopper">Cobre</label>
                <input type="range" class="custom-range " min="0" max="100" step="1" id="rangeCopper" name="rangeCopper"
                    value=<?php 
                                print_r($data->getGroundViewByID($_GET['id_cultivo'])[13]);
                            ?>>
                <div id="etiqueta8" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12">
                <label for="rangeAz">Óxido de azufre</label>
                <input type="range" class="custom-range " min="0" max="100" step="1" id="rangeAz" name="rangeAz" value=<?php 
                                print_r($data->getGroundViewByID($_GET['id_cultivo'])[14]);
                            ?>>
                <div id="etiqueta9" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12">
                <label for="rangeBor">Boro</label>
                <input type="range" class="custom-range " min="0" max="100" step="1" id="rangeBor" name="rangeBor"
                    value=<?php 
                                print_r($data->getGroundViewByID($_GET['id_cultivo'])[15]);
                            ?>>
                <div id="etiqueta10" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12">
                <label for="rangeMag">Magnesio</label>
                <input type="range" class="custom-range " min="0" max="100" step="1" id="rangeMag" name="rangeMag"
                    value=<?php 
                                print_r($data->getGroundViewByID($_GET['id_cultivo'])[16]);
                            ?>>
                <div id="etiqueta11" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12">
                <label for="rangeOxygen">Oxígeno</label>
                <input type="range" class="custom-range " min="0" max="100" step="1" id="rangeOxygen" name="rangeOxygen"
                    value=<?php 
                                print_r($data->getGroundViewByID($_GET['id_cultivo'])[17]);
                            ?>>
                <div id="etiqueta12" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
            </div>
        </div>
        <div class="swal2">

            <button name="modifGroundNat" type="submit" class="swal2-confirm swal2-styled"
                style="background-color: #388e3c;">Aceptar</button>
        </div>
    </form>
</div>

<script>
    var formnat = document.getElementById("natground-form");
        document.getElementById("modalModifSueloNat").addEventListener("click", function(){
                        
                Swal.fire({
                    title: "Modificar datos del suelo",
                    showCloseButton: true,
                    width: '50rem',
                    html: formnat,
                    showCancelButton: false,
                    showConfirmButton : false,
                    
                    }).then((result) => {
                    if (result.value) {
                        //form.submit();
                    }
                })
            
        });
    </script>               
    
    <!--Modal agregar agro-->
    <div style="display: none;">
        <form id="addAgro-form"class="reg_agro" action="" method="post">
            <input type="hidden" id="id_cultivo" name="id_cultivo" value="<?php echo $_GET['id_cultivo'];?>">
            <input type="hidden" name="id_agroquimico" id="id_agroquimico">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="inputAplicacion2">Aplicación</label>
                        <select class="form-control" id="inputAplicacion2" name="origin2">
                            <option value="Nutriente">Nutriente</option>
                            <option value="Enfermedad">Enfermedad</option>
                            <option value="Plaga">Plaga</option>
                        </select>
                    </div>
                </div>
            
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputNombreComercial">Nombre comercial</label>
                    <input type="text" placeholder="Nutriplant" class="form-control" id="inputNombreComercial"
                        name="name_agroq">
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="form-group">
                    <label for="inputPrecio">Precio
                        <i class="icon-grey-color fas fa-question-circle" data-toggle="tooltip" data-placement="top"
                            title="Selecciona un número con las flechas o escríbelo"></i>
                    </label>
                    <input type="number" min="0" placeholder="..." class="form-control" id="inputPrecio" name="precio">
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="form-group">
                    <label for="inputMoneda">Moneda</label>
                    <select class="form-control" id="inputMoneda" name="moneda">
                        <option value="pesos">Pesos</option>
                        <option value="dolar">Dolar</option>
                        <option value="euro">Euro</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="form-group">
                    <label for="inputCantidad">Cantidad
                        <i class="icon-grey-color fas fa-question-circle" data-toggle="tooltip" data-placement="top"
                            title="Selecciona un número con las flechas o escríbelo"></i>
                    </label>
                    <input type="number" min="0" placeholder="..." class="form-control" id="inputCantidad"
                        name="cantidad">
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="form-group">
                    <label for="inputUnidad">Unidad</label>
                    <select class="form-control" id="inputUnidad" name="unidad">
                        <option value="ml">Mililitros</option>
                        <option value="l">Litros</option>
                        <option value="g">Gramos</option>
                        <option value="Kg">Kilogramos</option>
                    </select>
                </div>
            </div>


            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="form-group">
                    <label for="inputDosis">Dosis
                        <i class="icon-grey-color fas fa-question-circle" data-toggle="tooltip" data-placement="top"
                            title="Selecciona un número con las flechas o escríbelo"></i>
                    </label>
                    <input type="number" min="0" placeholder="..." class="form-control" id="inputDosis" name="dosis">
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="form-group">
                    <label for="inputUnidadDosis">Unidad</label>
                    <select class="form-control" id="inputUnidadDosis" name="unidad_dosis">
                        <option value="ml">Mililitros</option>
                        <option value="l">Litros</option>
                        <option value="g">Gramos</option>
                        <option value="kg">Kilogramos</option>
                    </select>
                </div>
            </div>


            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <!--Si el campo aplicacion es Nutriente-->
                    <div id="inputTipo2">
                        <label for="inputTipo">Tipo</label>
                        <select class="form-control" name="nutricion" id="nutricion">
                            <option value="micro">Micronutrientes</option>
                            <option value="macro">Macronutrientes</option>
                        </select>
                    </div>
                    <!--Si el campo aplicacion es Enfermedad-->
                    <div id="inputCausaE2">
                        <label for="inputTipo">Causa</label>
                        <select class="form-control" name="enfermedad">
                            <option disabled>Elige una enfermedad</option>
                            <?php 
                                    $data->getDiseases("");
                                ?>
                        </select>
                    </div>
                    <!--Si el campo aplicacion es Plaga-->
                    <div id="inputCausaP2">
                        <label for="inputTipo">Causa</label>
                        <select class="form-control" name="plaga">
                            <option disabled>Selecciona una plaga</option>
                            <?php
                                    $data->getBugs("");
                                ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputFrecuencia">Frecuencia</label>
                    <select class="form-control" id="inputFrecuencia" name="frecuencia">
                        <?php 
                            for ($i=1; $i < 16; $i++) { 
                                echo "<option value='Cada ".$i." dias'>Cada ".$i." días</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="form-group">
                    <label for="inputFechaInicio">Fecha de inicio</label>
                    <input placeholder="Selec. fecha" class="form-control" id="inputInicio" name="fecha_inicio">
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="form-group">
                    <label for="inputFechaFinal">Fecha de fin</label>
                    <input placeholder="Selec. fecha" class="form-control" id="inputFinal" name="fecha_fin">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputExistencia">Existencia
                        <i class="icon-grey-color fas fa-question-circle" data-toggle="tooltip" data-placement="top"
                            title="Selecciona un número con las flechas o escríbelo"></i>
                    </label>
                    <input type="number" min="0" placeholder="..." class="form-control" id="inputExistencia"
                        name="existencia">
                </div>
            </div>

        </div>

        <div class="swal2">

            <button id="addAgro" name="addAgro" type="submit" class="swal2-confirm swal2-styled"
                style="background-color: #388e3c;">Aceptar</button>
        </div>
    </form>
</div>

<script>
    var formagro = document.getElementById("addAgro-form");
    document.getElementById("addNewAgro").addEventListener("click", function () {

        Swal.fire({
            title: "Nuevo agroquímico",
            showCloseButton: true,
            width: '50rem',
            html: formagro,
            showCancelButton: false,
            showConfirmButton: false,

        }).then((result) => {
            if (result.value) {
                //form.submit();
            }
        })

    });
</script>

<script>
    document.getElementById("endCrop").addEventListener("click", function(){
        
            Swal.fire({
                title: "Atención",
                text: "¿Está seguro que desea finalizar este cultivo? Podrá reinciar su perido más tarde, en historial de cultivos",
                icon: "info",
                showCancelButton: true,
                confirmButtonColor: "#388e3c",
                cancelButtonColor: "#78909c",
                cancelButtonText: "Cancelar",
                confirmButtonText: "Finalizar"
                }).then((result) => {
                if (result.value) {
                    document.location = "dashboard.php?end=<?php echo $_GET['id_cultivo']; ?>";
                }
            })
        
    });
</script>





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
            header('Location: dashboard.php?id_cultivo='.$_GET['id_cultivo'].'&tipo_suelo='.$_GET['tipo_suelo'].'');
        }
        
        if (isset($_POST['modifGroundNat'])){
            $id_cultivo = $_POST['inputID_Cultivo'];
            $tipo_suelo_natural = $_POST['inputtipo_suelo_nat'];
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

            $data->modifyNaturalGround($id_cultivo, $tipo_suelo_natural, $tipo_suelo, $infraestructura, $riego, $ph, $salinidad, $conduc_elec, $materia_organica, $zinc, $nitratos, $fosforo, $potasio, $manganeso, $calcio, $cobre, $oxido_azufre, $boro, $magnesio, $oxigeno);
            header('Location: dashboard.php?id_cultivo='.$_GET['id_cultivo'].'&tipo_suelo='.$_GET['tipo_suelo'].'');
        }

        if (isset($_POST['modifGroundArt'])){
            $id_cultivo = $_POST['inputID_Cultivo'];
            $tipo_suelo_artificial = $_POST['inputtipo_suelo_art'];
            $sustrato = $_POST['inputSustrato'];
            $infraestructura = $_POST['inputInfra'];
            $riego = $_POST['inputWatering'];

            $data->modifyGroundArt($id_cultivo, $tipo_suelo_artificial, $sustrato, $infraestructura, $riego);
            header('Location: dashboard.php?id_cultivo='.$_GET['id_cultivo'].'&tipo_suelo='.$_GET['tipo_suelo'].'');
        }

        if (isset($_POST['modifAgro'])){
            $id_cultivo = $_POST['input_id_cultivo'];
            $id_agroquimico = $_POST['input_id_agroquimico'];
            //$origen = $_POST['origin'];
            $nombre_comercial = $_POST['name_agroq'];
            $precio = $_POST['precio'];
            $moneda = $_POST['moneda'];
            $cantidad = $_POST['cantidad'];
            $unidad = $_POST['unidad'];
            $dosis = $_POST['dosis'];
            $unidad_dosis = $_POST['unidad_dosis'];
            $frecuencia = $_POST['frecuencia'];
            $fecha_inicio = $_POST['fecha_inicio'];
            $fecha_fin = $_POST['fecha_fin'];
            $existencia = $_POST['existencia'];
            $tipo_causa = $_POST['tipo_causa'];
            
            

            $data->modifyAgro($id_cultivo, $id_agroquimico, $nombre_comercial, $precio, $moneda, $cantidad, $unidad, $dosis, $unidad_dosis, $tipo_causa, $frecuencia, $fecha_inicio, $fecha_fin, $existencia);
            header('Location: dashboard.php?id_cultivo='.$_GET['id_cultivo'].'&tipo_suelo='.$_GET['tipo_suelo'].'');
        }

        if(isset($_POST['addAgro'])){
            $id_cultivo = $_POST['id_cultivo'];
            $aplicacion = $_POST['origin2'];
            $nom_comer = $_POST['name_agroq'];
            $precio = $_POST['precio'];
            $moneda = $_POST['moneda'];
            $cantidad = $_POST['cantidad'];
            $unidad = $_POST['unidad'];
            $dosis = $_POST['dosis'];
            $unidad_dosis = $_POST['unidad_dosis'];

            if ($aplicacion == "Enfermedad") {
                $tipo = $_POST['enfermedad'];
            } else if ($aplicacion == "Plaga") {
                $tipo = $_POST['plaga'];
            } else {
                $tipo = $_POST['nutricion'];
            }
            
            $frecuencia = $_POST['frecuencia'];
            $fecha_inicio = $_POST['fecha_inicio'];
            $fecha_fin = $_POST['fecha_fin'];
            $existencia = $_POST['existencia'];

            $data->insertNewAgro(
                $id_cultivo,
                $aplicacion,
                $nom_comer,
                $precio,
                $moneda,
                $cantidad,
                $unidad,
                $dosis,
                $unidad_dosis,
                $tipo,
                $frecuencia,
                $fecha_inicio,
                $fecha_fin,
                $existencia
            );

            header('Location: #!');
        }
   ?>