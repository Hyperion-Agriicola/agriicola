<?php 
    
    $conexion = new mysqli('localhost', 'root', '', 'localidades');
    

    $data = array();

    $query = "SELECT nombre FROM estados";
    
    $result = $conexion->query($query);

    while($row = $result->fetch_array()){
        $data[] = $row['nombre'];
    }

    echo json_encode($data);

    

?>