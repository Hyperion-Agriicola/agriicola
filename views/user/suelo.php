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

<main class="container mt-4">
    <div class="row col-sm-12 col-md-12 col-lg-12 text-center mb-4">
        <span class="col-sm-2 col-md-3 col-lg-3"></span>

        <span class="col-4 col-sm-3 col-md-2 col-lg-2 text-center text-decoration-none">
            <a href="#!">
                <img src="../../img/svg/grain.svg" alt="" style="height:35px">
                <p class="text-muted">Cultivo</p>
            </a>
        </span>

        <span class="col-4 col-sm-3 col-md-2 col-lg-2 text-center text-decoration-none">
            <a href="dashboard.php?suelos">
                <img src="../../img/svg/growing-plant.svg" alt="" style="height:60px; color: green;">
                <p class="text-muted">Suelo</p>
            </a>
        </span>

        <span class="col-4 col-sm-3 col-md-2 col-lg-2 text-center text-decoration-none">
            <a href="#!">
                <img src="../../img/svg/plant-sample.svg" alt="" style="height:35px">
                <p class="text-muted">Agroquímico</p>
            </a>
        </span>

        <span class="col-sm-2 col-md-3 col-lg-3"></span>
    </div>

    <form class="groundre" action="" method="POST">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputType">Tipo</label>
                    <select class="form-control" id="inputType" name="inputType">
                        <option disabled>Elige un suelo</option>
                        <?php
                        $data->getGroundType("");
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
                        $data->getInfrastucture("");
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
                        $data->getWatering("");
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputPH">PH</label>
                    <!-- <input type="number" class="form-control" id="inputPH" name="inputPH"  min="0" max="14"> -->
                    <select class="form-control" name="inputPH" id="inputPH" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputSalinity">Salinidad
                        <i class="icon-grey-color fas fa-question-circle"
                            data-toggle="tooltip" data-placement="top" title="Selecciona un número con las flechas de la derecha o escríbelo"></i>
                    </label>
                    <input placeholder="..." type="number" class="form-control" id="inputSalinity" name="inputSalinity"  min="0" required>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputConduc">Conductividad eléctrica
                        <i class="icon-grey-color fas fa-question-circle"
                                data-toggle="tooltip" data-placement="top" title="Selecciona un número con las flechas de la derecha o escríbelo"></i>
                    </label>
                    <input placeholder="..." type="number" class="form-control" id="inputConduc" name="inputConduc" min="0" required>
                </div>
            </div>
        </div>
        <div class="container p-2 text-white" style="margin-top: 0px; margin-bottom: 20px; border-radius: 5px; background-color:#388E3C">
            <h3 class="modal-title text-center" id="exampleModalScrollableTitle">Nutrición</h3>
            <p class="text-center mt-2">En esta zona seleccione el nivel de químicos que tiene su cultivo</p>
        </div> 
        <div class="row mt-4">
            <div class="col-md-6 col-lg-6 col-sm-12">
                <label for="rangeOrganic">Materia orgánica</label>
                <input type="range" class="custom-range" min="0" value="50" max="100" step="1" autocomplete="off" id="rangeOrganic" name="rangeOrganic">
                <div id="etiqueta1" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12">
                <label for="rangeZinc">Zinc</label>
                <input type="range" class="custom-range" min="0" value="50" max="100" step="1" id="rangeZinc" name="rangeZinc">
                <div id="etiqueta2" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12">
                <label for="rangeNitrates">Nitrátos</label>
                <input type="range" class="custom-range " min="0" value="50" max="100" step="1" id="rangeNitrates" name="rangeNitrates">
                <div id="etiqueta3" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12">
                <label for="rangePhosphor">Fósforo</label>
                <input type="range" class="custom-range " min="0" value="50" max="100" step="1" id="rangePhosphor" name="rangePhosphor">
                <div id="etiqueta4" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12">
                <label for="rangePota">Potasio</label>
                <input type="range" class="custom-range " min="0" value="50" max="100" step="1" id="rangePota" name="rangePota">
                <div id="etiqueta5" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12">
                <label for="rangeMang">Manganeso</label>
                <input type="range" class="custom-range " min="0" value="50" max="100" step="1" id="rangeMang" name="rangeMang">
                <div id="etiqueta6" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12">
                <label for="rangeCalc">Calcio</label>
                <input type="range" class="custom-range " min="0" value="50" max="100" step="1" id="rangeCalc" name="rangeCalc">
                <div id="etiqueta7" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12">
                <label for="rangeCopper">Cobre</label>
                <input type="range" class="custom-range " min="0" value="50" max="100" step="1" id="rangeCopper" name="rangeCopper">
                <div id="etiqueta8" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12">
                <label for="rangeAz">Óxido de azufre</label>
                <input type="range" class="custom-range " min="0" value="50" max="100" step="1" id="rangeAz" name="rangeAz">
                <div id="etiqueta9" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12">
                <label for="rangeBor">Boro</label>
                <input type="range" class="custom-range " min="0" value="50" max="100" step="1" id="rangeBor" name="rangeBor">
                <div id="etiqueta10" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12">
                <label for="rangeMag">Magnesio</label>
                <input type="range" class="custom-range " min="0" value="50" max="100" step="1" id="rangeMag" name="rangeMag">
                <div id="etiqueta11" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
            </div>

            <div class="col-md-6 col-lg-6 col-sm-12">
                <label for="rangeOxygen">Oxígeno</label>
                <input type="range" class="custom-range " min="0" value="50" max="100" step="1" id="rangeOxygen" name="rangeOxygen">
                <div id="etiqueta12" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
            </div>
        </div>
        <div class="text-center pt-3">
            <button type="submit" name="suelo_natural" class="btn btn-success btn-lg">
                Siguiente <i class="fas fa-arrow-right"></i></button>
        </div>
    </form>
</main>

<script>
    $(document).ready(function() {
        // Read value on page load
        $("#result b").html($("#customRange").val());

        // Read value on change
        $("#customRange").change(function() {
            $("#result b").html($(this).val());
        });
    });
</script>
<?php

if (isset($_POST['suelo_natural'])) {
    $type = $_POST['inputType'];
    $infra = $_POST['inputInfra'];
    $watering = $_POST['inputWatering'];
    $ph = $_POST['inputPH'];
    $salinity = $_POST['inputSalinity'];
    $conduc = $_POST['inputConduc'];
    $organic = $_POST['rangeOrganic'];
    $zinc = $_POST['rangeZinc'];
    $nitra = $_POST['rangeNitrates'];
    $phosphore = $_POST['rangePhosphor'];
    $pota = $_POST['rangePota'];
    $manga = $_POST['rangeMang'];
    $calc = $_POST['rangeCalc'];
    $copper = $_POST['rangeCopper'];
    $azu = $_POST['rangeAz'];
    $bor = $_POST['rangeBor'];
    $magne = $_POST['rangeMag'];
    $oxygen = $_POST['rangeOxygen'];

    $data->insertNatural(
        $type,
        $infra,
        $watering,
        $ph,
        $salinity,
        $conduc,
        $organic,
        $zinc,
        $nitra,
        $phosphore,
        $pota,
        $manga,
        $calc,
        $copper,
        $azu,
        $bor,
        $magne,
        $oxygen
    );
}
?>