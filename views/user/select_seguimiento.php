

<header class="bg-light p-4 pt-5 mt-4" >
    <div class="container text-center">
            <div class="row mb-2">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <a href="dashboard.php" class="close float-left">
                        <i class="fas fa-arrow-left" style="color: #B59B7B;"></i>
                    </a>
                    <a id="endCrop" class="mt-2 mb-2 text-white btn text-uppercase brown-button float-right" href="#!" data-toggle="tooltip" data-placement="left" title="Seleccione si desea finalizar el ciclo de su cultivo. Podrá reiniciarlo después.">
                        Finalizar cultivo
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
                        <?php
                            print_r($data->getViewCropByID($_GET['Tracing'])[0]);
                        ?>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
</header>
    <div class="container">
        
        <div class="row mb-5 py-5 border-bottom border-success" style="border-bottom: 2px solid #388E3C!important;">

            <div class="col-md-4 col-sm-10" >
                <a href="dashboard.php?id_cultivo=<?php echo $_GET['Tracing'];?>&tipo_suelo=<?php echo $_GET['Ground'];?>" class="href text-decoration-none">
                    <button type="button" class="btn btn-light btn-block p-3 shadow mb-4 btn0" style="font-size: 20px; text-align:center;">
                        <i class="fas fa-align-left float-left"></i>
                        Datos
                    </button>
                </a>
            </div>
                
            <div class="col-md-4 col-sm-10">
                <a href="dashboard.php?Tracing=<?php echo $_GET['Tracing'];?>&Ground=<?php echo $_GET['Ground'];?>" class="href text-decoration-none">
                    <button type="button" class="btn1 btn btn-light btn-block p-3 shadow mb-4 text-white" style="font-size: 20px; text-align:center; background-color: #388E3C;">
                        <i class="fas fa-chart-line float-left"></i>
                        Seguimiento
                    </button>
                </a>
            </div>

            <div class="col-md-4 col-sm-10">
                <a href="dashboard.php?Spend=<?php echo $_GET['Tracing'];?>&Ground=<?php echo $_GET['Ground'];?>" class="href text-decoration-none">
                    <button type="button" class="btn2 btn-light btn-block p-3 shadow mb-4 " style="font-size: 20px; text-align:center;">
                        <i class="fas fa-dollar-sign float-left"></i>
                        Gastos
                    </button>
                </a>
            </div> 
        </div>

        <div class="row mb-5 pb-5">

            <div class="col-md-4 col-sm-10" >
                <a href="" class="href text-decoration-none">
                    <button type="button" class="btn3 btn btn-light btn-block p-3 shadow mb-4" style="font-size: 20px; text-align:center; background-color: #F28322; color: white;">
                        <i class="fas fa-calendar-day float-left"></i>
                        Calendario
                    </button>
                </a>
            </div>
                
            <div class="col-md-4 col-sm-10">
                <a href="dashboard.php?cut=<?php echo $_GET['Tracing'];?>&Ground=<?php echo $_GET['Ground'];?>" class="href text-decoration-none">
                    <button type="button" class="btn3 btn btn-light btn-block p-3 shadow mb-4" style="font-size: 20px; text-align:center;">
                        <i class="fas fa-hand-holding-usd float-left"></i>
                        Corte
                    </button>
                </a>
            </div>

            <div class="col-md-4 col-sm-10">
                <a href="#" class="href text-decoration-none">
                    <button type="button" class="btn3 btn btn-light btn-block p-3 shadow mb-4" style="font-size: 20px; text-align:center;">
                        <i class="fas fa-chart-pie float-left"></i>
                        Resumen
                    </button>
                </a>
            </div>
            
                <?php
                    include('calendario.php');
                ?>    
           
            
        </div>

        
    </div>
