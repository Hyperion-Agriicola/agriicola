


/*/*Login validation*/

jQuery(function(){
    $.validator.addMethod('EMAIL',function(value, element){
        return this.optional(element) || /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.(?:[A-Z]{2}|com|org|net|edu|gov|mil|biz|info|mobi|name|aero|asia|jobs|museum|es)$/i.test(value);
    },"<span><p class='text-danger' style='font-size: 12px;'>*Ingrese una dirección de correo electrónico válida.</p></span>");
        
    jQuery("#form-vali").validate({
        rules:{
            email:{
                required: true,
                EMAIL: true,
                email: true
            }
        },
        messages:{
            email:{
                required:"<span><p class='text-danger' style='font-size: 12px;'>*Ingrese una dirección de correo electrónico.</p></span>",
                EMAIL:"<span><p class='text-danger' style='font-size: 12px;'>*Ingrese una dirección de correo electrónico válida.</p></span>",
                email: "<span><p class='text-danger' style='font-size: 12px;'>*Ingrese una dirección de correo electrónico válida.</p></span>"
            }
        }
    });
});

/*validacion jquery validate registro*/

jQuery(function() {
    $.validator.addMethod( "letterswithbasicpunc", function( value, element ) {
        return this.optional( element ) || /^[a-zñ.\s\sáéíóúñÑÁÉÍÓÚüÜ]+$/i.test( value );
    }, "<p class='text-danger' style='font-size: 12px;'>*Ingrese sólo letras.</p>" );
$.validator.addMethod("PASSWORD",function(value,element){
    return this.optional(element) || /^(?=.*\d)(?=.*[a-zñ])(?=.*[A-ZÑ]).{6,16}$/i.test(value);
},"<span class='text-danger' style='font-size: 12px;'>*La contraseña debe contener mínimo 6 y máximo 16 caracteres y al menos un número.</span>");
$.validator.addMethod('EMAIL',function(value, element){
    return this.optional(element) || /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.(?:[A-Z]{2}|com|org|net|edu|gov|mil|biz|info|mobi|name|aero|asia|jobs|museum|es)$/i.test(value);
},"<span class='pb-0 '><p class='text-danger' style='font-size: 12px;'>*Ingrese una dirección de correo electrónico válida.</p></span>");
$.validator.addMethod("user_pass_not_same", function(value, element) {
    return this.optional(element) || $('#newPassword').val() != $('#currentPassword').val() 
    },  
    "<span><p class='text-danger' style='font-size: 12px;'>*La contraseña debe ser diferente a la actual.</p></span>");

jQuery( ".registro" ).validate({
            rules: {
                    userName: {
                            required: true,
                            letterswithbasicpunc: true,
                        
                    },
                    userLastName:{
                        required: true,
                        letterswithbasicpunc: true,
                        
                    },
                    phoneNumber:{
                        number: true,
                        required: true,
                        maxlength: 10,
                        minlength: 10
                       
                    },
                    userEmail: {
                        required: true,
                        EMAIL: true,
                        email: true
                    },
                     userCompany:{
                        required: true,
                        lettersonly: true
                     },
                     userCity: {
                         required: true,
                         lettersonly: true
                     },
                     userState:{
                         required: true,
                         lettersonly: true
                    },
                     userPass1:{
                        required: true,
                        PASSWORD: true
                     },
                     userPass2:{
                        required: true,
                        equalTo: "#pass"
                     },
                     userPass:{
                         required: false,                  
                        PASSWORD: true,
                      
                     },
                     newPassword:{
                        user_pass_not_same: true,
                        PASSWORD: true
                     },
                     repeatPassword:{
                         equalTo: "#newPassword"
                     }
            },
            messages: {
                    userName: {
                            required: "<span><p class='text-danger' style='font-size: 12px;'>*Ingrese su nombre(s).</p></span>"
                    },
                    userLastName:{
                        required: "<span><p class='text-danger' style='font-size: 12px;'>*Ingrese su apellido(s).</p></span>"
                    },
                    phoneNumber:{
                        number: "<span><p class='text-danger' style='font-size: 12px;'>*Ingrese sólo números.</p></span>",
                        maxlength: "<span><p class='text-danger' style='font-size: 12px;'>*No debe ingresar más de 10 números.</p></span>",
                        minlength: "<span><p class='text-danger' style='font-size: 12px;'>*No debe ingresar menos de 10 números.</p></span>",
                        required: "<span><p class='text-danger' style='font-size: 12px;'>*Ingrese un número teléfonico.</p></span>"
                    },
                    userEmail:{
                        EMAIL: "<span><p class='text-danger' style='font-size: 12px;'>*Ingrese una dirección de correo electrónico válida.</p></span>",
                        email: "<span><p class='text-danger' style='font-size: 12px;'>*Ingrese una dirección de correo electrónico válida.</p></span>",
                        required: "<span><p class='text-danger' style='font-size: 12px;'>*Ingrese una dirección de correo electrónico.</p></span>"
                    },
                    userCompany:{
                        required: "<span><p class='text-danger' style='font-size: 12px;'>*Ingrese el nombre de su empresa.</p></span>",
                        lettersonly: "<span><p class='text-danger' style='font-size: 12px;'>*Ingrese solo letras, no se aceptan caracteres especiales.</p></span>"
                    },
                    userCity:{
                        required: "<span><p class='text-danger' style='font-size: 12px;'>*Ingrese una ciudad válida.</p></span>",
                        remote:"<span><p class='text-danger' style='font-size: 12px;'>*La ciudad no existe, ingrese una ciudad válida .</p></span>",
                        lettersonly: "<span><p class='text-danger' style='font-size: 12px;'>*Ingrese solo letras.</p></span>"
                    },
                    userState:{
                        required: "<span><p class='text-danger' style='font-size: 12px;'>*Ingrese un estado válido.</p></span>",
                        remote:"<span><p class='text-danger' style='font-size: 12px;'>*El estado no existe, ingrese un estado válido .</p></span>",
                        lettersonly: "<span><p class='text-danger' style='font-size: 12px;'>*Ingrese solo letras.</p></span>"
                    },
                    userPass1:{
                        required: "<span><p class='text-danger' style='font-size: 12px;'>*Ingrese una contraseña.</p></span>"
                    },
                    userPass2:{
                        required:"<span><p class='text-danger' style='font-size: 12px;'>*Confirme la contraseña.</p></span>",
                        equalTo: "<span><p class='text-danger' style='font-size: 12px;'>*Las contraseñas no coinciden.</p></span>"
                    },
                    newPassword:{
                        required:"<span><p class='text-danger' style='font-size: 12px;'>*Este campo es obligatrio. porfavor introduzca una nueva contraseña.</p></span>",
                        notEqualTo: "<span><p class='text-danger' style='font-size: 12px;'>*La contraseña debe ser diferente a la actual.</p></span>"
                    },
                    userPass:{
                        required: "<span><p class='text-danger' style='font-size: 12px;'>*Este campo es obligatrio. porfavor introduzca su contraseña actual.</p></span>"
                    },
                    repeatPassword:{
                        required: "<span><p class='text-danger' style='font-size: 12px;'>*Confirme la contraseña.</p></span>",
                        equalTo: "<span><p class='text-danger' style='font-size: 12px;'>*La contraseña no coinciden con la nueva contraseña.</p></span>"
                    }
            }
    });
 });          
 /*registro de cultivos validaciones*/

 jQuery(function(){
    $.validator.addMethod( "alphanumeric", function( value, element ) {
        return this.optional( element ) || /^[A-Za-z0-9\sñ\s\sáéíóúñÑÁÉÍÓÚüÜ]+$/i.test( value );
    }, "<p class='text-danger' style='font-size: 12px;'>*Ingrese solo letras y números.</p>" );
    $.validator.addMethod( "lettersonly", function( value, element ) {
        return this.optional( element ) || /^[a-zñA-ZÑ\s\s\sáéíóúñÑÁÉÍÓÚüÜ]+$/i.test( value );
    }, "<p class='text-danger' style='font-size: 12px;'>*Ingrese solo letras.</p>" );
    $.validator.addMethod('decimal', function(value, element) {
        return this.optional(element) || /^((\d+(\\.\d{0,2})?)|((\d*(\.\d{1,2}))))$/.test(value);
      }, "<p class='text-danger' style='font-size: 12px;'>*Ingrese el formato correcto 0.00.</p>" );

      
     
    jQuery( ".crop" ).validate({
        rules:{
            namecrop:{
                required: true,
                alphanumeric: true
            },
            hectares:{
                required: true,
                number: true,
                min: 0,
                max: 100000,
                decimal: true
            },
            subspecie:{
                required: true
            },
            specieType:{
                required: true
            },
            variation:{
                required: true,
                lettersonly: true
            },
            bornDate:{
                required: true,
            },
            state:{
                required: true,
                letterswithbasicpunc: true
            },
            township:{
                required: true,
                letterswithbasicpunc: true
            },
            town:{
                required: true,
                letterswithbasicpunc: true
            }
        },
        messages:{
            namecrop:{
                required: "<p class='text-danger' style='font-size: 12px;'>*Ingrese un nombre, puede incluir números .</p>",
                alphanumeric: "<p class='text-danger' style='font-size: 12px;'>*Ingrese solo letras y numeros.</p>"
            },
            hectares:{
                required: "<p class='text-danger' style='font-size: 12px;'>*Ingrese hectáreas.</p>",
                number:"<p class='text-danger' style='font-size: 12px;'>*Ingrese solo números.</p>",
                min: "<p class='text-danger' style='font-size: 12px;'>*Numero negativos inválidos.</p>",
                max: "<p class='text-danger' style='font-size: 12px;'>*Número no mayor a 100000.</p>",
            },
            subspecie:{
                required: "<p class='text-danger' style='font-size: 12px;'>*Seleccione una subespecie.</p>"
            },
            specieType:{
                required: "<p class='text-danger' style='font-size: 12px;'>*Seleccione un tipo de especie.</p>"
            },
            variation:{
                required: "<p class='text-danger' style='font-size: 12px;'>*Ingrese una variedad.</p>",
                lettersonly:"<p class='text-danger' style='font-size: 12px;'>*Ingrese solo letras.</p>"
            },
            bornDate:{
                required: "<p class='text-danger' style='font-size: 12px;'>*Ingrese una fecha.</p>",
                date: "<p class='text-danger' style='font-size: 12px;'>*Ingrese una fecha válida.</p>",
                max: "<p class='text-danger' style='font-size: 12px;'>*Ingrese una fec válida.</p>"
            },
            state:{
                required:"<p class='text-danger' style='font-size: 12px;'>*Ingrese un estado.</p>",
                letterswithbasicpunc: "<p class='text-danger' style='font-size: 12px;'>*Estado inexistente, ingrese sólo letras y puntos.</p>",
                lettersonly: "<p class='text-danger' style='font-size: 12px;'>*Ingrese solo letras.</p>"
            },
            township:{
                required:"<p class='text-danger' style='font-size: 12px;'>*Ingrese un municipio.</p>",
                letterswithbasicpunc: "<p class='text-danger' style='font-size: 12px;'>*Municipio inexistente, ingrese sólo letras y puntos.</p>",
                lettersonly: "<p class='text-danger' style='font-size: 12px;'>*Ingrese solo letras.</p>"
            },
            town:{
                required:"<p class='text-danger' style='font-size: 12px;'>*Ingrese una localidad.</p>",
                letterswithbasicpunc: "<p class='text-danger' style='font-size: 12px;'>*Localidad inexistente, ingrese sólo letras y puntos.</p>",
                lettersonly: "<p class='text-danger' style='font-size: 12px;'>*Ingrese solo letras.</p>" 
            }

        }
    });
 });
 /**datapicker fecha de inicio registro de cultivo */
