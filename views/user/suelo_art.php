<header class="bg-light p-4 pt-5 mt-4" onload="nobackbutton();">
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
            <a href="">
                <img src="../../img/svg/grain.svg" alt="" style="height:35px">
                <p class="text-muted">Cultivo</p>
            </a>
        </span>

        <span class="col-4 col-sm-3 col-md-2 col-lg-2 text-center text-decoration-none">
            <a href="#">
                <img src="../../img/svg/growing-plant.svg" alt="" style="height:60px; color: green;">
                <p class="text-muted">Suelo</p>
            </a>
        </span>

        <span class="col-4 col-sm-3 col-md-2 col-lg-2 text-center text-decoration-none">
            <a href="#">
                <img src="../../img/svg/plant-sample.svg" alt="" style="height:35px">
                <p class="text-muted">Agroquímico</p>
            </a>
        </span>

        <span class="col-sm-2 col-md-3 col-lg-3"></span>
    </div>

    <form action="" method="post">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputSustrato">Sustrato</label>
                    <select class="form-control" id="inputSustrato" name="inputSustrato">
                        <option disabled>Seleccione un sustrato</option>
                        <?php
                        $data->getSubstract("");
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
                        $data->getInfrastucture("");
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
                        $data->getWatering("");
                        ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="text-center pt-3">
            <button type="submit" name="suelo_artificial" class="btn btn-success btn-lg"><i class="fas fa-save"></i> Siguiente</button>
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

if (isset($_POST['suelo_artificial'])) {
    $sustr = $_POST['inputSustrato'];
    $infra = $_POST['inputInfra'];
    $watering = $_POST['inputWatering'];

    $data->insertArtificial($sustr, $infra, $watering);
}
?>