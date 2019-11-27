<header class="bg-light p-4 pt-5 mt-4">
<div class="container text-center">
    <div class="row">
        
        <div class="col-lg-12 col-md-12 col-sm-12">
            <img src="../../img/svg/add.svg" style="height:60px;">
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-muted">
                    Nuevo registro
                </h4>
            </div>
        </div>
    </div>
</div>
</header>

<main class="container pt-4">
    <div class="row col-sm-12 col-md-12 col-lg-12 text-center mb-4">
        <span class="col-sm-2 col-md-3 col-lg-3"></span>

        <span class="col-4 col-sm-3 col-md-2 col-lg-2 text-center text-decoration-none">
            <a href="#!">
                <img src="../../img/svg/grain.svg" alt="" style="height:35px">
                <p class="text-muted">Cultivo</p>
            </a>
        </span>

        <span class="col-4 col-sm-3 col-md-2 col-lg-2 text-center text-decoration-none">
            <a href="#!">
                <img src="../../img/svg/growing-plant.svg" alt="" style="height:35px;">
                <p class="text-muted">Suelo</p>
            </a>
        </span>

        <span class="col-4 col-sm-3 col-md-2 col-lg-2 text-center text-decoration-none">
            <a href="#!">
                <img src="../../img/svg/plant-sample.svg" alt="" style="height:60px">
                <p class="text-muted">Agroquímico</p>
            </a>
        </span>

        <span class="col-sm-2 col-md-3 col-lg-3"></span>
    </div>

    <form class="reg_agro" action="" method="post">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputAplicacion">Aplicación</label>
                    <select class="form-control" id="inputAplicacion" name="origin">
                        <option value="Nutriente">Nutriente</option>
                        <option value="Enfermedad">Enfermedad</option>
                        <option value="Plaga">Plaga</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputNombreComercial">Nombre comercial</label>
                    <input  placeholder="Nutriplant" class="form-control" id="inputNombreComercial" name="name_agroq">
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="form-group">
                    <label for="inputPrecio">Precio
                        <i class="icon-grey-color fas fa-question-circle"
                                data-toggle="tooltip" data-placement="top" title="Selecciona un número con las flechas o escríbelo"></i>
                    </label>
                    <input type="number" min="1" placeholder="..." class="form-control" id="inputPrecio" name="precio">
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="form-group">
                    <label for="inputMoneda">Moneda</label>
                    <select class="form-control" id="inputMoneda" name="moneda">
                        <option value="pesos">Pesos Mexicanos</option>
                        <option value="dolar">Dolar</option>
                        <option value="euro">Euro</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="form-group">
                    <label for="inputCantidad">Cantidad
                        <i class="icon-grey-color fas fa-question-circle"
                                    data-toggle="tooltip" data-placement="top" title="Selecciona un número con las flechas o escríbelo"></i>
                    </label>
                    <input type="number" min="1" placeholder="..." class="form-control" id="inputCantidad" name="cantidad">
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
                        <i class="icon-grey-color fas fa-question-circle"
                                    data-toggle="tooltip" data-placement="top" title="Selecciona un número con las flechas o escríbelo"></i>
                    </label>
                    <input type="number" min="1" placeholder="..." class="form-control" id="inputDosis" name="dosis">
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="form-group">
                    <label for="inputUnidadDosis">Unidad</label>
                    <select class="form-control" id="inputUnidadDosis" name="unidad_dosis">
                    <option value="ml">Mililitros</option>
                        <option value="l">Litros</option>
                        <option value="g">Gramos</option>
                        <option value="Kg">Kilogramos</option>
                    </select>
                </div>
            </div>


            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <!--Si el campo aplicacion es Nutriente-->
                    <div id="inputTipo">
                        <label for="inputTipo">Tipo</label>
                        <select class="form-control" name="nutricion">
                            <option value="micro">Micronutrientes</option>
                            <option value="macro">Macronutrientes</option>
                        </select>
                    </div>
                    <!--Si el campo aplicacion es Enfermedad-->
                    <div id="inputCausaE">
                        <label for="inputTipo">Causa</label>
                        <select class="form-control" name="enfermedad">
                            <option disabled>Elige una enfermedad</option>
                            <?php 
                                $data->getDiseases("");
                            ?>
                        </select>
                    </div>
                    <!--Si el campo aplicacion es Plaga-->
                    <div id="inputCausaP">
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
                        <option value="Diario">Diario</option>
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
                    <input type="datepicker" placeholder="Fecha" class="form-control" id="inputFechaInicio" name="fecha_inicio">
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="form-group">
                    <label for="inputFechaFinal">Fecha de fin</label>
                    <input type="datepicker" placeholder="Fecha" class="form-control" id="inputFechaFinal" name="fecha_fin">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputExistencia">Existencia
                        <i class="icon-grey-color fas fa-question-circle"
                                    data-toggle="tooltip" data-placement="top" title="Selecciona un número con las flechas o escríbelo"></i>
                    </label>
                    <input type="number" min="1" placeholder="..." class="form-control" id="inputExistencia" name="existencia">
                </div>
            </div>

        </div>
        </div>
        <div class="text-center pt-3">
            <button name="guardarAgro" class="btn btn-success btn-lg"><i class="fas fa-save"></i> Guardar</button>
        </div>
    </form>
</main>


<?php

if (isset($_POST['guardarAgro'])) {
    
    $origen = $_POST['origin'];
    $nombre_comer = $_POST['name_agroq'];
    $cantidad = $_POST['cantidad'];
    $unidad = $_POST['unidad'];
    $frecuencia = $_POST['frecuencia'];
    $periodo_ini = $_POST['fecha_inicio'];
    $periodo_fin = $_POST['fecha_fin'];
    $precio = $_POST['precio'];
    $moneda = $_POST['moneda'];
    $dosis = $_POST['dosis'];
    $unidad_dosis = $_POST['unidad_dosis'];


    if ($origen == "Enfermedad") {
        $tipo = $_POST['enfermedad'];
    } else if ($origen == "Plaga") {
        $tipo = $_POST['plaga'];
    } else {
        $tipo = $_POST['nutricion'];
    }

    $existencia = $_POST['existencia'];
    $id_u = $data->getUserId($_SESSION['correo']);

    $data->insertAgro($origen, $nombre_comer, $precio, $moneda, $cantidad, $unidad, $dosis, $unidad_dosis, $tipo, $frecuencia, $periodo_ini, $periodo_fin, $existencia);
}
?>