

        <header class="bg-light p-4" >
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <a href="dashboard.php?cut=<?php echo $_GET['newCut'];?>&Ground=<?php echo $_GET['Ground'];?>"  class="close" >
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
                                Nuevo corte
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="container pt-4">

            <form action="" method="post">
                <div class="row">
                
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputCliente">Cliente</label>
                            <input type="text" class="form-control" id="inputName" name="Cliente" placeholder="Nutriente">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputFecha">Fecha</label>
                            <input type="date"  class="form-control" id="inputFecha" name="Fecha">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="inputPeso">Peso
                            <i class="icon-grey-color fas fa-question-circle"
                                data-toggle="tooltip" data-placement="top" title="Selecciona un número con las flechas de la derecha o escríbelo"></i>
                            </label>
                            <input type="number" placeholder="..." class="form-control" id="inputPeso" name="Peso">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="inputunidad">Unidad</label>
                            <select class="form-control" id="inputUnidad" name="Unidad">
                                <option value='g'>Gramos</option>
                                <option value='Kg'>Kilogramos</option>
                                <option value='ton'>Toneladas</option>
                                
                            </select>
                        </div>
                     </div>

                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputMercado">Mercado</label>
                            <select class="form-control" id="inputMercado" name="Mercado">
                                <option value="Nacional">Nacional</option>
                                <option value="Internacional">Internacional</option>
                            </select>
                        </div>
                    </div>


                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                        <label for="inputCalidad">Calidad</label>
                            <select class="form-control" id="inputCalidad" name="Calidad">
                                <option value="primera">Primera calidad</option>
                                <option value="segunda">Segunda calidad</option>
                                <option value="tercera">Tercera calidad</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group">
                        <label for="inputPrecio">Precio
                        <i class="icon-grey-color fas fa-question-circle"
                                data-toggle="tooltip" data-placement="top" title="Selecciona un número con las flechas de la derecha o escríbelo"></i>
                        </label>
                            <input type="number" placeholder=".." class="form-control" id="inputPrecio" name="Precio">
                        </div>
                     </div>

                    
                     <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="inputMoneda">Moneda</label>
                            <select class="form-control" id="inputMoneda" name="Moneda">
                                <option value='pesos'>Pesos</option>
                                <option value='dólares'>Dólares</option>
                                <option value='euros'>Euros</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="text-center pt-3">
                    <button name="addnewCut" type="submit" class="btn btn-success" role="button" style="width:230px;"><i class="fas fa-save"></i> Guardar</button>
                </div>
            </form>       
        </main>

        <?php
            if (isset($_POST['addnewCut'])){
                $id_cultivo = $_GET['newCut'];
                $cliente = $_POST['Cliente'];
                $fecha_corte = $_POST['Fecha']; 
                $peso = $_POST['Peso']; 
                $unidad = $_POST['Unidad']; 
                $mercado = $_POST['Mercado']; 
                $calidad = $_POST['Calidad']; 
                $precio = $_POST['Precio']; 
                $moneda = $_POST['Moneda'];

                $data->addNewCut($id_cultivo, $cliente, $fecha_corte, $peso, $unidad, $mercado, $calidad, $precio, $moneda);

                header('Location: dashboard.php?cut='.$_GET['newCut'].'&Ground='.$_GET['Ground'].'');
            }
        ?>
        
            
    