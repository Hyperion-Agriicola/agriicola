<?php 
ob_start();
session_start();
include('../../config/functions.php');
$data = new Functions();

if(!isset($_SESSION['correo'])){
    header('Location: ../../index.php');
    exit();
}else{
?>
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
            include('navbar.php');
            

            if (isset($_GET['cultivos'])) {
                include('cultivos.php');
            } else if (isset($_GET['suelos'])) {
                include('suelo.php');
            } else if (isset($_GET['agroquimicos'])) {
                include('agroquimicos.php');
            } else if (isset($_GET['gastos'])) {
                include('gastos.php');
            } else if (isset($_GET['seguimiento'])) {
                echo "Seguimiento";
            } else if (isset($_GET['natural'])) {
                include('suelo_natural.php');
            } else if (isset($_GET['artificial'])) {
                include('suelo_artificial.php');
            } else if (isset($_GET['userProfile'])) {
                include('profile.php');
            }else if(isset($_GET['editProfile'])){
                include('edit_profile.php');
            }else if(isset($_GET['agro'])){
                include('agro.php');
            }else if(isset($_GET['naturalGround'])){
                include('suelo.php');
            }else if(isset($_GET['artificialGround'])){
                include('suelo_art.php');
            }else if(isset($_GET['viewCrop'])){
                include('select_cultivo.php'); 
            }
            else {
               
                ?>

            <div class="container border-bottom border-success" style="margin-top: 60px; margin-bottom: 0px; border-bottom: 2px solid #388E3C!important;">
                <div class="row mb-4">
                <div class="col-lg-4">
            <a href="dashboard.php" class="href text-decoration-none">
                <button type="button" class="btn0 btn-light btn-block p-3 shadow mb-4 " style="font-size: 20px; text-align:center;">
                    <i class="fas fa-home float-left "></i>
                    Inicio
                </button>
            </a>
                </div>
                <div class="col-lg-4">
            <a href="historial.php" class="href text-decoration-none">
                <button type="button" class="btn0 btn-light btn-block p-3 shadow mb-4 text-white " style="font-size: 20px; text-align:center; background-color: #388E3C ;">
                    <i class="fas fa-history float-left "></i>
                    Historial de cultivos
                </button>
            </a>
                </div>
                <div class="col-lg-4">
            <a href="gastos_generales.php" class="href text-decoration-none">
                <button type="button" class="btn0 btn-light btn-block p-3 shadow mb-4" style="font-size: 20px; text-align:center; ">
                    <i class="fas fa-dollar-sign float-left "></i>
                    Gastos generales
                </button>
            </a>
                </div>
                </div>
                </div>

        <div class="text-center text-success" style="margin-bottom: 70px;">
            <h1 class="mt-4">Historial de cultivos</h1>
        </div>
    





        <div class="container">
        <div class="row">
        <div class="col-md-4 col-sm-12 pb-4">
        <div class="card bg-light p-1 shadow p-0 mb-0" style="border-radius: 10px;">
            <div class="card-header bg-light">
                <a href="" class="text-decoration-none text-body"data-toggle="modal" data-target="#modalEliminar">
                    <img src="../../img/svg/close-24px.svg" class="close" alt="">
                    <h5 style="color: #000000;">28-Octubre-2019</h5>
                 </a>
             </div>
            <div class="card-body">
                 <h5 class="card-title"> <img src="../../img/svg/grain.svg" style="height:35px;" class="mb-2 mx-auto d-block" alt=""></h5>
                    <p class="card-text"> <a href="select_cultivo.php" class="text-decoration-none text-body">
                    <h4 class="text-center">Cultivo de maiz</h4></a></p>
            </div>
        </div>
        </div>
        <div class="col-md-4 col-sm-12 pb-4">
        <div class="card bg-light p-1 shadow p-0 mb-0" style="border-radius: 10px;">
            <div class="card-header bg-light">
                <a href="" class="text-decoration-none text-body"data-toggle="modal" data-target="#modalEliminar">
                    <img src="../../img/svg/close-24px.svg" class="close" alt="">
                    <h5 style="color: #000000;">02-Octubre-2019</h5>
                 </a>
             </div>
            <div class="card-body">
                 <h5 class="card-title"> <img src="../../img/svg/grain.svg" style="height:35px;" class="mb-2 mx-auto d-block" alt=""></h5>
                    <p class="card-text"> <a href="select_cultivo.php" class="text-decoration-none text-body">
                    <h4 class="text-center">Cultivo de trigo</h4></a></p>
            </div>
        </div>
        </div>
           
                
            


           

        </div>
    </div>
    
    <?php
        }
    ?>
    <!--Modales-->
    <!--Modal eliminar-->
    <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Advertencia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Está seguro de eliminar este gasto? Tome en cuenta que ésta acción es irreversible.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-success">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <?php
include('footer.php');
?>
    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../../js/main.js"></script>
</body>

</html>
<?php 
}
?>









<div class="container" style="margin-top: 20px;">
<div class="row">
   
    </div>
</div>