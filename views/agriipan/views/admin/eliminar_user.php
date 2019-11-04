<?php
    include('../../config/functions.php');
    if(isset($_GET['email'])==''){
        header('Location: index.php');
    }

    $data = new Functions();
    $data->deleteUser($_GET['email']);
    header('Location: index.php');

?>