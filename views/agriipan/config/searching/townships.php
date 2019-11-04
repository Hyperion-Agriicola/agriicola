<?php 
    
    include('../locationDB.php');
    $conexion = new Database();
    mysqli_set_charset($conexion, "utf8");
    
    if (isset($_GET['term'])){
        $data = array();

        $query = "SELECT nombre FROM municipios WHERE nombre LIKE '%$_GET[term]%'";
        
        $result = $conexion->query($query);

        while($row = $result->fetch_array()){
            $data[] = $row['nombre'];
        }

        echo json_encode($data);
    }   
?>