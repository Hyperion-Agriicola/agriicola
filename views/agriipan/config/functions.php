<?php
ob_start();

include('database.php');

class Functions
{
    public function registerUser(
        $userName,
        $userlastName,
        $phoneNumber,
        $userEmail,
        $userCompany,
        $userCity,
        $tipo,
        $userState,
        $userPass1,
        $userPass2
    ) {
        $conexion = new Database();

        if ($userPass1 == $userPass2) {
            $insert = "INSERT INTO `users` (`id_u`, `nombre`, `apellido`, `telefono`, `correo`, `acceso`, `empresa`, `tipo_usuario`, `ciudad`, `estado`, `fecha_registro`, `fecha_modif`) VALUES
            (null, '$userName', '$userlastName', $phoneNumber, '$userEmail', sha1('$userPass2'), '$userCompany', '$tipo', '$userCity', '$userState', '  2019-10-25', NULL);";
            $result = $conexion->query($insert);

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

//Funciones Pablo ------------------------------------------------------

    public function getType($email){
        $conexion = new Database();

        $query = "SELECT tipo_usuario FROM users WHERE correo = '$email';";
        $result = $conexion->query($query);
        $tipo = "";
        if ($result) {
            while ($row = $result->fetch_array()) {
                $tipo = $row['tipo_usuario'];
            }

            return $tipo;
        }
    }

    public function getUsersUsersAndAdmins($email){
        $conexion = new Database();
        $query = "SELECT * FROM users WHERE correo != '$email' ORDER BY id_u;";
        $result = $conexion->query($query);
        if ($result) {
            while ($row = $result->fetch_array()) {
            
                echo "
                <form method='POST' action=''>
                <tr>
                <td><input name='correo' value='" . $row['correo'] . "' style='display:none;'>" . $row['id_u'] . "</td>
                <td>" . $row['nombre'] . "</td>
                <td>" . $row['apellido'] . "</td>
                <td>" . $row['empresa'] . "</td>
                <td>" . $row['tipo_usuario'] . "</td>
                <td>" . $row['correo'] . "</td>
                <td class='text-center'>
                <p data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-secondary btn-xs' name='editar_usuario' data-title='Edit' data-toggle='modal' data-target='#edit' ><i class='fas fa-pen' style='color:white; align:center; padding: 0;'></i></button></p>
                </td>
                <td class='text-center'>
                <p data-placement='top' data-toggle='tooltip' title='Delete'><button class='btn btn-danger btn-xs delete' data-emp-id='" . $row['correo'] . "' data-title='Delete' data-toggle='modal' data-target='#delete' ><i class='fas fa-trash-alt' style='color:white; align:center;'></i></button></p>
                </td>
                </tr></form>";

            }
        }

    }

    public function editAdminProfile($email,$nombre,$apellidos,$telefono,$ciudad,$estado,$empresa){
        $conexion = new Database();
        $query = "UPDATE users SET nombre = '$nombre',
            apellido = '$apellidos',
            telefono = '$telefono',
            ciudad = '$ciudad',
            estado = '$estado',
            empresa = '$empresa'
            WHERE correo = '$email';";
        
        $result = $conexion->query($query);
        if ($result) {
            echo "
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    Su información fue actualizada exitosamente.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>
                <br>
            ";
        }
    }

    public function showInfo($email){
        $data = $this::getAdminProfile($email);
        echo "<div class='row '>
        <div class='col-12 col-sm-12 col-md-6'>
            <label for='name'>Nombre:</label>
                <input type='text' value = '" . $data[0] . "' class='form-control' placeholder='Ingresa tu nombre' id='name' name='userName' required>
        </div>
        <div class='col-12 col-sm-12 col-md-6'>
            <label for='last_name'>Apellidos:</label>
                <input type='text' value = '" . $data[1] . "' class='form-control' placeholder='Ingresa tus apellidos' id='last_name' name='userLastName' required>
        </div>
        </div>
        <div class='row '>
        <div class='col-12 col-sm-12 col-md-6'>
            <label for='phone'>Teléfono:</label>
                <input type='text' value = '" . $data[2] . "' class='form-control' placeholder='Ingresa tu teléfono' id='phone' name='phoneNumber' required>
        </div>
        <div class='col-12 col-sm-12 col-md-6'>
            <label for='company_name'>Ciudad</label>
                <input type='text' value = '" . $data[3] . "' class='form-control' placeholder='Ingresa tu ciudad' id='city' name='city' required>
        </div>
        <div class='col-12 col-sm-12 col-md-6'>
            <label for='company_name'>Estado</label>
                <input type='text' value = '" . $data[4] . "' class='form-control' placeholder='Ingresa tu estado' id='edo' name='edo' required>
        </div>
        <div class='col-12 col-sm-12 col-md-6'>
            <label for='company_name'>Nombre de la empresa:</label>
                <input type='text' value = '" . $data[5] . "' class='form-control' placeholder='Ingresa tu empresa' id='company_name' name='company_name' required>
                <input type='text' value = '" . $data[6] . "' name='email' id='email' required style='display:none;'>
        </div>
    </div>
    <div class='row '>
        <div class='col-1 col-sm-1 col-md-3'></div>
    </div>";
    }

    public function deleteUser($email){
        $conexion = new Database();
        $query = "DELETE FROM users WHERE correo = '$email';";
        $conexion->query($query);
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

            $tipe = $this::getType($email);
            if($tipe == "user"){
                session_start();
                $_SESSION['correo'] = $user['correo'];
                header('Location: views/user/dashboard.php');
            }else if($tipe == "admin"){
                session_start();
                $_SESSION['admin'] = $user['correo'];
                header('Location: views/admin/index.php');
            }
            
        }
    }

    public function getAdminName($email)
    {

        $conexion = new Database();
        $query = "SELECT nombre, apellido FROM users WHERE correo = '$email'";
        $result = $conexion->query($query);
        $nombre = "";
        while ($row = $result->fetch_array()) {
            $nombre = $row['nombre'] . " " . $row['apellido'];
        }
        return $nombre;
    }

    public function getAdminProfile($email){
        $conexion = new Database();
        $query = "SELECT * FROM users WHERE correo = '$email';";

        $result = $conexion->query($query);
        $resultSet = array();
        if ($result) {
            while ($row = $result->fetch_array()) {
                $resultSet[0] = $row['nombre'];
                $resultSet[1] = $row['apellido'];
                $resultSet[2] = $row['telefono'];
                $resultSet[3] = $row['ciudad'];
                $resultSet[4] = $row['estado'];
                $resultSet[5] = $row['empresa'];
                $resultSet[6] = $email;
            }
            return $resultSet;
        }
    }

//-------------------------------------------------------------------------------    

    public function getUserProfile(){
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

        $getUserQuery = "SELECT id_u FROM users WHERE correo = '$userEmail'";
        $execUserQuery = $conexion->query($getUserQuery) or trigger_error(mysqli_error($conexion));

        if ($execUserQuery) {
            $userRow = $execUserQuery->fetch_array();

            $query = "INSERT INTO suelo_natural VALUES (NULL, '" . $type . "', " . $salinity . ", '" . $watering . "', 
            '" . $infra . "' , " . $ph . ", " . $conduc . ", $userRow[id_u], " . $organic . ", " . $nitra . ", " . $pota . ", " . $calc . ", 
            " . $azu . ", " . $magne . ", " . $zinc . ", " . $phosphore . ", " . $manga . ", " . $copper . ", " . $bor . ",
            " . $oxygen . ", now());";

            $result = $conexion->query($query);

            if (!$result) {
                die($query);
            } else {
                echo "
                    <div class='container mt-4'>
                        <div class='alert alert-success' role='alert'>
                            El registro del suelo se realizo correctamente
                        </div>
                    </div>";
            }
        }
    }

