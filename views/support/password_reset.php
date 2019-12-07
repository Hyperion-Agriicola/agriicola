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
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="email">Escribe tu correo electrónico</label>
                                    <input type="email" class="form-control" placeholder="ejemplo@agriicola.com.mx" id="emailRecovery" name='userEmail' required>
                                </div>
                                <button type="submit" id="sendEmailRecovery" name="sendEmailRecovery" class="form-control btn-green btn btn-block text-white">Enviar correo</button>
                            </form>
                        </div>
                    </div>
                    <?php
                    include('../../config/functions.php');
                    $data = new Functions();

                    if (isset($_POST['sendEmailRecovery'])) {
                        $email = $_POST['userEmail'];

                        if ($data->checkForEmail($email)) {
                            $token = md5(str_shuffle(uniqid($email, true)));

                            $data->sendRecoveryEmail($email, $token);
                        } else {
                            echo "
                    <div class='container mt-4'>
                        <div class='alert alert-danger' role='alert'>
                            El correo que ingresaste no existe en nuestros registros, intenta de nuevo
                        </div>
                    </div";
                        }
                    }
                    ?>
                </div>
            </div>
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