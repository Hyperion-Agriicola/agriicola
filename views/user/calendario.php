<?php 
        $id_u = $data->getUserId($_SESSION['correo']);
        $id_cultivo = $_GET['Tracing'];
    ?>
    
<script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>
              <script src="../../js/calendario/bootstrap-clockpicker.min.js"></script>
        
<div class="row mt-5">
    <div id='calendar'></div>
</div>    
      
 <!-- Modal Agregar, Modificar, Eliminar -->
 <div style="display: none;">
    <form id="event-form" class="form-eventos" action="" method="POST">
        <div class="row">
            <input type="hidden"  id="id_cultivo" name="id_cultivo" value="<?php echo $id_cultivo; ?>">
            <input type="hidden"  id="id_evento" name="id_evento">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="form-group">
                    <label for="inputTitulo">Titulo del evento</label>
                    <input type="text" placeholder="Escriba un titulo para el evento" class="form-control" id="inputTitulo" name="titulo" required>
                </div>
            </div>    

            <div class="col-lg-6 col-md-6 col-sm-6">    
                <div class="form-group">
                    <label for="inputFechaInicio">Fecha de inicio</label>
                    <input   placeholder="Seleccione una fecha" class="form-control" id="inputfechaInicio" name="fecha_inicio" required>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6" style="display: none;">    
                <div class="form-group">
                    <label for="inputHoraInicio">Hora</label>
                    <div class="input-group clockpicker" data-autoclose="true">
                        <input  placeholder="..." class="form-control" id="inputHoraInicio" name="hora_inicio" value= "00:00:00" required>
                        <span id="alert1"></span>
                    </div>    
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="form-group">
                    <label for="inputFinal">Fecha de finalización</label>
                    <input  placeholder="Seleccione una fecha" class="form-control" id="inputFFinal" name="fecha_fin1">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6" style="display: none;">    
                <div class="form-group">
                    <label for="inputHoraFinal">Hora</label>
                    <div class="input-group clockpicker" data-autoclose="true">
                        <input placeholder="..." value= "23:59:00" class="form-control" id="inputHoraFinal" name="hora_final">
                        <span id="alert2"></span>
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



        <div class="swal2">
            
            <button id="btGuardar" type="button" class="swal2-confirm swal2-styled" style="background-color: #388e3c;">Guardar</button>
            <button id="btModificar" type="button" class="swal2-confirm swal2-styled" style="background-color: #388e3c;">Actualizar</button>
            <button id="btEliminar" type="button" class="swal2-confirm swal2-styled" style="background-color: #d33;">Eliminar</button>
        </div>
    </form> 
    </div>      
    
