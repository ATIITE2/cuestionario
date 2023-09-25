<div class="w-100 text-center pt-5 pb-5 text-white bg-ite2">
    <h1><b>Instituto Tlaxcalteca de Elecciones</b></h1>
</div>
<div class="w-100 text-center" style="background-image: url(static/media/back.jpeg);">
    <img class="img-fluid w-50 mt-5 mb-5" src="static/media/logoProceso.png" alt="Instituto Tlaxcalteca de Elecciones">
</div>
<div class="w-100 text-center p-5 fs-3 text-white bg-ite2">
    <div class="w-80 mx-auto">
        <p>
            El Instituto Tlaxcalteca de Elecciones impulsa acciones afirmativas que permitan revertir escenarios de
            desigualdad en materia de participación y representación político electoral de grupos históricamente
            discriminados.
        </p>
        <p>
            En este micrositio ponemos a tu disposición toda la información referente a acciones afirmativas del Proceso
            Electoral Local Ordinario 2022-2024.
        </p>

    </div>
</div>
<div class="w-100 text-white text-center bg-ite3">
    <div class="w-80 mx-auto">
        <img class="img-fluid w-50 mt-5 mb-5" src="static/media/banner.png" alt="Instituto Tlaxcalteca de Elecciones">
        <h1><b>Cuestionario</b></h1>
        <br /><br />
    </div>
</div>
<div class="w-100" style="background-image: url(static/media/back.jpeg);">
    <div class="w-80 mx-auto">
        <div class="row">
            <div class="col-md-8 d-flex justify-content-center align-items-center fs-3 p-5">
                <b>
                    Cuestionario en linea para las personas con discapacidad en materia de acciones afirmativas para
                    impulsar su participación en el Proceso Electoral Local Ordinario 2023-2024.
                </b>
            </div>
            <div class="col-md-4">
                <img class="img-fluid w-75 mt-5 mb-5" src="static/media/silla.png"
                    alt="Instituto Tlaxcalteca de Elecciones">
            </div>
        </div>
    </div>
