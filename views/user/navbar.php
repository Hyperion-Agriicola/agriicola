<!-- Main bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm bg-white">
    <a id="imageBrand" class="navbar-brand" href="dashboard.php">
        <img src="../../img/agriicola_logo_alternativo.png" width="140" class="d-inline-block align-top" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <!--
                <li class="nav-item">
                <div class="bg-light rounded border">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button id="button-addon2" type="submit" class="btn btn-link text-success">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                        <input type="search" placeholder="Buscar" aria-describedby="button-addon2" class="form-control border-0 bg-light">
                    </div>
                </div>
            </li>
             -->
             <li class="nav-item">
                <a id="showNews" class="nav-link active" href="dashboard.php?users"><i class="fas fa-users"></i>
                    <span>Usuarios</span></a>
            </li>
            <li class="nav-item">
                <a id="showNews" class="nav-link active" href="noticias.php"><i class="fas fa-newspaper"></i>
                    <span>Noticias</span></a>
            </li>
            <li class="nav-item">
                <a id="askForHelp" class="nav-link active" href="dashboard.php?sendHelp"><i class="fas fa-question-circle"></i>
                    <span>Ayuda</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="../../config/delete.php?logout"><i class="fas fa-sign-out-alt"></i>
                    <span>Cerrar sesión</span></a>
            </li>
        </ul>
    </div>
</nav>



<!-- Aquí NO cierra container-fluid, row  -->