<body class="bg-white">

    <?php
    include('select_seguimiento.php');
    ?>

    <div class="container">
        <div id='calendar'></div>
    </div>


    <footer class="footer bg-white col-lg-12 col-md-4 col-sm-12" style="position:relative;">
        <div class="container text-center">
            <span class="text-muted">Todos los derechos reservados 2019 &copy; Desarrollado por Hyperion</span>
        </div>
    </footer>
    <script>
        $(document).ready(function() {

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev, today, next',
                    center: 'title',
                    right: 'basicDay, basicWeek, month'
                },
                customButtons: {

                },
                dayClick: function(date, jsEvent, view) {
                    $('#btGuardar').show();
                    $('#btModificar').hide();
                    $('#btEliminar').hide();
                    LimpiarFormularioEvento();
                    $('#tituloEvento').html("Nuevo evento: " + date.format());
                    $('#inputFechaInicio').val(date.format());
                    $('#inputFechaFinal').val(date.format());
                    $("#modalEventos").modal();
                },
                events: 'http://localhost:8888/agriicola/config/eventos.php',


                eventClick: function(calEvent, jsEvent, view) {
                    $('#btModificar').show();
                    $('#btEliminar').show();
                    $('#btGuardar').hide();

                    //Header del modal
                    $('#tituloEvento').html(calEvent.title);

                    //Mostar los datos en los inputs
                    $('#inputDescripcion').val(calEvent.descripcion);
                    $('#id_u').val(calEvent.id_u);
                    $('#id_cultivo').val(calEvent.id_cultivo);
                    $('#id_evento').val(calEvent.id_evento);
                    $('#inputTitulo').val(calEvent.title);
                    $('#inputColor').val(calEvent.color);

                    var FechaHoraInicio = calEvent.start._i.split(" ");
                    $('#inputFechaInicio').val(FechaHoraInicio[0]);

                    var FechaHoraFinal = calEvent.end._i.split(" ");
                    $('#inputFechaFinal').val(FechaHoraFinal[0]);


                    $("#modalEventos").modal();
                },
                editable: true,
                eventDrop: function(calEvent) {
                    $('#id_evento').val(calEvent.id_evento);
                    $('#inputTitulo').val(calEvent.title);
                    $('#inputColor').val(calEvent.color);
                    $('#inputDescripcion').val(calEvent.descripcion);

                    var FechaHoraInicio = calEvent.start.format().split("T");
                    $('#inputFechaInicio').val(FechaHoraInicio[0]);
                    $('#inputHoraInicio').val(FechaHoraInicio[1]);

                    var FechaHoraFinal = calEvent.end.format().split("T");
                    $('#inputFechaFinal').val(FechaHoraFinal[0]);
                    $('#inputHoraFinal').val(FechaHoraFinal[1]);

                    RecolectarDatosUI();
                    EnviarInformacion('modificar', nuevo_evento, true);
                }


            });
        });
    </script>


    <!-- Modal Agregar, Modificar, Eliminar -->
    <div class="modal fade" id="modalEventos" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tituloEvento"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="descripcionEvento">
                        <form action="" method="POST">
                            <div class="row">
                                <input type="text" placeholder="id_u" id="id_u" name="id_u">
                                <input type="text" placeholder="id_cultivo" id="id_cultivo" name="id_cultivo">
                                <input type="text" placeholder="id_evento" id="id_evento" name="id_evento">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="inputTitulo">Titulo del evento</label>
                                        <input type="text" placeholder="Escriba un titulo para el evento" class="form-control" id="inputTitulo" name="titulo" required>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="inputFechaInicio">Fecha</label>
                                        <input type="date" class="form-control" id="inputFechaInicio" name="fecha_inicio" required>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="inputHoraInicio">Hora</label>
                                        <div class="input-group clockpicker" data-autoclose="true">
                                            <input type="text" value="8:00" class="form-control" id="inputHoraInicio" name="hora_inicio" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="inputFechaFinal">Fecha de fin</label>
                                        <input type="date" class="form-control" id="inputFechaFinal" name="fecha_final">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="inputHoraFinal">Hora</label>
                                        <div class="input-group clockpicker" data-autoclose="true">
                                            <input type="text" value="8:00" class="form-control" id="inputHoraFinal" name="hora_final" required>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="inputDescripcion">Descripción</label>
                                        <textarea rows="3" class="form-control" id="inputDescripcion" name="descripcion" required></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="inputColor">Color para el evento</label>
                                        <input type="color" value="#303F9F" class="form-control" id="inputColor" name="color" required>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
                <div class="modal-footer">

                    <button id="btGuardar" type="submit" class="btn btn-success">Guardar</button>
                    <button id="btModificar" type="submit" class="btn btn-primary">Actualizar</button>
                    <button id="btEliminar" type="submit" class="btn btn-danger">Eliminar</button>
                </div>
                </form>
            </div>
        </div>

        <script>
            $('#id_u').hide();
            $('#id_cultivo').hide();
            $('#id_evento').hide();
            var nuevo_evento;

            $('#btGuardar').click(function() {
                RecolectarDatosUI();
                EnviarInformacion('agregar', nuevo_evento);

            });

            $('#btEliminar').click(function() {
                RecolectarDatosUI();
                EnviarInformacion('eliminar', nuevo_evento);

            });

            $('#btModificar').click(function() {
                RecolectarDatosUI();
                EnviarInformacion('modificar', nuevo_evento);

            });

            function RecolectarDatosUI() {
                nuevo_evento = {
                    id_u: $('#id_u').val(),
                    id_cultivo: $('#id_cultivo').val(),
                    id_evento: $('#id_evento').val(),
                    title: $('#inputTitulo').val(),
                    start: $('#inputFechaInicio').val() + " " + $('#inputHoraInicio').val(),
                    end: $('#inputFechaFinal').val() + " " + $('#inputHoraFinal').val(),
                    color: $('#inputColor').val(),
                    descripcion: $('#inputDescripcion').val(),
                    textColor: "#FFFFFF"
                };
            }

            function EnviarInformacion(accion, objEvento, modal) {
                $.ajax({
                    type: 'POST',
                    url: '../../config/eventos.php?accion=' + accion,
                    data: objEvento,
                    success: function(msg) {
                        if (msg) {
                            $('#calendar').fullCalendar('refetchEvents');
                            
                            if (!modal) {
                                $('#modalEventos').modal('toggle');
                            }
                            

                        }
                    },
                    error: function() {
                        alert("Ha ocurrido un error");
                    }
                });

            }

            $('.clockpicker').clockpicker();

            function LimpiarFormularioEvento() {
                $('#id_evento').val('');
                $('#inputTitulo').val('');
                $('#inputColor').val('');
                $('#inputDescripcion').val('');
            }
        </script>

        <script src="../../js/jquery-ui.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="../../js/main.js"></script>


</body>

</html>