$(function(){
    $("#inputDate").datepicker({
        dateFormat: "yy-mm-dd",
        numberOfMonths: 2,
        minDate: new Date() 
    });
});

 /**REgistro suelo natural validaciones */

jQuery(function(){
    jQuery(".groundre").validate({
        rules:{
            inputPH:{
                required: true,
                maxlength: 2,
                number: true,
                min: 0,
                max: 14
            
            },
            inputSalinity:{
                required: true,
                maxlength: 3,
                number: true,
                min: 0
            
            },
            inputConduc:{
                required: true,
                maxlength: 3,
                number: true,
                min: 0  
            }
        },
        messages:{
            inputPH:{
                required: "<p class='text-danger' style='font-size: 12px;'>*Ingrese Indice de PH.</p>",
                maxlength: "<p class='text-danger' style='font-size: 12px;'>*PH invalido, revasaste el limite de digitos.</p>",
                number: "<p class='text-danger' style='font-size: 12px;'>*Ingrese solo numeros.</p>",
                min:"<p class='text-danger' style='font-size: 12px;'>*Indice de PH invalido, solo se aceptan numeros positivos.</p>",
                max:"<p class='text-danger' style='font-size: 12px;'>*Índice de PH inválido, no debe exceder a 14.</p>"

            },
            inputSalinity: {
                required: "<p class='text-danger' style='font-size: 12px;'>*Ingrese Indice de salinidad.</p>",
                maxlength: "<p class='text-danger' style='font-size: 12px;'>*Indice de salinidad invalido, revasaste el limite de digitos,.</p>",
                number: "<p class='text-danger' style='font-size: 12px;'>*Ingrese solo numeros.</p>",
                min:"<p class='text-danger' style='font-size: 12px;'>*Indice de salinidad invalido, solo se aceptan numeros positivos.</p>"
            },
            inputConduc:{
                required: "<p class='text-danger' style='font-size: 12px;'>*Ingrese indice de conductividad electrica.</p>",
                maxlength: "<p class='text-danger' style='font-size: 12px;'>*Indice de conductividad electrica invalido, revasaste el limite de digitos.</p>",
                number: "<p class='text-danger' style='font-size: 12px;'>*Ingrese solo numeros.</p>",
                min:"<p class='text-danger' style='font-size: 12px;'>*Indice de conductividad electrica invalido, solo se aceptan numeros positivos.</p>"
            }
        }
    });
});


