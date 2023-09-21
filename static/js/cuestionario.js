let cntrlt=[];

cntrlt [0] =0;
cntrlt [1] =0;
cntrlt [2] =0;
cntrlt [3] =0;

$(document).ready(function() {
    $("#cuestionario-form")
    .steps({
        headerTag: "h5",
        bodyTag: "fieldset",
        transitionEffect: "fade",
        labels: {
            previous : 'Anterior',
            next : 'Siguiente',
            finish : 'Enviar',
            current : ''
        },
        titleTemplate : '<h5 class="title">#title#</h5>',

        // Triggered when clicking the Previous/Next buttons
        onStepChanging: function(event, currentIndex, newIndex) {
            
            /*var d=validaDatos(currentIndex);
            console.log("¿aqui que onda? "+d); */
            
            validaDatos(currentIndex);

            return (cntrlt[currentIndex] === 1) ? true : false;
        },

        onFinishing: function(event, currentIndex) {

            validaDatos(currentIndex);

            return (cntrlt[currentIndex] === 1) ? true : false;
        },

        onFinished: function (event, currentIndex)
        {
            guardarDatos(-1);
            $("#cuestionario-form-t-0").click();
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

    $('#genero').parent().append('<ul id="newgenero" class="select-list" name="genero"></ul>');
    $('#genero option').each(function(){
        $('#newgenero').append('<li value="' + $(this).val() + '">'+$(this).text()+'</li>');
    });
    $('#genero').remove();
    $('#newgenero').attr('id', 'genero');
    $('#genero li').first().addClass('init');
    $("#genero").on("click", ".init", function() {
        $(this).closest("#genero").children('li:not(.init)').toggle();
    });
    
    var DailyOptions = $("#genero").children('li:not(.init)');
    $("#genero").on("click", "li:not(.init)", function() {
        DailyOptions.removeClass('selected');
        $(this).addClass('selected');
        $("#genero").children('.init').html($(this).html());
        DailyOptions.toggle();
    });


    function validaDatos(indice){
    
        const form = $("#cuestionario-form");
        var obj= new Object;
    
        obj=cargaRespQuiz(indice); 
    
        var i;
        for(i=0;i<=3;i++){
            if(i !== indice) cntrlt[i] = 0;
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
                            if (["._country","._genero","._checado"].includes(data.error)) {
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
    
            list['genero']="";
            $("#genero li").each(function(){
                if($(this).attr('class') === "selected") {
                    list['genero']= $(this).attr('value');
                }  
            });
    
            // console.log("Valor de la lista 1: "+obj['country']);
            // console.log("Valor de la lista 2: "+obj['genero']);
    
            list['checado'] = ($("#agree-term").is(':checked')) ? 1 : 0;
    
            // console.log("Valor del check: "+obj['checado']);
        }

        if([1,-1].includes(indice)){
            list['tipo_cuarto'] = $("input[name='room_type']:checked").val();
        }

        if([2,-1].includes(indice)){
            list['tipo_cuarto2'] = $("input[name='room_type2']:checked").val();

        }

        if([3,-1].includes(indice)){
            list['room_description'] = $("#room_description").val();
        }
    
        return list;
    }

    function reinicia_revision(){
        $(".del-msj").html("");
        $(".is-invalid").removeClass("is-invalid");
        $(".invalid-msg").removeClass("invalid-msg");
        $("._country_title").html("País");
        $("._genero_title").html("Género");
        $("._checado_title").html("<span><span></span></span>Suscríbase al correo de noticias");
    }

    function guardarDatos(n){
        var obj= new Object;
        obj=cargaRespQuiz(n); 
        obj['indice']=n;
    
        $.ajax({
            type: "POST",
            url: "posts/guarda_reg.php",
            data: obj,
            cache: false,
            success: function(data) {
                var titulo = "";
                var resp = false;
                if(data.success === true) {
                    titulo="¡EXITO!";
                    resp=true;
                    limpiaCampos();
                }
                else {
                    titulo="Error al guardar respuestas ...";
                    /* $("#result").attr("class", "alert alert-success alert-dismissible fade show");
                    $("#result").attr("role", "alert");
                    $("#result").html("Que chido liro."); */
                }
                $("#modal_uno_titulo").html(titulo);
                $("#modal_uno_msj").html(data.msj);
                $("#modal_uno").modal('show');
                
                //crearMsj(msj);
                //resp=data.success;
                console.log("dato 1: "+resp);
                if(!resp) alert("Algo malo ocurrió.");
            }
        });
    }

    function limpiaCampos(){
        const form = $("#cuestionario-form");
        form[0].reset();

        $("#country li").each(function(){
            if($(this).attr('class') === "init") $(this).html(" ");
            $(this).removeClass("selected");
        });

        $("#genero li").each(function(){
            if($(this).attr('class') === "init") $(this).html(" ");
            $(this).removeClass("selected");
        });

        // Disable other Tabs  
        $('.done').removeClass('done').addClass('disabled');
    }

});
