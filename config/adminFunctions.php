<?php
ob_start();

use PHPMailer\PHPMailer\PHPMailer;

class AdminFunctions
{
    public function checkForHelperEmail($userEmail){

        $conexion = new Database();
        $request = "SELECT correo FROM user_helper WHERE correo = '$userEmail'";
        $emailResponse = $conexion->query($request);

        if (mysqli_num_rows($emailResponse) > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function createHelper($userName, $userlastName, $phone, $email, $password2, $role)
    {
        

        $conexion = new Database();
        $superAdminEmail = $_SESSION['correo'];

        $requestSuperAdminEmail = "SELECT id_u FROM users WHERE correo = '$superAdminEmail'";
        $responseSuperSuperAdminEmail = $conexion->query($requestSuperAdminEmail);
        if ($responseSuperSuperAdminEmail) {

            $rowSuperAdminEmail = $responseSuperSuperAdminEmail->fetch_array();

            if ($this->checkForHelperEmail($email)) {
                echo "
                        <div class='container mt-4'>
                            <div class='alert alert-danger' role='alert'>
                                El correo que intenta registrar ya existe, intente con otro
                            </div>
                        </div";
            } else {
                

                $checkForPhone = "SELECT telefono FROM user_helper WHERE telefono = '$phone'";
                $phoneResponse = $conexion->query($checkForPhone);

                if (mysqli_num_rows($phoneResponse) > 0) {
                    echo "
                    <div class='container mt-4'>
                        <div class='alert alert-danger' role='alert'>
                            El teléfono que intenta ingresar ya existe, intente con otro
                        </div>
                    </div";
                } else {
                    $upperUserName = ucwords(strtolower($userName));
                    $upperUserLastName = ucwords(strtolower($userlastName));

                    $insert = "INSERT INTO user_helper(superadmin_id, nombre, apellido, telefono, correo, 
                    acceso, tipo_usuario, fecha_registro) VALUES ('$rowSuperAdminEmail[id_u]', '$upperUserName', '$upperUserLastName', 
                    '$phone', '$email', sha1('$password2'), '$role', now())";

                    $result = mysqli_query($conexion, $insert);
                    if ($result) {
                        header('Location: dashboard.php?users');
                    }
                }
            }
        }
    }

    public function getAllHelpers(){
        $conexion = new Database();
        $email = $_SESSION['correo'];


        $getEmailID = "SELECT id_u FROM users WHERE correo = '$email'";
        $execGetEmailID = $conexion->query($getEmailID);
        if ($execGetEmailID) {
            $row = $execGetEmailID->fetch_array();
            //echo $row['id_u'];
            $request = "SELECT * FROM user_helper WHERE superadmin_id = '$row[id_u]'";
            $response = $conexion->query($request);

            if (mysqli_num_rows($response) > 0) {
                while ($rowData = $response->fetch_array()) {
                    if ($rowData['tipo_usuario'] == 'admin') {
                        $user_text = "agrónomo";
                    } else if ($rowData['tipo_usuario'] == 'user') {
                        $user_text = 'contador';
                    }
                    echo '
                    
        
                    <div class="text-center col-md-6 col-sm-12 pb-4 px-md-5 px-lg-5">
                        <div class="card bg-light p-1 shadow p-0 mb-0 bg-light" style="Border-Radius: 10px;">
                            <div class="card-header bg-light">
                                <i class="fa-2x fas fa-user mb-4 brown-text"></i>
            
                                <br>
                                <h4>' . ucfirst($rowData["nombre"]) . ' ' . ucfirst($rowData["apellido"]) . '</h4>
                                <p class="text-muted">' . ucfirst($user_text) . '</p>
                            </div>
            
                            <div class="card-body pt-3">
                            
                                <a id="modalVer' . $rowData['id_helper'] . '" class="text-success text-left text-decoration-none" href="#!">Ver información
            
                                </a>
            
                            </div>
            
                        </div>
                    </div>

                    <div style="display: none;">
                        <div class="row" id="userview' . $rowData['id_helper'] . '">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <p class="font-weight-bold">Nombre</p>
                                <p class="text-muted">' . ucfirst($rowData['nombre']) . ' ' . ucfirst($rowData['apellido']) . '</p>
                            </div>
        
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <p class="font-weight-bold">Teléfono</p>
                                <p class="text-muted">' . $rowData['telefono'] . '</p>
                            </div>
        
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <p class="font-weight-bold">Tipo</p>
                                <p class="text-muted">' . ucfirst($user_text) . '</p>
                            </div>
                        </div>    
                    </div>
        
                    <script>
                            var user'. $rowData['id_helper'] . ' = document.getElementById("userview'.$rowData['id_helper'].'");
                            document.getElementById("modalVer'.$rowData['id_helper'].'").addEventListener("click", function(){
                                            
                                    Swal.fire({
                                        title: "Datos de usuario",
                                        showCloseButton: true,
                                        width: "45rem",
                                        html: user' . $rowData['id_helper'] . ',
                                        showCancelButton: false,
                                        confirmButtonColor: "#d33",
                                        confirmButtonText: "Cerrar"
                                        
                                        }).then((result) => {
                                        if (result.value) {
                                        // form.submit();
                                        }
                                    });
                                
                            });
                    </script>
                    ';
                }
            } else {
                echo "
                <div class='col-lg-4 col-md-4 col-sm-4 col-4'></div>
                <div class='col-lg-4 col-md-4 col-sm-4 col-4'>
                    <h4 class='text-center'>No hay usuarios</h4>
                    <img class='col-12 col-sm-12 col-md-11 col-lg-11' src='../../img/svg/alerts/no_data.svg' width='150px'>
                </div>
                ";
            }
        }
    }
}