/**Registro de agroquimicos validaciones */
jQuery(function(){
    $.validator.addMethod( "alphanumeric", function( value, element ) {
        return this.optional( element ) || /^[A-za-z0-9\sñ\s\sáéíóúñÑÁÉÍÓÚüÜ]+$/i.test( value );
    }, "<p class='text-danger' style='font-size: 12px;'>*Ingrese sólo letras y numros.</p>" );
    $.validator.addMethod('decimal', function(value, element) {
        return this.optional(element) || /^((\d+(\\.\d{0,2})?)|((\d*(\.\d{1,2}))))$/.test(value);
      }, "<p class='text-danger' style='font-size: 12px;'>*Ingrese el formato correcto 0.00.</p>" );
   /*$.validator.addMethod("dateBefore", function (value, element, params) {
        
        var end = $(params);
        if (!end.data('validation.running')) {
            $(element).data('validation.running', true);
            setTimeout($.proxy(

            function () {
                this.element(end);
            }, this), 0);
           
            setTimeout(function () {
                $(element).data('validation.running', false);
            }, 0);
        }
        return this.optional(element) || this.optional(end[0]) || new Date(value) <= new Date(end.val());

    }, "<p class='text-danger' style='font-size: 12px;'>*La fecha deber ser anterior a la fecha de finalización correspondiente.</p>");
    
    $.validator.addMethod("dateAfter", function (value, element, params) {
        var start = $(params);
        if (!start.data('validation.running')) {
            $(element).data('validation.running', true);
            setTimeout($.proxy(

            function () {
                this.element(start);
            }, this), 0);
            setTimeout(function () {
                $(element).data('validation.running', false);
            }, 0);
        }
        return this.optional(element) || this.optional(start[0]) || new Date(value) >= new Date($(params).val());

    },  "<p class='text-danger' style='font-size: 12px;'>*La fecha debe ser posterior a la fecha de inicio correspondiente.</p>");
    */

    jQuery(".reg_agro").validate({
            rules:{
                name_agroq:{
                    required: true,
                    alphanumeric: true
                },
                precio:{
                    required: true,
                    number: true,
                    min: 0,
                    maxlength: 11,
                    decimal: true
                },
                cantidad:{
                    required: true,
                    number: true,
                    min: 0,
                    maxlength: 11
                },
                dosis:{
                    required: true,
                    number: true,
                    min: 0,
                    maxlength: 4,
                    decimal: true

                },
                fecha_inicio:{
                    required: true
                },
                fecha_fin:{
                    required: true
                },
                existencia:{
                    required: true,
                    number: true,
                    min: 0,
                    maxlength: 4
                }
            
            },
            messages:{
                name_agroq:{
                    required: "<p class='text-danger' style='font-size: 12px;'>*Ingrese un nombre comercial.</p>",
                    alphanumeric:"<p class='text-danger' style='font-size: 12px;'>*Ingrese sólo letras y numros.</p>"
                },
                precio:{
                    required:"<p class='text-danger' style='font-size: 12px;'>*Ingrese un precio.</p>",
                    number:"<p class='text-danger' style='font-size: 12px;'>*Ingrese sólo números.</p>",
                    maxlength:"<p class='text-danger' style='font-size: 12px;'>*Ingrese un precio válido, no mayor a 11 dígitos.</p>",
                    min:"<p class='text-danger' style='font-size: 12px;'>*Ingrese un precio valido, solo se aceptan precios positivos .</p>"
                },
                cantidad:{
                    required:"<p class='text-danger' style='font-size: 12px;'>*Ingrese una cantidad.</p>",
                    number:"<p class='text-danger' style='font-size: 12px;'>*Ingrese solo números.</p>",
                    min:"<p class='text-danger' style='font-size: 12px;'>*Ingrese una cantidad valida, solo se aceptan cantidades positivas.</p>",
                    maxlength:"<p class='text-danger' style='font-size: 12px;'>*Ingrese una cantidad válida, no mayor a 11 dígitos.</p>"
                    
                },
                dosis:{
                    required:"<p class='text-danger' style='font-size: 12px;'>*Ingrese una dosis .</p>",
                    number:"<p class='text-danger' style='font-size: 12px;'>*Ingrese sólo números.</p>",
                    maxlength:"<p class='text-danger' style='font-size: 12px;'>*Ingrese una dosis valida, solo se aceptan 4 dígitos.</p>",
                    min:"<p class='text-danger' style='font-size: 12px;'>*Ingrese una dosis válida, solo se aceptan cantidades positivas .</p>"
                },
                fecha_inicio:{
                    required: "<p class='text-danger' style='font-size: 12px;'>*Ingrese una fecha de inicio.</p>"
                },
                fecha_fin:{
                    required: "<p class='text-danger' style='font-size: 12px;'>*Ingrese una fecha de finalizacion.</p>"
                },
                existencia:{
                    required:"<p class='text-danger' style='font-size: 12px;'>*Ingrese una cantidad.</p>",
                    number:"<p class='text-danger' style='font-size: 12px;'>*Ingrese sólo números.</p>",
                    maxlength:"<p class='text-danger' style='font-size: 12px;'>*Ingrese una cantidad válida, solo se aceptan 4 dígitos.</p>",
                    min:"<p class='text-danger' style='font-size: 12px;'>*Ingrese una cantidad válida, solo se aceptan cantidades positivas .</p>"
                }

            }
    });
});



