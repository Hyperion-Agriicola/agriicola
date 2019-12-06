<header class="bg-light p-4 pt-5 mt-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <a href="dashboard.php" class="close float-left">
                    <i class="fas fa-arrow-left" style="color: #B59B7B;"></i>
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

<?php

if (isset($_POST['updateUserData'])) {
    $userName = $_POST['userName'];
    $userlastName = $_POST['userLastName'];
    $phoneNumber = $_POST['phoneNumber'];
    $userCity = $_POST['userCity'];
    $userState = $_POST['userState'];

    $userCompany = $_POST['userCompany'];

    $currentPassword = $_POST['userPass'];
    $newPassword = $_POST['newPassword'];
    $repeatPassword = $_POST['repeatPassword'];

    /*
    echo $userName . " "  . $userlastName . " "  . $phoneNumber . " "  . $userCity . " "  . $userState
    . " "  . $userCompany . " "  . $currentPassword . " "  . $newPassword . " "  . $repeatPassword;
    */

    $data->updateUserData(
        $userName,
        $userlastName,
        $phoneNumber,
        $userCity,
        $userState,
        $userCompany,
        $currentPassword,
        $newPassword,
        $repeatPassword
    );
}
?>

<main class="container mt-4">
    <form class="registro" action="" method="post">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputName">Nombre</label>
                    <input type="text" class="form-control" id="inputName" name="userName" value="<?php print_r($data->getUserData()[1]);  ?>">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputApellido">Apellidos</label>
                    <input type="text" class="form-control" id="inputApellido" name="userLastName" value="<?php print_r($data->getUserData()[2]);  ?>">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputPhone">Teléfono</label>
                    <input type="text" class="form-control" id="inputPhone" name="phoneNumber" value="<?php print_r($data->getUserData()[3]);  ?>">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputCompany">Empresa</label>
                    <input type="text" class="form-control" id="inputCompany" name="userCompany" value="<?php print_r($data->getUserData()[4]);  ?>">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="currentPassword">Contraseña Actual</label>
                    <input type="password" class="form-control" id="currentPassword" name="userPass" placeholder="*****">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="newPassword">Nueva contraseña</label>
                    <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="*****">

                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="repeatPassword">Repetir contraseña</label>
                    <input type="password" class="form-control" id="repeatPassword" name="repeatPassword" placeholder="*****">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputCity">Ciudad</label>
                    <input type="text" class="form-control" id="inputCity" name="userCity" value="<?php print_r($data->getUserData()[5]);  ?>">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="inputState">Estado</label>
                    <input type="text" class="form-control" id="inputstate" name="userState" value="<?php print_r($data->getUserData()[6]);  ?>">
                </div>
            </div>
        </div>
        <div class="text-center pt-3">
            <button type="submit" name="updateUserData" class="btn btn-lg btn-success" role="button"><i class="fas fa-save"></i> Guardar</a>
        </div>
    </form>
</main>