<script>
    $(document).ready(function(){
        var formevent = document.getElementById("event-form");
        $('#calendar').fullCalendar({ 
            header:{
              
                left: 'prev, today, next',
                center: 'title',
                right: 'basicWeek, month'
                
            }, 
            customButtons:{
                
            },
            
            dayClick:function(date, jsEvent, view){
                
                Swal.fire({
                    title: "Nuevo evento: " + date.format('MMMM d YYYY'),
                    showCloseButton: true,
                    width: '40rem',
                    html: formevent,
                    showCancelButton: false,
                    showConfirmButton : false,
                    
                    }).then((result) => {
                        if (result.dismiss == Swal.DismissReason.close) {
                        
                        LimpiarFormularioEvento();
                        console.log('Cerrado modal new event')
                    }
                });
                LimpiarFormularioEvento();
               
                
                $('#btGuardar').show();
                $('#btModificar').hide();
                $('#btEliminar').hide();
            },
            events:'http://localhost:8080/agriicola/config/eventos.php?accion=<?php echo $_GET['Tracing'];?>',
        
            
            eventClick:function(calEvent, jsEvent, view){
                
                Swal.fire({
                    title: calEvent.title,
                    showCloseButton: true,
                    width: '40rem',
                    html: formevent,
                    showCancelButton: false,
                    showConfirmButton : false,
                    
                    }).then((result) => {
                        if (result.dismiss == Swal.DismissReason.close) {
                        
                        LimpiarFormularioEvento();
                        console.log('Cerrado modal event');
                    }
                    
                });
                
                $('#btModificar').show();
                $('#btEliminar').show();
                $('#btGuardar').hide();
                //Mostar los datos en los inputs
                $('#inputDescripcion').val(calEvent.descripcion);
                $('#id_cultivo').val(calEvent.id_cultivo);
                $('#id_evento').val(calEvent.id_evento);
                $('#inputTitulo').val(calEvent.title);
                $('#inputColor').val(calEvent.color);

                var FechaHoraInicio = calEvent.start.format().split("T");
                $('#inputfechaInicio').val(FechaHoraInicio[0]);
                $('#inputHoraInicio').val(FechaHoraInicio[1]);

                var FechaHoraFinal = calEvent.end.format().split("T");
                $('#inputFFinal').val(FechaHoraFinal[0]);
                $('#inputHoraFinal').val(FechaHoraFinal[1]);
            },
            editable: true,
            eventDrop:function(calEvent){
                $('#id_evento').val(calEvent.id_evento);
                $('#inputTitulo').val(calEvent.title);
                $('#inputColor').val(calEvent.color);
                $('#inputDescripcion').val(calEvent.descripcion);

                var FechaHoraInicio = calEvent.start.format().split("T");
                $('#inputfechaInicio').val(FechaHoraInicio[0]);
                $('#inputHoraInicio').val(FechaHoraInicio[1]);

                var FechaHoraFinal = calEvent.end.format().split("T");
                $('#inputFFinal').val(FechaHoraFinal[0]);
                $('#inputHoraFinal').val(FechaHoraFinal[1]);

                RecolectarDatosUI();
                EnviarInformacion('modificar', nuevo_evento, true);
                
            },

            eventRender: function (event, element, view) {
                var i = document.createElement('i');
                // Add all your other classes here that are common, for demo just 'fa'
                i.className = 'fas'; /*'ace-icon fa yellow bigger-250'*/
                i.classList.add(event.icon);
                // If you want it inline with title
                element.find('div.fc-content').prepend(i);
                // If you want it on a line before
                // element.prepend(i);
                // Or the next line after title
                //element.append(i)
            }
            

        });
    });
</script>


<script>
    
    var nuevo_evento;

    $('#btGuardar').click(function(){

        RecolectarDatosUI();
        
        if($('#inputTitulo').val() != "" ){
        EnviarInformacion('agregar', nuevo_evento);
        Swal.close();

        const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        onOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
        });

        Toast.fire({
        icon: 'success',
        title: 'Evento creado correctamente!'
        });
        }else{
            Swal.fire(
                    'No se puede crear el evento',
                   'Asegúrese de ponerle un título y una fecha de finalización posterior a la fecha de inicio.',
                   'error'
               );
        }
    });

    $('#btEliminar').click(function(){
        RecolectarDatosUI();
        EnviarInformacion('eliminar', nuevo_evento);
        Swal.close();
    });

    $('#btModificar').click(function(){
        RecolectarDatosUI();
        EnviarInformacion('modificar', nuevo_evento);
        Swal.close();
        const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        onOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
        });

        Toast.fire({
        icon: 'success',
        title: 'Evento actualizado correctamente!'
        });
    });

    function RecolectarDatosUI(){
            nuevo_evento = {
            id_cultivo: $('#id_cultivo').val(),
            id_evento: $('#id_evento').val(),
            title: $('#inputTitulo').val(),
            start: $('#inputfechaInicio').val() + " " + $('#inputHoraInicio').val(),
            end: $('#inputFFinal').val() + " " + $('#inputHoraFinal').val(),
            color: $('#inputColor').val(),
            descripcion: $('#inputDescripcion').val(),
            textColor: "#FFFFFF",
            icon: "fa-calendar-day"
        };
        
        
    }

    function EnviarInformacion(accion, objEvento, modal){
        $.ajax({
            type:'POST',
            url:'../../config/eventos.php?accion='+accion,
            data: objEvento,
            success:function(){   
                $('#calendar').fullCalendar('refetchEvents');
            },
            error:function(){
               Swal.fire(
                   'No se ha podido completar la acción',
                   'Recargue la página y vuelva a interntarlo',
                   'error'
               );
            }
        });

    }

    $('.clockpicker').clockpicker();

    function LimpiarFormularioEvento(){
        $('#id_evento').val('');
        $('#inputTitulo').val('');
        $('#inputColor').val('#303F9F');
        $('#inputDescripcion').val('');
        $('#inputfechaInicio').val('');
        $('#inputFFinal').val('');
        
    }
</script>

        