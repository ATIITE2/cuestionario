let cntrlt=[];

cntrlt[0] =0;
cntrlt[1] =0;
cntrlt[2] =0;
cntrlt[3] =0;
cntrlt[4] =0;
cntrlt[5] =0;
cntrlt[6] =0;
cntrlt[7] =0;
cntrlt[8] =0;
cntrlt[9] =0;

$(document).ready(function() {

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
        for(i=0;i<=9;i++){
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
                            //$(data.error).addClass("is-invalid").focus();
                            $(data.error).addClass("is-invalid");
                            if (["._genero","._disc_fisica","._cred_sedif","._cred_sedif2"].includes(data.error)) {
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
            //$("[data-step='"+indice+"']").focus();
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
        }

        if([1,-1].includes(indice)){
            var dp=$("input[name='discap_permanente']:checked").val();
            list['discap_permanente'] = ( dp!== undefined) ? dp : -1;

            list['disc_fisica'] = ($("#disc_fisica").is(':checked')) ? 1 : 0;
            list['disc_mental'] = ($("#disc_mental").is(':checked')) ? 1 : 0;
            list['disc_intelectual'] = ($("#disc_intelectual").is(':checked')) ? 1 : 0;
            list['disc_sensorial'] = ($("#disc_sensorial").is(':checked')) ? 1 : 0;

            var vpd=$("input[name='vinculo_persona_disc']:checked").val();
            list['vinculo_persona_disc'] = ( vpd!== undefined) ? vpd : -1;

            list['nombre_asoc_agrup'] = $("#nombre_asoc_agrup").val();
        }

        if([2,-1].includes(indice)){
            list['barreras_retos'] = $("#barreras_retos").val();
        }

        if([3,-1].includes(indice)){
            list['incl_personas'] = ($("#incl_personas").is(':checked')) ? 1 : 0;
            list['foros_event'] =  ($("#foros_event").is(':checked')) ? 1 : 0;
            list['capacitar_pcd'] =  ($("#capacitar_pcd").is(':checked')) ? 1 : 0;
            list['sensib_disc'] =  ($("#sensib_disc").is(':checked')) ? 1 : 0;
            list['otra_propuesta'] =  ($("#otra_propuesta").is(':checked')) ? 1 : 0;
            list['otra_prop_txt'] = $("#otra_prop_txt").val();

        }

        if([4,-1].includes(indice)){
            var ic=$("input[name='integrar_consejos']:checked").val();
            list['integrar_consejos'] = ( ic!== undefined) ? ic : -1;
            list['porque_sn_integrar'] = $("#porque_sn_integrar").val();
        }

        if([5,-1].includes(indice)){
            var ac=$("input[name='acred_disc']:checked").val();
            list['acred_disc'] = ( ac!== undefined) ? ac : -1;
            list['porque_sn_acreditar'] = $("#porque_sn_acreditar").val();
        }

        if([6,-1].includes(indice)){
            list['mostrar_preg1'] = $("#mostrar_preg1").val(); // este valor no se usa en bd

            list['cred_sedif'] = ($("#cred_sedif").is(':checked')) ? 1 : 0;
            list['cred_sesa'] = ($("#cred_sesa").is(':checked')) ? 1 : 0;
            list['dict_medico'] = ($("#dict_medico").is(':checked')) ? 1 : 0;
            list['const_medica'] = ($("#const_medica").is(':checked')) ? 1 : 0;
            list['otro_doc_prop'] = ($("#otro_doc_prop").is(':checked')) ? 1 : 0;
            list['otro_doc_txt'] = $("#otro_doc_txt").val();
        }

        if([7,-1].includes(indice)){
            var ac=$("input[name='acred_disc_perm']:checked").val();
            list['acred_disc_perm'] = ( ac!== undefined) ? ac : -1;
            list['porque_sn_acreditar_perm'] = $("#porque_sn_acreditar_perm").val();
        }
        
        if([8,-1].includes(indice)){
            list['mostrar_preg2'] = $("#mostrar_preg2").val(); // este valor no se usa en bd

            list['cred_sedif2'] = ($("#cred_sedif2").is(':checked')) ? 1 : 0;
            list['cred_sesa2'] = ($("#cred_sesa2").is(':checked')) ? 1 : 0;
            list['dict_medico2'] = ($("#dict_medico2").is(':checked')) ? 1 : 0;
            list['const_medica2'] = ($("#const_medica2").is(':checked')) ? 1 : 0;
            list['otro_doc_prop2'] = ($("#otro_doc_prop2").is(':checked')) ? 1 : 0;
            list['otro_doc_txt2'] = $("#otro_doc_txt2").val();
        }

        if([9,-1].includes(indice)){
            list['comentarios_add'] = $("#comentarios_add").val();
        }

        return list;
    }

    function reinicia_revision(){
        $(".del-msj").html("");
        $(".is-invalid").removeClass("is-invalid");
        $(".invalid-msg").removeClass("invalid-msg");
        $("._genero_title").html("Género");
        $("._disc_fisica_title").html("<span><span></span></span>Discapacidad física");
        $("._cred_sedif").html("<span><span></span></span>Credencial para personas con discapacidad permanente emitido por el Departamento de Discapacidad del Sistema para el Desarrollo Integral de la Familia en Tlaxcala (SEDIF).");
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
                
                console.log("dato 1: "+resp);
                if(!resp) alert("Algo malo ocurrió.");
            }
        });
    }

    function limpiaCampos(){
        const form = $("#cuestionario-form");
        form[0].reset();

        $("#genero li").each(function(){
            if($(this).attr('class') === "init") $(this).html(" ");
            $(this).removeClass("selected");
        });

        $("#tipo_discap").removeClass("show").addClass("hide");
        $("#especif_vinculo").removeClass("show").addClass("hide");

        $("#disc_fisica").prop('checked', false);
        $("#disc_mental").prop('checked', false);
        $("#disc_intelectual").prop('checked', false);
        $("#disc_sensorial").prop('checked', false);

        $('[name="vinculo_persona_disc"]').prop('checked', false);
        $("#campo_asociacion").removeClass("show").addClass("hide");
        $("#nombre_asoc_agrup").val("");

        $("#campo_otra_propuesta").removeClass("show").addClass("hide");
        $("#otra_prop_txt").val("");

        $("#campo_otro_doc").removeClass("show").addClass("hide");
        $("#otro_doc_txt").val("");

        $("#campo_otra_propuesta").removeClass("show").addClass("hide");
        $("#otra_prop_txt").val("");

        $("#mostrar_preg1").val(1);
        $("#mostrar_preg2").val(1);

        $("#prop_docs_msj1").html("2.2 <span class='resalto'>*</span>En caso de haber respondido SÍ, a la pregunta anterior");
        $("#prop_docs_msj2").html("¿De qué forma o con qué documento considera que podría acreditar la situación de discapacidad de una persona?");
        $("#prop_docs_opciones").removeClass("show").addClass("hide");
        $("#cred_sedif").prop('checked', false);
        $("#cred_sesa").prop('checked', false);
        $("#dict_medico").prop('checked', false);
        $("#const_medica").prop('checked', false);
        $("#otro_doc_prop").prop('checked', false);

        $("#prop_docs_dos_msj1").html("3.2 <span class='resalto'>*</span>En caso de haber respondido SI, a la pregunta anterior");
        $("#prop_docs_dos_msj2").html("¿Qué documento considera que podría acreditar la situación de discapacidad de una persona?");
        $("#prop_docs_dos_opc").removeClass("show").addClass("hide");

        $("#cred_sedif2").prop('checked', false);
        $("#cred_sesa2").prop('checked', false);
        $("#dict_medico2").prop('checked', false);
        $("#const_medica2").prop('checked', false);
        $("#otro_doc_prop2").prop('checked', false);

        $("#campo_otro_doc2").removeClass("show").addClass("hide");
        $("#otro_doc_txt2").val("");

        // Disable other Tabs  
        $('.done').removeClass('done').addClass('disabled');
    }
});

