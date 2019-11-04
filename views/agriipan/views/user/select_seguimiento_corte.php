<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/main.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../css/animate.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
        <title>AGRIICOLA</title>
</head>
<body class="bg-white">
    
<?php

    include('select_seguimiento.php');
    if (isset($_GET['cultivos'])) {
        include('cultivos.php');
    } else if (isset($_GET['suelos'])) {
        include('suelos.php');
    } else if (isset($_GET['agroquimicos'])) {
        include('agroquimicos.php');
        //echo "Agroquímicos";
    } else if (isset($_GET['gastos'])) {
        include('gastos.php');
        //echo "Gastos";
    } else if (isset($_GET['seguimiento'])) {
        echo "Seguimiento";
    } else if (isset($_GET['natural'])) {
        include('suelo_natural.php');
    } else if (isset($_GET['artificial'])) {
        include('suelo_artificial.php');
    }
?>

    
    
    <div class="container bg-white col-lg-11 col-md-10 col-sm-10">
        
        <div class="text-center text-success">
            <h1 class="pt-1">Mis cortes</h1>
        </div>
            
        <div class="row p-3">
            <a href="corte.php" class="btn btn-success ml-auto rounded-circle" role="button">
                <i class="fas fa-plus"></i>
            </a>
        </div>
            
        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-12 pb-4">
                <a class="text-dark"  style="text-decoration: none;" href="select_cultivo.php">
                    <div class="card bg-light p-3 shadow p-0 mb-0 bg-light" style="Border-Radius: 10px;">
                        <a class="text-dark"  style="text-decoration: none;" href="#">
                            <div class="card-header bg-light">
                                <i class="fas fa-dollar-sign pb-3" style="font-size: 30px; color:green" ></i>
                                <button type="button" class="close"><span>&times</span></button>
                                <br>
                                <h4>Concepto</h4>
                            </div>
                            <div class="card-text pt-3 pl-3">
                                Esta es información del cultivo, esta es más información
                            </div>
                    </div>
                </a>
            </div>
                
            <div class="col-lg-4 col-md-4  col-sm-12 pb-4">
                <a class="text-dark"  style="text-decoration: none;" href="select_cultivo.php">
                    <div class="card bg-light p-3 shadow p-0 mb-0 bg-light" style="Border-Radius: 10px;">
                        <div class="card-header bg-light">
                            <i class="fas fa-dollar-sign pb-3" style="font-size: 30px; color:green" ></i>
                            <button type="button" class="close"><span>&times</span></button>
                            <br>
                            <h4>Concepto</h4>
                        </div>
                        <div class="card-text pt-3 pl-3">
                            Esta es información del cultivo, esta es más información
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-lg-4 col-md-4 col-sm-12">
                <a class="text-dark"  style="text-decoration: none;" href="select_cultivo.php">
                    <div class="card bg-light p-3 shadow p-0 mb-0 bg-light" style="Border-Radius: 10px;" style="box-shadow: 3px;">
                        <div class="card-header bg-light" >
                           <i class="fas fa-dollar-sign pb-3" style="font-size: 30px; color:green" ></i>
                            <button type="button" class="close"><span>&times</span></button>
                            <br>
                            <h4>Concepto</h4>
                        </div>
                        <div class="card-text pt-3 pl-3">
                            Esta es información del cultivo, esta es más información
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div> 

    <footer class="footer bg-white col-lg-12 col-md-12 col-sm-12" >
        <div class="container text-center">
            <span class="text-muted">Todos los derechos reservados 2019&copy; Desarrollado por Hyperion</span>
        </div>
    </footer>

    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/jquery-ui.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../../js/main.js"></script>

</body>
</html>