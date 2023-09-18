let cntrlt=[];

cntrlt [0] =0;
cntrlt [1] =0;
cntrlt [2] =0;

$(document).ready(function() {
    $("#signup-form")
    .steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "fade",
        labels: {
            previous : 'Anterior',
            next : 'Siguiente',
            finish : 'Enviar',
            current : ''
        },
        titleTemplate : '<h3 class="title">#title#</h3>',

        // Triggered when clicking the Previous/Next buttons
        onStepChanging: function(event, currentIndex, newIndex) {
            
            return validaDatos(currentIndex);
        },

        onFinishing: function(event, currentIndex) {

            return validaDatos(currentIndex);
        },

        onFinished: function (event, currentIndex)
        {
            let valido= validaDatos(currentIndex);
            if (valido) alert('Guardado.');
        }
    });

    $('#country').parent().append('<ul id="newcountry" class="select-list" name="country"></ul>');
    $('#country option').each(function(){
        $('#newcountry').append('<li value="' + $(this).val() + '">'+$(this).text()+'</li>');
    });
    $('#country').remove();
    $('#newcountry').attr('id', 'country');
    $('#country li').first().addClass('init');
    $("#country").on("click", ".init", function() {
        $(this).closest("#country").children('li:not(.init)').toggle();
    });
    
    var allOptions = $("#country").children('li:not(.init)');
    $("#country").on("click", "li:not(.init)", function() {
        allOptions.removeClass('selected');
        $(this).addClass('selected');
        $("#country").children('.init').html($(this).html());
        allOptions.toggle();
    });

    $('#daily_budget').parent().append('<ul id="newdaily_budget" class="select-list" name="daily_budget"></ul>');
    $('#daily_budget option').each(function(){
        $('#newdaily_budget').append('<li value="' + $(this).val() + '">'+$(this).text()+'</li>');
    });
    $('#daily_budget').remove();
    $('#newdaily_budget').attr('id', 'daily_budget');
    $('#daily_budget li').first().addClass('init');
    $("#daily_budget").on("click", ".init", function() {
        $(this).closest("#daily_budget").children('li:not(.init)').toggle();
    });
    
    var DailyOptions = $("#daily_budget").children('li:not(.init)');
    $("#daily_budget").on("click", "li:not(.init)", function() {
        DailyOptions.removeClass('selected');
        $(this).addClass('selected');
        $("#daily_budget").children('.init').html($(this).html());
        DailyOptions.toggle();
    });

});


function validaDatos(indice){
    
    const form = $("#signup-form");
    var obj= new Object;
    obj['indice'] = indice;

    if(indice === 0){
        obj['nombre'] = $("#nombre").val();
        obj['email'] = $("#email").val();
        obj['password'] = $("#password").val();
        obj['country'] = $("#country").val();
        obj['daily_budget'] = $("#daily_budget").val();

        cntrlt[1] =0;
        cntrlt[2] =0;
    }

    if(indice === 1) {
        obj['tipo_cuarto'] = $("input[name='room_type']:checked").val();

        cntrlt[0] =0;
        cntrlt[2] =0;
    }

    if(indice === 2) {
        obj['room_description'] = $("#room_description").val();

        cntrlt[0] =0;
        cntrlt[1] =0;
    }
  
    if (form.get(0).checkValidity()) {
        $.ajax({
            type: "POST",
            url: "posts/registrar.php",
            data: obj,
            cache: false,
            success: function(data) {
                $(".del-msj").html("");
                if(data.success === false) {
                    cntrlt[indice]=0;
                    if(data.error === false) {
                        $("#result").attr("class", "alert alert-danger").html(data.mssg);          
                    }
                    else {
                        if(data.error === "tipo_cuarto") {
                            $(".form-radio-group").addClass("is-invalid").focus();
                            $(".form-radio-group").next().html(data.mssg).addClass("del-msj");
                        }
                        else {
                            $("#"+data.error).addClass("is-invalid").focus();
                            $("#"+data.error).next().html(data.mssg).addClass("del-msj");
                        }     
                    }
                }
                else {
                    cntrlt[indice]=1;
                    /* $("#result").attr("class", "alert alert-success alert-dismissible fade show");
                    $("#result").attr("role", "alert");
                    $("#result").html("Que chido liro."); */
                }
            }
        });
    }
    else {
        $("[data-step='"+indice+"']").focus();
    }

    form.addClass("was-validated");

    let valor = (cntrlt[indice] === 1) ? true : false;
    return valor;
}

