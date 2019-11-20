
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
            <a href="dashboard.php?viewHistory" class="href text-decoration-none">
                <button type="button" class="btn0 btn-light btn-block p-3 shadow mb-4 " style="font-size: 20px; text-align:center;">
                    <i class="fas fa-history float-left "></i>
                    Historial de cultivos
                </button>
            </a>
                </div>
                <div class="col-lg-4">
            <a href="dashboard.php?viewSpend" class="href text-decoration-none">
                <button type="button" class="btn0 btn-light btn-block p-3 shadow mb-4 text-white" style="font-size: 20px; text-align:center; background-color: #388E3C ">
                    <i class="fas fa-dollar-sign float-left "></i>
                    Gastos generales
                </button>
            </a>
        </div>
    </div>
</div>

<div class="text-center text-success">
    <h1 class="mt-4">Gastos generales</h1>
    <a  id="addNewSpend" class="mt-2 mb-4 text-white btn text-uppercase bg-success" href="dashboard.php?gastoGeneral">Nuevo gasto general</a>
</div>

<div class="container">
    <div class="row">
        <?php
            $data->getCardGeneralSpend();
        ?>
    </div>
</div>
    
    
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
    
    