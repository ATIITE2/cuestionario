let cntrlt=[];

cntrlt [0] =0;
cntrlt [1] =0;
cntrlt [2] =0;

$(document).ready(function() {
    $("#cuestionario-form")
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
            let valores = new Object; 
            valores =guardarDatos();

            console.log("Dato 2: "+ valores['guardo']);

            if (valores['guardo'] === false) alert('Algo raro pasó por aquí.');

            alert(valores['msj']);
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
    
    const form = $("#cuestionario-form");
    var obj= new Object;

    obj=cargaRespQuiz(indice); 

    if(indice === 0){
        cntrlt[1] =0;
        cntrlt[2] =0;
    }

    if(indice === 1) {
        cntrlt[0] =0;
        cntrlt[2] =0;
    }

    if(indice === 2) {
        cntrlt[0] =0;
        cntrlt[1] =0;
    }

    obj['indice'] = indice;

  
    if (form.get(0).checkValidity()) {
        $.ajax({
            type: "POST",
            url: "posts/revisa_reg.php",
            data: obj,
            cache: false,
            success: function(data) {
                reinicia_revision();
                if(data.success === false) {
                    cntrlt[indice]=0;
                    if(data.error === false) {
                        $("#result").attr("class", "alert alert-danger").html(data.mssg);          
                    }
                    else {
                        $(data.error).addClass("is-invalid").focus();
                        if (["._country","._daily_budget","._checado"].includes(data.error)) {
                            $(data.error+"_title").html(data.mssg).addClass("invalid-msg");
                        }
                        else {
                            $(data.error).next().html(data.mssg).addClass("del-msj");
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

    return (cntrlt[indice] === 1) ? true : false;
}


function cargaRespQuiz(indice){
    var list= new Object;

    if([0,-1].includes(indice)){
        list['nombre'] = $("#nombre").val();
        list['email'] = $("#email").val();
        list['password'] = $("#password").val();

        list['country']="";
        $("#country li").each(function(){
            if($(this).attr('class') === "selected") {
                list['country']= $(this).attr('value');
            }  
        });

        list['daily_budget']="";
        $("#daily_budget li").each(function(){
            if($(this).attr('class') === "selected") {
                list['daily_budget']= $(this).attr('value');
            }  
        });

        // console.log("Valor de la lista 1: "+obj['country']);
        // console.log("Valor de la lista 2: "+obj['daily_budget']);

        list['checado'] = ($("#agree-term").is(':checked')) ? 1 : 0;

        // console.log("Valor del check: "+obj['checado']);
    }
    if([1,-1].includes(indice)){
        list['tipo_cuarto'] = $("input[name='room_type']:checked").val();

        // console.log("Valor del radio: "+obj['tipo_cuarto']);
    }
    if([2,-1].includes(indice)){
        list['room_description'] = $("#room_description").val();
    }

    return list;
}

function reinicia_revision(){
    $(".del-msj").html("");
    $(".is-invalid").removeClass("is-invalid");
    $(".invalid-msg").removeClass("invalid-msg");
    $("._country_title").html("País");
    $("._daily_budget_title").html("Ingresos mensuales");
    $("._checado_title").html("<span><span></span></span>Suscríbase al correo de noticias");
}

function guardarDatos(){
    var obj= new Object;
    obj=cargaRespQuiz(-1); 
    obj['indice']=-1;

    $.ajax({
        type: "POST",
        url: "posts/guarda_reg.php",
        data: obj,
        cache: false,
        success: function(data) {

            var resp = new Object
            if(data.success === true) {
                resp['msj']="EXITO! "+data.msj;
            }
            else {
                resp['msj']="Chale! Hubo un error "+data.msj;
                /* $("#result").attr("class", "alert alert-success alert-dismissible fade show");
                $("#result").attr("role", "alert");
                $("#result").html("Que chido liro."); */
            }
            resp['guardo']=data.success;
            console.log("dato: "+resp['guardo']);
            return resp;
        }
    });
}