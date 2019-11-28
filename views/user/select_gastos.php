

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
                            print_r($data->getViewCropByID($_GET['Spend'])[0]);
                        ?>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </header>

    
    <div class="container">
        
        <div class="row mb-5 py-5 border-bottom border-success" style="border-bottom: 2px solid #388E3C!important;">

            <div class="col-md-4 col-sm-10">
                <a href="dashboard.php?id_cultivo=<?php echo $_GET['Spend'];?>&tipo_suelo=<?php echo $_GET['Ground'];?>" class="href text-decoration-none">
                    <button type="button" class="btn0 btn-light btn-block p-3 shadow mb-4" style="font-size: 20px; text-align:center">
                        <i class="fas fa-align-left float-left"></i>
                        Datos
                    </button>
                </a>
            </div>
                
            <div class="col-md-4 col-sm-10">
                <a href="dashboard.php?Tracing=<?php echo $_GET['Spend'];?>&Ground=<?php echo $_GET['Ground'];?>" class="href text-decoration-none">
                    <button type="button" class="btn0 btn-light btn-block p-3 shadow mb-4" style="font-size: 20px; text-align:center;">
                        <i class="fas fa-chart-line float-left"></i>
                        Seguimiento
                    </button>
                </a>
            </div>

            <div class="col-md-4 col-sm-10">
                <a href="dashboard.php?Spend=<?php echo $_GET['Spend'];?>&Ground=<?php echo $_GET['Ground'];?>" class="href text-decoration-none">
                    <button type="button" class="btn0 btn-light btn-block p-3 shadow mb-4 text-white " style="font-size: 20px; text-align:center; background-color: #388E3C;">
                        <i class="fas fa-dollar-sign float-left"></i>
                        Gastos
                    </button>
                </a>
            </div> 

        </div>
    </div>

    <div class="container bg-white">
        
        <div class="text-center text-success">
            <h1 class="pt-1">Mis gastos</h1>
            <a  class="mt-2 mb-4 text-white btn text-uppercase bg-success" href="dashboard.php?newSpend=<?php echo $_GET['Spend'];?>&Ground=<?php echo $_GET['Ground'];?>">Nuevo gasto</a>
        </div>
            
      
            
        <div class="row">
            <?php
                $data->getCardCropSpend($_GET['Spend']);
            ?>
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
                document.location = "dashboard.php?end=<?php echo $_GET['Spend']; ?>";
            }
        })
        
    });
</script>

    