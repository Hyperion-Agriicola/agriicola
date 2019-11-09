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
            <div class="container">
                <a href="select_seguimiento_corte.php"  class="close" >
                    <img src="../../img/svg/close-24px.svg" class="close" alt="">
                </a>
                <h2 class="text-muted col-md-6 col-lg-6 col-sm-12">
                    <img src="../../img/svg/add.svg" style="height:60px;">
                    Nuevo corte
                </h2>
            </div>
                
            
        </header>

        <main class="container pt-4">

            <form action="" method="post">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputCliente">Cliente</label>
                            <input type="text" class="form-control" id="inputName" name="Cliente" placeholder="Nutriente">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputFecha">Fecha</label>
                            <input type="date"  class="form-control" id="inputFecha" name="Fecha">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="inputPeso">Peso</label>
                            <input type="number" placeholder="700" class="form-control" id="inputPeso" name="Peso">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="inputunidad">Unidad</label>
                            <select class="form-control" id="inputUnidad" name="Unidad">
                                <option>Kilogramos</option>
                                <option>Gramos</option>
                                <option>Toneladas</option>
                                
                            </select>
                        </div>
                     </div>

                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputMercado">Mercado</label>
                            <input type="text" placeholder="Nacional" class="form-control" id="inputMercado" name="Mercado">
                        </div>
                    </div>


                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                        <label for="inputCalidad">Calidad</label>
                            <select class="form-control" id="inputCalidad" name="Calidad">
                                <option>Mililitros</option>
                                <option>Litros</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group">
                        <label for="inputPrecio">Precio</label>
                            <input type="number" placeholder="700" class="form-control" id="inputPrecio" name="Precio">
                        </div>
                     </div>

                    
                     <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="inputMoneda">Moneda</label>
                            <select class="form-control" id="inputMoneda" name="Moneda">
                                <option>Pesos</option>
                                <option>Dólares</option>
                                <option>Euros</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputEstatus">Estatus</label>
                            <input type="text" placeholder="Activo" class="form-control" id="inputEstatus" name="Estatus">
                        </div>
                     </div>

                    </div>
                </div>
            </form>       
        </main>
        <div class="text-center pt-3">
                <a href="suelo_art.php" class="btn btn-success" role="button" style="width:230px;"><i class="fas fa-save"></i> Guardar</a>
            </div>
            <?php
include('footer.php');
?>

        <script src="../../js/jquery-3.4.1.min.js"></script>
        <script src="../../js/jquery-ui.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="../../js/main.js"></script>
    </body>
</html>    
    