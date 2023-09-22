let cntrlt=[];

cntrlt[0] =0;
cntrlt[1] =0;
cntrlt[2] =0;
cntrlt[3] =0;
cntrlt[4] =0;
cntrlt[5] =0;

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
    
    var OpcionesGenero = $("#genero").children('li:not(.init)');
    $("#genero").on("click", "li:not(.init)", function() {
        OpcionesGenero.removeClass('selected');
        $(this).addClass('selected');
        $("#genero").children('.init').html($(this).html());
        OpcionesGenero.toggle();
    });

    $("#genero").click(function(){
        var num;
        $("#genero li").each(function(){
            if($(this).attr('class') === "selected") {
                num= $(this).attr('value');
            }  
        });
        if(num == 3) $("#campo_genero").removeClass("hide").addClass("show"); 
        else {
            $("#campo_genero").removeClass("show").addClass("hide");
            $("#otro_genero").val("");
        }
      });



    function validaDatos(indice){
    
        const form = $("#cuestionario-form");
        var obj= new Object;
        obj=cargaRespQuiz(indice); 
    
        var i;
        for(i=0;i<=5;i++){
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
                            if (["._genero","._disc_fisica"].includes(data.error)) {
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
            list['nombres'] = $("#nombres").val();
            list['ap_paterno'] = $("#ap_paterno").val();
            list['ap_materno'] = $("#ap_materno").val();

            list['genero']=-1;
            $("#genero li").each(function(){
                if($(this).attr('class') === "selected") {
                    list['genero']= $(this).attr('value');
                }  
            });

            list['otro_genero'] = $("#otro_genero").val();
            list['municipio'] = $("#municipio").val();
            list['telefono'] = $("#telefono").val();
            list['email'] = $("#email").val();
    
            /* list['country']="";
            $("#country li").each(function(){
                if($(this).attr('class') === "selected") {
                    list['country']= $(this).attr('value');
                }  
            });
    
            list['checado'] = ($("#agree-term").is(':checked')) ? 1 : 0; */
        }

        if([1,-1].includes(indice)){
            var dp=$("input[name='discap_permanente']:checked").val();
            list['discap_permanente'] = ( dp!== undefined) ? dp : -1;

            list['disc_fisica'] = ($("#disc_fisica").is(':checked')) ? 1 : 0;
            list['disc_mental'] = ($("#disc_mental").is(':checked')) ? 1 : 0;
            list['disc_intelectual'] = ($("#disc_intelectual").is(':checked')) ? 1 : 0;
            list['disc_sensorial'] = ($("#disc_sensorial").is(':checked')) ? 1 : 0;

            var vpd=$("input[name='vinculo_persona_disc']:checked").val();
            list['vinculo_persona_disc'] = ( vpd!== undefined) ? dp : -1;

            list['nombre_asoc_agrup'] = $("#nombre_asoc_agrup").val();

        }

        if([2,-1].includes(indice)){

            list['barreras_retos'] = $("#barreras_retos").val();

            //list['tipo_cuarto2'] = $("input[name='room_type2']:checked").val();

        }

        if([3,-1].includes(indice)){
            list['incl_personas'] = ($("#incl_personas").is(':checked')) ? 1 : 0;
            list['foros_event'] =  ($("#foros_event").is(':checked')) ? 1 : 0;
            list['capacitar_pcd'] =  ($("#capacitar_pcd").is(':checked')) ? 1 : 0;
            list['sensib_disc'] =  ($("#sensib_disc").is(':checked')) ? 1 : 0;
            list['otra_propuesta'] =  ($("#otra_propuesta").is(':checked')) ? 1 : 0;
            list['otra_prop_txt'] =  ($("#otra_prop_txt").is(':checked')) ? 1 : 0;

        }
    
        return list;
    }

    function reinicia_revision(){
        $(".del-msj").html("");
        $(".is-invalid").removeClass("is-invalid");
        $(".invalid-msg").removeClass("invalid-msg");
        $("._genero_title").html("Género");

        /* $("._country_title").html("País");
        $("._checado_title").html("<span><span></span></span>Suscríbase al correo de noticias"); */
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

function muestraOpciones1(n){

    if(n === 0) {
        $("#tipo_discap").removeClass("hide").addClass("show");
        $("#especif_vinculo").removeClass("show").addClass("hide");

        $('[name="vinculo_persona_disc"]').prop('checked', false);
        $("#campo_asociacion").removeClass("show").addClass("hide");
        $("#nombre_asoc_agrup").val("");
    }

    if(n === 1){
        $("#especif_vinculo").removeClass("hide").addClass("show");
        $("#tipo_discap").removeClass("show").addClass("hide");

        $("#disc_fisica").prop('checked', false);
        $("#disc_mental").prop('checked', false);
        $("#disc_intelectual").prop('checked', false);
        $("#disc_sensorial").prop('checked', false);
    }
  }


  function muestraCampo1(num){
        
    if(num === 1) $("#campo_asociacion").removeClass("hide").addClass("show"); 
    else {
        $("#campo_asociacion").removeClass("show").addClass("hide");
        $("#nombre_asoc_agrup").val("");
    }
  }

  function muestraCampo2(num){
        
    if(num === 1) $("#campo_otra_propuesta").removeClass("hide").addClass("show"); 
    else {
        $("#campo_otra_propuesta").removeClass("show").addClass("hide");
        $("#otra_prop_txt").val("");
    }
  }
