<!-- Option + shift + F -->
<?php

    $mi_Array = $data->getAdminProfile($_SESSION['admin']);
?>

<div class="row ">
    <div class="col-12 col-sm-12 col-md-6">
        <label for="name">Nombre:</label>
        <?php 
            echo "<input type='text' value = '" . $mi_Array[0] . "' class='form-control' placeholder='Ingresa tu nombre' id='name' name='userName' required>";
        ?>
    </div>
    <div class="col-12 col-sm-12 col-md-6">
        <label for="last_name">Apellidos:</label>
        <?php 
            echo "<input type='text' value = '" . $mi_Array[1] . "' class='form-control' placeholder='Ingresa tus apellidos' id='last_name' name='userLastName' required>";
        ?>
    </div>
</div>
<div class="row ">
    <div class="col-12 col-sm-12 col-md-6">
        <label for="phone">Teléfono:</label>
        <?php 
            echo "<input type='number' value = '" . $mi_Array[2] . "' class='form-control' placeholder='Ingresa tu teléfono' id='phone' name='phoneNumber' required>";
        ?>
    </div>
    <div class="col-12 col-sm-12 col-md-6">
        <label for="company_name">Ciudad</label>
        <?php 
            echo "<input type='text' value = '" . $mi_Array[3] . "' class='form-control' placeholder='Ingresa tu ciudad' id='city' name='city' required>";
        ?>
    </div>
    <div class="col-12 col-sm-12 col-md-6">
        <label for="company_name">Estado</label>
        <?php 
            echo "<input type='text' value = '" . $mi_Array[4] . "' class='form-control' placeholder='Ingresa tu estado' id='edo' name='edo' required>";
        ?>
    </div>
    <div class="col-12 col-sm-12 col-md-6">
        <label for="company_name">Nombre de la empresa:</label>
        <?php 
            echo "<input type='text' value = '" . $mi_Array[5] . "' class='form-control' placeholder='Ingresa tu empresa' id='company_name' name='company_name' required>";
        ?>
    </div>
</div>
<div class="row ">
    <div class="col-1 col-sm-1 col-md-3"></div>
</div>