</div>
<div class="w-100 bg-ite3 p-5 text-center text-white">
    <div class="w-80 mx-auto" id="contenido_cuestionario">
        <!-- ------------------------------- AQUI VA EL CUESTIONARIO ------------------------------- -->

        <div class="">
        <form class="was-validated" action="operations.php" method="post" enctype="multipart/form-data"
            id="miFormulario">
            <h1>DATOS GENERALES</h1>
            <label for="nombres">Nombre:</label>
            <input type="text" class="form-control" id="nombres" required>
            <div class="invalid-feedback">
                Por favor, ingrese un Nombre
            </div>

            <label for="ap_paterno">Apellido paterno:</label>
            <input type="text" class="form-control" id="ap_paterno" required>
            <div class="invalid-feedback">
                Por favor, ingrese su apellido paterno
            </div>

            <label for="ap_materno">Apellido materno:</label>
            <input type="text" class="form-control" id="ap_materno" required>
            <div class="invalid-feedback">
                Por favor, ingrese su apellido materno
            </div>

            <label for="edad">Edad:</label>
            <input type="number" class="form-control" id="edad" required>
            <div class="invalid-feedback">
                Por favor, ingrese su Edad
            </div>

            <label for="genero">
                Género:
            </label>
            <select class="form-select" name="genero" id="genero" required>
                <option value="0">Mujer</option>
                <option value="1">Hombre</option>
                <option value="2">No binario</option>
                <option value="3">Otro (especifique)</option>
                <option value="4">Prefiero no contestar</option>
            </select>
            <div class="invalid-feedback">
                Por favor, ingrese un Género
            </div>

            <div style="display: none" id="otro_genero_container" name="otro_genero_container">
                <label class="form-label fs-7" for="otro_genero">Especifique:</label>
                <input type="text" class="form-control" name="otro_genero" id="otro_genero" />
                <div class="invalid-feedback">
                    Por favor, especifique
                </div>
            </div>

            <label class="form-label fs-7" for="municipio">
                Municipio:
            </label>
            <select class="form-select" name="municipio" id="municipio" required>
                <option value="" selected>Seleccione una opción</option>
                <option value="1. Amaxac de Guerrero">1. Amaxac de Guerrero</option>
                <option value="2. Apetatitlán de Antonio Carvajal">2. Apetatitlán de Antonio Carvajal
                </option>
                <option value="3. Apizaco">3. Apizaco</option>
                <option value="4. Atlangatepec">4. Atlangatepec</option>
                <option value="5. Atltzayanca">5. Atltzayanca</option>
                <option value="6. Calpulalpan">6. Calpulalpan</option>
                <option value="7. El Carmen Tequexquitla">7. El Carmen Tequexquitla</option>
                <option value="8. Cuapiaxtla">8. Cuapiaxtla</option>
                <option value="9. Cuaxomulco">9. Cuaxomulco</option>
                <option value="10. Chiautempan">10. Chiautempan</option>
                <option value="11. Muñoz de Domingo Arenas">11. Muñoz de Domingo Arenas</option>
                <option value="12. Españita">12. Españita</option>
                <option value="13. Huamantla">13. Huamantla</option>
                <option value="14. Hueyotlipan">14. Hueyotlipan</option>
                <option value="15. Ixtacuixtla de Mariano Matamoros">15. Ixtacuixtla de Mariano
                    Matamoros</option>
                <option value="16. Ixtenco">16. Ixtenco</option>
                <option value="17. Mazatecochco de José María Morelos">17. Mazatecochco de José María
                    Morelos</option>
                <option value="18. Contla de Juan Cuamatzi">18. Contla de Juan Cuamatzi</option>
                <option value="19. Tepetitla de Lardizábal">19. Tepetitla de Lardizábal</option>
                <option value="20. Sanctórum de Lázaro Cárdenas">20. Sanctórum de Lázaro Cárdenas
                </option>
                <option value="21. Nanacamilpa de Mariano Arista">21. Nanacamilpa de Mariano Arista
                </option>
                <option value="22. Acuamanala de Miguel Hidalgo">22. Acuamanala de Miguel Hidalgo
                </option>
                <option value="23. Natívitas">23. Natívitas</option>
                <option value="24. Panotla">24. Panotla</option>
                <option value="25. San Pablo del Monte">25. San Pablo del Monte</option>
                <option value="26. Santa Cruz Tlaxcala">26. Santa Cruz Tlaxcala</option>
                <option value="27. Tenancingo">27. Tenancingo</option>
                <option value="28. Teolocholco">28. Teolocholco</option>
                <option value="29. Tepeyanco">29. Tepeyanco</option>
                <option value="30. Terrenate">30. Terrenate</option>
                <option value="31. Tetla de la Solidaridad">31. Tetla de la Solidaridad</option>
                <option value="32. Tetlatlahuca">32. Tetlatlahuca</option>
                <option value="33. Tlaxcala">33. Tlaxcala</option>
                <option value="34. Tlaxco">34. Tlaxco</option>
                <option value="35. Tocatlán">35. Tocatlán</option>
                <option value="36. Totolac">36. Totolac</option>
                <option value="37. Ziltlaltépec de Trinidad Sánchez Santos">37. Ziltlaltépec de Trinidad
                    Sánchez Santos</option>
                <option value="38. Tzompantepec">38. Tzompantepec</option>
                <option value="39. Xaloztoc">39. Xaloztoc</option>
                <option value="40. Xaltocan">40. Xaltocan</option>
                <option value="41. Papalotla de Xicohténcatl">41. Papalotla de Xicohténcatl</option>
                <option value="42. Xicohtzinco">42. Xicohtzinco</option>
                <option value="43. Yauhquemehcan">43. Yauhquemehcan</option>
                <option value="44. Zacatelco">44. Zacatelco</option>
                <option value="45. Santa Apolonia Teacalco">45. Santa Apolonia Teacalco</option>
                <option value="46. Santa Cruz Quilehtla">46. Santa Cruz Quilehtla</option>
                <option value="47. San Juan Huactzinco">47. San Juan Huactzinco</option>
                <option value="48. Santa Catarina Ayometla">48. Santa Catarina Ayometla</option>
                <option value="49. Santa Isabel Xiloxoxtla">49. Santa Isabel Xiloxoxtla</option>
                <option value="50. San José Teacalco">50. San José Teacalco</option>
                <option value="51. San Francisco Tetlanohcan">51. San Francisco Tetlanohcan</option>
                <option value="52. La Magdalena Tlaltelulco">52. La Magdalena Tlaltelulco</option>
                <option value="53. San Damián Texoloc">53. San Damián Texoloc</option>
                <option value="54. Emiliano Zapata">54. Emiliano Zapata</option>
                <option value="55. Lázaro Cárdenas">55. Lázaro Cárdenas</option>
                <option value="56. San Jerónimo Zacualpan">56. San Jerónimo Zacualpan</option>
                <option value="57. San Lucas Tecopilco">57. San Lucas Tecopilco</option>
                <option value="58. Santa Ana Nopalucan">58. Santa Ana Nopalucan</option>
                <option value="59. San Lorenzo Axocomanitla">59. San Lorenzo Axocomanitla</option>
                <option value="60. Benito Juárez">60. Benito Juárez</option>
            </select>
            <div class="invalid-feedback">
                Por favor, ingrese un Municipio
            </div>

            <label for="telefono">Número de contacto:</label>
            <input type="text" class="form-control" id="telefono" name="telefono" required>
            <div class="invalid-feedback" id="msj_telefono">
                Por favor, ingrese un Número de contacto
            </div>

            <label for="email">Correo electrónico:</label>
            <input type="email" class="form-control" id="email" required>
            <div class="invalid-feedback">
                Por favor, ingrese un Correo Electrónico
            </div>

            <label for="discap_permanente">¿Es usted una persona con discapacidad permanente?</label>
            <select class="form-control" name="discap_permanente" id="discap_permanente" required>
                <option value="" selected>Seleccione una opción</option>
                <option value="si">Si</option>
                <option value="no">No</option>
            </select>
            <div class="invalid-feedback">
                Por favor, seleccione una opción
            </div>

            <div style="display: none" id="si_discapacidad_container" name="si_discapacidad_container">
                <label for="nombre_discapacidad">¿Qué tipo de discapacidad presenta?:</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="discapacidad_fisica" name="tipo_discapacidad"
                        value="Discapacidad física">
                    <label class="form-check-label" for="discapacidad_fisica">Discapacidad física</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="discapacidad_mental" name="tipo_discapacidad"
                        value="Discapacidad mental">
                    <label class="form-check-label" for="discapacidad_mental">Discapacidad mental</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="discapacidad_intelectual" name="tipo_discapacidad"
                        value="Discapacidad intelectual">
                    <label class="form-check-label" for="discapacidad_intelectual">Discapacidad intelectual</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="discapacidad_sensorial" name="tipo_discapacidad"
                        value="Discapacidad sensorial">
                    <label class="form-check-label" for="discapacidad_sensorial">Discapacidad sensorial</label>
                </div>
                <div class="invalid-feedback">
                    Por favor, especifique
                </div>
            </div>

            <div style="display: none" id="no_discapacidad_container" name="no_discapacidad_container">
                <label for="vinculo_persona_disc">Especifique su vínculo con la persona con discapacidad:</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="familiar" name="vinculo_persona_disc" value="Familiar">
                    <label class="form-check-label" for="familiar">Familiar</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="cuidador" name="vinculo_persona_disc"
                        value="Cuidador/a">
                    <label class="form-check-label" for="cuidador">Cuidador/a</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="integrante" name="vinculo_persona_disc"
                        value="Integrante o representante de una asociación o agrupación de personas con discapacidad">
                    <label class="form-check-label" for="integrante">Integrante o representante de una asociación o
                        agrupación de personas con discapacidad</label>
                </div>
                <div class="invalid-feedback">
                    Por favor, especifique
                </div>
            </div>

            <div style="display: none" id="integrante_container" name="integrante_container">
                <label for="edad">Favor de indicar el nombre:</label>
                <input type="text" class="form-control" id="nombre_integracion">
                <div class="invalid-feedback">
                    Por favor, ingrese el nombre
                </div>
            </div>
            <h1>FORTALECIMIENTO DE LA PARTICIPACIÓN Y REPRESENTACIÓN POLÍTICA DE LAS PERSONAS CON DISCAPACIDAD</h1>
            <label for="retos_discapacidad">Si es una persona con discapacidad permanente ¿A qué barreras o retos se ha
                enfrentado para ejercer sus derechos político electorales?:</label>
            <input type="text" class="form-control" id="retos_discapacidad" required>
            <div class="invalid-feedback">
                Por favor, describa cuales son las barreras o retos
            </div>

            <div class="form-group">
                <label>
                    ¿Cuáles podrían ser algunas propuestas o acciones para promover la participación y representación
                    política de las personas con discapacidad permanente en Tlaxcala? (Puede marcar más de una).
                </label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="opcion1" name="acciones_interes[]"
                        value="Impulsar la participación e inclusión de las personas con discapacidad en los partidos políticos.">
                    <label class="form-check-label" for="opcion1">Impulsar la participación e inclusión de las personas
                        con discapacidad en los partidos políticos.</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="opcion2" name="acciones_interes[]"
                        value="Realizar foros o eventos sobre participación y representación política dirigidos a personas con discapacidad.">
                    <label class="form-check-label" for="opcion2">Realizar foros o eventos sobre participación y
                        representación política dirigidos a personas con discapacidad.</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="opcion3" name="acciones_interes[]"
                        value="Capacitación de las personas con discapacidad a través de las organizaciones de la sociedad civil en la materia.">
                    <label class="form-check-label" for="opcion3">Capacitación de las personas con discapacidad a través
                        de las organizaciones de la sociedad civil en la materia.</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="opcion4" name="acciones_interes[]"
                        value="Sensibilización a partidos políticos en temas de discapacidad.">
                    <label class="form-check-label" for="opcion4">Sensibilización a partidos políticos en temas de
                        discapacidad.</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="opcion5" name="acciones_interes[]" value="Otra">
                    <label class="form-check-label" for="opcion5">Otra</label>
                </div>
            </div>

            <div style="display: none" id="acciones_interes_container" name="acciones_interes_container">
                <label for="otraAccion">Especifique:</label>
                <textarea class="form-control" id="otra_accion" name="otra_accion"></textarea>
            </div>

            <label for="opinion_accion_afirmativa">
                ¿Estás de acuerdo en que la acción afirmativa dirigida a personas con discapacidad se considere
                únicamente a personas con discapacidad permanente?
            </label>
            <select class="form-control" name="opinion_accion_afirmativa" id="opinion_accion_afirmativa" required>
                <option value="" selected>Seleccione una opción</option>
                <option value="si">Si</option>
                <option value="no">No</option>
            </select>
            <div class="invalid-feedback">
                Por favor, seleccione una opción
            </div>

            <label for="completa_opinio">¿Porqué?:</label>
            <textarea class="form-control" id="completa_opinion" name="completa_opinion" required></textarea>

            <div style="display: none" id="opinion_accion_afirmativa_container"
                name="opinion_accion_afirmativa_container">

            </div>










            <label for="acreditar_discapacidad">
                ¿Considera necesario que las personas con discapacidad permanente postuladas a una candidatura tengan
                que acreditar su discapacidad con algún documento?
            </label>
            <select class="form-control" name="acreditar_discapacidad" id="acreditar_discapacidad" required>
                <option value="" selected>Seleccione una opción</option>
                <option value="si">Si</option>
                <option value="no">No</option>
            </select>
            <div class="invalid-feedback">
                Por favor, seleccione una opción
            </div>

            <label for="completa_opinio">¿Porqué?:</label>
            <textarea class="form-control" id="acreditar_opinion" name="acreditar_opinion"></textarea>

            <div style="display: none" id="acreditar_discapacidad_container" name="acreditar_discapacidad_container">
                <div class="form-group">
                    <label>Documentación de discapacidad (seleccione todas las que correspondan):</label>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="opcion1" name="documentacion_discapacidad[]"
                            value="Credencial para personas con discapacidad permanente emitido por el Departamento de Discapacidad del Sistema para el Desarrollo Integral de la familia en Tlaxcala (SEDIF).">
                        <label class="form-check-label" for="opcion1">Credencial para personas con discapacidad
                            permanente emitido por el Departamento de Discapacidad del Sistema para el Desarrollo
                            Integral de la familia en Tlaxcala (SEDIF).</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="opcion2" name="documentacion_discapacidad[]"
                            value="Certificado de Discapacidad permanente emitido por autoridades de salud estatales o federales (IMSS, ISSTE, Hospital Militar, Secretaria de Salud del Estado de Tlaxcala).">
                        <label class="form-check-label" for="opcion2">Certificado de Discapacidad permanente emitido por
                            autoridades de salud estatales o federales (IMSS, ISSTE, Hospital Militar, Secretaria de
                            Salud del Estado de Tlaxcala).</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="opcion3" name="documentacion_discapacidad[]"
                            value="Dictamen Médico de Institución Pública que conste sobre una condición de discapacidad permanente.">
                        <label class="form-check-label" for="opcion3">Dictamen Médico de Institución Pública que conste
                            sobre una condición de discapacidad permanente.</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="opcion4" name="documentacion_discapacidad[]"
                            value="Constancia Médica de Institución pública que conste sobre una condición de discapacidad permanente.">
                        <label class="form-check-label" for="opcion4">Constancia Médica de Institución pública que
                            conste sobre una condición de discapacidad permanente.</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="opcion5" name="documentacion_discapacidad[]"
                            value="Otra">
                        <label class="form-check-label" for="opcion5">Otra</label>
                    </div>
                </div>

                <div style="display: none" id="otra_documentacion_container" name="otra_documentacion_container">
                    <label for="otra_documentacion">Especifique:</label>
                    <textarea class="form-control" id="otraAccion" name="otra_documentacion"></textarea>
                </div>

            </div>


            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
        
        <!-- --------------------------------------------------------------------------------------- -->
    </div>
