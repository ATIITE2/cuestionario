<div class="App__container">
<div class="Home">
    <div class="Home__container pt-5 pb-5">
        <div class="w-25 mx-auto">
            <img class="img-fluid" src="static/media/logoite.png" alt="Instituto Tlaxcalteca de Elecciones">
        </div>
        <p class="Home__title">Instituto Tlaxcalteca de Elecciones</p>
        <p class="Home__title-2">
            CUESTIONARIO DE CONSULTA PREVIA, PÚBLICA, ABIERTA, REGULAR, ESTRECHA, LIBRE E INFORMADA DIRIGIDA A PERSONAS CON DISCAPACIDAD 
            EN MATERIA DE PARTICIPACIÓN Y REPRESENTACIÓN POLÍTICA, ACREDITACIÓN O NO DE LA DISCAPACIDAD PARA LA POSTULACIÓN EN CANDIDATURAS, E INCLUSIÓN EN LOS ÓRGANOS 
            DESCONCENTRADOS DEL INSTITUTO TLAXCALTECA DE ELECCIONES, PARA EL PROCESO ELECTORAL LOCAL ORDINARIO 2023-2024
        </p>
        <div class="ms-auto w-25">
            <img src="static/media/coronavirus.png" class="img-fluid Home__coronavirus w-50" alt="Coronavirus">
        </div>
        <h3 class="bottom-title">PRESENTACIÓN</h3>
        <p>
            El objetivo del presente cuestionario es recibir opiniones, propuestas y planteamientos de las personas con discapacidad permanente en el estado de Tlaxcala, 
            sobre las acciones en materia de fortalecimiento de la participación y representación política, la acreditación o no de la discapacidad permanente para acceder 
            a una candidatura a un cargo de elección popular y la inclusión a órganos desconcentrados del Instituto lo cual dará sustento a las acciones afirmativas a implementarse 
            en el Proceso Electoral Local Ordinario 2023- 2024.
        </p>
        <div class="mx-auto w-25">
            <img src="static/media/icon1.png" class="img-fluid" alt="#QuedateEnCasa">
            <p class="Home__title">#QuedateEnCasa</p>
        </div>
    </div>
