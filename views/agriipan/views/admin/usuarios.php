<div class="container">
    <div class="row p-3">
        <h3 class=" text-success">Usuarios registrados</h3>
        <a href="cultivos.php" class="btn btn-success ml-auto rounded-circle" role="button" data-toggle="modal" data-target=".bd-example-modal-xl"><i class="fas fa-plus"></i></a>
    </div>      
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th >Nombre</th>
                            <th >Apellido</th>
                            <th >Empresa</th>
                            <th >Tipo usuario</th>
                            <th >Correo</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $data->getUsersUsersAndAdmins($_SESSION['admin']);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>        
</div> 