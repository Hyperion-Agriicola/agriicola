<?php
ob_start();

include('database.php');
include('catalogDB.php');

class Functions
{
    public function registerUser(
        $userName,
        $userlastName,
        $phoneNumber,
        $userEmail,
        $userCompany,
        $userCity,
        $userState,
        $userPass1,
        $userPass2
    ) {
        $connection = new Database();

        if ($userPass1 == $userPass2) {
            $insert = "INSERT INTO users(nombre, apellido, telefono, correo, 
            acceso, empresa, tipo_usuario, ciudad, estado, fecha_registro) VALUES ('$userName', '$userlastName', 
            '$phoneNumber', '$userEmail', sha1('$userPass2'), '$userCompany', 'user', '$userCity', '$userState', now())";

            $result = mysqli_query($connection, $insert);

            if ($result) {
                session_start();
                $_SESSION['correo'] = $userEmail;
                header('Location: views/user/dashboard.php');
            }
        } else {
            echo "
            <div class='container mt-4'>
                <div class='alert alert-danger' role='alert'>
                    Las contraseñas no coinciden, intente de nuevo
                </div>
            </div>
            ";
        }
    }

    public function userLogin($email, $password)
    {
        $conexion = new Database();
        $query = "SELECT * FROM users WHERE correo = '$email' AND acceso = sha1('$password')";
        $row = $conexion->query($query);
        $user = $row->fetch_array();
        $checkUser = mysqli_num_rows($row);

        if ($checkUser == 0) {
            echo "
            <div class='container mt-4'>
                <div class='alert alert-danger' role='alert'>
                   Correo o contraseña incorrectos, intente de nuevo
                </div>
            </div>
            ";
        } else {
            session_start();
            $_SESSION['correo'] = $user['correo'];
            header('Location: views/user/dashboard.php');
        }
    }

    public function getUserProfile()
    {
        $conexion = new Database();

        $email = $_SESSION['correo'];
        $query = "SELECT * FROM users WHERE correo = '$email'";

        $result = $conexion->query($query);
        $resultSet = array();
        if ($result) {

            while ($row = $result->fetch_array()) {
                $resultSet[0] = $row['nombre'];
                $resultSet[1] = $row['apellido'];
                $resultSet[2] = $row['telefono'];
                $resultSet[3] = $row['correo'];
                $resultSet[4] = $row['acceso'];
                $resultSet[5] = $row['empresa'];
                $resultSet[6] = $row['ciudad'];
                $resultSet[7] = $row['estado'];
                $resultSet[8] = $row['fecha_registro'];
            }

            return $resultSet;
        }
    }

    public function insertNatural(
        $type,
        $infra,
        $watering,
        $ph,
        $salinity,
        $conduc,
        $organic,
        $zinc,
        $nitra,
        $phosphore,
        $pota,
        $manga,
        $calc,
        $copper,
        $azu,
        $bor,
        $magne,
        $oxygen
    ) {

        $conexion = new Database();
        $userEmail = $_SESSION['correo'];

        $getUserQuery = "SELECT max(id_cultivo) as id_cultivo FROM cultivos WHERE id_u = (SELECT id_u FROM users WHERE correo = '$userEmail')";
        $execUserQuery = $conexion->query($getUserQuery) or trigger_error(mysqli_error($conexion));

        if ($execUserQuery) {
            $userRow = $execUserQuery->fetch_array();

            $query = "INSERT INTO suelo_natural (id_cultivo, tipo_suelo, infraestructura, riego, ph, salinidad,
            conduc_elec, materia_organica, zinc, nitratos, fosforo, potasio, manganeso, calcio, cobre,
            oxido_azufre, boro, magnesio, oxigeno, fecha_registro) VALUES ('$userRow[id_cultivo]', '$type',  '$infra', '$watering', 
            '$ph', '$salinity', '$conduc', '$organic', '$zinc', '$nitra', '$phosphore', '$pota', '$manga',
            '$calc', '$copper', '$azu', '$bor', '$magne', '$oxygen', now())";

            $result = $conexion->query($query);

            if (!$result) {
                echo "
                <div class='container mt-4'>
                    <div class='alert alert-danger' role='alert'>
                       Hubo un error al registrar los datos, verifique sus campos o intente más tarde
                    </div>
                </div>
                ";
            } else {
                header('Location: dashboard.php?agro');
            }
        }
    }

    public function insertArtificial($sustr, $infra, $watering)
    {
        $conexion = new Database();

        $userEmail = $_SESSION['correo'];

        $getUserQuery = "SELECT max(id_cultivo) as id_cultivo FROM cultivos WHERE id_u = (SELECT id_u FROM users WHERE correo = '$userEmail')";
        $execUserQuery = $conexion->query($getUserQuery) or trigger_error(mysqli_error($conexion));
        if ($execUserQuery) {
            $userRow = $execUserQuery->fetch_array();

            $query = "INSERT INTO suelo_artificial(id_cultivo, sustrato, infraestructura,
            riego, fecha_registro) 
            VALUES ('$userRow[id_cultivo]','$sustr','$infra','$watering', now())";

            $result = $conexion->query($query) or trigger_error(mysqli_error($conexion));

            if (!$result) {
                echo "
                <div class='container mt-4'>
                    <div class='alert alert-danger' role='alert'>
                       Hubo un error al registrar los datos, verifique sus campos o intente más tarde
                    </div>
                </div>
                ";
            } else {
                header('Location: dashboard.php?agro');
            }
        }
    }

    public function insertCrop(
        $name,
        $hectares,
        $subspecie,
        $specieType,
        $variation,
        $bornDate,
        $state,
        $township,
        $town,
        $groundSelect
    ) {
        $conexion = new Database();

        $userEmail = $_SESSION['correo'];

        $getUserQuery = "SELECT id_u FROM users WHERE correo = '$userEmail'";
        $execUserQuery = $conexion->query($getUserQuery) or trigger_error(mysqli_error($conexion));
        if ($execUserQuery) {
            $userRow = $execUserQuery->fetch_array();

            //echo $name . " " . $hectares . " " . $subspecie . " " . $specieType . " " . $variation
            //. " " . $bornDate . " " . $details . " " . $userRow['id_u'];

            $insert = "INSERT INTO cultivos(id_u, nombre_predio, hectareas, tipo_especie, subespecie,
            variedad, fecha_inicio, estado, municipio, localidad, tipo_suelo, estatus, fecha_registro) 
            VALUES ('$userRow[id_u]', '$name','$hectares','$specieType','$subspecie', 
            '$variation', '$bornDate', '$state', '$township', '$town', '$groundSelect', 'activo', now())";

            $execQuery = $conexion->query($insert) or trigger_error($conexion->error);

            if ($execQuery) {
                echo '
                <div class="bs-example">
                    <div class="toast" id="myToast" style="position: absolute; top: 0; right: 0;">
                        <div class="toast-header">
                            <strong class="mr-auto"><i class="fas fa-check"></i> Cultivo registrado!</strong>
                            <small>Justo ahora</small>
                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="toast-body">
                            <div>
                                Tus datos están siendo guardados conforme avances.
                            </div>
                        </div>
                    </div>
                </div>';
                if ($groundSelect == 'natural') {
                    header('Location: dashboard.php?naturalGround');
                } else {
                    header('Location: dashboard.php?artificialGround');
                }
            } else {
                echo "
                <div class='container mt-4'>
                    <div class='alert alert-danger' role='alert'>
                       Hubo un error al registrar los datos, verifique sus campos o intente más tarde
                    </div>
                </div>
                ";
            }
        }
    }

    public function getArtificial()
    {
        $conexion = new Database();
        $email = $_SESSION['correo'];

        $query = "SELECT id_suelo, sustrato FROM suelo_artificial 
            WHERE id_u = (SELECT id_u FROM users WHERE correo = '$email')";

        $execQuery = $conexion->query($query);

        if ($execQuery) {
            while ($row = $execQuery->fetch_array()) {
                echo "
                    <option value='$row[id_suelo]'>$row[sustrato]</option>
                ";
            }
        } else {
            echo "No hay datos";
        }
    }

    public function getNatural()
    {
        $conexion = new Database();
        $email = $_SESSION['correo'];

        $query = "SELECT id_suelo, tipo_suelo FROM suelo_natural 
            WHERE id_u = (SELECT id_u FROM users WHERE correo = '$email')";

        $execQuery = $conexion->query($query);

        if ($execQuery) {
            while ($row = $execQuery->fetch_array()) {
                echo "
                    <option value='$row[id_suelo]'>$row[tipo_suelo]</option>
                ";
            }
        } else {
            echo "No hay datos";
        }
    }

    public function expenseControl($concept, $frecuency, $price, $currency, $date)
    {
        $conexion = new Database();

        $userEmail = $_SESSION['correo'];

        $getUserQuery = "SELECT id_u FROM users WHERE correo = '$userEmail'";
        $execUserQuery = $conexion->query($getUserQuery) or trigger_error(mysqli_error($conexion));
        if ($execUserQuery) {
            $userRow = $execUserQuery->fetch_array();

            $query = "INSERT INTO gastos VALUES (NULL, '" . $concept . "', '" . $frecuency . "', " . $price . ", 
            '" . $currency . "','" . $date . "', '" . $userRow['id_u'] . "');";

            $result = mysqli_query($conexion, $query);

            if (!$result) {
                die($query);
            } else {
                echo "
                        <div class='container mt-4'>
                            <div class='alert alert-success' role='alert'>
                                El registro del cultivo se realizo correctamente
                            </div>
                        </div>";
            }
        }
    }

    public function insertAgro(
        $aplicacion,
        $nom_comer,
        $precio,
        $moneda,
        $cantidad,
        $unidad,
        $dosis,
        $tiempo,
        $tipo,
        $frecuencia,
        $fecha_inicio,
        $fecha_fin,
        $existencia

    ) {

        $conexion = new Database();
        $userEmail = $_SESSION['correo'];

        $getUserQuery = "SELECT max(id_cultivo) as id_cultivo FROM cultivos WHERE id_u = (SELECT id_u FROM users WHERE correo = '$userEmail');";
        $execUserQuery = $conexion->query($getUserQuery) or trigger_error(mysqli_error($conexion));

        if ($execUserQuery) {
            $userRow = $execUserQuery->fetch_array();

            $query = "INSERT INTO agroquimicos (id_cultivo, aplicacion, nombre_comercial, precio, moneda,
            cantidad, unidad, dosis, tiempo, tipo_causa, frecuencia, fecha_inicio, fecha_fin, existencia,
            fecha_registro) VALUES ('$userRow[id_cultivo]',  '$aplicacion', '$nom_comer', 
            '$precio', '$moneda', '$cantidad', '$unidad', '$dosis', '$tiempo', '$tipo', '$frecuencia', '$fecha_inicio',
            '$fecha_fin', '$existencia', now())";

            $result = $conexion->query($query)
                or trigger_error(mysqli_error($conexion));

            if (!$result) {
                echo "
                <div class='container mt-4'>
                    <div class='alert alert-danger' role='alert'>
                       Hubo un error al registrar los datos, verifique sus campos o intente más tarde
                    </div>
                </div>
                ";
            } else {
                header('Location: dashboard.php');
            }
        }
    }

    public function getUserId($email)
    {

        $conexion = new Database();
        $query = "SELECT id_u FROM users WHERE correo = '$email'";
        $result = $conexion->query($query);
        $id = "";
        while ($row = $result->fetch_array()) {
            $id = $row['id_u'];
        }
        return $id;
    }

    public function getCultivos()
    {

        $conexion = new Database();
        $query = "SELECT * FROM cultivos;";
        $result = $conexion->query($query);
        while ($row = $result->fetch_array()) {
            echo " <option value='" . $row['id_cultivo'] . "'>" . $row['nombre_predio'] . "</option>";
        }
    }

    public function deleteCultivos($id_cultivo_recibido)
    {
        $conexion = new Database();
        $sql="UPDATE agroquimicos SET estatus='eliminado' WHERE id_cultivo=".$id_cultivo_recibido;
        $result = $conexion->query($sql);

        $sql="UPDATE suelo_natural SET estatus='eliminado' WHERE id_cultivo=".$id_cultivo_recibido;
        $result = $conexion->query($sql);

        $sql="UPDATE suelo_artificial SET estatus='eliminado' WHERE id_cultivo=".$id_cultivo_recibido;
        $result = $conexion->query($sql);

        $sql="UPDATE gastos SET estatus='eliminado' WHERE id_cultivo=".$id_cultivo_recibido;
        $result = $conexion->query($sql);

        $sql="UPDATE cultivos SET estatus='eliminado' WHERE id_cultivo=".$id_cultivo_recibido;
        $result = $conexion->query($sql);
    }


    public function deleteAgroquimicos($id_agro_recibido)
    {
        $conexion = new Database();
        $sql="UPDATE agroquimicos SET estatus='eliminado' WHERE id_agroquimico=".$id_agro_recibido;
        $result = $conexion->query($sql);
    }

    //Devuelve las CARDS de cada cultivo, posteando el id de cultivo con un formulario oculto
    public function getCropByID()
    {
        $conexion = new Database();
        $email = $_SESSION['correo'];

        $query = "SELECT * FROM cultivos WHERE id_u = (SELECT id_u FROM users WHERE correo = '$email') AND estatus!='eliminado'";
        $execQuery = $conexion->query($query);
        if (mysqli_num_rows($execQuery) > 0) {
            while ($row = $execQuery->fetch_array()) {
                //../../img/svg/grain.svg
                $fechaa = $row['fecha_inicio'];
                $niu_fechaa = explode("-", $fechaa);

                $month = array(
                    'Enero',
                    'Febrero',
                    'Marzo',
                    'Abril',
                    'Mayo',
                    'Junio',
                    'Julio',
                    'Agosto',
                    'Septiembre',
                    'Octubre',
                    'Noviembre',
                    'Diciembre');

                               
                echo '
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 my-3">
                    <div class="card shadow bg-light text-center">
                        
                            <div class="card-header bg-white">
                                ' . $niu_fechaa[2] . " de " . $month[$niu_fechaa[1] - 1] . " de " . $niu_fechaa[0] . '
                                
                                
                                <a href="" data-toggle="modal" data-target="#modalEliminar'.$row["id_cultivo"].'">
                                    <img src="../../img/svg/close-24px.svg" class="close" alt="">
                                </a>    
                                
                            </div>
                            <div class="card-body">
                                
                                    <img src="../../img/svg/grain.svg" width="60">
                                    <p class="lead mt-3"><strong>' . $row['nombre_predio'] . '</strong> </p>
                                    
                                  
                            </div>

                            <div class="card-footer bg-white">
                                <form action="dashboard.php?viewCrop" method="POST" class="align-right">
                                    <input type="text" value='.$row['id_cultivo'].' style="display: none;" name="get_id_cultivo">
                                    <input type="text" value='.$row['tipo_suelo'].' style="display: none;" name="get_tipo_suelo">
                                    <button type="submit" class="btn btn-block btn-success">
                                        Ver más
                                    </button>
                                </form>
                            </div>
                         </a>
                    </div>
                </div>
                <!--Modal eliminar-->
                <div class="modal fade" id="modalEliminar'.$row["id_cultivo"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                                ¿Está seguro de eliminar este cultivo? Tome en cuenta que ésta acción es irreversible.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <a href="dashboard.php?cultivo='.$row['id_cultivo'].'" class="btn btn-success" role="button" aria-disabled="true">Aceptar</a>
                           
                            </div>
                        </div>
                    </div>
                </div>


                ';
            }
        } else {
            echo "
                <div class='col-lg-1 col-md-1 col-sm-12'></div>
                <div class='col-lg-4 col-md-4 col-sm-12'></div>
                <div class='col-lg-4 col-md-4 col-sm-12'>
                    <h3>No hay datos</h3>
                    <img src='../../img/svg/alerts/no_data.svg' width='150'>
                    <p><a class='text-success' href='dashboard.php?cultivos'>Crear un nuevo registro</a></p>
                </div>
                <div class='col-lg-4 col-md-4 col-sm-12'></div>
            ";
        }
    }

    public function getSubspecie($selected)
    {
        $conexion = new Catalog();
        mysqli_set_charset($conexion, "utf8");
        $query = "SELECT nom_subespecie FROM subespecie ORDER BY nom_subespecie";
        $execQuery = $conexion->query($query);

        while ($row = $execQuery->fetch_array()) {
            
            if ($selected == $row['nom_subespecie']){
                echo "<option value='$row[nom_subespecie]' selected>$row[nom_subespecie]</option>";
            }else{
            echo "
                <option value='$row[nom_subespecie]'>$row[nom_subespecie]</option>
            ";
            }
        }
    }

    

    public function getSpecie($selected)
    {
        $conexion = new Catalog();
        mysqli_set_charset($conexion, "utf8");
        $query = "SELECT nom_especie FROM especie ORDER BY nom_especie";
        $execQuery = $conexion->query($query);

        while ($row = $execQuery->fetch_array()) {

            if ($selected == $row['nom_especie']){
                echo "<option value='$row[nom_especie]' selected>$row[nom_especie]</option>";
            }else{
            echo "
                <option value='$row[nom_especie]'>$row[nom_especie]</option>
            ";
            }
        }
    }

    public function getGroundType($selected)
    {
        $conexion = new Catalog();
        mysqli_set_charset($conexion, "utf8");
        $query = "SELECT nom_tipo_suelo FROM tipo_suelo ORDER BY nom_tipo_suelo";
        $execQuery = $conexion->query($query);

        while ($row = $execQuery->fetch_array()) {

            if ($selected == $row['nom_tipo_suelo']){
                echo "<option value='$row[nom_tipo_suelo]' selected>$row[nom_tipo_suelo]</option>";
            }else{
            echo "
                <option value='$row[nom_tipo_suelo]'>$row[nom_tipo_suelo]</option>
            ";
            }
        }
    }

    public function getInfrastucture($selected)
    {
        $conexion = new Catalog();
        mysqli_set_charset($conexion, "utf8");
        $query = "SELECT nom_infraestructura FROM infraestructura ORDER BY nom_infraestructura";
        $execQuery = $conexion->query($query);

        while ($row = $execQuery->fetch_array()) {

            if($selected == $row['nom_infraestructura']){
                echo "<option value='$row[nom_infraestructura]' selected>$row[nom_infraestructura]</option>";
            }else{
            echo "
                <option value='$row[nom_infraestructura]'>$row[nom_infraestructura]</option>
            ";
            }
        }
    }

    public function getWatering($selected)
    {
        $conexion = new Catalog();
        mysqli_set_charset($conexion, "utf8");
        $query = "SELECT nom_riego FROM riego ORDER BY nom_riego";
        $execQuery = $conexion->query($query);

        while ($row = $execQuery->fetch_array()) {

            if($selected == $row['nom_riego']){
                echo "<option value='$row[nom_riego]' selected>$row[nom_riego]</option>";
            }else{
            echo "
                <option value='$row[nom_riego]'>$row[nom_riego]</option>
            ";
            }
        }
    }

    public function getDiseases($selected)
    {
        $conexion = new Catalog();
        mysqli_set_charset($conexion, "utf8");
        $query = "SELECT nom_enfermedad FROM enfermedades ORDER BY nom_enfermedad";
        $execQuery = $conexion->query($query);

        while ($row = $execQuery->fetch_array()) {

            
            if($selected == $row['nom_enfermedad']){
                echo "<option value='$row[nom_enfermedad]' selected>$row[nom_enfermedad]</option>";
            }else{
            echo "
                <option value='$row[nom_enfermedad]'>$row[nom_enfermedad]</option>
            ";
            }
        }
    }

    public function getDiseases2($selected)
    {
        $conexion = new Catalog();
        mysqli_set_charset($conexion, "utf8");
        $query = "SELECT nom_enfermedad FROM enfermedades ORDER BY nom_enfermedad";
        $execQuery = $conexion->query($query);
        
        $str = "";
        while ($row = $execQuery->fetch_array()) {

            
            if($selected == $row['nom_enfermedad']){
                $str = $str."<option value='$row[nom_enfermedad]' selected>$row[nom_enfermedad]</option>";
            }else{
            
                $str = $str." <option value='$row[nom_enfermedad]'>$row[nom_enfermedad]</option>";
            
            }
        }
        return $str;
    }

    public function getBugs($selected)
    {
        $conexion = new Catalog();
        mysqli_set_charset($conexion, "utf8");
        $query = "SELECT nom_plaga FROM plagas ORDER BY nom_plaga";
        $execQuery = $conexion->query($query);

        while ($row = $execQuery->fetch_array()) {

            if($selected == $row['nom_plaga']){
                echo "<option value='$row[nom_plaga]' selected>$row[nom_plaga]</option>";
            }else{
            echo "
                <option value='$row[nom_plaga]'>$row[nom_plaga]</option>
            ";
            }
        }
    }

    public function getBugs2($selected)
    {
        $conexion = new Catalog();
        mysqli_set_charset($conexion, "utf8");
        $query = "SELECT nom_plaga FROM plagas ORDER BY nom_plaga";
        $execQuery = $conexion->query($query);
        $str = "";
        while ($row = $execQuery->fetch_array()) {

            if($selected == $row['nom_plaga']){
                $str = $str."<option value='$row[nom_plaga]' selected>$row[nom_plaga]</option>";
            }else{
                $str = $str."<option value='$row[nom_plaga]'>$row[nom_plaga]</option>
            ";
            }
        }

        return $str;
    }

    public function getSubstract($selected)
    {
        $conexion = new Catalog();
        mysqli_set_charset($conexion, "utf8");
        $query = "SELECT nombre_sustrato FROM sustrato_suelo ORDER BY nombre_sustrato";
        $execQuery = $conexion->query($query);

        while ($row = $execQuery->fetch_array()) {

            if($selected == $row['nombre_sustrato']){
                echo "<option value='$row[nombre_sustrato]' selected>$row[nombre_sustrato]</option>";
            }else{
            echo "
                <option value='$row[nombre_sustrato]'>$row[nombre_sustrato]</option>
            ";
            }
        }
    }

    //Muestra los datos del cultivo en el modal    
    public function getViewCropByID($id)
    {
        $conexion = new Database();

        $email = $_SESSION['correo'];
        $query = "SELECT  * FROM cultivos WHERE id_u = (SELECT id_u FROM users WHERE correo = '$email') AND id_cultivo = '$id';";
        
        $result = $conexion->query($query);
        $resultSet = array();
        if ($result) {

            while ($row = $result->fetch_array()) {
                $resultSet[0] = $row['nombre_predio'];
                $resultSet[1] = $row['hectareas'];
                $resultSet[2] = $row['tipo_especie'];
                $resultSet[3] = $row['subespecie'];
                $resultSet[4] = $row['variedad'];
                $resultSet[5] = $row['fecha_inicio'];
                $resultSet[6] = $row['estado'];
                $resultSet[7] = $row['municipio'];
                $resultSet[8] = $row['localidad'];
                $resultSet[9] = $row['fecha_registro'];
                $resultSet[10] = $row['fecha_modif'];
                $resultSet[11] = $row['id_cultivo'];
            }

            return $resultSet;
        }
    }

    //Muestra los datos del suelo en el modal
    public function getGroundViewByID($id)
    {
        $conexion = new Database();
        $userEmail = $_SESSION['correo'];
        
        $query = "SELECT id_cultivo FROM cultivos WHERE id_u = (SELECT id_u FROM users WHERE correo = '$userEmail');";

        $execQuery = $conexion->query($query);

        $row = $execQuery->fetch_array();

        $queryNatural = "SELECT * FROM suelo_natural WHERE id_cultivo = '$id'";
        $execQueryNatural = $conexion->query($queryNatural);

        if (mysqli_num_rows($execQueryNatural) > 0) {
            $resultSet = array();
            while ($row = $execQueryNatural->fetch_array()) {
                $resultSet[0] = $row['tipo_suelo'];
                $resultSet[1] = $row['infraestructura'];
                $resultSet[2] = $row['riego'];
                $resultSet[3] = $row['ph'];
                $resultSet[4] = $row['salinidad'];
                $resultSet[5] = $row['conduc_elec'];
                $resultSet[6] = $row['materia_organica'];
                $resultSet[7] = $row['zinc'];
                $resultSet[8] = $row['nitratos'];
                $resultSet[9] = $row['fosforo'];
                $resultSet[10] = $row['potasio'];
                $resultSet[11] = $row['manganeso'];
                $resultSet[12] = $row['calcio'];
                $resultSet[13] = $row['cobre'];
                $resultSet[14] = $row['oxido_azufre'];
                $resultSet[15] = $row['boro'];
                $resultSet[16] = $row['magnesio'];
                $resultSet[17] = $row['oxigeno'];
                $resultSet[18] = $row['id_suelo_natural'];
            }

            return $resultSet;
        } else {
            $queryArtificial = "SELECT * FROM suelo_artificial WHERE id_cultivo = '$id'";
            $execQueryArtificial = $conexion->query($queryArtificial);

            $resultArt = array();

            while ($row = $execQueryArtificial->fetch_array()) {
                $resultArt[0] = $row['sustrato'];
                $resultArt[1] = $row['infraestructura'];
                $resultArt[2] = $row['riego'];
                $resultArt[3] = $row['id_suelo_artificial'];
            }

            return $resultArt;
        }
    }

    //Muestra los datos del agroquimico en el modal
    public function getAgroViewByID($id_cultivo, $id_agroquimico)
    {
        $conexion = new Database();
        $userEmail = $_SESSION['correo'];

        $query = "SELECT * FROM agroquimicos WHERE id_cultivo = '$id_cultivo' AND id_agroquimico = '$id_agroquimico';";
        $execQuery = $conexion->query($query);

        $resultSet = array();
        while ($row = $execQuery->fetch_array()) {
            $resultSet[0] = $row['aplicacion'];
            $resultSet[1] = $row['nombre_comercial'];
            $resultSet[2] = $row['precio'];
            $resultSet[3] = $row['moneda'];
            $resultSet[4] = $row['cantidad'];
            $resultSet[5] = $row['unidad'];
            $resultSet[6] = $row['fecha_inicio'];
            $resultSet[7] = $row['fecha_fin'];
        }

        return $resultSet;
    }

    //Funcion CARD de agroquimico dinamica

    public function getCardAgro($id_cultivo){

        $conexion = new Database();
        
        $query = "SELECT * FROM agroquimicos WHERE id_cultivo = '$id_cultivo' AND estatus !='eliminado'";
        $execQuery = $conexion->query($query);

        if (mysqli_num_rows($execQuery) > 0) {
            while ($row = $execQuery->fetch_array()) {

                $fecha = $row['fecha_inicio'];
                $niu_fecha = explode("-", $fecha);

                $fechaa = $row['fecha_fin'];
                $niu_fechaa = explode("-", $fechaa);

                //Combo aplicacion
                $aplicacion = $row['aplicacion'];
                $selected_aplicacion = "";

                if ($aplicacion == 'Nutriente'){
                    $selected_aplicacion = '<option value="Nutriente" selected>Nutriente</option>
                    <option value="Enfermedad">Enfermedad</option>
                    <option value="Plaga">Plaga</option>';
                }else if($aplicacion == 'Enfermedad'){
                    $selected_aplicacion = '<option value="Nutriente">Nutriente</option>
                    <option value="Enfermedad" selected>Enfermedad</option>
                    <option value="Plaga">Plaga</option>';
                }else if($aplicacion == 'Plaga'){
                    $selected_aplicacion = '<option value="Nutriente">Nutriente</option>
                    <option value="Enfermedad">Enfermedad</option>
                    <option value="Plaga" selected>Plaga</option>';
                }

                //Combo moneda
                $moneda = $row['moneda'];
                $selected_moneda = "";

                if($moneda == 'pesos'){
                    $selected_moneda = '<option value="pesos" selected>Pesos</option>
                    <option value="dolar">Dolar</option>
                    <option value="euro">Euro</option>';
                }else if ($moneda == 'dolar'){
                    $selected_moneda = '<option value="pesos">Pesos</option>
                    <option value="dolar" selected>Dolar</option>
                    <option value="euro">Euro</option>';
                }else if ($moneda == 'euro'){
                    $selected_moneda = '<option value="pesos">Pesos</option>
                    <option value="dolar">Dolar</option>
                    <option value="euro" selected>Euro</option>';
                }
                
                //Combo unidad
                $unidad = $row['unidad'];
                $selected_unidad = "";

                if($unidad == 'ml'){
                    $selected_unidad = '<option value="ml" selected>Mililitros</option>
                    <option value="l">Litros</option>';
                }else if($unidad = 'l'){
                    $selected_unidad = '<option value="ml">Mililitros</option>
                    <option value="l" selected>Litros</option>';
                }

                //Combo tiempo
                $tiempo = $row['tiempo'];
                $selected_tiempo = "";

                if ($tiempo == 'semana'){
                    $selected_tiempo = '<option value="semana" selected>Semanas</option>
                                        <option value="dias">Dias</option>';
                }else if($tiempo == 'dias'){
                    $selected_tiempo = '<option value="semana">Semanas</option>
                    <option value="dias" selected>Dias</option>';
                }

                //Combo nutricion
                $nutricion = $row["tipo_causa"];
                $selected_nutricion = "";

                if($nutricion == 'micro'){
                    $selected_nutricion = '<option value="micro" selected>Micronutrientes</option>
                    <option value="macro">Macronutrientes</option>';
                }else if($nutricion == 'macro'){
                    $selected_nutricion = '<option value="micro">Micronutrientes</option>
                    <option value="macro" selected>Macronutrientes</option>';
                }

                //Combo enfermedad
                $enfermedad = $this->getDiseases2($row['tipo_causa']);

                //Combo plaga
                $plaga = $this->getBugs2($row['tipo_causa']);
                
                $month = array(
                   'Enero',
                   'Febrero',
                   'Marzo',
                   'Abril',
                   'Mayo',
                   'Junio',
                   'Julio',
                   'Agosto',
                   'Septiembre',
                   'Octubre',
                   'Noviembre',
                   'Diciembre');


                echo '
                    <div class="col-md-4 col-sm-12 pb-4">  
                        <div class="card bg-light p-1 shadow p-0 mb-0 bg-light" style="Border-Radius: 10px;"> 
                            <div class="card-header bg-light">
                                <img src="../../img/svg/plant-sample.svg" style="height:35px" class="mb-2" alt="">
                                <a href="" data-toggle="modal" data-target="#modalEliminar'.$row['id_agroquimico'].'">
                                    <button type="button" class="close"><span>&times</span></button>
                                </a>
                                <br>
                                <h4>'.$row['aplicacion'].' : '.$row['nombre_comercial'].'</h4>
                                
                            </div>

                            <div class="card-body pt-3">
                                <a data-toggle="modal" data-target="#edit'.str_replace(' ' , '',  $row['nombre_comercial']).'" class="close">
                                    <img src="../../img/svg/edit-24px.svg"class="mb-2" alt="">
                                </a>
                                <a data-toggle="modal" data-target="#'.str_replace(' ' , '',  $row['nombre_comercial']).'" class="text-success text-left text-decoration-none" href="#">Ver informacion

                                </a>
                            </div>
                                
                        </div>      
                    </div>

                    <!---Modal de agro-->
                    <div class="modal fade" id="'.str_replace(' ' , '',  $row['nombre_comercial']).'" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        '.$row['nombre_comercial'].'
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <p class="lead">Nombre comercial</p>
                                            <p class="text-muted">
                                            '.$row['nombre_comercial'].'
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <p class="lead">Precio</p>
                                            <p class="text-muted">
                                            '.$row['precio'].'
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <p class="lead">Moneda</p>
                                            <p class="text-muted">
                                            '.$row['moneda'].'
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <p class="lead">Cantidad</p>
                                            <p class="text-muted">
                                            '.$row['cantidad'].'
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <p class="lead">Unidad</p>
                                            <p class="text-muted">
                                            '.$row['unidad'].'
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <p class="lead">Fecha Inicio</p>
                                            <p class="text-muted">
                                                                                                        
                                                '.$niu_fecha[2] . " de " . $month[$niu_fecha[1] - 1] . " de " . $niu_fecha[0].'
                                                                
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <p class="lead">Fecha Fin</p>
                                            <p class="text-muted">
                                                '.$niu_fechaa[2] . " de " . $month[$niu_fechaa[1] - 1] . " de " . $niu_fechaa[0].'
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Modal modif agroquimico-->
                    <div class="modal fade" id="edit'.str_replace(' ' , '',  $row['nombre_comercial']).'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        Modificar cultivo
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="POST">
                                        <input name="input_id_cultivo" id="input_id_cultivo" value='.$row['id_cultivo'].' style="display: none;">
                                        <input name="input_id_agroquimico" id="input_id_agroquimico" value='.$row['id_agroquimico'].' style="display: none;">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="inputAplicacion">Aplicación</label>
                                                    <select class="form-control" id="inputAplicacion" name="origin">
                                                        '.$selected_aplicacion.'
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="inputNombreComercial">Nombre comercial</label>
                                                    <input type="text" placeholder="Nutriplant" class="form-control" id="inputNombreComercial" name="name_agroq" value="'.$row['nombre_comercial'].'">
                                                </div>
                                            </div>
                                
                                            <div class="col-lg-3 col-md-3 col-sm-6">
                                                <div class="form-group">
                                                    <label for="inputPrecio">Precio</label>
                                                    <input type="number" placeholder="700" class="form-control" id="inputPrecio" name="precio" value="'.$row['precio'].'">
                                                </div>
                                            </div>
                                
                                            <div class="col-lg-3 col-md-3 col-sm-6">
                                                <div class="form-group">
                                                    <label for="inputMoneda">Moneda</label>
                                                    <select class="form-control" id="inputMoneda" name="moneda">
                                                        '.$selected_moneda.'
                                                    </select>
                                                </div>
                                            </div>
                                
                                            <div class="col-lg-3 col-md-3 col-sm-6">
                                                <div class="form-group">
                                                    <label for="inputCantidad">Cantidad</label>
                                                    <input type="number" placeholder="700" class="form-control" id="inputCantidad" name="cantidad" value="'.$row['cantidad'].'">
                                                </div>
                                            </div>
                                
                                            <div class="col-lg-3 col-md-3 col-sm-6">
                                                <div class="form-group">
                                                    <label for="inputUnidad">Unidad</label>
                                                    <select class="form-control" id="inputUnidad" name="unidad">
                                                        '.$selected_unidad.'
                                                    </select>
                                                </div>
                                            </div>
                                
                                
                                            <div class="col-lg-3 col-md-3 col-sm-6">
                                                <div class="form-group">
                                                    <label for="inputDosis">Dosis</label>
                                                    <input type="number" placeholder="700" class="form-control" id="inputDosis" name="dosis" value="'.$row['dosis'].'">
                                                </div>
                                            </div>
                                
                                            <div class="col-lg-3 col-md-3 col-sm-6">
                                                <div class="form-group">
                                                    <label for="inputTiempo">Tiempo</label>
                                                    <select class="form-control" id="inputTiempo" name="tiempo">
                                                        '.$selected_tiempo.'
                                                    </select>
                                                </div>
                                            </div>
                                
                                
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <!--Si el campo aplicacion es Nutriente-->
                                                    <div id="inputTipo">
                                                        <label for="inputTipo">Tipo</label>
                                                        <select class="form-control" name="nutricion">
                                                            '.$selected_nutricion.'
                                                        </select>
                                                    </div>
                                                    <!--Si el campo aplicacion es Enfermedad-->
                                                    <div id="inputCausaE">
                                                        <label for="inputTipo">Causa</label>
                                                        <select class="form-control" name="enfermedad">
                                                            <option disabled>Elige una enfermedad</option>
                                                            '.$enfermedad.'
                                            
                                                            
                                                        </select>
                                                    </div>
                                                    <!--Si el campo aplicacion es Plaga-->
                                                    <div id="inputCausaP">
                                                        <label for="inputTipo">Causa</label>
                                                        <select class="form-control" name="plaga">
                                                            <option disabled>Selecciona una plaga</option>
                                                            '.$plaga.'
                                                            
                                                        
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="inputFrecuencia">Frecuencia</label>
                                                    <select class="form-control" id="inputFrecuencia" name="frecuencia">
                                                        <option>Diario</option>
                                                        <option>Cada 2 dias</option>
                                                        <option>Cada 3 dias</option>
                                                    </select>
                                                </div>
                                            </div>
                                
                                            <div class="col-lg-3 col-md-3 col-sm-6">
                                                <div class="form-group">
                                                    <label for="inputFechaInicio">Fecha de inicio</label>
                                                    <input type="date" placeholder="Fecha" class="form-control" id="inputFechaInicio" name="fecha_inicio" value="'.$row['fecha_inicio'].'">
                                                </div>
                                            </div>
                                
                                            <div class="col-lg-3 col-md-3 col-sm-6">
                                                <div class="form-group">
                                                    <label for="inputFechaFinal">Fecha de fin</label>
                                                    <input type="date" placeholder="Fecha" class="form-control" id="inputFechaFinal" name="fecha_fin" value="'.$row['fecha_fin'].'">
                                                </div>
                                            </div>
                                
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="inputExistencia">Existencia</label>
                                                    <input type="number" placeholder=10 class="form-control" id="inputExistencia" name="existencia" value="'.$row['existencia'].'">
                                                </div>
                                            </div>
                                
                                        </div>
                                        
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                            <button name="modifAgro" type="submit" class="btn btn-success">Aceptar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>    

                    <!--Modal eliminar--> 
                    <div class="modal fade" id="modalEliminar'.$row['id_agroquimico'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">¡Atención!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ¿Estas seguro de eliminar este agroquímico?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                    <a href="dashboard.php?eliminarAgro='.$row['id_agroquimico'].'" class="btn btn-success" role="button" aria-disabled="true">Aceptar</a>
                                </div>
                            </div>
                        </div>
                    </div>

                ';
                
            }

          
        }        

    }

    //Funcion obtner los datos del usuario
    public function getUserData(){
        $conexion = new Database();
        $userEmail = $_SESSION['correo'];

        $query = "SELECT * FROM users WHERE correo = '$userEmail';";
        $result = $conexion->query($query);
        $resultSet = array();
        if ($result) {

            while ($row = $result->fetch_array()) {
                $resultSet[0] = $row['nombre'];
                $resultSet[1] = $row['apellido'];
                $resultSet[2] = $row['telefono'];
                $resultSet[3] = $row['correo'];
                $resultSet[4] = $row['acceso'];
                $resultSet[5] = $row['empresa'];
                $resultSet[6] = $row['tipo_usuario'];
                $resultSet[7] = $row['ciudad'];
                $resultSet[8] = $row['estado'];
                
            }

            return $resultSet;
        }
    }

    //Funciones para modificar: Ivan

    //Modifica el cultivo
    public function modifyCrop(
        $id_cultivo, 
        $nombre_predio, 
        $hectareas,
        $tipo_especie,
        $subspecie,
        $variedad,
        $fecha_inicio,
        $estado,
        $municipio,
        $localidad
        
        )
    {
        $conexion = new Database();
        $userEmail = $_SESSION['correo'];

        $query = "UPDATE cultivos SET nombre_predio = '$nombre_predio', hectareas = '$hectareas', tipo_especie = '$tipo_especie', subespecie = '$subspecie', variedad = '$variedad', fecha_inicio = '$fecha_inicio', estado = '$estado', municipio = '$municipio', localidad = '$localidad', fecha_modif = now() WHERE id_cultivo = '$id_cultivo';";

        $result = $conexion->query($query);

        
        if (!$result) {
            echo "
            <div class='container mt-4'>
                <div class='alert alert-danger' role='alert'>
                   Hubo un error al registrar los datos, verifique sus campos o intente más tarde
                </div>
            </div>
            ";
        } else {
            echo "
            <div class='container mt-4'>
                <div class='alert alert-success' role='alert'>
                   Modificado correctamente
                </div>
            </div>
            ";
        }
    }

    //Modificar Suelo Natural: Ivan
    public function modifyNaturalGround(
        $id_cultivo,
        $id_suelo_natural,
        $tipo_suelo,
        $infraestructura,
        $riego,
        $ph,
        $salinidad,
        $conduc_elec,
        $materia_organica,
        $zinc,
        $nitratos,
        $fosforo,
        $potasio,
        $manganeso,
        $calcio,
        $cobre,
        $oxido_azufre,
        $boro,
        $magnesio,
        $oxigeno
    )
    {
        $conexion = new Database();
        

        $query = "UPDATE suelo_natural SET tipo_suelo = '$tipo_suelo', infraestructura = '$infraestructura', riego = '$riego', ph = '$ph', salinidad = '$salinidad', conduc_elec = '$conduc_elec', materia_organica = '$materia_organica', zinc = '$zinc', nitratos = '$nitratos', fosforo = '$fosforo', potasio = '$potasio', manganeso = '$manganeso', calcio = '$calcio', cobre = '$cobre', oxido_azufre = '$oxido_azufre', boro = '$boro', magnesio = '$magnesio', oxigeno = '$oxigeno', fecha_modif = now() WHERE id_cultivo = '$id_cultivo' AND id_suelo_natural = '$id_suelo_natural';";

        $result = $conexion->query($query);
        
        
        

        if (!$result) {
            echo "
            <div class='container mt-4'>
                <div class='alert alert-danger' role='alert'>
                   Hubo un error al registrar los datos, verifique sus campos o intente más tarde
                </div>
            </div>
            ";
        } else {
            echo "
            <div class='container mt-4'>
                <div class='alert alert-success' role='alert'>
                   Modificado correctamente
                </div>
            </div>
            ";
        }
    }

    public function modifyGroundArt(
        $id_cultivo,
        $id_suelo_artificial,
        $sustrato,
        $infraestructura,
        $riego
    )
    {
        $conexion = new Database();

        $query = "UPDATE suelo_artificial SET sustrato = '$sustrato', infraestructura = '$infraestructura', riego = '$riego', fecha_modif = now() WHERE id_cultivo = '$id_cultivo' AND id_suelo_artificial = '$id_suelo_artificial';";

        $result = $conexion->query($query);

        if (!$result) {
            echo "
            <div class='container mt-4'>
                <div class='alert alert-danger' role='alert'>
                   Hubo un error al registrar los datos, verifique sus campos o intente más tarde
                </div>
            </div>
            ";
        } else {
            echo "
            <div class='container mt-4'>
                <div class='alert alert-success' role='alert'>
                   Modificado correctamente
                </div>
            </div>
            ";
        }
    }

    public function modifyAgro(
        $id_cultivo,
        $id_agroquimico,
        $aplicacion,
        $nombre_comercial,
        $precio,
        $moneda,
        $cantidad,
        $unidad,
        $dosis,
        $tiempo,
        $tipo_causa,
        $frecuencia,
        $fecha_inicio,
        $fecha_fin,
        $existencia
    ){
        $conexion = new Database();

        $query = "UPDATE agroquimicos SET aplicacion = '$aplicacion', nombre_comercial = '$nombre_comercial', precio = '$precio', moneda = '$moneda', cantidad = '$cantidad', unidad = '$unidad', dosis = '$dosis', tiempo = '$tiempo', tipo_causa = '$tipo_causa', frecuencia = '$frecuencia', fecha_inicio = '$fecha_inicio', fecha_fin = '$fecha_fin', existencia = '$existencia', fecha_modif = now() WHERE id_cultivo = '$id_cultivo' AND id_agroquimico = '$id_agroquimico';";

        $result = $conexion->query($query);

        if (!$result) {
            echo "
            <div class='container mt-4'>
                <div class='alert alert-danger' role='alert'>
                   Hubo un error al registrar los datos, verifique sus campos o intente más tarde
                </div>
            </div>
            ";
        } else {
            
        }
    }

    public function getCardGeneralSpend(){
        $conexion = new Database();
        $email = $_SESSION['correo'];

       
        
        $query = "SELECT * FROM gastos_generales WHERE id_u = (SELECT id_u FROM users WHERE correo = '$email')";
        $execQuery = $conexion->query($query);
        

        if (mysqli_num_rows($execQuery) > 0) {
            while ($row = $execQuery->fetch_array()) {
                $fecha = $row['fecha_gasto'];
                $niu_fecha = explode("-", $fecha);
                $month = array(
                    'Enero',
                    'Febrero',
                    'Marzo',
                    'Abril',
                    'Mayo',
                    'Junio',
                    'Julio',
                    'Agosto',
                    'Septiembre',
                    'Octubre',
                    'Noviembre',
                    'Diciembre');
                echo '
                    <div class="col-md-4 col-sm-12 pb-4">  
                        <div class="card bg-light p-1 shadow p-0 mb-0 bg-light" style="Border-Radius: 10px;"> 
                            <div class="card-header bg-light">
                            <i class="fas fa-dollar-sign pb-3" style="font-size: 30px; color:green" ></i>
                                <br>
                                <h4>'.$row['concepto'].'</h4>
                                
                            </div>

                            <div class="card-body pt-3">
                                
                                <a data-toggle="modal" data-target="#modalGasto'.$row['id_gasto_general'].'" class="text-success text-left text-decoration-none" href="#">Ver informacion

                                </a>
                            </div>
                                
                        </div>      
                    </div>

                    <!---Modal de gasto general-->
                    <div class="modal fade" id="modalGasto'.$row['id_gasto_general'].'" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        '.$row['concepto'].'
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <p class="lead">Concepto</p>
                                            <p class="text-muted">
                                            '.$row['concepto'].'
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <p class="lead">Cantidad</p>
                                            <p class="text-muted">
                                            '.$row['catidad'].' '.$row['moneda'].'
                                            </p>
                                        </div>
                                        
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <p class="lead">Fecha</p>
                                            <p class="text-muted">
                                                                                                        
                                                '.$niu_fecha[2] . " de " . $month[$niu_fecha[1] - 1] . " de " . $niu_fecha[0].'
                                                                
                                            </p>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        
                                </div>
                            </div>
                        </div>
                    </div>


                ';

            }
        } else {
            echo "
                <div class='col-lg-1 col-md-1 col-sm-12'></div>
                <div class='col-lg-4 col-md-4 col-sm-12'></div>
                <div class='col-lg-4 col-md-4 col-sm-12'>
                    <h3>No hay datos</h3>
                    <img src='../../img/svg/alerts/no_data.svg' width='150'>
                    <p><a class='text-success' href='dashboard.php?gastoGeneral'>Registrar nuevo gasto</a></p>
                </div>
                <div class='col-lg-4 col-md-4 col-sm-12'></div>
            ";
        }    

    }

    public function insertGeneralSpend($concepto, $precio, $moneda, $fecha){
        $conexion = new Database();
        $email = $_SESSION['correo'];

        $getUserQuery = "SELECT id_u FROM users WHERE correo = '$email'";

        $execUserQuery = $conexion->query($getUserQuery) or trigger_error(mysqli_error($conexion));

        if($execUserQuery){
            $userRow = $execUserQuery->fetch_array();

            $query = "INSERT INTO gastos_generales(concepto, catidad, moneda, fecha_gasto, fecha_registro, id_u) VALUES ('$concepto', '$precio', '$moneda', '$fecha', now(), '$userRow[id_u]')";

            $result = $conexion->query($query);

            if (!$result) {
                echo "
                <div class='container mt-4'>
                    <div class='alert alert-danger' role='alert'>
                    Hubo un error al registrar los datos, verifique sus campos o intente más tarde
                    </div>
                </div>
                ";
            } else {
                header("Location: dashboard.php?viewSpend");
                
            }
        }

        
    }

    public function getCardHistory(){
        $conexion = new Database();
        $email = $_SESSION['correo'];

        $query = "SELECT * FROM cultivos WHERE id_u = (SELECT id_u FROM users WHERE correo = '$email') AND estatus ='eliminado'";
        $execQuery = $conexion->query($query);
        if (mysqli_num_rows($execQuery) > 0) {
            while ($row = $execQuery->fetch_array()) {
                //../../img/svg/grain.svg
                $fechaa = $row['fecha_inicio'];
                $niu_fechaa = explode("-", $fechaa);

                $month = array(
                    'Enero',
                    'Febrero',
                    'Marzo',
                    'Abril',
                    'Mayo',
                    'Junio',
                    'Julio',
                    'Agosto',
                    'Septiembre',
                    'Octubre',
                    'Noviembre',
                    'Diciembre');

                               
                echo '
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 my-3">
                    <div class="card shadow bg-light text-center">
                        
                            <div class="card-header bg-white">
                                ' . $niu_fechaa[2] . " de " . $month[$niu_fechaa[1] - 1] . " de " . $niu_fechaa[0] . '             
                                
                            </div>
                            <div class="card-body">
                                
                                    <img src="../../img/svg/grain.svg" width="60">
                                    <p class="lead mt-3"><strong>' . $row['nombre_predio'] . '</strong> </p>
                                    <p class="text-muted">Estado: '.$row['estatus'].'</p>
                                  
                            </div>
                            <!--
                            <div class="card-footer bg-white">
                                <form action="dashboard.php?viewCrop" method="POST" class="align-right">
                                    <input type="text" value='.$row['id_cultivo'].' style="display: none;" name="get_id_cultivo">
                                    <input type="text" value='.$row['tipo_suelo'].' style="display: none;" name="get_tipo_suelo">
                                    <button type="submit" class="btn btn-block btn-success">
                                        Ver más
                                    </button>
                                </form>
                            </div>
                         </a>-->
                    </div>
                </div>
                <!--Modal eliminar-->
                <div class="modal fade" id="modalEliminar'.$row["id_cultivo"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                                ¿Está seguro de eliminar este cultivo? Tome en cuenta que ésta acción es irreversible.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <a href="dashboard.php?cultivo='.$row['id_cultivo'].'" class="btn btn-success" role="button" aria-disabled="true">Aceptar</a>
                           
                            </div>
                        </div>
                    </div>
                </div>


                ';
            }
        } else {
            echo "
                <div class='col-lg-1 col-md-1 col-sm-12'></div>
                <div class='col-lg-4 col-md-4 col-sm-12'></div>
                <div class='col-lg-4 col-md-4 col-sm-12'>
                    <h3>No hay datos</h3>
                    <img src='../../img/svg/alerts/no_data.svg' width='150'>
                    
                </div>
                <div class='col-lg-4 col-md-4 col-sm-12'></div>
            ";
        }
    }

    public function getCardCropSpend($id_cultivo){
        $conexion = new Database();
        $email = $_SESSION['correo'];

        $query = "SELECT * FROM gastos WHERE id_cultivo = '$id_cultivo'";
        $execQuery = $conexion->query($query);
    
        if (mysqli_num_rows($execQuery) > 0) {
            while ($row = $execQuery->fetch_array()) {
                $fecha = $row['fecha_gasto'];
                $niu_fecha = explode("-", $fecha);
                $month = array(
                    'Enero',
                    'Febrero',
                    'Marzo',
                    'Abril',
                    'Mayo',
                    'Junio',
                    'Julio',
                    'Agosto',
                    'Septiembre',
                    'Octubre',
                    'Noviembre',
                    'Diciembre');
                
                    echo '
                    <div class="col-md-4 col-sm-12 pb-4">  
                        <div class="card bg-light p-1 shadow p-0 mb-0 bg-light" style="Border-Radius: 10px;"> 
                            <div class="card-header bg-light">
                            <i class="fas fa-dollar-sign pb-3" style="font-size: 30px; color:green" ></i>
                                <br>
                                <h4>'.$row['concepto'].'</h4>
                                
                            </div>

                            <div class="card-body pt-3">
                               
                                <a data-toggle="modal" data-target="#modalGasto'.$row['id_gasto'].'" class="text-success text-left text-decoration-none" href="#">Ver informacion

                                </a>
                            </div>
                                
                        </div>      
                    </div>

                    <!---Modal de gasto general-->
                    <div class="modal fade" id="modalGasto'.$row['id_gasto'].'" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        '.$row['concepto'].'
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <p class="lead">Concepto</p>
                                            <p class="text-muted">
                                            '.$row['concepto'].'
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <p class="lead">Cantidad</p>
                                            <p class="text-muted">
                                            '.$row['precio'].' '.$row['moneda'].'
                                            </p>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <p class="lead">Frecuencia</p>
                                            <p class="text-muted">
                                            '.$row['frecuencia'].'
                                            </p>
                                        </div>
                                        
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <p class="lead">Fecha</p>
                                            <p class="text-muted">
                                                                                                        
                                                '.$niu_fecha[2] . " de " . $month[$niu_fecha[1] - 1] . " de " . $niu_fecha[0].'
                                                                
                                            </p>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        
                                </div>
                            </div>
                        </div>
                    </div>


                ';

            }
        } else {
            echo "
                <div class='col-lg-1 col-md-1 col-sm-12'></div>
                <div class='col-lg-4 col-md-4 col-sm-12'></div>
                <div class='col-lg-4 col-md-4 col-sm-12'>
                    <h3>No hay datos</h3>
                    <img src='../../img/svg/alerts/no_data.svg' width='150'>
                    <p><a class='text-success' href='dashboard.php?gastoGeneral'>Registrar nuevo gasto</a></p>
                </div>
                <div class='col-lg-4 col-md-4 col-sm-12'></div>
            ";
        }    
    }

    public function insertCropSpend($id_cultivo, $concepto, $precio, $moneda, $frecuencia, $fecha){
        $conexion = new Database();
       
            $query = "INSERT INTO gastos(id_cultivo, concepto, precio, moneda, frecuencia, fecha_gasto, fecha_registro) VALUES ('$id_cultivo', '$concepto', '$precio', '$moneda', '$frecuencia', '$fecha', now())";

            $result = $conexion->query($query);

            if (!$result) {
                echo "
                <div class='container mt-4'>
                    <div class='alert alert-danger' role='alert'>
                    Hubo un error al registrar los datos, verifique sus campos o intente más tarde
                    </div>
                </div>
                ";
            } else {
                header("Location: dashboard.php?viewCropSpend");
                
            }
        

        
    }
}



ob_end_flush();
