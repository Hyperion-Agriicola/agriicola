


/*/*Login validation*/

jQuery(function(){
    $.validator.addMethod('EMAIL',function(value, element){
        return this.optional(element) || /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.(?:[A-Z]{2}|com|org|net|edu|gov|mil|biz|info|mobi|name|aero|asia|jobs|museum|es)$/i.test(value);
    },"<span><p class='text-danger' style='font-size: 12px;'>*Ingrese una dirección de correo electronico válida.</p></span>");
        
    jQuery("#form-vali").validate({
        rules:{
            email:{
                required: true,
                EMAIL: true,
                email: true
            },
            pass:{
                required: true,
                maxlength: 6,
                minlength: 6
            }
        },
        messages:{
            email:{
                required:"<span><p class='text-danger' style='font-size: 12px;'>*Ingrese una dirección de correo electronico.</p></span>",
                EMAIL:"<span><p class='text-danger' style='font-size: 12px;'>*Ingrese una dirección de correo electronico válida.</p></span>",
                email: "<span><p class='text-danger' style='font-size: 12px;'>*Ingrese una dirección de correo electronico válida.</p></span>"
            },
            pass:{
                required: "<span><p class='text-danger' style='font-size: 12px;'>*Ingrese su contraseña.</p></span>",
                maxlength:"<span><p class='text-danger' style='font-size: 12px;'>*Contraseña invalida, solo se aceptan 6 caracteres.</p></span>",
                minlength:"<span><p class='text-danger' style='font-size: 12px;'>*Contraseña invalida, solo se aceptan 6 caracteres.</p></span>"
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
    return this.optional(element) || /^(?=.*\d)(?=.*[a-zñ])(?=.*[A-ZÑ]).{6}$/i.test(value);
},"<span><p class='text-danger' style='font-size: 12px;'>*La contraseña debe contener 6 caracteres con letras minúsculas, mayúsculas y al menos un número.</p></span>");
$.validator.addMethod('EMAIL',function(value, element){
    return this.optional(element) || /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.(?:[A-Z]{2}|com|org|net|edu|gov|mil|biz|info|mobi|name|aero|asia|jobs|museum|es)$/i.test(value);
},"<span><p class='text-danger' style='font-size: 12px;'>*Ingrese una dirección de correo electronico válida.</p></span>");
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
                        email: true,
                    },
                     userCompany:{
                        required: true,
                     },
                     userCity: {
                         required: true
                     },
                        remote:{
                        url:  "localidades.php" /* Cambiar nombre del archivo*/
                        },
                     userState:{
                         required: true
                     },
                        remote:{
                            url:"../config/searching/town.php", /* Cambiar nombre del archivo*/
                            type: "post"
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
                        PASSWORD: true
                     }
            },
            messages: {
                    userName: {
                            required: "<span><p class='text-danger' style='font-size: 12px;'>*Ingrese nombre.</p></span>"
                    },
                    userLastName:{
                        required: "<span><p class='text-danger' style='font-size: 12px;'>*Ingrese apellidos.</p></span>"
                    },
                    phoneNumber:{
                        number: "<span><p class='text-danger' style='font-size: 12px;'>*Ingrese sólo números.</p></span>",
                        maxlength: "<span><p class='text-danger' style='font-size: 12px;'>*No debe ingresar más de 10 números.</p></span>",
                        minlength: "<span><p class='text-danger' style='font-size: 12px;'>*No debe ingresar menos de 10 números.</p></span>",
                        required: "<span><p class='text-danger' style='font-size: 12px;'>*Ingrese un número teléfonico.</p></span>"
                    },
                    userEmail:{
                        EMAIL: "<span><p class='text-danger' style='font-size: 12px;'>*Ingrese una dirección de correo electronico válida.</p></span>",
                        email: "<span><p class='text-danger' style='font-size: 12px;'>*Ingrese una dirección de correo electronico válida.</p></span>",
                        required: "<span><p class='text-danger' style='font-size: 12px;'>*Ingrese una dirección de correo electrónico.</p></span>",
                        remote: "<span><p class='text-danger' style='font-size: 12px;'>*La dirección de correo electrónico ya existe.</p></span>",
                        url: "<span><p class='text-danger' style='font-size: 12px;'>*La dirección de correo electrónico ya existe.</p></span>"
                    },
                    userCompany:{
                        required: "<span><p class='text-danger' style='font-size: 12px;'>*Ingrese el nombre de su empresa.</p></span>",
                    },
                    userCity:{
                        required: "<span><p class='text-danger' style='font-size: 12px;'>*Ingrese una ciudad válida.</p></span>",
                        remote:"<span><p class='text-danger' style='font-size: 12px;'>*La ciudad no existe, ingrese una ciudad valida .</p></span>"
                    },
                    userState:{
                        required: "<span><p class='text-danger' style='font-size: 12px;'>*Ingrese un estado válido.</p></span>",
                        remote:"<span><p class='text-danger' style='font-size: 12px;'>*El no existe, ingrese un estado valido .</p></span>"
                    },
                    userPass1:{
                        required: "<span><p class='text-danger' style='font-size: 12px;'>*Ingrese una contraseña.</p></span>"
                    },
                    userPass2:{
                        required:"<span><p class='text-danger' style='font-size: 12px;'>*Confirme la contraseña.</p></span>",
                        equalTo: "<span><p class='text-danger' style='font-size: 12px;'>*Las contraseñas no coinciden.</p></span>"
                    }
            }
    });
 });          
 /*registro de cultivos validaciones*/

 jQuery(function(){
    $.validator.addMethod( "alphanumeric", function( value, element ) {
        return this.optional( element ) || /^[A-Za-z0-9\sñ\s\sáéíóúñÑÁÉÍÓÚüÜ]+$/i.test( value );
    }, "<p class='text-danger' style='font-size: 12px;'>*Ingrese sólo letras y numros.</p>" );
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
                date: true,
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
                required: "<p class='text-danger' style='font-size: 12px;'>*Ingrese un nombre, puede incluir numeros .</p>",
                alphanumeric: "<p class='text-danger' style='font-size: 12px;'>*Ingrese solo letras y numeros.</p>"
            },
            hectares:{
                required: "<p class='text-danger' style='font-size: 12px;'>*Ingrese hectareas.</p>",
                number:"<p class='text-danger' style='font-size: 12px;'>*Ingrese solo numeros.</p>",
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
                date: "<p class='text-danger' style='font-size: 12px;'>*Ingrese una fecha valida.</p>",
                max: "<p class='text-danger' style='font-size: 12px;'>*Ingrese una fec valida.</p>"
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
    $.validator.addMethod("dateBefore", function (value, element, params) {
        
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
        return this.optional(element) || this.optional(end[0]) || new Date(value) < new Date(end.val());

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
        return this.optional(element) || this.optional(start[0]) || new Date(value) > new Date($(params).val());

    }, "<p class='text-danger' style='font-size: 12px;'>*La fecha debe ser posterior a la fecha de inicio correspondiente.</p>");
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
                    dateBefore: "#inputFechaFinal",
                    required: true,
                    date: true
                    
    
                  
                },
                fecha_fin:{
                    dateAfter: "#inputFechaInicio",
                    required: true,
                    date: true
                    
                  
            

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
                    number:"<p class='text-danger' style='font-size: 12px;'>*Ingrese solo numeros.</p>",
                    min:"<p class='text-danger' style='font-size: 12px;'>*Ingrese una cantidad valida, solo se aceptan cantidades positivas.</p>",
                    maxlength:"<p class='text-danger' style='font-size: 12px;'>*Ingrese una cantidad valida, no mayor a 11 dígitos.</p>"
                    
                },
                dosis:{
                    required:"<p class='text-danger' style='font-size: 12px;'>*Ingrese una dosis .</p>",
                    number:"<p class='text-danger' style='font-size: 12px;'>*Ingrese sólo números.</p>",
                    maxlength:"<p class='text-danger' style='font-size: 12px;'>*Ingrese una dosis valida, solo se aceptan 4 digitos.</p>",
                    min:"<p class='text-danger' style='font-size: 12px;'>*Ingrese una dosis valida, solo se aceptan cantidades positivas .</p>"
                },
                fecha_inicio:{
                    required: "<p class='text-danger' style='font-size: 12px;'>*Ingrese una fecha de inicio.</p>"
                },
                fecha_fin:{
                    required: "<p class='text-danger' style='font-size: 12px;'>*Ingrese una fecha de finalización.</p>"
                },
                existencia:{
                    required:"<p class='text-danger' style='font-size: 12px;'>*Ingrese una cantidad.</p>",
                    number:"<p class='text-danger' style='font-size: 12px;'>*Ingrese sólo números.</p>",
                    maxlength:"<p class='text-danger' style='font-size: 12px;'>*Ingrese una cantidad valida, solo se aceptan 4 digitos.</p>",
                    min:"<p class='text-danger' style='font-size: 12px;'>*Ingrese una cantidad valida, solo se aceptan cantidades positivas .</p>"
                }

            }
    });
});
/**Registro de gastos validaciones */

