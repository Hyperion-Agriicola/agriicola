<!DOCTYPE html>
<html lang="en">
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

    <?php
        include('navbar.php')
    ?>
    <body>
        <header class="bg-light p-4" >
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <a href="dashboard.php" type="button" class="close" >
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
                            <input type="text" class="form-control" id="inputName" name="Nombre" placeholder="">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                                <label for="inputApellido">Apellidos</label>
                                <input type="text" class="form-control" id="inputApellido" name="Apellido" placeholder="">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                                <label for="inputEmail">Correo electrónico</label>
                                <input type="text" class="form-control" id="inputEmail" name="Email" placeholder="">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                                <label for="inputApellido">Apellidos</label>
                                <input type="text" class="form-control" id="inputApellido" name="Apellido" placeholder="">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                                <label for="inputTelefono">Teléfono</label>
                                <input type="text" class="form-control" id="inputTelefono" name="Telefono" placeholder="">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                                <label for="inputPass">Contraseña</label>
                                <input type="text" class="form-control" id="inputPass" name="Contraseña" placeholder="">
                        </div>
                    </div>
                </div>
            </form>
        </main>    
        <div class="text-center pt-3">
            <a href="agro.php" class="btn btn-success" role="button" style="width:230px;"><i class="fas fa-save"></i> Guardar</a>
        </div>


        <footer class="footer bg-white col-lg-12 col-md-12 col-sm-12" >
            <div class="container text-center">
                <span class="text-muted">Todos los derechos reservados 2019
                    &copy; Desarrollado por Hyperion</span>
            </div>
        </footer>

        <script src="../../js/jquery-3.4.1.min.js"></script>
        <script src="../../js/jquery-ui.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="../../js/main.js"></script>
        <script>
            $(document).ready(function(){
                // Read value on page load
                $("#result b").html($("#customRange").val());

                // Read value on change
                $("#customRange").change(function(){
                    $("#result b").html($(this).val());
                });
            });        
        </script> 
    </body>
</html>