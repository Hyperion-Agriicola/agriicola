<?php
$admin = new AdminFunctions();

?>
<div class="text-center text-success mb-4">
    <h1 class="mt-4">Control de Usuarios</h1>
    <a id='addNewUserFromAdmin' class='mb-4 text-white btn text-uppercase bg-success' href='#!'>Crear nuevo usuario</a>
</div>
<div class="container">
    <!-- Usuarios -->
    <form class="registro animated fadeIn animation1" id="createUserForm" method="POST" action="">
        <div class="row mt-3">
            <div class="col-12 col-sm-12 col-md-6">
                <label for="name">Nombre(s):</label>
                <input type="text" class="form-control" placeholder="Ingresa tu nombre" id="name" name="userName" required>
            </div>
            <div class="col-12 col-sm-12 col-md-6">
                <label for="last_name">Apellido(s):</label>
                <input type="text" class="form-control" placeholder="Ingresa tus apellidos" id="last_name" name="userLastName" required>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 col-sm-12 col-md-6">
                <label for="phone">Teléfono:</label>
                <input type="tel" class="form-control" placeholder="1122334455" id="phone" name="phoneNumber" required>
            </div>
            <div class="col-12 col-sm-12 col-md-6">
                <label for="email">Correo electrónico:</label>
                <input type="email" class="form-control" placeholder="ejemplo@agriicola.com.mx" id="email" name=userEmail required>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12 col-sm-12 col-md-6">
                <label for="pass">Contraseña:</label>
                <input type="password" class="form-control" placeholder="******" id="pass" name="userPass1" required>
            </div>

            <div class="col-12 col-sm-12 col-md-6">
                <label for="repeat_pass">Confirmar contraseña:</label>
                <input type="password" class="form-control" placeholder="******" id="repeat_pass" name="userPass2" required>
            </div>
        </div>

        <dev class="row mt-3">
            <div class="col-12 col-sm-12 col-md-6 form-group">
                <label for="inputState">Rol de usuario</label>
                <select id="inputState" class="form-control" name="userRole" required>
                    <option selected>¿Qué tipo de usuario va a registrar?</option>

                    <option value="admin">Agronomo (Acceso a los cultivos creación, modificación y eliminación)</option>
                    <option value="user">Contador (Acceso a gastos y cortes)</option>
                </select>
            </div>
        </dev>

        <div class="row mt-3">
            <div class="col-1 col-sm-1 col-md-3"></div>
            <div class="col-12 col-sm-10 col-6 col-md-6 mt-4">
                <button type="submit" name="registerUser" class="btn mb-4 btn-success btn-lg btn-block btn-green">Registrar usuario</button>
            </div>
        </div>
    </form>
    <!-- /Usuarios -->
    <?php
    if (isset($_POST['registerUser'])) {
        $name = $_POST['userName'];
        $lastName = $_POST['userLastName'];
        $phone = $_POST['phoneNumber'];
        $email = $_POST['userEmail'];
        $password1 = $_POST['userPass1'];
        $password2 = $_POST['userPass2'];
        $role = $_POST['userRole'];

        $admin->createHelper($name, $lastName, $phone, $email, $password2, $role);
    }
    ?>
    <div class="row">
        <?php
            $admin->getAllHelpers();
        ?>
    </div>
    
        
    
</div>