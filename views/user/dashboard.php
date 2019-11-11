<?php 
ob_start();
session_start();
include('../../config/functions.php');
$data = new Functions();
$data2 = new Functions();

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tour/0.11.0/css/bootstrap-tour-standalone.min.css">
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
            }else if(isset($_GET['viewCrop?seguimiento'])){
                include('select_seguimiento.php'); 
            }else if(isset($_GET['cultivo']) ){
                $data->deleteCultivos($_GET['cultivo']);
                header('Location: dashboard.php');
            }else if(isset($_GET['eliminarAgro']) ){
                $data->deleteAgroquimicos($_GET['eliminarAgro']);
                header('Location: dashboard.php');
            }else if(isset($_GET['gastoGeneral'])){
                include('nuevo_gasto_general.php'); 
            }else if(isset($_GET['viewSpend'])){
                include('gastos_generales.php'); 
            }else if(isset($_GET['viewHistory'])){
                include('historial.php'); 
            }else if(isset($_GET['viewCropSpend'])){
                include('select_gastos.php'); 
            }else if(isset($_GET['viewCropNewSpend'])){
                include('gasto.php'); 
            }else{
                include('profile.php');
                ?>

                <div class="container border-bottom border-success" style="margin-top: 60px; margin-bottom: 0px; border-bottom: 2px solid #388E3C!important;">
                <div class="row mb-4">
                <div class="col-lg-6">
            <a id="showHistory" href="dashboard.php?viewHistory" class="href text-decoration-none">
                <button type="button" class="btn0 btn-light btn-block p-3 shadow mb-4 " style="font-size: 20px; text-align:center;">
                    <i class="fas fa-history float-left "></i>
                    Historial de cultivos
                </button>
            </a>
                </div>
                <div class="col-lg-6">
            <a id="showOncost" href="dashboard.php?viewSpend" class="href text-decoration-none">
                <button type="button" class="btn0 btn-light btn-block p-3 shadow mb-4" style="font-size: 20px; text-align:center; ">
                    <i class="fas fa-dollar-sign float-left "></i>
                    Gastos generales
                </button>
            </a>
                </div>
                </div>
                </div>
    <div class="container">
        <div class="text-center text-success">
            <h1 class="mt-4">Mis cultivos</h1>
        </div>
        <div class="row p-3">
            <a id="addNewCrop" href="dashboard.php?cultivos" class="btn btn-success ml-auto rounded-circle" role="button"
                data-toggle="tooltip" data-placement="left" title="Agregar nuevo registro"><i
                    class="fas fa-plus"></i></a>
            <!-- Paste here your fuck code! -->
        </div>

        <div class="row">
            <?php 
                $data->getCropByID();
            ?>
        </div>
    </div>
    <?php
        }
    ?>


    <!--Modales-->


<?php
include('footer.php');
?>

    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>¡
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.19.1/jquery.validate.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.19.1/additional-methods.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tour/0.11.0/js/bootstrap-tour-standalone.min.js"></script>
    <script src="../../js/validation.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../../js/tour.js"></script>
</body>

</html>
<?php 
}
?>