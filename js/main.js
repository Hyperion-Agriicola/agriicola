$(document).ready(function () {
    $('#register').hide();
    $('#create_account').click(function () {
        $('#register').show();
        $('#login').hide();
    });
    var height = ($(window).height() - 90);

    $('.tamaño').height(height);

    $(".state").autocomplete({
        source: "http://localhost:8080/agriicola/config/searching/states.php",
        minLength: 1
    });

    $(".township").autocomplete({
        source: "http://localhost:8080/agriicola/config/searching/townships.php",
        minLength: 1
    });

    $(".town").autocomplete({
        source: "http://localhost:8080/agriicola/config/searching/town.php",
        minLength: 1
    });

    $('.inputTipo').show();
    $('.inputCausaP').hide();
    $('.inputCausaE').hide();

    $("[name='origin']").change(function () {
        var selectedText = $("inputAplicacion option:selected").html();
        if (selectedText == 'Nutriente') {
            console.log(selectedText);
            $('.inputCausaE').hide();
            $('.inputCausaP').hide();
            $('.inputTipo').show();
        } else if (selectedText == 'Plaga') {
            console.log(selectedText);
            $('.inputCausaP').show();
            $('.inputCausaE').hide();
            $('.inputTipo').hide();
        } else if (selectedText == 'Enfermedad') {
            console.log(selectedText);
            $('.inputTipo').hide();
            $('.inputCausaP').hide();
            $('.inputCausaE').show();
        }
    });

    $('#inputTipo2').show();
    $('#inputCausaP2').hide();
    $('#inputCausaE2').hide();

    $("[name='origin2']").change(function () {
        var selectedText = $("#inputAplicacion2 option:selected").html();
        if (selectedText == 'Nutriente') {
            console.log(selectedText);
            $('#inputCausaE2').hide();
            $('#inputCausaP2').hide();
            $('#inputTipo2').show();
        } else if (selectedText == 'Plaga') {
            console.log(selectedText);
            $('#inputCausaP2').show();
            $('#inputCausaE2').hide();
            $('#inputTipo2').hide();
        } else if (selectedText == 'Enfermedad') {
            console.log(selectedText);
            $('#inputTipo2').hide();
            $('#inputCausaP2').hide();
            $('#inputCausaE2').show();
        }
    });

        //Etiqueta de los campos range Suelo Natural

        var rangeOrganic = document.querySelector('#rangeOrganic');
        if (rangeOrganic) {
            var etiqueta1 = document.querySelector('#etiqueta1');
            if (etiqueta1) {
                etiqueta1.innerHTML = rangeOrganic.value;

                rangeOrganic.addEventListener('input', function () {
                    etiqueta1.innerHTML = rangeOrganic.value;
                }, false);
            }
        }

        var rangeZinc = document.querySelector('#rangeZinc');
        if (rangeZinc) {
            var etiqueta2 = document.querySelector('#etiqueta2');
            if (etiqueta2) {
                etiqueta2.innerHTML = rangeZinc.value;

                rangeZinc.addEventListener('input', function () {
                    etiqueta2.innerHTML = rangeZinc.value;
                }, false);
            }
        }

        var rangeNitrates = document.querySelector('#rangeNitrates');
        if (rangeNitrates) {
            var etiqueta3 = document.querySelector('#etiqueta3');
            if (etiqueta3) {
                etiqueta3.innerHTML = rangeNitrates.value;

                rangeNitrates.addEventListener('input', function () {
                    etiqueta3.innerHTML = rangeNitrates.value;
                }, false);
            }
        }

        var rangePhosphor = document.querySelector('#rangePhosphor');
        if (rangePhosphor) {
            var etiqueta4 = document.querySelector('#etiqueta4');
            if (etiqueta4) {
                etiqueta4.innerHTML = rangePhosphor.value;

                rangePhosphor.addEventListener('input', function () {
                    etiqueta4.innerHTML = rangePhosphor.value;
                }, false);
            }
        }

        var rangePota = document.querySelector('#rangePota');
        if (rangePota) {
            var etiqueta5 = document.querySelector('#etiqueta5');
            if (etiqueta5) {
                etiqueta5.innerHTML = rangePota.value;

                rangePota.addEventListener('input', function () {
                    etiqueta5.innerHTML = rangePota.value;
                }, false);
            }
        }

        var rangeMang = document.querySelector('#rangeMang');
        if (rangeMang) {
            var etiqueta6 = document.querySelector('#etiqueta6');
            if (etiqueta6) {
                etiqueta6.innerHTML = rangeMang.value;

                rangeMang.addEventListener('input', function () {
                    etiqueta6.innerHTML = rangeMang.value;
                }, false);
            }
        }

        var rangeCalc = document.querySelector('#rangeCalc');
        if (rangeCalc) {
            var etiqueta7 = document.querySelector('#etiqueta7');
            if (etiqueta7) {
                etiqueta7.innerHTML = rangeCalc.value;

                rangeCalc.addEventListener('input', function () {
                    etiqueta7.innerHTML = rangeCalc.value;
                }, false);
            }
        }

        var rangeCopper = document.querySelector('#rangeCopper');
        if (rangeCopper) {
            var etiqueta8 = document.querySelector('#etiqueta8');
            if (etiqueta8) {
                etiqueta8.innerHTML = rangeCopper.value;

                rangeCopper.addEventListener('input', function () {
                    etiqueta8.innerHTML = rangeCopper.value;
                }, false);
            }
        }

        var rangeAz = document.querySelector('#rangeAz');
        if (rangeAz) {
            var etiqueta9 = document.querySelector('#etiqueta9');
            if (etiqueta9) {
                etiqueta9.innerHTML = rangeAz.value;

                rangeAz.addEventListener('input', function () {
                    etiqueta9.innerHTML = rangeAz.value;
                }, false);
            }
        }

        var rangeBor = document.querySelector('#rangeBor');
        if (rangeBor) {
            var etiqueta10 = document.querySelector('#etiqueta10');
            if (etiqueta10) {
                etiqueta10.innerHTML = rangeBor.value;

                rangeBor.addEventListener('input', function () {
                    etiqueta10.innerHTML = rangeBor.value;
                }, false);
            }
        }

        var rangeMag = document.querySelector('#rangeMag');
        if (rangeMag) {
            var etiqueta11 = document.querySelector('#etiqueta11');
            if (etiqueta11) {
                etiqueta11.innerHTML = rangeMag.value;

                rangeMag.addEventListener('input', function () {
                    etiqueta11.innerHTML = rangeMag.value;
                }, false);
            }
        }

        var rangeOxygen = document.querySelector('#rangeOxygen');
        if (rangeOxygen) {
            var etiqueta12 = document.querySelector('#etiqueta12');
            if (etiqueta12) {
                etiqueta12.innerHTML = rangeOxygen.value;

                rangeOxygen.addEventListener('input', function () {
                    etiqueta12.innerHTML = rangeOxygen.value;
                }, false);
            }
        }

        //Calendario
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');

            var calendar = new Calendar(calendarEl, {
                plugins: [dayGridPlugin]
            });

            calendar.render();
        });

        //Tooltip noob
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });

        $(document).ready(function () {
            // Read value on page load
            $("#result b").html($("#customRange").val());

            // Read value on change
            $("#customRange").change(function () {
                $("#result b").html($(this).val());
            });
        });


        $("#myToast").toast({ delay: 3000 });
        $("#myToast").toast('show');

    
    });