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
            <!-- div class="row mt-3">
                <div class="col-md-6">
                    <div class="Acuerdos__box"></div>
                    <div class="Acuerdos__body ps-3 pe-3 pt-3 b-3">
                        ACUERDO DEL CONSEJO GENERAL DEL INSTITUTO
                        TLAXCALTECA DE ELECCIONES, POR EL QUE SE APRUEBAN LAS MEDIDAS PARA GARANTIZAR EL
                        FUNCIONAMIENTO DEL INSTITUTO Y PREVENCIÓN DE LA SALUD DE LAS Y LOS SERVIDORES PÚBLICOS Y
                        PERSONAS QUE ACUDAN A SUS INSTALACIONES, CON MOTIVO DE LA PANDEMIA COVID-19.
                    </div>
                    <div class="Acuerdos__box"> </div>
                </div>
            </div -->
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
                                <!-- div class="form-select _country">
                                    <span class="_country_title">País</span>
                                    <div class="select-group">
                                        <select name="country" id="country">
                                            <option value=""></option>
                                            <option value="Vn">Vietnam</option>
                                            <option value="US">Estados Unidos</option>
                                        </select>
                                    </div>
                                </div -->
                            </div>
                            <div class="form-row">
                                <div class="form-select _genero">
                                    <span class="_genero_title">Género</span>
                                    <div class="select-group">
                                        <select name="genero" id="genero">
                                            <option value=""></option>
                                            <option value="0">Mujer</option>
                                            <option value="1">Nombre</option>
                                            <option value="2">No binario</option>
                                            <option value="3">Otro (especifique)</option>
                                            <option value="4">Prefiero no contestar</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="otro_genero">Especificar género</label>
                                    <input type="text" name="otro_genero" id="otro_genero" />
                                    <!-- div class="invalid-feedback"></div -->
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

                            <!-- div class="form-check _checado">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term _checado_title"><span><span></span></span>Suscríbase al correo de noticias</label>
                            </div -->
                        </fieldset>

                        <h5>Información general</h5>
                        <fieldset data-step="1">
                            <div class="form-radio">
                                <span class="radio-label">¿Qué tipo de cuarto desea?</span>
                                <div class="form-radio-group _cuarto">            
                                    <div class="form-radio-item">
                                        <input type="radio" name="room_type" id="single_room" value="1">
                                        <label for="single_room">Cuarto sencillo</label>
                                        <span class="check"></span>
                                    </div>
                                    <div class="form-radio-item">
                                        <input type="radio" name="room_type" id="family_room" value="2">
                                        <label for="family_room">Cuarto familiar</label>
                                        <span class="check"></span>
                                    </div>
                                    <div class="form-radio-item">
                                        <input type="radio" name="room_type" id="business_room" value="3">
                                        <label for="business_room">Cuarto ejecutivo</label>
                                        <span class="check"></span>
                                    </div>
                                </div>
                                <div class="invalid-feedback"></div>
                            </div>
                        </fieldset>

                        <h5>Información a consultar 1</h5>
                        <fieldset data-step="2">
                            <div class="form-radio">
                                <span class="radio-label">¿Qué otro tipo de cuarto desea?</span>
                                <div class="form-radio-group _cuarto2">            
                                    <div class="form-radio-item">
                                        <input type="radio" name="room_type2" id="chico" value="1">
                                        <label for="chico">Chico</label>
                                        <span class="check"></span>
                                    </div>
                                    <div class="form-radio-item">
                                        <input type="radio" name="room_type2" id="mediano" value="2">
                                        <label for="mediano">Mediano</label>
                                        <span class="check"></span>
                                    </div>
                                    <div class="form-radio-item">
                                        <input type="radio" name="room_type2" id="grande" value="3">
                                        <label for="grande">Grande</label>
                                        <span class="check"></span>
                                    </div>
                                </div>
                                <div class="invalid-feedback"></div>
                            </div>
                        </fieldset>

                        <h5>Información a consultar 2</h5>
                        <fieldset data-step="3">
                            <div class="form-textarea">
                                <label for="room_description" class="radio-label">Descripción del cuarto</label>
                                <textarea name="room_description" id="room_description" placeholder="Ejemplo: El cuarto debe tener . . ."></textarea>
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