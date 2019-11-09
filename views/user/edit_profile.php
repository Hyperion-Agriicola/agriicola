<header class="bg-light p-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <a href="dashboard.php" class="close">
                    <i class="fas fa-times text-danger"></i>
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
                        Editar perfil
                    </h4>
                </div>
            </div>
        </div>
    </div>
</header>

<main class="container mt-4">
    <form action="" method="post">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputName">Nombre</label>
                    <input type="text" class="form-control" id="inputName" name="Nombre"  value = "
                        <?php 
                            print_r($data->getUserData()[0]);
                        ?>
                    ">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputApellido">Apellidos</label>
                    <input type="text" class="form-control" id="inputApellido" name="Apellido" value = "
                        <?php 
                            print_r($data->getUserData()[1]);
                        ?>
                    ">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputEmail">Correo electrónico</label>
                    <input type="text" class="form-control" id="inputEmail" name="Email" value = "
                        <?php 
                            print_r($data->getUserData()[3]);
                        ?>
                    ">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputEmpresa">Empresa</label>
                    <input type="text" class="form-control" id="inputEmpresa" name="Empresa" value = "
                        <?php 
                            print_r($data->getUserData()[5]);
                        ?>
                    ">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputTelefono">Teléfono</label>
                    <input type="text" class="form-control" id="inputTelefono" name="Telefono" value = "
                        <?php 
                            print_r($data->getUserData()[2]);
                        ?>
                    ">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputPass">Contraseña</label>
                    <input type="text" class="form-control" id="inputPass" name="Contraseña" placeholder="">
                </div>
            </div>
        </div>
        <div class="text-center pt-3">
            <button type="submit" class="btn btn-success"  style="width:230px;"><i class="fas fa-save"></i> Guardar</a>
            </button>
    </form>
</main>