</div>

    <div class="Acuerdos">
        <div class="Acuerdos__container">
            <h3 class="bottom-title">CUESTIONARIO</h3>
            <div class="principal">
                <div class="contenedor">
                    <form method="POST" id="cuestionario-form" class="needs-validation signup-form" enctype="multipart/form-data " novalidate>
                    <div id="result"></div>
                        <h5>Datos generales</h5>
                        <fieldset data-step="0">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="nombres">Nombre</label>
                                    <input type="text" name="nombres" id="nombres" />
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="ap_paterno">Apellido paterno</label>
                                    <input type="text" name="ap_paterno" id="ap_paterno" />
                                    <div class="invalid-feedback"></div>
                                </div>                                
                                <div class="form-group">
                                    <label for="ap_materno">Apellido materno</label>
                                    <input type="text" name="ap_materno" id="ap_materno" />
                                    <div class="invalid-feedback"></div>
                                </div>                                                                
                            </div>
                            <div class="form-row">
                                <div class="form-select _genero">
                                    <span class="_genero_title">Género</span>
                                    <div class="select-group">
                                        <select name="genero" id="genero">
                                            <option value="-1"></option>
                                            <option value="0">Mujer</option>
                                            <option value="1">Hombre</option>
                                            <option value="2">No binario</option>
                                            <option value="3">Otro (especifique)</option>
                                            <option value="4">Prefiero no contestar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group collapse hide" id="campo_genero">
                                    <label for="otro_genero">Especificar género</label>
                                    <input type="text" name="otro_genero" id="otro_genero" />
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="municipio">Municipio</label>
                                    <input type="text" name="municipio" id="municipio" autocomplete="on" />
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="telefono">Número de contacto</label>
                                    <input type="text" name="telefono" id="telefono" />
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Correo electrónico</label>
                                    <input type="email" name="email" id="email" autocomplete="on" />
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>
                        </fieldset>

                        <h5>Información general</h5>
                        <fieldset data-step="1">
                            <div class="form-radio">
                                <span class="radio-label">¿Es usted una persona con discapacidad permanente?</span>
                                <div class="form-radio-group _discap_permanente">            
                                    <div class="form-radio-item">
                                        <input type="radio" name="discap_permanente" id="resp_si" value="1" onclick="muestraOpciones1(1);">
                                        <label for="resp_si">Sí</label>
                                        <span class="check"></span>
                                    </div>
                                    <div class="form-radio-item">
                                        <input type="radio" name="discap_permanente" id="resp_no" value="0" onclick="muestraOpciones1(0);">
                                        <label for="resp_no">No</label>
                                        <span class="check"></span>
                                    </div>
                                </div>
                                <div class="invalid-feedback"></div>
                            </div>

                            <div class="form-radio collapse hide" id="tipo_discap">
                                <span class="radio-label">¿Qué tipo de discapacidad presenta? (Marque una o varias opciones)</span>
                                <div class="form-radio-group _tipo_discap">            
                                    <div class="form-check">
                                        <input type="checkbox" name="disc_fisica" id="disc_fisica" class="agree-term" />
                                        <label for="disc_fisica" class="label-discapacidad _disc_fisica_title"><span><span></span></span>Discapacidad física</label>
                                        <input type="checkbox" name="disc_mental" id="disc_mental" class="agree-term" />
                                        <label for="disc_mental" class="label-discapacidad "><span><span></span></span>Discapacidad mental</label>
                                        <input type="checkbox" name="disc_intelectual" id="disc_intelectual" class="agree-term" />
                                        <label for="disc_intelectual" class="label-discapacidad "><span><span></span></span>Discapacidad intelectual</label>
                                        <input type="checkbox" name="disc_sensorial" id="disc_sensorial" class="agree-term" />
                                        <label for="disc_sensorial" class="label-discapacidad "><span><span></span></span>Discapacidad sensorial</label>
                                    </div>
                                </div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="form-radio collapse hide" id="especif_vinculo">
                                <span class="radio-label">Especifique su vínculo con la persona con discapacidad</span>
                                <div class="form-radio-group _vinculo_persona_disc">
                                    <div class="form-radio-item">
                                        <input type="radio" name="vinculo_persona_disc" id="opcion_0" value="0" onclick="muestraCampo1(0);">
                                        <label for="opcion_0">Familiar</label>
                                        <span class="check"></span>
                                    </div>
                                    <div class="form-radio-item">
                                        <input type="radio" name="vinculo_persona_disc" id="opcion_1" value="1" onclick="muestraCampo1(0);">
                                        <label for="opcion_1">Cuidador</label>
                                        <span class="check"></span>
                                    </div>
                                    <div class="form-radio-item">
                                        <input type="radio" name="vinculo_persona_disc" id="opcion_2" value="2" onclick="muestraCampo1(1);">
                                        <label for="opcion_2">Integrante o representante de una asociación o agrupación de personas con discapacidad</label>
                                        <span class="check"></span>
                                    </div> 
                                </div>
                                <div class="invalid-feedback"></div>
                                <div class="form-group collapse hide" id="campo_asociacion">
                                    <label for="nombre_asoc_agrup">Indique el nombre de la asociación o agrupación.</label>
                                    <input type="text" name="nombre_asoc_agrup" id="nombre_asoc_agrup" />
                                    <div class="invalid-feedback"></div>
                                </div>   
                            </div>

                        </fieldset>

                        <h5>Información a consultar 1</h5>
                        <fieldset data-step="2">
                            <div class="form-textarea">
                                <label for="barreras_retos" class="radio-label">1.1	Si es una persona con discapacidad permanente ¿A qué barreras o retos se ha enfrentado para ejercer tus derechos políticos electorales?</label>
                                <textarea name="barreras_retos" id="barreras_retos" placeholder="Escribir aquí"></textarea>
                                <div class="invalid-feedback"></div>
                            </div>
                        </fieldset>

                        <h5>Información a consultar 2</h5>
                        <fieldset data-step="3">
                            <div class="form-radio">
                                <span class="radio-label">1.2  ¿Cuáles podrían ser algunas propuestas o acciones para promover la participación y representación política de las personas con discapacidad en Tlaxcala?</span>
                                <div class="form-radio-group _prop_acciones">            
                                    <div class="form-check">
                                        <input type="checkbox" name="incl_personas" id="incl_personas" class="agree-term" />
                                        <label for="incl_personas" class="label-discapacidad _incl_personas_title"><span><span></span></span>Impulsar la participación e inclusión de las personas con discapacidad en los partidos políticos.</label>     
                                        <input type="checkbox" name="foros_event" id="foros_event" class="agree-term" />
                                        <label for="foros_event" class="label-discapacidad "><span><span></span></span>Realizar foros o eventos sobre participación y representación política dirigidos a personas con discapacidad.</label>
                                        <input type="checkbox" name="capacitar_pcd" id="capacitar_pcd" class="agree-term" />
                                        <label for="capacitar_pcd" class="label-discapacidad "><span><span></span></span>Capacitación de las personas con discapacidad a través de las organizaciones de la sociedad civil en la materia.</label>
                                        <input type="checkbox" name="sensib_disc" id="sensib_disc" class="agree-term" />
                                        <label for="sensib_disc" class="label-discapacidad "><span><span></span></span>Sensibilización a partidos políticos en temas de discapacidad.</label>
                                        <input type="checkbox" name="otra_propuesta" id="otra_propuesta" class="agree-term" onclick="muestraCampo2('otra_propuesta','campo_otra_propuesta','otra_prop_txt');" />
                                        <label for="otra_propuesta" class="label-discapacidad "><span><span></span></span>Otra, especifique cuál</label>

                                        <div class="form-group collapse hide" id="campo_otra_propuesta">
                                            <label for="otra_prop_txt">Escriba otra propuesta</label>
                                            <input type="text" name="otra_prop_txt" id="otra_prop_txt" />
                                        </div>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="invalid-feedback"></div>
                            </div>
                        </fieldset>

                        <h5>Información a consultar 3</h5>
                        <fieldset data-step="4">
                            <div class="form-radio">
                                <span class="radio-label">1.3 ¿Considera necesario que las personas con discapacidad que deseen integrar los Consejos Distritales o municipales acrediten su discapacidad permanente con algún documento?</span>
                                <div class="form-radio-group _integrar_consejos">            
                                    <div class="form-radio-item">
                                        <input type="radio" name="integrar_consejos" id="resp_si_1" value="1">
                                        <label for="resp_si_1">Sí</label>
                                        <span class="check"></span>
                                    </div>
                                    <div class="form-radio-item">
                                        <input type="radio" name="integrar_consejos" id="resp_no_1" value="0">
                                        <label for="resp_no_1">No</label>
                                        <span class="check"></span>
                                    </div>
                                </div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="form-textarea">
                                <label for="porque_sn_integrar" class="radio-label">¿Por qué?</label>
                                <textarea name="porque_sn_integrar" id="porque_sn_integrar" placeholder="Escribir aquí"></textarea>
                                <div class="invalid-feedback"></div>
                            </div>
                        </fieldset>

                        <h5>Información a consultar 4</h5>
                        <fieldset data-step="5">
                            <div class="form-radio">
                                <span class="radio-label">2.1 ¿Considera necesario que las personas con discapacidad postuladas tengan que acreditar su discapacidad con algún documento?</span>
                                <div class="form-radio-group _acred_disc">            
                                    <div class="form-radio-item">
                                        <input type="radio" name="acred_disc" id="resp_si_2" value="1" onclick="muestraOpciones2(1);">
                                        <label for="resp_si_2">Sí</label>
                                        <span class="check"></span>
                                    </div>
                                    <div class="form-radio-item">
                                        <input type="radio" name="acred_disc" id="resp_no_2" value="0"  onclick="muestraOpciones2(0);">
                                        <label for="resp_no_2">No</label>
                                        <span class="check"></span>
                                    </div>
                                </div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="form-textarea">
                                <label for="porque_sn_acreditar" class="radio-label">¿Por qué?</label>
                                <textarea name="porque_sn_acreditar" id="porque_sn_acreditar" placeholder="Escribir aquí"></textarea>
                                <div class="invalid-feedback"></div>
                            </div>
                        </fieldset>

                        <h5>Información a consultar 5</h5>
                        <fieldset data-step="6">
                            <div class="form-radio">
                                <span class="radio-label" id="prop_docs_msj1"></span>
                                <span class="radio-label" id="prop_docs_msj2"></span>
                                <div class="form-radio-group _prop_documentos collapse show" id="prop_docs_opciones">            
                                    <div class="form-check">
                                    <input type="hidden" name="mostrar_preg1" id="mostrar_preg1" value="1" />
                                        <input type="checkbox" name="cred_sedif" id="cred_sedif" class="agree-term" />
                                        <label for="cred_sedif" class="label-discapacidad _cred_sedif_title"><span><span></span></span>Credencial para personas con discapacidad permanente emitido por el Departamento de Discapacidad del Sistema para el Desarrollo Integral de la Familia en Tlaxcala (SEDIF).</label>     
                                        <input type="checkbox" name="cred_sesa" id="cred_sesa" class="agree-term" />
                                        <label for="cred_sesa" class="label-discapacidad "><span><span></span></span>Certificado de Discapacidad permanente emitido por autoridades de salud estatales o federales (IMSS, ISSSTE, Hospital Militar, Secretaría de Salud del estado Tlaxcala).</label>
                                        <input type="checkbox" name="dict_medico" id="dict_medico" class="agree-term" />
                                        <label for="dict_medico" class="label-discapacidad "><span><span></span></span>Dictamen Médico de Institución Pública que conste sobre una condición de discapacidad permanente.</label>
                                        <input type="checkbox" name="const_medica" id="const_medica" class="agree-term" />
                                        <label for="const_medica" class="label-discapacidad "><span><span></span></span>Constancia Médica de Institución Pública que conste sobre una condición de discapacidad permanente.</label>
                                        <input type="checkbox" name="otro_doc_prop" id="otro_doc_prop" class="agree-term" onclick="muestraCampo2('otro_doc_prop','campo_otro_doc','otro_doc_txt');" />
                                        <label for="otro_doc_prop" class="label-discapacidad "><span><span></span></span>Otro (Especifique cuál)</label>
                                        <div class="form-group collapse hide" id="campo_otro_doc">
                                            <label for="otro_doc_txt">Escriba otra propuesta</label>
                                            <input type="text" name="otro_doc_txt" id="otro_doc_txt" />
                                        </div>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="invalid-feedback"></div>
                            </div>
                        </fieldset>

                        <h5>Información a consultar 6</h5>
                        <fieldset data-step="7">
                            <div class="form-radio">
                                <span class="radio-label">3.1 ¿Considera necesario que las personas con discapacidad que deseen integrar los Consejos Distritales o municipales acrediten su discapacidad permanente con algún documento?</span>
                                <div class="form-radio-group _acred_disc_perm">            
                                    <div class="form-radio-item">
                                        <input type="radio" name="acred_disc_perm" id="resp_si_3" value="1" onclick="muestraOpciones3(1);">
                                        <label for="resp_si_3">Sí</label>
                                        <span class="check"></span>
                                    </div>
                                    <div class="form-radio-item">
                                        <input type="radio" name="acred_disc_perm" id="resp_no_3" value="0"  onclick="muestraOpciones3(0);">
                                        <label for="resp_no_3">No</label>
                                        <span class="check"></span>
                                    </div>
                                </div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="form-textarea">
                                <label for="porque_sn_acreditar_perm" class="radio-label">¿Por qué?</label>
                                <textarea name="porque_sn_acreditar_perm" id="porque_sn_acreditar_perm" placeholder="Escribir aquí"></textarea>
                                <div class="invalid-feedback"></div>
                            </div>
                        </fieldset>

                        <h5>Información a consultar 7</h5>
                        <fieldset data-step="8">
                            <div class="form-radio">
                                <span class="radio-label" id="prop_docs_dos_msj1"></span>
                                <span class="radio-label" id="prop_docs_dos_msj2"></span>
                                <div class="form-radio-group _prop_documentos_dos collapse show" id="prop_docs_dos_opc">            
                                    <div class="form-check">
                                    <input type="hidden" name="mostrar_preg2" id="mostrar_preg2" value="1" />
                                        <input type="checkbox" name="cred_sedif2" id="cred_sedif2" class="agree-term" />
                                        <label for="cred_sedif2" class="label-discapacidad _cred_sedif2_title"><span><span></span></span>Credencial para personas con discapacidad permanente emitido por el Departamento de Discapacidad del Sistema para el Desarrollo Integral de la Familia en Tlaxcala (SEDIF).</label>     
                                        <input type="checkbox" name="cred_sesa2" id="cred_sesa2" class="agree-term" />
                                        <label for="cred_sesa2" class="label-discapacidad "><span><span></span></span>Certificado de Discapacidad permanente emitido por autoridades de salud estatales o federales (IMSS, ISSSTE, Hospital Militar, Secretaría de Salud del estado Tlaxcala).</label>
                                        <input type="checkbox" name="dict_medico2" id="dict_medico2" class="agree-term" />
                                        <label for="dict_medico2" class="label-discapacidad "><span><span></span></span>Dictamen Médico de Institución Pública que conste sobre una condición de discapacidad permanente.</label>
                                        <input type="checkbox" name="const_medica2" id="const_medica2" class="agree-term" />
                                        <label for="const_medica2" class="label-discapacidad "><span><span></span></span>Constancia Médica de Institución Pública que conste sobre una condición de discapacidad permanente.</label>
                                        <input type="checkbox" name="otro_doc_prop2" id="otro_doc_prop2" class="agree-term" onclick="muestraCampo2('otro_doc_prop2','campo_otro_doc2','otro_doc_txt2');" />
                                        <label for="otro_doc_prop2" class="label-discapacidad "><span><span></span></span>Otro (Especifique cuál).</label>
                                        <div class="form-group collapse hide" id="campo_otro_doc2">
                                            <label for="otro_doc_txt2">Escriba otra propuesta</label>
                                            <input type="text" name="otro_doc_txt2" id="otro_doc_txt2" />
                                        </div>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="invalid-feedback"></div>
                            </div>
                        </fieldset>

                        <h5>Comentarios Adicionales</h5>
                        <fieldset data-step="9">
                            <div class="form-textarea">
                                <label for="comentarios_add" class="radio-label">Escriba en este campo sus comentarios</label>
                                <textarea name="comentarios_add" id="comentarios_add" placeholder="Escribir aquí"></textarea>
                                <div class="invalid-feedback"></div>
                            </div>
                        </fieldset>
                    </form>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="modal_uno" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modal_uno_titulo"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" onclick="$('#modal_uno').modal('hide')">&times;</span>
                                </button>
                            </div>
                        <div class="modal-body" id="modal_uno_msj"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="$('#modal_uno').modal('hide')">Cerrar</button>
                            <!--button type="button" class="btn btn-primary">guardar cambios</button -->
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Infografias">
        <div class="Infografias__container pt-5 pb-5">
            <h3 class="bottom-title">INFOGRAFIAS</h3>
            <div id="hola" class="carousel slide pointer-event" data-ride="carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img class="img-fluid" src="https://covid19.itetlax.org.mx/assets/img/mdp.jpg" alt="MedidasDeProteccion">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="https://covid19.itetlax.org.mx/assets/img/infeccion.jpg" alt="ReducirInfeccion">
                    </div>
                    <div class="carousel-item active">
                        <img class="img-fluid" src="https://covid19.itetlax.org.mx/assets/img/recomendaciones.jpg" alt="Recomendaciones">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#hola" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#hola" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="hr"></div>
        </div>
    </div>
</div>