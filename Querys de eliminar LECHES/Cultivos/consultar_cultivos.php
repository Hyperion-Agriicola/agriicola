<?php
    require_once "db_config_cultivos.php";
    //establecer los datos para la conexion a la base de datos.
    $conexion = new mysqli($servidor_db, $usuario_db, $pass_db, $nombre_db);
    //mysqli_set_Charset(conexion,"UTF8");
    //mysqli_set_Charset(conexion, "utf8");
    //capturar error
    if ($conexion->connect_error){
        echo "Ha ocurrido un error: ". $conexion->connect_errno;
}
    ?>
        <!-- Custom styles for this template-->
        <link href="../css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
</head>
   
    <hr>
    <div >
    <table class="table table-striped ">
        <thead class="thead-dark">

                    <th scope="col">Id del Usuario</th>
                    <th scope="col">Id del Cultivo</th>
                    <th scope="col">Nombre del Predio</th>
                    <th scope="col">Hectareas</th>
                    <th scope="col">Tipo de Especie</th>
                    <th scope="col">Subespecie</th>
                    <th scope="col">Variedad</th>
                    <th scope="col">Fecha de Inicio</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Municipio</th>
                    <th scope="col">Localidad</th>
                    <th scope="col">Tipo de Suelo</th>
                    <th scope="col">Estatus</th>
                    <th scope="col">Fecha de Registro</th>
                    <th scope="col">Fecha de Modificacion</th>
                    <th scope="col">Accion</th>

                    </thead>
                
              
                <?php $sql="SELECT id_u, id_cultivo, nombre_predio,hectareas, tipo_especie, subespecie, variedad,  fecha_inicio, estado, municipio, localidad,tipo_suelo,estatus, fecha_registro, fecha_modif FROM cultivos WHERE estatus='activo'";
                $resultado = $conexion->query($sql);
                while($fila= $resultado->fetch_array()){
                ?>
         <tr>
                <td ><?php echo $fila['id_u'];?></td>
                <td ><?php echo $fila['id_cultivo'];?></td>
                <td><?php echo $fila['nombre_predio'];?></td>
                <td><?php echo $fila['hectareas'];?></td>
                <td><?php echo $fila['tipo_especie'];?></td>
                <td><?php echo $fila['subespecie'];?></td>
                <td><?php echo $fila['variedad'];?></td>
                <td><?php echo $fila['fecha_inicio'];?></td>
                <td><?php echo $fila['estado'];?></td>
                <td><?php echo $fila['municipio'];?></td>
                <td><?php echo $fila['localidad'];?></td>
                <td><?php echo $fila['tipo_suelo'];?></td>
                <td><?php echo $fila['estatus'];?></td>
                <td><?php echo $fila['fecha_registro'];?></td>
                <td><?php echo $fila['fecha_modif'];?></td>
     
                <td style="width:150px;">
                <a href="modificar_cultivos.php?id_cultivo=<?php echo $fila["id_cultivo"];?>" id="edi">Editar</a><a href="delete_cultivos.php?id_cultivo=<?php echo $fila["id_cultivo"];?>" id="eli">Eliminar</a></td>
                </tr> 
                <?php }
                ?>
               
    </div>
                </table>
                <br>
               
</body>
</html>