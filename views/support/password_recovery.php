<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/animate.css">
    <title>¿Olvidaste tu contraseña?</title>
</head>

<body class="bg-light">

    <section class="text-center mt-4">
        <img src="../../img/agriicola_logo_alternativo.png" width="300">

        <div class="container mt-4">
            <div class="row justify-content-center align-items-center">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="pass">Contraseña:</label>
                                    <input type="password" class="form-control" placeholder="******" id="pass" name="userPass1" required>
                                </div>
                                <div class="form-group">
                                    <label for="repeat_pass">Confirmar contraseña:</label>
                                    <input type="password" class="form-control" placeholder="******" id="repeat_pass" name="userPass2" required>
                                </div>
                                <button type="submit" id="changePassword" name="changePassword" class="form-control btn-green btn btn-block text-white">Cambiar contraseña</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <?php
            include('../../config/functions.php');
            $data = new Functions();
            if (isset($_GET['email']) && isset($_GET['token'])) {
                $email = $_GET['email'];
                $token = $_GET['token'];
                echo $email;
                echo "\n";
                echo $token;
                if (isset($_POST['changePassword'])) {
                    $password1 = $_POST['userPass1'];
                    $password2 = $_POST['userPass2'];

                    $data->createNewPAssword($email, $token, $password1, $password2);
                }
            } else {
                //header('Location: https://agriicola-test.000webhostapp.com/index.php');
                //exit();
            }
            ?>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.19.1/jquery.validate.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.19.1/additional-methods.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="../../js/validation.js"></script>
    <script src="../../js/main.js"></script>
</body>

</html>
<?php
ob_end_flush();
?>