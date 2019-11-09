


/*/*Loggin validation*/

$(function(){

    $("#emaill").keyup(function(){
            if(emailvalidate()){
                $("#emaill").css("border", "1px solid #228B22");
                $("#mess1").html("<p class='text-success' style='font-size: 12px;'>Dirección de correo electrónico válida.</p>");
            }else{
                $("#emaill").css("border", "1px solid red");
                $("#mess1").html("<p class='text-danger' style='font-size: 12px;'>*Dirección de correo electrónico inválida.</p>");
            }
    });
    $("#password").keyup(function(){
        if(validatePassword()){
            
            $("#password").css("border","1px solid #228B22");
            $("#pass1").html("<p class='text-success' style='font-size: 12px;'>Contraseña válida.</p>");
        }else{
            $("#password").css("border","1px solid red");
            $("#pass1").html("<p class='text-danger' style='font-size: 12px;'>*Contraseña inválida.</p>");
        }
        buttonState();
    });
   
        
});
function emailvalidate(){

    var email=$("#emaill").val();
		// use reular expression
		 var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
		 if(reg.test(email)){
		 	return true;
		 }else{
		 	return false;
		 }
}
function validatePassword(){
    var pass=$("#password").val();
    if(pass.length > 5){
        return true;
    }else{
        return false;
}
}
/*validacion jquery validate registro*/

jQuery(function() {
    $.validator.addMethod( "letterswithbasicpunc", function( value, element ) {
        return this.optional( element ) || /^[a-zñ.\s´]+$/i.test( value );
    }, "<p class='text-danger' style='font-size: 12px;'>*Ingrese sólo letras.</p>" );
$.validator.addMethod("PASSWORD",function(value,element){
    return this.optional(element) || /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6}$/i.test(value);
},"<span><p class='text-danger' style='font-size: 12px;'>*La contraseña debe contener 6 caracteres con letras minúsculas, mayúsculas y al menos un número.</p></span>");
$.validator.addMethod("EMAIL",function(value,element){
    return this.optional(element) || /^[a-zA-Z0-9._-]+@[a-zA-Z-]+\.[a-zA-Z.]/i.test(value);
},"<span><p class='text-danger' style='font-size: 12px;'>*Ingresa una direccion email valida.</p></span>");
    jQuery( "#registro" ).validate({
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
                    remote: {
                        url: "check-username.php", /* Cambiar nombre del archivo*/
                        type: "post"
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
                            url:"localidades.php", /* Cambiar nombre del archivo*/
                            type: "post"
                        },
                     userPass1:{
                         required: true,
                        PASSWORD: true
                     },
                     userPass2:{
                        required: true,
                        equalTo: "#pass"
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
                        remote: "<span><p class='text-danger' style='font-size: 12px;'>*La dirección de correo electrónico ya existe.</p></span>"
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

 /*registrar cultivo validaciones*/




