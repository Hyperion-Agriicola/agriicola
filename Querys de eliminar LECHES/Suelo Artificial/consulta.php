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

        
            <!-- seccion de barra de navegacion  (menu)-->
</head>
    
   
    <hr>
    <div >
    <table class="table table-striped ">
        <thead class="thead-dark">
                   <th>Id del Cultivo</th>
                    <th>Id del Suelo</th>
                    <th>Sustrato</th>
                    <th>Infrastructura</th>
                    <th>Riego</th>
                    <th>Fecha de Registro</th>
                    <th>Fecha de Modificacion</th>
                    <th>Accion</th>

                    </thead>
                
              
                <?php $sql="SELECT id_cultivo,id_suelo_artificial,sustrato,infraestructura, riego,fecha_registro,fecha_modif FROM suelo_artificial WHERE estatus='activo'";
                $resultado = $conexion->query($sql);
                while($fila= $resultado->fetch_array()){
                ?>
         <tr>
                <td><?php echo $fila['id_cultivo'];?></td>
                <td ><?php echo $fila['id_suelo_artificial'];?></td>
                <td><?php echo $fila['sustrato'];?></td>
                <td><?php echo $fila['infraestructura'];?></td>
                <td><?php echo $fila['riego'];?></td>
                <td><?php echo $fila['fecha_registro'];?></td>
                <td><?php echo $fila['fecha_modif'];?></td>

                <td style="width:150px;">
                <a href="editar.php?id_suelo_artificial=<?php echo $fila["id_suelo_artificial"];?>" id="edi">Editar</a><a href="delete_suelo_artificial.php?id_suelo_artificial=<?php echo $fila["id_suelo_artificial"];?>" id="eli">Eliminar</a></td>
                
                </tr>
                <?php }
                ?>
               
    </div>
                </table>
                <br>
               <!-- <a  id="listado2" href="formularios.php">Insertar Nuevo</a>-->
</body>
</html>
 


