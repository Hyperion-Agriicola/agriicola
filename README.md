<h1>Bienvenido al proyecto Agriicola </h1>

<p>Antes de correr las pruebas asegúrate de modificar todos los parámetros necesarios.</p>

<strong>
    <h3>Bases de Datos</h3>
</strong>
<p>Agriicolaa funciona con 3 Bases de Datos ubicados en <strong>config/Database/</strong> las cuales son:
    <ul>
        <li>agriicola.php</li>
        <li>catalogo.php</li>
        <li>localidades.php</li>
    </ul>
    Estas deberán ser cargadas en <strong>utf8_spanish_ci</strong>
</p>

<strong>
    <h3>main.js</h3>
</strong>
<p>
    Dentro de la función <strong>selectLocation()</strong> se encuentran 3 autocomplete y en ellos se muestra una URL de
    consulta de datos tal como: <br>
    <pre>
  <code>
    http://localhost:8080/agriicola/config/searching/states.php
  </code>
</pre>
    El dominio <b>localhost:8080</b> deberá ser cambiado por el DNS final en cada función
</p>

<strong>
    <h3>calendario.php</h3>
</strong>
<p>
    En el archivo Calendario ubicado en <strong>views/user/calendario.php</strong> línea 129 se deberá modificar también
    la
    URL de acceso por el DNS final como:
    <pre>
        <code>
            events:'http://localhost:8080/agriicola/config/eventos.php?accion=<?php echo $_GET['Tracing'];?>',
        </code>
    </pre>

</p>

<h3><strong>Actualización de archivo de Base de Datos</strong></h3>
<p>
    Antes de correr el proyecto en tu web no olvides moficar los archivos <strong>database.php</strong>
    y el archivo <strong>locationDB.php</strong> situados en:
    <strong>config/database.php </strong>
    En el que tienes que modificar el valor de las siguientes variables:
    <ul>
        <li>private $DB_HOST = 'Host de acceso';</li>
        <li>private $DB_USER = 'usuario';</li>
        <li>private $DB_PASS = 'contraseña';</li>
        <li>private $DB_NAME = 'base de datos';</li>
    </ul>
</p>