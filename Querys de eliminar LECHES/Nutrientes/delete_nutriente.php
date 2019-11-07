<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminar</title>
    
</head>
<body>
    
    <?php

$id_agroquimico_recibido=$_REQUEST['id_agroquimico'];

        require_once "db_config.php";
        //establecer los datos para la conexion a la base de datos.
        $conexion = new mysqli($servidor_db, $usuario_db, $pass_db, $nombre_db);

        //capturar error
        if ($conexion->connect_error){
            echo "Ha ocurrido un error: ". $conexion->connect_errno;
        }
        //guardar las variables en la base de datos

        $sql="UPDATE agroquimicos SET estatus='eliminado' WHERE id_agroquimico=".$id_agroquimico_recibido;
        $resultado= $conexion->query($sql) ;
        echo "Nutriente eliminado   ";

    ?> 
    <a href="consultar_nutriente.php">Ir al listado</a>


</body>
</html>