function muestraOpciones1(n){

    if(n === 1) {
        $("#tipo_discap").removeClass("hide").addClass("show");
        $("#especif_vinculo").removeClass("show").addClass("hide");

        $('[name="vinculo_persona_disc"]').prop('checked', false);
        $("#campo_asociacion").removeClass("show").addClass("hide");
        $("#nombre_asoc_agrup").val("");
    }

    if(n === 0){
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

  function muestraCampo2(e1, e2, e3){
    var n=($("#"+e1).is(':checked')) ? 1 : 0;

    if(n === 1) $("#"+e2).removeClass("hide").addClass("show"); 
    else {
        $("#"+e2).removeClass("show").addClass("hide");
        $("#"+e3).val("");
    }
  }

  function muestraOpciones2(num){
    $("#mostrar_preg1").val(num);

    if(num === 1) { 
        $("#prop_docs_msj1").html("2.2 <span class='resalto'>*</span>En caso de haber respondido SÍ, a la pregunta anterior");
        $("#prop_docs_msj2").html("¿De qué forma o con qué documento considera que podría acreditar la situación de discapacidad de una persona?");
        $("#prop_docs_opciones").removeClass("hide").addClass("show");  
    }

    if(num === 0) {
        $("#prop_docs_msj1").html("2.2 Respondió NO a la pregunta anterior<br>");
        $("#prop_docs_msj2").html("Doble clic en siguiente para continuar o doble clic en anterior para regresar");
        $("#prop_docs_opciones").removeClass("show").addClass("hide");

        $("#cred_sedif").prop('checked', false);
        $("#cred_sesa").prop('checked', false);
        $("#dict_medico").prop('checked', false);
        $("#const_medica").prop('checked', false);
        $("#otro_doc_prop").prop('checked', false);
        $("#campo_otro_doc").removeClass("show").addClass("hide");
        $("#otro_doc_txt").val("");
    }
  }

  function muestraOpciones3(num){
    $("#mostrar_preg2").val(num);

    if(num === 1) { 
        $("#prop_docs_dos_msj1").html("3.2 <span class='resalto'>*</span>En caso de haber respondido SI, a la pregunta anterior");
        $("#prop_docs_dos_msj2").html("¿Qué documento considera que podría acreditar la situación de discapacidad de una persona?");
        $("#prop_docs_dos_opc").removeClass("hide").addClass("show");  
    }

    if(num === 0) {
        $("#prop_docs_dos_msj1").html("3.2 Respondió NO a la pregunta anterior<br>");
        $("#prop_docs_dos_msj2").html("Doble clic en siguiente para continuar o doble clic en anterior para regresar");
        $("#prop_docs_dos_opc").removeClass("show").addClass("hide");

        $("#cred_sedif2").prop('checked', false);
        $("#cred_sesa2").prop('checked', false);
        $("#dict_medico2").prop('checked', false);
        $("#const_medica2").prop('checked', false);
        $("#otro_doc_prop2").prop('checked', false);
        $("#campo_otro_doc2").removeClass("show").addClass("hide");
        $("#otro_doc_txt2").val("");
    }
  }
