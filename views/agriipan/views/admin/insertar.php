<?php
    include('../../config/functions.php');
    if(isset($_POST['new_userName'])==''){
        header('Location: index.php');
    }

    $data = new Functions();
    $data->registerUser(
        $_POST['new_userName'],
        $_POST['new_userLastName'],
        $_POST['new_phoneNumber'],
        $_POST['new_userEmail'],
        $_POST['new_userCompany'],
        $_POST['new_userCity'],
        $_POST['new_tipo'],
        $_POST['new_userState'],
        $_POST['new_serPass1'],
        $_POST['new_userPass2']);
        
    header('Location: index.php');

    
?>