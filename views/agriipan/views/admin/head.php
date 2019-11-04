<div class="container text-center">
    <br class="my-2">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <a href="#!" class="ml-3">
                <img class="close"src="../../img/svg/edit-24px.svg" data-toggle="modal" data-target="#exampleModal2">
            </a>
            <img src="../../img/svg/admin.svg" alt="" style="height:60px; color: green;">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-12">
                    <?php   
                        echo "<h4>" . $data->getAdminName($_SESSION['admin']) . "</h4>";
                        echo "<p class='text-muted'>" . $_SESSION['admin'] . "</p>";
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>