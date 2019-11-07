<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminar</title>
    
</head>
<body>
    
    <?php

$id_cultivo_recibido=$_REQUEST['id_cultivo'];

        require_once "db_config_cultivos.php";
        //establecer los datos para la conexion a la base de datos.
        $conexion = new mysqli($servidor_db, $usuario_db, $pass_db, $nombre_db);

        //capturar error
        if ($conexion->connect_error){
            echo "Ha ocurrido un error: ". $conexion->connect_errno;
        }
        //guardar las variables en la base de datos
        
        $sql="UPDATE cultivos SET estatus='eliminado' WHERE id_cultivo=".$id_cultivo_recibido;
      
        //ejecutar la consulta
        $resultado= $conexion->query($sql) ;
        echo "Cultivo eliminado   ";

        $sql="UPDATE agroquimicos SET estatus='eliminado' WHERE id_cultivo=".$id_cultivo_recibido;
        $resultado= $conexion->query($sql) ;
        echo "Agroquimico eliminado   ";

        $sql="UPDATE suelo_natural SET estatus='eliminado' WHERE id_cultivo=".$id_cultivo_recibido;
        $resultado= $conexion->query($sql) ;
        echo "Suelo eliminado   ";

        $sql="UPDATE suelo_artificial SET estatus='eliminado' WHERE id_cultivo=".$id_cultivo_recibido;
        $resultado= $conexion->query($sql) ;
        echo "Suelo eliminado   ";

        $sql="UPDATE gastos SET estatus='eliminado' WHERE id_cultivo=".$id_cultivo_recibido;
        $resultado= $conexion->query($sql) ;
        echo "gastos eliminado   ";
    ?> 
    <a href="consultar_cultivos.php">Ir al listado</a>


</body>
</html>
