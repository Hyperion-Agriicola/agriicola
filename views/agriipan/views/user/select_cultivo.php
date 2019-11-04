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
            include('navbar.php');
        ?>

    <header class="bg-light p-4" >
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <a href="dashboard.php" type="button" class="close" >
                        <img src="../../img/svg/close-24px.svg" class="close" alt="">
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

        <div class="row mb-5 py-5 border-bottom border-success">
                
            <div class="col-md-4 col-sm-10" >
                <a href="select_cultivo.php" class="href text-decoration-none">
                    <button type="button" class="btn0 btn-light btn-block p-3 shadow mb-4 text-white" style="font-size: 20px; text-align:center; background-color:#5DADE2;">
                        <i class="fas fa-align-left float-left"></i>
                        Datos
                    </button>
                </a>
            </div>

            <div class="col-md-4 col-sm-10">
                <a href="select_seguimiento.php" class="href text-decoration-none" name="seguimiento">
                    <button type="button" class=" btn1 btn btn-light btn-block p-3 shadow mb-4" style="font-size: 20px; text-align:center;">
                        <i class="far fa-chart-bar float-left"></i>
                        Seguimiento
                    </button>
                </a>    
            </div>

            <div class="col-md-4 col-sm-10">
                <a href="select_gastos.php" class="href text-decoration-none">
                    <button type="button" class="btn2 btn-light btn-block p-3 shadow mb-4" style="font-size: 20px; text-align:center">
                        <i class="fas fa-dollar-sign float-left"></i>
                        Gastos
                    </button>
                </a>   
            </div> 
        </div>


        <div class="row">
            <div class="col-md-4 col-sm-12 pb-4">  
                <div class="card bg-light p-1 shadow p-0 mb-0 bg-light" style="Border-Radius: 10px;"> 
                    <div class="card-header bg-light">
                        <img src="../../img/svg/grain.svg" style="height:35px" class="mb-2" alt="">
                        <a href="" data-toggle="modal" data-target="#modalEliminar">
                            <button type="button" class="close"><span>&times</span></button>
                        </a>
                        <br>
                        <a href="#" data-toggle="modal" data-target="#modalDatos" class="text-decoration-none text-body">
                            <h4>Datos del cultivo</h4>
                    </div>

                    <div class="card-body pt-3">Esta es información del cultivo, esta es más información
                    </div>
                        </a>    
                </div>      
            </div>

            <div class="col-md-4 col-sm-12 pb-4">  
                <div class="card bg-light p-1 shadow p-0 mb-0 bg-light" style="Border-Radius: 10px;"> 
                    <div class="card-header bg-light">
                        <img src="../../img/svg/growing-plant-green.svg" style="height:35px" class="mb-2" alt="">
                        <a href="" data-toggle="modal" data-target="#modalEliminar">
                            <button type="button" class="close"><span>&times</span></button>
                        </a>
                        <br>
                        <a href="#" data-toggle="modal" data-target="#modalDatos" class="text-decoration-none text-body">
                            <h4>Datos del suelo</h4>
                    </div>

                    <div class="card-body pt-3">Esta es información del suelo, esta es más información
                    </div>
                        </a>    
                </div>      
            </div>

            <div class="col-md-4 col-sm-12 pb-4">  
                <div class="card bg-light p-1 shadow p-0 mb-0 bg-light" style="Border-Radius: 10px;"> 
                    <div class="card-header bg-light">
                        <img src="../../img/svg/plant-sample-green.svg" style="height:35px" class="mb-2" alt="">
                        <a href="" data-toggle="modal" data-target="#modalEliminar">
                            <button type="button" class="close"><span>&times</span></button>
                        </a>
                        <br>
                        <a href="#" data-toggle="modal" data-target="#modalDatos" class="text-decoration-none text-body">
                            <h4>Datos de agroquímico</h4>
                    </div>

                    <div class="card-body pt-3">Esta es información del agroquímico, esta es más información
                    </div>
                        </a>    
                </div>      
            </div>

            

            
        </div>  
    </div>

    <footer class="footer bg-white col-lg-12 col-md-12 col-sm-12">
        <div class="container text-center">
            <span class="text-muted">Todos los derechos reservados 2019
                &copy; Desarrollado por Hyperion</span>
        </div>
    </footer>


    <!--Modales-->
    <!--Modal eliminar--> 
    <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¡Atención!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Estas seguro de eliminar este cultivo?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-success">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <!---Modal de datos-->
    <div class="modal fade" id="modalDatos" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                        ...
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>

    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/jquery-ui.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../../js/main.js"></script>
    
</body>
</html>