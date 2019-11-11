<header class="bg-light p-4" >
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <a href="dashboard.php?viewSpend" type="button" class="close" >
                            <img src="../../img/svg/close-24px.svg" class="close" alt="">
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
                                Nuevo gasto general
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="container mt-4">
           
            <form action="#" method="POST">
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
                                <option value="Pesos">Pesos</option>
                                <option  value="Dolar">Dolares</option>
                                <option  value="Euro">Euros</option>
                            </select>
                        </div>
                     </div>

                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputFecha">Fecha</label>
                            <input type="date" class="form-control" id="inputFecha" name="Fecha" >
                        </div>
                    </div>

                    </div>
                </div>
                <div class="text-center pt-2">
                    <button type="submit" class="btn btn-success mb-2" name="gastoGeneral" style="width:230px;"><i class="fas fa-save"></i> Guardar </button>
                </div>
            </form>
           
           
        </main>

        <?php
            if(isset($_POST['gastoGeneral'])){
                $concepto = $_POST['Concepto'];
                $precio = $_POST['Precio'];
                $moneda = $_POST['Moneda'];
                $fecha = $_POST['Fecha'];

                $data->insertGeneralSpend($concepto, $precio, $moneda, $fecha);
            }
        ?>