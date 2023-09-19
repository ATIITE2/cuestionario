<div class="App__container">
<div class="Home">
    <div class="Home__container pt-5 pb-5">
        <div class="w-25 mx-auto">
            <img class="img-fluid" src="static/media/logoite.png" alt="Instituto Tlaxcalteca de Elecciones">
        </div>
        <p class="Home__title">Instituto Tlaxcalteca de Elecciones</p>
        <p class="Home__title-2">Cuestionario SAMPLE</p>
        <div class="ms-auto w-25">
            <img src="static/media/coronavirus.png" class="img-fluid Home__coronavirus w-50" alt="Coronavirus">
        </div>
        <h3 class="bottom-title">PRESENTACIÓN</h3>
        <p>Ante las medidas sanitarias dictadas por las autoridades mexicanas, derivadas de la estrategia para el combate de la pandemia por el Covid 19, 
            el Instituto Tlaxcalteca de Elecciones adoptó las medidas necesarias para garantizar la salud de quienes ahí colaboramos 
            y de quiénes acuden a nuestras instalaciones; así como la operatividad de este órgano.
        </p>
        <p>En el presente micrositio ponemos a tu disposición información sobre la actividad institucional durante esta etapa de emergencia sanitaria.</p>
        <div class="mx-auto w-25">
            <img src="static/media/icon1.png" class="img-fluid" alt="#QuedateEnCasa">
            <p class="Home__title">#QuedateEnCasa</p>
        </div>
    </div>
</div>

    <div class="Acuerdos">
        <div class="Acuerdos__container">
            <h3 class="bottom-title">AQUI VA A IR EL CUESTIONARIO.</h3>
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
                        <h3>
                            Datos generales
                        </h3>
                        <fieldset data-step="0">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" name="nombre" id="nombre" />
                                    <div class="invalid-feedback"></div>
                                </div>                                
                                <div class="form-select _country">
                                    <span class="_country_title">País</span>
                                    <div class="select-group">
                                        <select name="country" id="country">
                                            <option value=""></option>
                                            <option value="Vn">Vietnam</option>
                                            <option value="US">Estados Unidos</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <!-- div class="form-select">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                </div -->
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="email">Correo electrónico</label>
                                    <input type="email" name="email" id="email" autocomplete="on" />
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-select _daily_budget">
                                    <span class="_daily_budget_title">Ingresos mensuales</span>
                                    <div class="select-group">
                                        <select name="daily_budget" id="daily_budget">
                                            <option value=""></option>
                                            <option value="40">MXN $40</option>
                                            <option value="60">MXN $60</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input type="password" name="password" id="password" autocomplete="on" />
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>

                            <div class="form-check _checado">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term _checado_title"><span><span></span></span>Suscríbase al correo de noticias</label>
                            </div>
                        </fieldset>

                        <h3>
                            Tipo de cuarto
                        </h3>
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

                        <h3>
                            Opciones extras
                        </h3>
                        <fieldset data-step="2">
                            <div class="form-textarea">
                                <label for="room_description" class="radio-label">Descripción del cuarto</label>
                                <textarea name="room_description" id="room_description" placeholder="Ejemplo: El cuarto debe tener . . ."></textarea>
                                <div class="invalid-feedback"></div>
                            </div>
                        </fieldset>
                    </form>
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