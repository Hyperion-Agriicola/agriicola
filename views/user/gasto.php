
    <header class="bg-light p-4" >
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <a href="dashboard.php?Spend=<?php echo $_GET['newSpend'];?>&Ground=<?php echo $_GET['Ground'];?>"  class="close" >
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
                                Nuevo gasto
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="container mt-4">
           
            <form class="reg_gasto" action="" method="POST">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputConcepto">Concepto</label>
                            <input type="text" class="form-control" id="inputConcepto" name="Concepto" placeholder="Nómina">
                        </div>
                    </div>
                
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="inputPrecio">Precio</label>
                            <input type="number" class="form-control" id="inputPrecio" name="Precio" placeholder="100">
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="inputMoneda">Moneda</label>
                            <select class="form-control" id="inputMoneda" name="Moneda">
                                <option>Pesos</option>
                                <option>Dolares</option>
                                <option>Euro</option>
                            </select>
                        </div>
                     </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputSpecie">Frecuencia</label>
                            <select class="form-control" id="inputFrecuencia" name="Frecuencia">
                                <option>Semanal</option>
                                <option>Quincenal</option>
                                <option>Mensual</option>
                                <option>Bimestral</option>
                                <option>Semestral</option>
                                <option>Anual</option>
                            </select>
                        </div>
                     </div>

                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputFecha">Fecha</label>
                            <input placeholder="Seleccione una fecha" class="form-control" id="inputFechaG" name="Fecha">
                        </div>
                    </div>
                    </div>
                </div>
                <div class="text-center pt-2">
                    <button name="insertSpend" type="submit" class="btn btn-success mb-2" role="button" style="width:230px;"><i class="fas fa-save"></i> Guardar </button>
                </div>
            </form>
        </main>

        <?php
            if(isset($_POST['insertSpend'])){
                $id_cultivo = $_GET['newSpend'];
                $concepto = $_POST['Concepto'];
                $precio = $_POST['Precio'];
                $moneda = $_POST['Moneda'];
                $frecuencia = $_POST['Frecuencia'];
                $fecha = $_POST['Fecha'];

                $data->insertCropSpend($id_cultivo, $concepto, $precio, $moneda, $frecuencia, $fecha);
                header('Location: dashboard.php?Spend='.$_GET['newSpend'].'&Ground='.$_GET['Ground'].'');
            }
        ?>
   
    