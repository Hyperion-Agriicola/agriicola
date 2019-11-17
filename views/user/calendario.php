
<script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>
        
<div class="row mt-5">
    <div id='calendar'></div>
</div>    
      
       
    
<script>
    $(document).ready(function(){
        
        $('#calendar').fullCalendar({ 
            header:{
              
                left: 'prev, today, next',
                center: 'title',
                right: 'basicWeek, month'
                
            }, 
            customButtons:{
                
            },
            dayClick:function(date, jsEvent, view){
                $('#btGuardar').show();
                $('#btModificar').hide();
                $('#btEliminar').hide();
                LimpiarFormularioEvento();
                $('#tituloEvento').html("Nuevo evento: " + date.format());
                $('#inputFechaInicio').val(date.format());
                $('#inputFechaFinal').val(date.format());
                $("#modalEventos").modal();
            },
            events:'http://localhost:8080/agriicola/config/eventos.php',
        
            
            eventClick:function(calEvent, jsEvent, view){
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
                $('#inputHoraInicio').val(FechaHoraInicio[1]);

                var FechaHoraFinal = calEvent.end._i.split(" ");
                $('#inputFechaFinal').val(FechaHoraFinal[0]);
                $('#inputHoraInicio').val(FechaHoraInicio[1]);

                $("#modalEventos").modal();
            },
            editable: true,
            eventDrop:function(calEvent){
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

    <?php 
        $id_u = $data->getUserId($_SESSION['correo']);
        $id_cultivo = $_GET['Tracing'];
    ?>
    <!-- Modal Agregar, Modificar, Eliminar -->
    <div class="modal fade" id="modalEventos" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="tituloEvento"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div id="descripcionEvento">
                <form class="form-eventos" action="" method="POST">
                    <div class="row">
                        <input type="text"  id="id_u" name="id_u" value="<?php echo $id_u; ?>">
                        <input type="text"  id="id_cultivo" name="id_cultivo" value="<?php echo $id_cultivo; ?>">
                        <input type="text"  id="id_evento" name="id_evento">
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
                                    <input type="text" placeholder="08:00" class="form-control" id="inputHoraInicio" name="hora_inicio" required>
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
                                    <input type="text" placeholder="08:00" class="form-control" id="inputHoraFinal" name="hora_final">
                                </div>
                                
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="inputDescripcion">Descripción</label>
                                <textarea class="form-control" id="inputDescripcion" name="descripcion"></textarea>
                            </div>
                        </div>       

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="inputColor">Color para el evento</label>
                                <input type="color" value="#303F9F" class="form-control" id="inputColor" name="color">
                            </div>
                        </div>    
                    </div>

            </div>
        </div>
        <div class="modal-footer">
            
            <button id="btGuardar" type="submit" class="btn btn-success">Guardar</button>
            <button id="btModificar" type="button" class="btn btn-primary">Actualizar</button>
            <button id="btEliminar" type="button" class="btn btn-danger">Eliminar</button>
        </div>
                </form> 
    </div>
</div>

<script>
    
    var nuevo_evento;

    $('#btGuardar').click(function(){

        RecolectarDatosUI();
        EnviarInformacion('agregar', nuevo_evento);
        
    });

    $('#btEliminar').click(function(){
        RecolectarDatosUI();
        EnviarInformacion('eliminar', nuevo_evento);
        
    });

    $('#btModificar').click(function(){
        RecolectarDatosUI();
        EnviarInformacion('modificar', nuevo_evento);
        
    });

    function RecolectarDatosUI(){
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

    function EnviarInformacion(accion, objEvento, modal){
        $.ajax({
            type:'POST',
            url:'../../config/eventos.php?accion='+accion,
            data: objEvento,
            success:function(msg){
                if(msg){
                    $('#calendar').fullCalendar('refetchEvents');
                   
                    
                }
            },
            error:function(){
                alert("Ha ocurrido un error");
            }
        });

    }

    $('.clockpicker').clockpicker();

    function LimpiarFormularioEvento(){
        $('#id_evento').val('');
        $('#inputTitulo').val('');
        $('#inputColor').val('');
        $('#inputDescripcion').val('');
    }
</script>

        