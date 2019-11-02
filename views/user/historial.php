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
    <title>Historial de cultivos</title>
</head>
<body>
            <?php
            include('navbar.php');
            ?>
<header class="bg-light p-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <a href="dashboard.php" class="close">
                    <i class="fas fa-times text-danger"></i>
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
                        Historial de cultivos
                    </h4>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container" style="margin-top: 20px;">
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

<script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../../js/main.js"></script>
</body>
</html>