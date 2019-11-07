<?php
    require_once "db_config.php";
    //establecer los datos para la conexion a la base de datos.
    $conexion = new mysqli($servidor_db, $usuario_db, $pass_db, $nombre_db);
    //mysqli_set_Charset(conexion,"UTF8");
    //mysqli_set_Charset(conexion, "utf8");

    //capturar error
    if ($conexion->connect_error){
        echo "Ha ocurrido un error: ". $conexion->connect_errno;
    }
    ?>
<link href="../css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
</head>

    <hr>
    <div >
        <table class="table table-striped">
            <thead class="thead-dark">
                    <th>Id de Cultivo</th>
                    <th>id de Agroquimico</th>
                    <th>Aplicacion</th>
                    <th>Nombre Comercial</th>
                    <th>Precio</th>
                    <th>Moneda</th>
                    <th>Cantidad</th>
                    <th>Unidad</th>
                    <th>Dosis</th>
                    <th>Tiempo</th>
                    <th>Causa</th>
                    <th>Frecuencia</th>
                    <th>Fecha de inicio</th>
                    <th>Fecha final</th>
                    <th>Existencia</th>
                    <th>Fecha de Registro</th>
                    <th>Fecha de Modificacion</th>
                    <th>Accion</th>

                    </thead>
                
              
                <?php $sql="SELECT id_cultivo,id_agroquimico, aplicacion,nombre_comercial, precio, moneda,cantidad,unidad,dosis,tiempo,tipo_causa, frecuencia, fecha_inicio,fecha_fin,existencia,fecha_registro,fecha_modif FROM agroquimicos where aplicacion='plaga' and estatus='activo'";
                $resultado = $conexion->query($sql);
                while($fila= $resultado->fetch_array()){
                ?>
         <tr>
                <td ><?php echo $fila['id_cultivo'];?></td>
                <td ><?php echo $fila['id_agroquimico'];?></td>
                <td><?php echo $fila['aplicacion'];?></td>
                <td><?php echo $fila['nombre_comercial'];?></td>
                <td><?php echo $fila['precio'];?></td>
                <td><?php echo $fila['moneda'];?></td>
                <td><?php echo $fila['cantidad'];?></td>
                <td><?php echo $fila['unidad'];?></td>
                <td><?php echo $fila['dosis'];?></td>
                <td><?php echo $fila['tiempo'];?></td>
                <td><?php echo $fila['tipo_causa'];?></td>
                <td><?php echo $fila['frecuencia'];?></td>
                <td><?php echo $fila['fecha_inicio'];?></td>
                <td><?php echo $fila['fecha_fin'];?></td>
                <td><?php echo $fila['existencia'];?></td>
                <td><?php echo $fila['fecha_registro'];?></td>
                <td><?php echo $fila['fecha_modif'];?></td>
                <td style="width:150px;">
                <a href="modificar_plagas.php?id_agroquimico=<?php echo $fila["id_agroquimico"];?>" id="edi">Editar</a><a href="delete_plagas.php?id_agroquimico=<?php echo $fila["id_agroquimico"];?>" id="eli">Eliminar </a></td>
                
                </tr> 
                <?php }
                ?>
               
    </div>
                </table>
                <br>
               
</body>
</html>
 

