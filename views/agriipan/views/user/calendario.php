<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/main.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../css/animate.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
        <link href='../../config/fullcalendar/packages/core/main.css' rel='stylesheet' />
        <link href='../../config/fullcalendar/packages/daygrid/main.css' rel='stylesheet' />
        
        <script src='../../config/fullcalendar/packages/core/main.js'></script>
        <script src='../../config/fullcalendar/packages/daygrid/main.js'></script>
        
        <title>AGRIICOLA</title>

        <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            
            plugins: [ 'dayGrid' ],
            header:{
                left:'prev, today, next',
                center:'title',
                right:'dayGridMonth, dayGridWeek, dayGridDay'
            }
        });

        calendar.render();
      });

    </script>
</head>
<body class="bg-white">
    
<?php
            
    
    include('select_seguimiento.php');
    if (isset($_GET['cultivos'])) {
        include('cultivos.php');
    } else if (isset($_GET['suelos'])) {
        include('suelos.php');
    } else if (isset($_GET['agroquimicos'])) {
        include('agroquimicos.php');
        //echo "Agroquímicos";
    } else if (isset($_GET['gastos'])) {
        include('gastos.php');
        //echo "Gastos";
    } else if (isset($_GET['seguimiento'])) {
        echo "Seguimiento";
    } else if (isset($_GET['natural'])) {
        include('suelo_natural.php');
    } else if (isset($_GET['artificial'])) {
        include('suelo_artificial.php');
    }
?>

    <div class="container">
         <div id='calendar'></div>
    </div>
   
    
    <footer class="footer bg-white col-lg-12 col-md-12 col-sm-12" >
        <div class="container text-center">
            <span class="text-muted">Todos los derechos reservados 2019 &copy; Desarrollado por Hyperion</span>
        </div>
    </footer>

    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/jquery-ui.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../../js/main.js"></script>

</body>
</html>