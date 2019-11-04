<?php 

?>

<div class="bg-light">
    <div class="container text-center">
        <br class="my-2">
        <h1 class="text-success">Perfil</h1>
        
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <img src="../../img/photo_profile.png" width="150" alt="">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-12">
                        <h4>
                            <?php 
                                print_r($data->getUserProfile()[0] . " " .
                                $data->getUserProfile()[1]);
                            ?>
                        </h4>
                        <p class="text-muted"><i class="fas fa-map-marker-alt"></i> 
                        <?php 
                                print_r($data->getUserProfile()[6] . ", " . 
                                $data->getUserProfile()[7]);
                            ?>
                        </p>
                        <p class="text-muted">
                        <?php 
                                print_r($data->getUserProfile()[5]);
                            ?>
                        </p>
                        <a href="dashboard.php?editProfile" class="text-white bg-success p-1 rounded-lg">Editar perfil</a>
                            <!-- 
                                <a href="editar_perfil.php" class="ml-3">
                                <img class="close"src="../../img/svg/edit-24px.svg" alt="">
                            </a>
                            -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br class="my-2">
</div>