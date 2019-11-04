<header class="bg-light p-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <a href="dashboard.php" type="button" class="close">
                    <img src="../../img/svg/close-24px.svg" class="close" alt="">
                </a>
            </div>
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
            <a href="cultivos.php">
                <img src="../../img/svg/grain.svg" alt="" style="height:60px">
                <p class="text-muted">Cultivo</p>
            </a>
        </span>

        <span class="col-4 col-sm-3 col-md-2 col-lg-2 text-center text-decoration-none">
            <a href="suelo.php">
                <img src="../../img/svg/growing-plant-green.svg" alt="" style="height:35px; color: green;">
                <p class="text-muted">Suelo</p>
            </a>
        </span>

        <span class="col-4 col-sm-3 col-md-2 col-lg-2 text-center text-decoration-none">
            <a href="agro.php">
                <img src="../../img/svg/plant-sample-green.svg" alt="" style="height:35px">
                <p class="text-muted">Agroquímico</p>
            </a>
        </span>

        <span class="col-sm-2 col-md-3 col-lg-3"></span>
    </div>

    <form action="" method="post">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputName">Nombre predio</label>
                    <input type="text" class="form-control" id="inputName" name="name" placeholder="Cultivo picoson">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputHectare">Hectáreas</label>
                    <input type="number" placeholder="1" class="form-control" id="inputHectare" name="hectares">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputSubspecie">Subespecie</label>
                    <select class="form-control" id="inputSubspecie">
                        <option>Granos</option>
                        <option>Hortalizas</option>
                        <option>Frutales</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputSpecie">Tipo de especie</label>
                    <select class="form-control" id="inputSpecie">
                        <option>Trigo</option>
                        <option>Maiz</option>
                        <option>Frijol</option>
                        <option>Sorgo</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputVariation">Variedad</label>
                    <input type="text" class="form-control" id="inputVariation" name="name" placeholder="A veces se ponen pedos">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputDate">Fecha de inicio</label>
                    <input type="date" class="form-control" id="inputDate" name="name" placeholder="Fecha picosona">
                </div>
            </div>

        </div>
        <h5 class="modal-title" id="exampleModalScrollableTitle">Ubicación</h5>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputState">Estado</label>
                    <input value='' type="text" class="form-control state" id="inputState" name="state" placeholder="Michoacán">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputTownship">Municipio</label>
                    <input value='' type="text" class="form-control township" id="inputTownship" name="township" placeholder="Tlalpujahua">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputTown">Localidad</label>
                    <input value='' type="text" class="form-control town" id="inputTown" name="town" placeholder="Tlalpujahuilla">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputTipoSuelo">Tipo de suelo</label>
                    <select class="form-control" id="inputTipoSuelo">
                        <option>Natural</option>
                        <option>Artificial</option>
                    </select>
                </div>
            </div>
        </div>
    </form>
    <div class="text-center">
        <a href="suelo.php" class="btn btn-success" role="button" style="width:230px;"><i class="fas fa-save"></i> Siguiente</a>
    </div>
</main>