jQuery(function(){
    $.validator.addMethod( "alphanumeric", function( value, element ) {
        return this.optional( element ) || /^[A-za-z0-9\sñ\s\sáéíóúñÑÁÉÍÓÚüÜ]+$/i.test( value );
    }, "<p class='text-danger' style='font-size: 12px;'>*Ingrese sólo letras y numros.</p>" );
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
                alphanumeric: "<p class='text-danger' style='font-size: 12px;'>*Ingrese solo letras o numeros.</p>"
            },
            Precio:{
                required:"<p class='text-danger' style='font-size: 12px;'>*Ingrese un precio.</p>",
                number:"<p class='text-danger' style='font-size: 12px;'>*Ingrese sólo números.</p>",
                maxlength:"<p class='text-danger' style='font-size: 12px;'>*Ingrese un precio valido, solo se aceptan 11 digitos.</p>",
                min:"<p class='text-danger' style='font-size: 12px;'>*Ingrese un precio valido, solo se aceptan precios positivos .</p>"
            },
            Fecha:{
                required: "<p class='text-danger' style='font-size: 12px;'>*Ingrese una fecha.</p>",
                date: "<p class='text-danger' style='font-size: 12px;'>*Ingrese una fecha valida.</p>",
                max: "<p class='text-danger' style='font-size: 12px;'>*Ingrese una fecha valida.</p>"
            }
        }
    });
});