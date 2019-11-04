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

    <?php
        include('navbar.php')
    ?>
    <body>
        
        <header class="bg-light p-4" >
            <div class="container text-center">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <a href="dashboard.php" type="button" class="close" >
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
                                Nuevo registro
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="container mt-4">
            <div class="row col-sm-12 col-md-12 col-lg-12 text-center mb-4">
                    <span class="col-sm-2 col-md-3 col-lg-3"></span>

                    <span class="col-4 col-sm-3 col-md-2 col-lg-2 text-center text-decoration-none">
                        <a href="cultivos.php">
                        <img src="../../img/svg/grain.svg" alt="" style="height:35px"><p class="text-muted">Cultivo</p>
                        </a>
                    </span>
                
                    <span class="col-4 col-sm-3 col-md-2 col-lg-2 text-center text-decoration-none">
                        <a href="suelo.php">
                        <img src="../../img/svg/growing-plant-green.svg" alt="" style="height:60px; color: green;" ><p class="text-muted">Suelo</p>
                        </a>
                    </span>

                    <span class="col-4 col-sm-3 col-md-2 col-lg-2 text-center text-decoration-none">
                        <a href="agro.php">
                        <img src="../../img/svg/plant-sample-green.svg" alt="" style="height:35px"><p class="text-muted">Agroquímico</p>
                        </a>
                    </span>

                    <span class="col-sm-2 col-md-3 col-lg-3"></span>
            </div>

            <form action="" method="POST">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputType">Tipo</label>
                            <select class="form-control" id="inputType" name="inputType">
                                <option>Arenoso</option>
                                <option>Arcilloso</option>
                                <option>Franco</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputInfra">Infraestructura</label>
                            <select class="form-control" id="inputInfra" name="inputInfra">
                                <option>Invernadero</option>
                                <option>Malla sombra</option>
                                <option>Macrotúnel</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputWatering">Riego</label>
                            <select class="form-control" id="inputWatering" name="inputWatering">
                                <option>Gota</option>
                                <option>Rodado</option>   
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputPH">PH</label>
                            <select class="form-control" id="inputPH" name="inputPH">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputSalinity">Salinidad</label>
                            <input type="number" class="form-control" id="inputSalinity" name="inputSalinity"
                                placeholder="14">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="inputConduc">Conductividad eléctrica</label>
                            <input type="number" class="form-control" id="inputConduc" name="inputConduc"
                                placeholder="4">
                        </div>
                    </div>
                </div>
                <h5 class="modal-title" id="exampleModalScrollableTitle">Nutrición</h5>
                <div class="row mt-4">
                    <div class="col-md-6 col-lg-6 col-sm-12">              
                        <label for="rangeOrganic">Materia orgánica</label>
                        <input type="range" class="custom-range" min="0" value="50" max="100" step="1" autocomplete="off" id="rangeOrganic" name="rangeOrganic">                           <div id="etiqueta1" class="etiqueta col-lg-12 col-sm-12 text-center"></div>   
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">              
                        <label for="rangeZinc">Zinc</label>
                        <input type="range" class="custom-range" min="0" value="50" max="100" step="1" id="rangeZinc" name="rangeZinc">
                        <div id="etiqueta2" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">              
                        <label for="rangeNitrates">Nitrátos</label>
                        <input type="range" class="custom-range " min="0" value="50" max="100" step="1" id="rangeNitrates" name="rangeNitrates">
                        <div id="etiqueta3" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">              
                        <label for="rangePhosphor">Fósforo</label>
                        <input type="range" class="custom-range " min="0" value="50" max="100" step="1" id="rangePhosphor" name="rangePhosphor">
                        <div id="etiqueta4" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">              
                        <label for="rangePota">Potasio</label>
                        <input type="range" class="custom-range " min="0" value="50" max="100" step="1" id="rangePota" name="rangePota">
                        <div id="etiqueta5" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">              
                        <label for="rangeMang">Manganeso</label>
                        <input type="range" class="custom-range " min="0" value="50" max="100" step="1" id="rangeMang" name="rangeMang">
                        <div id="etiqueta6" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">              
                        <label for="rangeCalc">Calcio</label>
                        <input type="range" class="custom-range " min="0" value="50" max="100" step="1" id="rangeCalc" name="rangeCalc">
                        <div id="etiqueta7" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">              
                        <label for="rangeCopper">Cobre</label>
                        <input type="range" class="custom-range " min="0" value="50" max="100" step="1" id="rangeCopper" name="rangeCopper">
                        <div id="etiqueta8" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">              
                        <label for="rangeAz">Óxido de azufre</label>
                        <input type="range" class="custom-range " min="0" value="50" max="100" step="1" id="rangeAz" name="rangeAz">
                        <div id="etiqueta9" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">              
                        <label for="rangeBor">Boro</label>
                        <input type="range" class="custom-range " min="0" value="50" max="100" step="1" id="rangeBor" name="rangeBor">
                        <div id="etiqueta10" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">              
                        <label for="rangeMag">Magnesio</label>
                        <input type="range" class="custom-range " min="0" value="50" max="100" step="1" id="rangeMag" name="rangeMag">
                        <div id="etiqueta11" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12">              
                        <label for="rangeOxygen">Oxígeno</label>
                        <input type="range" class="custom-range " min="0" value="50" max="100" step="1" id="rangeOxygen" name="rangeOxygen">
                        <div id="etiqueta12" class="etiqueta col-lg-12 col-sm-12 text-center"></div>
                    </div>
                </div>                   
            </form>     
        </main>    
        <div class="text-center pt-3">
            <a href="agro.php" class="btn btn-success" role="button" style="width:230px;"><i class="fas fa-save"></i> Siguiente</a>
        </div>


        <footer class="footer bg-white col-lg-12 col-md-12 col-sm-12">
            <div class="container text-center">
                <span class="text-muted">Todos los derechos reservados 2019
                    &copy; Desarrollado por Hyperion</span>
            </div>
        </footer>

        <script src="../../js/jquery-3.4.1.min.js"></script>
        <script src="../../js/jquery-ui.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="../../js/main.js"></script>
        <script>
            $(document).ready(function(){
                // Read value on page load
                $("#result b").html($("#customRange").val());

                // Read value on change
                $("#customRange").change(function(){
                    $("#result b").html($(this).val());
                });
            });        
        </script> 
    </body>
</html>