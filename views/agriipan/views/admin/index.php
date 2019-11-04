<?php
ob_start();
session_start();
include('../../config/functions.php');
$data = new Functions();

if (!isset($_SESSION['admin'])) {
    header('Location: ../../index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <title>AGRIICOLA</title>
</head>
<body>
<?php
    include('navbar.php');
?>
<header class="bg-light">
    <?php 
        
        if(isset($_POST['editarPerfil'])) {
            $data = new Functions();
            $data->editAdminProfile(
                $_SESSION['admin'], 
                $_POST['userName'], 
                $_POST['userLastName'], 
                $_POST['phoneNumber'], 
                $_POST['city'], 
                $_POST['edo'], 
                $_POST['company_name']
            );
            include('head.php');
        }else{
            include('head.php');
        }
     ?>
</header>

    <?php 
        if(isset($_POST['edit'])){
            $data = new Functions();
            $data->editAdminProfile($_POST['email'],$_POST['userName'],$_POST['userLastName'],$_POST['phoneNumber'],$_POST['city'],$_POST['edo'],$_POST['company_name']);
            include('usuarios.php');
        }else{
            if(isset($_POST['editar_usuario'])){
                $data = new Functions();
                echo "<br class='my-4'>
                    <div class='container'>
                        <h3 class=' text-success'>Editar Usuario</h3>
                        <form method='POST' action=''>";
                $data->showInfo($_POST['correo']);
                echo "  <hr class='my-3'>
                            <div style='float:right;'>
                                <button type='buttpn' class='btn btn-secondary'>Cancelar</button>
                                <button type='submit' class='btn btn-success' name='edit'>Guardar cambios</button>
                            </div>
                        </form>
                    </div>";
            }else if(empty($_POST['editar_usuario'])){
                include('usuarios.php');
            }



        }
        
        
    ?>
        <footer class="footer col-lg-12 col-md-12 col-sm-12" style="position:fixed; background: transparent; left:0px; bottom:0px; width: 100%; ">
            <div class="container text-center">
                <span class="text-muted">Todos los derechos reservados 2019
                    &copy; Desarrollado por Hyperion</span>
            </div>
        </footer>


        <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Nuevo usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="insertar.php" class="m-2">
                        <div class="row ">
                            <div class="col-12 col-sm-12 col-md-6">
                                <label for="name">Nombre(s):</label>
                                <input type="text" class="form-control" placeholder="Ingresa tu nombre" id="new_name" name="new_userName" required>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6">
                                <label for="last_name">Apellido(s):</label>
                                <input type="text" class="form-control" placeholder="Ingresa Apellidos" id="new_last_name" name="new_userLastName" required>
                            </div>
                            </div>
                            <div class="row ">
                            <div class="col-12 col-sm-12 col-md-6">
                                <label for="phone">Teléfono:</label>
                                <input type="tel" class="form-control" placeholder="5545171865" id="new_phone" name="new_phoneNumber" required>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6">
                                <label for="email">Correo electrónico:</label>
                                <input type="email" class="form-control" placeholder="ejemplo@arpan.com.mx" id="new_email" name=new_userEmail required>
                            </div>
                            </div>
                            <div class="row ">
                            <div class="col-12 col-sm-12 col-md-6">
                                <label for="company_name">Nombre de la empresa:</label>
                                <input type="text" class="form-control" placeholder="ARPAN" id="new_company_name" name="new_userCompany" required>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6">
                                <label for="city_name">Tipo usuario:</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="new_tipo">
                                    <option value="admin">Administrador</option>
                                    <option value="user">Usuario</option>
                                </select>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6">
                                <label for="city_name">Ciudad:</label>
                                <input type="text" class="form-control town ui-autocomplete" placeholder="Morelia" id="new_city_name" name="new_userCity" required>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6">
                                <label for="state_name">Estado:</label>
                                <input type="text" class="form-control state ui-autocomplete" placeholder="Michoacán" id="new_state_name" name="new_userState" required>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6">
                                <label for="pass">Contraseña:</label>
                                <input type="password" class="form-control" placeholder="**********" id="new_pass" name="new_serPass1" required>
                            </div>

                            <div class="col-12 col-sm-12 col-md-6">
                                <label for="repeat_pass">Confirmar contraseña:</label>
                                <input type="password" class="form-control" placeholder="**********" id="new_repeat_pass" name="new_userPass2" required>
                            </div>
                            </div>

                            <div class="row ">
                            <div class="col-1 col-sm-1 col-md-3"></div>
                            <div class="col-12 col-sm-10 col-6 col-md-6 mt-4">
                                <button type="submit" name="registerUser" class="btn btn-success btn-lg btn-block">Registrar</button>
                            </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

 <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mis datos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form method="POST" action="" class="m-2">
                <div class="modal-body">
                    <?php
                        include('form_editar_perfil.php');
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success" name="editarPerfil">Guardar cambios</button>
                </div>
              </form>
            </div>
          </div>
        </div>       

    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/jquery-ui.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../../js/main.js"></script>
    <script>

        $(document).ready(function(){
            $(".delete").click(function(e){
                e.preventDefault();
                var email = $(this).attr('data-emp-id');
                //alert(email);
                var message = "¿Deseas eliminar al usuario " + email + "?"
                result = window.confirm(message);

                if(result){
                    var url = "eliminar_user.php?email="+email;
                    window.location=url;
                }

            });
        });
    </script>
   
</body>

</html>

<?php 

ob_end_flush();

?>