</div>
<div class="w-100 bg-ite4 text-center text-white p-5">
    <div class="w-80 mx-auto" id="versiones_ciudadanas">
        <h1><b>Versiones Ciudadanas de los Acuerdos Aprobados por el Consejo General del Instituto Tlaxcalteca de
                Elecciones</b></h1>
        <div class="row mt-5 w-50 mx-auto">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Acuerdo ITE CG-38/2023<br />Versión Nahuatl</h5>
                        <embed src="static/docs/nahualt_38.pdf" type="application/pdf" width="100%" height="400px">
                        <a href="static/docs/nahualt_38.pdf" target="_blank" class="btn btn-primary mt-3">Abrir en Nueva
                            Pestaña</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Acuerdo ITE CG-38/2023<br />Versión Otomí</h5>
                        <embed src="static/docs/otomi_38.pdf" type="application/pdf" width="100%" height="400px">
                        <a href="static/docs/otomi_38.pdf" target="_blank" class="btn btn-primary mt-3">Abrir en Nueva
                            Pestaña</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="w-100">
    <img class="img-fluid w-100" src="static/media/banner2.png" alt="Instituto Tlaxcalteca de Elecciones">
</div>
<div class="w-100 bg-ite4 text-center p-5" style="background-image: url(static/media/back.jpeg);">
    <div class="w-80 mx-auto" id="acuerdos">
        <h1><b>Acuerdos Aprobados por el Consejo General del Instituto Tlaxcalteca de
                Elecciones</b></h1>
        <br />
        <h3><b>Acuerdo ITE-CG 74/2023</b>
        </h3>
        <br />
        <div class="row mt-5 w-25 mx-auto">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Acuerdo</h5>
                        <embed src="static/docs/acuerdo74.pdf" type="application/pdf" width="100%" height="400px">
                        <a href="static/docs/acuerdo74.pdf" target="_blank" class="btn btn-primary mt-3">Abrir en Nueva
                            Pestaña</a>
                    </div>
                </div>
            </div>
        </div>
        <br /><br />
        <h3><b>Anexos del Acuerdo ITE-CG 74/2023</b>
        </h3>
        <br />
        <div class="row mt-5 w-75 mx-auto">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Protocolo</h5>
                        <embed src="static/docs/acuerdo74_protocolo.pdf" type="application/pdf" width="100%"
                            height="400px">
                        <a href="static/docs/acuerdo74_protocolo.pdf" target="_blank" class="btn btn-primary mt-3">Abrir
                            en
                            Nueva
                            Pestaña</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Anexo 1</h5>
                        <embed src="static/docs/acuerdo74_anexo1.pdf" type="application/pdf" width="100%"
                            height="400px">
                        <a href="static/docs/acuerdo74_anexo1.pdf" target="_blank" class="btn btn-primary mt-3">Abrir en
                            Nueva
                            Pestaña</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cuestionario</h5>
                        <embed src="static/docs/acuerdo74_anexo2.pdf" type="application/pdf" width="100%"
                            height="400px">
                        <a href="static/docs/acuerdo74_anexo2.pdf" target="_blank" class="btn btn-primary mt-3">Abrir en
                            Nueva
                            Pestaña</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 w-75 mx-auto">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Convocatoria</h5>
                        <embed src="static/docs/acuerdo74_anexo3.pdf" type="application/pdf" width="100%"
                            height="400px">
                        <a href="static/docs/acuerdo74_anexo3.pdf" target="_blank" class="btn btn-primary mt-3">Abrir en
                            Nueva
                            Pestaña</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Solicitud Acreditación</h5>
                        <embed src="static/docs/acuerdo74_anexo4.pdf" type="application/pdf" width="100%"
                            height="400px">
                        <a href="static/docs/acuerdo74_anexo4.pdf" target="_blank" class="btn btn-primary mt-3">Abrir en
                            Nueva
                            Pestaña</a>
                    </div>
                </div>
            </div>
        </div>
        <img class="img-fluid w-100 mt-5 mb-5" src="static/media/bottom.png" alt="Instituto Tlaxcalteca de Elecciones">
    </div>
</div>
</div>
</div>