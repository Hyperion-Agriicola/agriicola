<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminar</title>
    
</head>
<body>
    
    <?php

$id_suelo_natural_recibido=$_REQUEST['id_suelo_natural'];

        require_once "db_config.php";
        //establecer los datos para la conexion a la base de datos.
        $conexion = new mysqli($servidor_db, $usuario_db, $pass_db, $nombre_db);

        //capturar error
        if ($conexion->connect_error){
            echo "Ha ocurrido un error: ". $conexion->connect_errno;
        }
        //guardar las variables en la base de datos

        $sql="UPDATE suelo_natural SET estatus='eliminado' WHERE id_suelo_natural=".$id_suelo_natural_recibido;
        $resultado= $conexion->query($sql) ;
        echo "suelo natural eliminado";

    ?> 
    <a href="consulta.php">Ir al listado</a>


</body>
