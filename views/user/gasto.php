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


    <body class="bg-white">

        <?php
            include('navbar.php')
        ?>

    <header class="bg-light p-4" >
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <a href="select_gastos.php" type="button" class="close" >
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
                                Nuevo gasto
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
                            <label for="inputName">Concepto</label>
                            <input type="text" class="form-control" id="inputName" name="name" placeholder="Nómina">
                        </div>
                    </div>
                
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="inputSpecie">Precio</label>
                            <select class="form-control" id="inputSpecie">
                                <option>500</option>
                                <option>200</option>
                            </select>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="inputSpecie">Moneda</label>
                            <select class="form-control" id="inputSpecie">
                                <option>Pesos</option>
                                <option>Dolares</option>
                            </select>
                        </div>
                     </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputSpecie">Calidad</label>
                            <select class="form-control" id="inputSpecie">
                                <option>1era Calidad</option>
                            </select>
                        </div>
                     </div>

                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputName">Fecha</label>
                            <input type="date" class="form-control" id="inputName" name="name" placeholder="17/Octubre/2019">
                        </div>
                    </div>

                    </div>
                </div>
            </form>
            <div class="text-center pt-2">
                <a href="dashboard.php" class="btn btn-success mb-2" role="button" style="width:230px;"><i class="fas fa-save"></i> Guardar </a>
            </div>
           
        </main>
        <footer class="footer bg-white " style="position:absolute;">
            <div class="container text-center">
                <span class="text-muted">Todos los derechos reservados 2019
                    &copy; Desarrollado por Hyperion</span>
            </div>
        </footer>

        <script src="../../js/jquery-3.4.1.min.js"></script>
        <script src="../../js/jquery-ui.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="../../js/main.js"></script>
    </body>
</html>    
    