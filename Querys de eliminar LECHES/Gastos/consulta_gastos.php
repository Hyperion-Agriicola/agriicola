<?php
    require_once "db_config.php";
    //establecer los datos para la conexion a la base de datos.
    $conexion = new mysqli($servidor_db, $usuario_db, $pass_db, $nombre_db);

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
    <table class="table table-striped ">
        <thead class="thead-dark">
                
                    <th>Id del Cultivo</th>
                    <th>Id del Gasto</th>
                    <th>Concepto</th>
                    <th>Precio</th>
                    <th>Moneda</th>
                    <th>Frecuencia</th>
                    <th>Fecha de Gasto</th>
                    <th>Fecha de Registro</th>
                    <th>Fecha de Modificacion</th>
                    <th>Accion</th>

                    </thead>
                
              
                <?php $sql="SELECT id_cultivo,id_gasto,concepto,precio,moneda,frecuencia,fecha_gasto,fecha_registro,fecha_modif FROM gastos WHERE estatus='activo'";
                $resultado = $conexion->query($sql);
                while($fila= $resultado->fetch_array()){
                ?>
         <tr>
                <td><?php echo $fila['id_cultivo'];?></td>
                <td><?php echo $fila['id_gasto'];?></td>
                <td><?php echo $fila['concepto'];?></td>
                <td><?php echo $fila['precio'];?></td>
                <td><?php echo $fila['moneda'];?></td>
                <td><?php echo $fila['frecuencia'];?></td>
                <td ><?php echo $fila['fecha_gasto'];?></td>
                <td><?php echo $fila['fecha_registro'];?></td>
                <td><?php echo $fila['fecha_modif'];?></td>
                <td style="width:150px;">
                <a href="editar_gastos.php?id_gasto=<?php echo $fila["id_gasto"];?>" id="edi">Editar</a><a href="delete_gastos.php?id_gasto=<?php echo $fila["id_gasto"];?>" id="eli">Eliminar</a></td>
                
		        
                
                </tr>
           
        
                <?php }
                ?>
               
    </div>
                </table>
                <br>
               <!-- <a  id="listado2" href="formularios.php">Insertar Nuevo</a>-->
</body>
</html>
 


