<?php
    include('database.php');

    $conexion = new Database();

    if(isset($_POST["id_agroquimico"])){
        $query = "SELECT * FROM agroquimicos WHERE id_agroquimico = '".$_POST["id_agroquimico"]."'";  
        $result = mysqli_query($connect, $query);  
        $row = mysqli_fetch_array($result);  
        echo json_encode($row); 
    }
?>