$(document).ready(function () {
    $('#register').hide();
    $('#create_account').click(function () {
        $('#register').show();
        $('#login').hide();
    });
    var height = ($(window).height() - 90);

    $('.tamaño').height(height);

    $(".state").autocomplete({
        source: "../../config/autocomplete.php",
        minLength: 1
    });

    $('#inputTipo').hide();
    $('#inputCausaP').hide();
    $('#inputCausaE').show();

    $("[name='origin']").change(function(){
        var selectedText = $("#origin option:selected").html();
        if(selectedText == 'Enfermedad'){
            $('#inputCausaE').show();
            $('#inputCausaP').hide();
            $('#inputTipo').hide();
        }else if(selectedText == 'Plaga'){
            $('#inputCausaP').show();
            $('#inputCausaE').hide();
            $('#inputTipo').hide();
        }else if(selectedText == 'Nutricion'){
            $('#inputTipo').show();
            $('#inputCausaP').hide();
            $('#inputCausaE').hide();
        }
    });

});