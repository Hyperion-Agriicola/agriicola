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

        $getUserQuery = "SELECT id_u, id_cultivo FROM cultivos WHERE id_u = (SELECT id_u FROM users WHERE correo = '$userEmail')";
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

        $getUserQuery = "SELECT id_cultivo FROM cultivos WHERE id_u = (SELECT id_u FROM users WHERE correo = '$userEmail')";
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

            $insert = "INSERT INTO cultivos(id_u, nombre_predio, hectareas, tipo_especie, subespecie,
            variedad, fecha_inicio, estado, municipio, localidad, fecha_registro) 
            VALUES ('$userRow[id_u]', '$name','$hectares','$specieType','$subspecie', 
            '$variation', '$bornDate', '$state', '$township', '$town', now())";

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
                if ($groupSelect == 'natural') {
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

        $getUserQuery = "SELECT id_cultivo FROM cultivos WHERE id_u = (SELECT id_u FROM users WHERE correo = '$userEmail');";
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

    public function getCropByID()
    {
        $conexion = new Database();
        $email = $_SESSION['correo'];

        $query = "SELECT * FROM cultivos WHERE id_u = (SELECT id_u FROM users WHERE correo = '$email')";
        $execQuery = $conexion->query($query);
        if (mysqli_num_rows($execQuery) > 0) {
            while ($row = $execQuery->fetch_array()) {
                //../../img/svg/grain.svg
                echo '
                <div class="card shadow-sm bg-light text-center">
                    <a href="dashboard.php?viewCrop" class="text-decoration-none text-muted">
                        <div class="card-header bg-white">
                            ' . $row['fecha_registro'] . '
                            <a href="" data-toggle="modal" data-target="#modalEliminar">
                                <img src="../../img/svg/close-24px.svg" class="close" alt="">
                            </a>
                        </div>
                        <div class="card-body">
                            <img src="../../img/svg/grain.svg" width="60">
                            <p class="lead mt-3">Cultivo de <strong>' . $row['nombre_predio'] . '</strong> </p>
                        </div>
                    </a>
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

    public function getSubspecie()
    {
        $conexion = new Catalog();
        mysqli_set_charset($conexion, "utf8");
        $query = "SELECT nom_subespecie FROM subespecie ORDER BY nom_subespecie";
        $execQuery = $conexion->query($query);

        while ($row = $execQuery->fetch_array()) {
            echo "
                <option value='$row[nom_subespecie]'>$row[nom_subespecie]</option>
            ";
        }
    }

    public function getSpecie()
    {
        $conexion = new Catalog();
        mysqli_set_charset($conexion, "utf8");
        $query = "SELECT nom_especie FROM especie ORDER BY nom_especie";
        $execQuery = $conexion->query($query);

        while ($row = $execQuery->fetch_array()) {
            echo "
                <option value='$row[nom_especie]'>$row[nom_especie]</option>
            ";
        }
    }

    public function getGroundType()
    {
        $conexion = new Catalog();
        mysqli_set_charset($conexion, "utf8");
        $query = "SELECT nom_tipo_suelo FROM tipo_suelo ORDER BY nom_tipo_suelo";
        $execQuery = $conexion->query($query);

        while ($row = $execQuery->fetch_array()) {
            echo "
                <option value='$row[nom_tipo_suelo]'>$row[nom_tipo_suelo]</option>
            ";
        }
    }

    public function getInfrastucture()
    {
        $conexion = new Catalog();
        mysqli_set_charset($conexion, "utf8");
        $query = "SELECT nom_infraestructura FROM infraestructura ORDER BY nom_infraestructura";
        $execQuery = $conexion->query($query);

        while ($row = $execQuery->fetch_array()) {
            echo "
                <option value='$row[nom_infraestructura]'>$row[nom_infraestructura]</option>
            ";
        }
    }

    public function getWatering()
    {
        $conexion = new Catalog();
        mysqli_set_charset($conexion, "utf8");
        $query = "SELECT nom_riego FROM riego ORDER BY nom_riego";
        $execQuery = $conexion->query($query);

        while ($row = $execQuery->fetch_array()) {
            echo "
                <option value='$row[nom_riego]'>$row[nom_riego]</option>
            ";
        }
    }

    public function getDiseases()
    {
        $conexion = new Catalog();
        mysqli_set_charset($conexion, "utf8");
        $query = "SELECT nom_enfermedad FROM enfermedades ORDER BY nom_enfermedad";
        $execQuery = $conexion->query($query);

        while ($row = $execQuery->fetch_array()) {
            echo "
                <option value='$row[nom_enfermedad]'>$row[nom_enfermedad]</option>
            ";
        }
    }

    public function getBugs()
    {
        $conexion = new Catalog();
        mysqli_set_charset($conexion, "utf8");
        $query = "SELECT nom_plaga FROM plagas ORDER BY nom_plaga";
        $execQuery = $conexion->query($query);

        while ($row = $execQuery->fetch_array()) {
            echo "
                <option value='$row[nom_plaga]'>$row[nom_plaga]</option>
            ";
        }
    }

    public function getSubstract()
    {
        $conexion = new Catalog();
        mysqli_set_charset($conexion, "utf8");
        $query = "SELECT nombre_sustrato FROM sustrato_suelo ORDER BY nombre_sustrato";
        $execQuery = $conexion->query($query);

        while ($row = $execQuery->fetch_array()) {
            echo "
                <option value='$row[nombre_sustrato]'>$row[nombre_sustrato]</option>
            ";
        }
    }

    public function getViewCropByID()
    {
        $conexion = new Database();

        $email = $_SESSION['correo'];
        $query = "SELECT * FROM cultivos WHERE id_u = (SELECT id_u FROM users WHERE correo = '$email')";

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
            }

            return $resultSet;
        }
    }

    public function getGroundViewByID()
    {
        $conexion = new Database();
        $userEmail = $_SESSION['correo'];
        $query = "SELECT id_cultivo FROM cultivos WHERE id_u = (SELECT id_u FROM users WHERE correo = '$userEmail')";

        $execQuery = $conexion->query($query);

        $row = $execQuery->fetch_array();

        $queryNatural = "SELECT * FROM suelo_natural WHERE id_cultivo = $row[id_cultivo]";
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
            }

            return $resultSet;
        } else {
            $queryArtificial = "SELECT * FROM suelo_artificial WHERE id_cultivo = $row[id_cultivo]";
            $execQueryArtificial = $conexion->query($queryArtificial);

            $resultArt = array();

            while ($row = $execQueryArtificial->fetch_array()) {
                $resultArt[0] = $row['sustrato'];
                $resultArt[1] = $row['infraestructura'];
                $resultArt[2] = $row['riego'];
            }

            return $resultArt;
        }
    }

    public function getAgroViewByID()
    {
        $conexion = new Database();
        $userEmail = $_SESSION['correo'];

        $query = "SELECT * FROM agroquimicos WHERE id_cultivo = 
        (SELECT id_cultivo FROM cultivos WHERE id_u = (SELECT id_u FROM users WHERE correo = '$userEmail'))";
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


    //Funciones para modificar

    public function getCropToModify()
    {
        $conexion = new Database();
        $email = $_SESSION['correo'];

        $query = "SELECT * FROM cultivos WHERE id_u = (SELECT id_u FROM users WHERE correo = '$email')";
        $execQuery = $conexion->query($query);

        if (mysqli_num_rows($execQuery) > 0) {
            while ($row = $execQuery->fetch_array()) {
            }
        }    
    }
}

ob_end_flush();