    public function insertArtificial($sustr, $infra, $watering)
    {
        $conexion = new Database();

        $userEmail = $_SESSION['correo'];

        $getUserQuery = "SELECT id_u FROM users WHERE correo = '$userEmail'";
        $execUserQuery = $conexion->query($getUserQuery) or trigger_error(mysqli_error($conexion));
        if ($execUserQuery) {
            $userRow = $execUserQuery->fetch_array();

            $query = "INSERT INTO suelo_artificial VALUES (NULL, '" . $sustr . "', '" . $watering . "', '" . $infra . "' ,now(), $userRow[id_u]);";

            $result = $conexion->query($query) or trigger_error(mysqli_error($conexion));

            if (!$result) {
                die($query);
            } else {
                echo "
                    <div class='container mt-4'>
                        <div class='alert alert-success' role='alert'>
                            El registro del suelo se realizo correctamente
                        </div>
                    </div>";
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
        $details,
        $state,
        $township,
        $town,
        $groupSelect
    ) {
        $conexion = new Database();

        $userEmail = $_SESSION['correo'];

        $getUserQuery = "SELECT id_u FROM users WHERE correo = '$userEmail'";
        $execUserQuery = $conexion->query($getUserQuery) or trigger_error(mysqli_error($conexion));
        if ($execUserQuery) {
            $userRow = $execUserQuery->fetch_array();

            //echo $name . " " . $hectares . " " . $subspecie . " " . $specieType . " " . $variation
            //. " " . $bornDate . " " . $details . " " . $userRow['id_u'];

            $insert = "INSERT INTO cultivos(nombre_predio, tipo_especie, variedad, hectareas, 
            subespecie, fecha_inicio, detalles, id_u, id_suelo) 
            VALUES ('$name', '$specieType', '$variation', '$hectares', '$subspecie', '$bornDate', 
            '$details', '$userRow[id_u]', '4')";

            $execQuery = $conexion->query($insert) or trigger_error($conexion->error);

            if ($execQuery) {
                echo "
                        <div class='container mt-4'>
                            <div class='alert alert-success' role='alert'>
                                El registro del cultivo se realizo correctamente
                            </div>
                        </div>";
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
        $id_cultivo,
        $origen,
        $nom_comer,
        $cantidad,
        $unidad,
        $frecuencia,
        $periodo_ini,
        $periodo_fin,
        $precio,
        $moneda,
        $dosis,
        $tiempo,
        $tipo,
        $existencia,
        $id_u
    ) {

        $conexion = new Database();

        $query = "INSERT INTO agroquimicos VALUES (NULL, " . $id_cultivo . ", '" . $origen . "', '" . $nom_comer . "', " .
            $cantidad . " , '" . $unidad . "', '" . $frecuencia . "','" . $periodo_ini . "', '" . $periodo_fin . "', " . $precio . ", '" .
            $moneda . "', " . $dosis . ", '" . $tiempo . "', '" . $tipo . "', " . $existencia . ", " . $id_u . ", now());";

        $result = $conexion->query($query);

        if (!$result) {
            die($query);
        } else {
            echo "
                <div class='container mt-4'>
                    <div class='alert alert-success' role='alert'>
                        El registro del suelo se realizo correctamente
                    </div>
                </div>";
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

    public function getCropByID()
    {
        $conexion = new Database();
        $email = $_SESSION['correo'];

        $query = "SELECT * FROM cultivos WHERE id_u = (SELECT id_u FROM users WHERE correo = '$email')";
        $execQuery = $conexion->query($query);
        if (mysqli_num_rows($execQuery) > 0) {
            echo "Hay datos :D";
        } else {
            echo "
                <div class='text-center'>
                    <h3>No hay datos</h3>
                    <img src='../../img/svg/alerts/no_data.svg' width='150'>
                    <p><a class='text-success' href='dashboard.php?cultivos'>Crear un nuevo registro</a></p>
                </div>
            ";
        }
    }
}

ob_end_flush();
