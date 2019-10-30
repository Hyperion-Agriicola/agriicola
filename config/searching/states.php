<?php 
    
    include('../locationDB.php');
    $conexion = new Database();
    
    
if (isset($_GET['term'])){

    $data = array();

    $query = "SELECT nombre FROM estados WHERE nombre LIKE '%$_GET[term]%'";
    
    $result = $conexion->query($query);

    while($row = $result->fetch_array()){
        $data[] = $row['nombre'];
    }

    echo json_encode($data);

} 

?>