/**Validacion fecha inicio-fecha final */
jQuery( function() {
    var from = $( "#inputFechaInicio" )
        .datepicker({
          dateFormat: "yy-mm-dd",
          minDate: new Date(),
          autoclose: true
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#inputFechaFinal" ).datepicker({
        dateFormat: "yy-mm-dd"
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
  
    function getDate( element ) {
      var date;
      var dateFormat = "yy-mm-dd";
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
  
      return date;
    }
  });


     
/**Registro de gastos validaciones */

jQuery(function(){
    $.validator.addMethod( "alphanumeric", function( value, element ) {
        return this.optional( element ) || /^[A-za-z0-9\sñ\s\sáéíóúñÑÁÉÍÓÚüÜ]+$/i.test( value );
    }, "<p class='text-danger' style='font-size: 12px;'>*Ingrese sólo letras y numeros.</p>" );
    jQuery(".reg_gasto").validate({
        rules:{
            Concepto:{
                required: true,
                alphanumeric: true
            },
            Precio:{
                required: true,
                number: true,
                min: 0,
                maxlength: 11,
                decimal: true
            },
            Fecha:{
                required: true,
                date: true,
            }
        },
        messages:{
            Concepto:{
                required: "<p class='text-danger' style='font-size: 12px;'>*Ingrese el concepto del gasto.</p>",
                alphanumeric: "<p class='text-danger' style='font-size: 12px;'>*Ingrese solo letras o números.</p>"
            },
            Precio:{
                required:"<p class='text-danger' style='font-size: 12px;'>*Ingrese un precio.</p>",
                number:"<p class='text-danger' style='font-size: 12px;'>*Ingrese sólo números.</p>",
                maxlength:"<p class='text-danger' style='font-size: 12px;'>*Ingrese un precio valido, solo se aceptan 11 dígitos.</p>",
                min:"<p class='text-danger' style='font-size: 12px;'>*Ingrese un precio valido, solo se aceptan precios positivos .</p>"
            },
            Fecha:{
                required: "<p class='text-danger' style='font-size: 12px;'>*Ingrese una fecha.</p>",
                date: "<p class='text-danger' style='font-size: 12px;'>*Ingrese una fecha válida.</p>",
                max: "<p class='text-danger' style='font-size: 12px;'>*Ingrese una fecha válida.</p>"
            }
        }
    });
});
jQuery(function(){
    $("#inputFechaGasto").datepicker({
        dateFormat: "yy-mm-dd",
        numberOfMonths: 1,
        minDate: new Date() 
    });
});
jQuery(function(){
    $("#inputFechaG").datepicker({
        dateFormat: "yy-mm-dd",
        numberOfMonths: 1,
        minDate: new Date() 
    });
});
/**Modal calendario  */

    jQuery("#event-form").validate({
        rules:{
            titulo:{
                required: true,
                alphanumeric: true
            },
            fecha_inicio:{
                required: true
            },
            fecha_final:{
                required: true

            },
            hora_inicio:{
                required: true
                
            },
            hora_final:{
                required: true
               
            },
            descripcion:{
                required: true
            }
        },
        messages:{
            titulo:{
                required: "<p class='text-danger' style='font-size: 12px;'>*Ingrese un titulo de evento.</p>",
                alphanumeric: "<p class='text-danger' style='font-size: 12px;'>*Solo se aceptan letras y números.</p>"
            },
            fecha_inicio:{
                required: "<p class='text-danger' style='font-size: 12px;'>*Seleccione una fecha de inicio.</p>"
            },
            fecha_final:{
                required: "<p class='text-danger' style='font-size: 12px;'>*Seleccione una fecha de finalización.</p>"
            },
            hora_final:{
                required: "<p class='text-danger' style='font-size: 12px;'>*Seleccione una hora de finalización.</p>"
            },
            descripcion:{
                required: "<p class='text-danger' style='font-size: 12px;'>*Ingrese una descripcion del evento.</p>"
            }
        }
    });

