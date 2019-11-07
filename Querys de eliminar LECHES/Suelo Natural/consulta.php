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

                    <th>Id de Cultivo</th>
                    <th>Id de Suelo</th>
                    <th>Tipo de Suelo</th>
                    <th>Infrastructura</th>
                    <th>Riego</th>
                    <th>PH</th>
                    <th>Salinidad</th>
                    <th>Conductividad Electrica</th>
                    <th>Materia Organica</th>
                    <th>Zinc</th>
                    <th>Nitratos</th>
                    <th>Fosforo</th>
                    <th>Potasio</th>
                    <th>Manganeso</th>
                    <th>Calcio</th>
                    <th>Cobre</th>
                    <th>Oxido_azufre</th>
                    <th>Boro</th>
                    <th>Magnesio</th>
                    <th>Oxigeno</th>
                    <th>Fecha de Registro</th>
                    <th>Fecha de Modificacion</th>
                    <th>Accion</th>
                    
                    </thead>
                
                <?php $sql="SELECT * FROM suelo_natural WHERE estatus='activo'";
                $resultado = $conexion->query($sql);
                while($fila= $resultado->fetch_array()){
                ?>
         <tr>
                <td ><?php echo $fila['id_cultivo'];?></td>
                <td ><?php echo $fila['id_suelo_natural'];?></td>
                <td><?php echo $fila['tipo_suelo'];?></td>
                <td><?php echo $fila['infraestructura'];?></td>
                <td><?php echo $fila['riego'];?></td>
                <td><?php echo $fila['ph'];?></td>
                <td><?php echo $fila['salinidad'];?></td>
                <td><?php echo $fila['conduc_elec'];?></td>
                <td><?php echo $fila['materia_organica'];?></td>
                <td><?php echo $fila['zinc'];?></td>
                <td><?php echo $fila['nitratos'];?></td>
                <td><?php echo $fila['fosforo'];?></td>
                <td><?php echo $fila['potasio'];?></td>
                <td><?php echo $fila['manganeso'];?></td>
                <td><?php echo $fila['calcio'];?></td>
                <td><?php echo $fila['cobre'];?></td>
                <td><?php echo $fila['oxido_azufre'];?></td>
                <td><?php echo $fila['boro'];?></td>
                <td><?php echo $fila['magnesio'];?></td>
                <td><?php echo $fila['oxigeno'];?></td>
                <td ><?php echo $fila['fecha_registro'];?></td>
                <td ><?php echo $fila['fecha_modif'];?></td>

                <td style="width:150px;">
                <a href="editar.php?id_suelo_natural=<?php echo $fila["id_suelo_natural"];?>" id="edi">Editar</a><a href="delete_suelo_natural.php?id_suelo_natural=<?php echo $fila["id_suelo_natural"];?>" id="eli">Eliminar</a></td>

                </tr>           
        
                <?php }
                ?>
               
    </div>
                </table>
                <br>
               <!-- <a  id="listado2" href="formularios.php">Insertar Nuevo</a>-->
</body>
</html>