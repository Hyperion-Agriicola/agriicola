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
        <script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>
        <script src="../../js/calendario/moment.min.js"></script>

        <!--Fullcalendar-->
        
        <script src="../../js/calendario/fullcalendar.min.js"></script>
        <link rel="stylesheet" href="../../css/calendario/fullcalendar.min.css">
        <script src="../../js/calendario/es-us.js"></script>
        <script src="../../js/calendario/bootstrap-clockpicker.min.js" ></script>
        <link rel="stylesheet" href="../../css/calendario/bootstrap-clockpicker.min.css">

       <style>
        .fc th{
            padding: 15px;
            background: #AF7AC5;
            color: #fff;
            font-weight: 500;
        }
        

        .fc-button{
            width:100px;
            height:10px;
            background: #3F51B5;
            color: #fff;
            font-weight: 500 !important;
            border: none;
            padding: 10px;
        }

        .fc-content{
            height:25px;
            font-size:15px;
            
        }


    
       </style>
            
        
        
        <title>AGRIICOLA</title>
</head>
<body class="bg-white">
    
<?php
            
    include('navbar.php');

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

    <header class="bg-light p-4" >
    <div class="container text-center">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                <a href="dashboard.php" class="close">
                    <i class="fas fa-times text-danger"></i>
                </a>  
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <img src="../../img/svg/grain.svg" style="height:60px;">
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="text-muted">
                            Mi predio uno
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        
        <div class="row mb-5 py-5 border-bottom border-success" style="border-bottom: 2px solid #388E3C!important;">

            <div class="col-md-4 col-sm-10" >
                <a href="dashboard.php?viewCrop" class="href text-decoration-none">
                    <button type="button" class="btn btn-light btn-block p-3 shadow mb-4 btn0" style="font-size: 20px; text-align:center;">
                        <i class="fas fa-align-left float-left"></i>
                        Datos
                    </button>
                </a>
            </div>
                
            <div class="col-md-4 col-sm-10">
                <a href="select_seguimiento.php" class="href text-decoration-none">
                    <button type="button" class="btn1 btn btn-light btn-block p-3 shadow mb-4 text-white" style="font-size: 20px; text-align:center; background-color: #388E3C;">
                        <i class="fas fa-chart-line float-left"></i>
                        Seguimiento
                    </button>
                </a>
            </div>

            <div class="col-md-4 col-sm-10">
                <a href="select_gastos.php" class="href text-decoration-none">
                    <button type="button" class="btn2 btn-light btn-block p-3 shadow mb-4 " style="font-size: 20px; text-align:center;">
                        <i class="fas fa-dollar-sign float-left"></i>
                        Gastos
                    </button>
                </a>
            </div> 
        </div>

        <div class="row mb-5 pb-5">

            <div class="col-md-4 col-sm-10" >
                <a href="calendario.php" class="href text-decoration-none">
                    <button type="button" class="btn3 btn btn-light btn-block p-3 shadow mb-4" style="font-size: 20px; text-align:center;">
                        <i class="fas fa-calendar-day float-left"></i>
                        Calendario
                    </button>
                </a>
            </div>
                
            <div class="col-md-4 col-sm-10">
                <a href="select_seguimiento_corte.php" class="href text-decoration-none">
                    <button type="button" class="btn3 btn btn-light btn-block p-3 shadow mb-4" style="font-size: 20px; text-align:center;">
                        <i class="fas fa-hand-holding-usd float-left"></i>
                        Corte
                    </button>
                </a>
            </div>

            <div class="col-md-4 col-sm-10">
                <a href="select_resumen.php" class="href text-decoration-none">
                    <button type="button" class="btn3 btn btn-light btn-block p-3 shadow mb-4" style="font-size: 20px; text-align:center;">
                        <i class="fas fa-chart-pie float-left"></i>
                        Resumen
                    </button>
                </a>
            </div>
        </div>
    </div>

    
    <script src="../../js/jquery-ui.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../../js/main.js"></script>
</body>
</html>