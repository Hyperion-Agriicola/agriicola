<?php 

?>

<div class="bg-light pt-5 mt-3">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
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
                        <a id="editProfile" href="dashboard.php?editProfile" class="text-white btn text-uppercase bg-success">Editar perfil</a>
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