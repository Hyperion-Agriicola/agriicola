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
                            print_r($data->getViewCropByID( $_GET['res'])[0] );
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
                <a href="dashboard.php?id_cultivo=<?php echo $_GET['res'];?>&tipo_suelo=<?php echo $_GET['Ground'];?>" class="href text-decoration-none">
                    <button type="button" class="btn0 btn-light btn-block p-3 shadow mb-4 btn0" style="font-size: 20px; text-align:center;">
                        <i class="fas fa-align-left float-left"></i>
                        Datos
                    </button>
                </a>
            </div>
                
            <div class="col-md-4 col-sm-10">
                <a href="dashboard.php?Tracing=<?php echo $_GET['res'];?>&Ground=<?php echo $_GET['Ground'];?>" class="href text-decoration-none">
                    <button type="button" class="btn0 btn-light btn-block p-3 shadow mb-4 text-white" style="font-size: 20px; text-align:center; background-color: #388E3C;">
                        <i class="fas fa-chart-line float-left"></i>
                        Seguimiento
                    </button>
                </a>
            </div>

            <div class="col-md-4 col-sm-10">
                <a href="dashboard.php?Spend=<?php echo $_GET['res'];?>&Ground=<?php echo $_GET['Ground'];?>" class="href text-decoration-none">
                    <button type="button" class="btn0 btn-light btn-block p-3 shadow mb-4 " style="font-size: 20px; text-align:center;">
                        <i class="fas fa-dollar-sign float-left"></i>
                        Gastos
                    </button>
                </a>
            </div> 
        </div>

        <div class="row mb-5 pb-5">

            <div class="col-md-4 col-sm-10" >
                <a href="dashboard.php?Tracing=<?php echo $_GET['res'];?>&Ground=<?php echo $_GET['Ground'];?>" class="href text-decoration-none">
                    <button type="button" class="btn3 btn-light btn-block p-3 shadow mb-4" style="font-size: 20px; text-align:center; ">
                        <i class="fas fa-calendar-day float-left"></i>
                        Calendario
                    </button>
                </a>
            </div>
                
            <div class="col-md-4 col-sm-10">
                <a href="dashboard.php?cut=<?php echo $_GET['res'];?>&Ground=<?php echo $_GET['Ground'];?>" class="href text-decoration-none">
                    <button type="button" class="btn3 btn-light btn-block p-3 shadow mb-4">
                        <i class="fas fa-hand-holding-usd float-left"></i>
                        Corte
                    </button>
                </a>
            </div>

            <div class="col-md-4 col-sm-10">
                <a href="dashboard.php?res=<?php echo $_GET['Tracing'];?>&Ground=<?php echo $_GET['Ground'];?>" class="href text-decoration-none">
                    <button type="button" class="btn3 btn-light btn-block p-3 shadow mb-4" style="font-size: 20px; text-align:center; background-color: #F28322; color: white;">
                        <i class="fas fa-chart-pie float-left"></i>
                        Resumen
                    </button>
                </a>
            </div>
            
            <div class="container">
        
        <div class="text-center text-success">
            <h1 class="pt-1">Resumen</h1>
        </div>
            
        
            
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gastos del cultivo</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Gráfico de Lineal</h6>
                        
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
                <br class="my-3">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ingresos</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Gráfico de Barras</h6>
                        
                        <canvas id="myChart2"></canvas>
                    </div>
                </div>
                <br class="my-3">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gastos por Agroquímico</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Gráfico Circular</h6>
                        <canvas id="myChart3"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>     
           
</div>

    
<script>
    document.getElementById("endCrop").addEventListener("click", function(){
        
        Swal.fire({
            title: "Atención",
            text: "¿Está seguro que desea finalizar este cultivo? Podrá reinciar su perido más tarde, en historial de cultivos",
            icon: "info",
            showCancelButton: true,
            confirmButtonColor: "#388e3c",
            cancelButtonColor: "#78909c",
            cancelButtonText: "Cancelar",
            confirmButtonText: "Finalizar"
            }).then((result) => {
            if (result.value) {
                document.location = "dashboard.php?end=<?php echo $_GET['res']; ?>";
            }
        })
        
    });

    var ctx = document.getElementById('myChart').getContext('2d');
    var ctx2 = document.getElementById('myChart2').getContext('2d');
    var ctx3 = document.getElementById('myChart3').getContext('2d');

    var myLineChart1 = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [<?php print_r($data->getGraphXGastoCultivo( $_GET['res']));?>],
            datasets: [
                <?php print_r($data->getGraphYGastoCultivo( $_GET['res']));?>]
            
        },
        
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var myLineChart2 = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: [<?php print_r($data->getGraphXCorte( $_GET['res']));?>],
            datasets: [
                <?php print_r($data->getGraphYCorte( $_GET['res']));?>]
            
        },
        
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var myLineChart3 = new Chart(ctx3, {
        type: 'pie',
        data: {
            labels: [<?php print_r($data->getGraphXAgro( $_GET['res']));?>],
            datasets: [
                <?php print_r($data->getGraphYAgro( $_GET['res']));?>]
            
        },
        
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
