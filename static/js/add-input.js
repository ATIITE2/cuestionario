// ------------ AGREGAR CAMPO OTRO GENERO ------------
const generoSelect = document.getElementById("genero");
const otroGeneroContainer = document.getElementById("otro_genero_container");
const otroGeneroInput = document.getElementById("otro_genero");
const telefonoInput = document.getElementById("telefono");
var telefonoValue = document.getElementById("telefono").value;
const msjTelefonoInput = document.getElementById("msj_telefono");

generoSelect.addEventListener("change", function () {
  if (generoSelect.value === '3') {
    otroGeneroContainer.style.display = "block";
    otroGeneroInput.setAttribute("required", "required");
  } else {
    otroGeneroContainer.style.display = "none";
    otroGeneroInput.removeAttribute("required");
    otroGeneroInput.value = "";
  }
});


telefonoInput.addEventListener("keyup", function () {
  var num=telefonoValue;
  if (isNaN(num) || (num.length != 10)) {
    telefonoInput.style.display = "block";
    telefonoInput.setAttribute("required", "required");
    var msj ="";
    if(isNaN(num)) msj="El contacto debe ser numérico";
    if(num.length != 10) msj="El número de contacto debe ser de 10 caracteres";
    msjTelefonoInput.innerHTML = msj;
  } else {
    telefonoInput.style.display = "none";
    telefonoInput.removeAttribute("required");
    msjTelefonoInput.innerHTML = "";
  }
});

// ------------ AGREGAR CAMPO QUE DISCAPACIDAD O VINCULO ------------
const discapacidadSelect = document.getElementById("discap_permanente");
const siDiscapacidadContainer = document.getElementById(
  "si_discapacidad_container"
);
const noDiscapacidadContainer = document.getElementById(
  "no_discapacidad_container"
);
const radiosDiscapacidad = document.querySelectorAll(
  'input[name="tipo_discapacidad"]'
);
const radiosVinculoPersona = document.querySelectorAll(
  'input[name="vinculo_persona_disc"]'
);

discapacidadSelect.addEventListener("change", function () {
  switch (discapacidadSelect.value) {
    case "si":
      siDiscapacidadContainer.style.display = "block";
      noDiscapacidadContainer.style.display = "none";
      radiosDiscapacidad.forEach(function (radioDiscapacidad) {
        radioDiscapacidad.setAttribute("required", "required");
      });
      radiosVinculoPersona.forEach(function (radioVinculoPersona) {
        radioVinculoPersona.removeAttribute("required");
        radioVinculoPersona.checked = false;
      });
      break;
    case "no":
      siDiscapacidadContainer.style.display = "none";
      noDiscapacidadContainer.style.display = "block";
      radiosDiscapacidad.forEach(function (radioDiscapacidad) {
        radioDiscapacidad.removeAttribute("required");
        radioDiscapacidad.checked = false;
      });
      radiosVinculoPersona.forEach(function (radioVinculoPersona) {
        radioVinculoPersona.setAttribute("required", "required");
      });
      break;
  }
});

// ------------ ES REPRESENTANTE? ------------
const radioRepresentante = document.getElementById("integrante");
const integranteContainer = document.getElementById("integrante_container");
const nombreIntegracionInput = document.getElementById("nombre_integracion");

radioRepresentante.addEventListener("change", function () {
  if (radioRepresentante.checked) {
    integranteContainer.style.display = "block";
    nombreIntegracionInput.setAttribute("required", "required");
  } else {
    integranteContainer.style.display = "none";
  }
});

// ------------ ACCIONES PROMOVER PARTICIPACION ------------
var checkboxOtra = document.getElementById("opcion5");
var otraTextAreaContainer = document.getElementById(
  "acciones_interes_container"
);
var otraAccion = document.getElementById("otra_accion");

checkboxOtra.addEventListener("change", function () {
  if (checkboxOtra.checked === true) {
    otraTextAreaContainer.style.display = "block";
    otraAccion.setAttribute("required", "required");
  }
  if (checkboxOtra.checked === false) {
    otraTextAreaContainer.style.display = "none";
    otraAccion.removeAttribute("required");
    otraAccion.value = "";
  }
});

// ------------ OPINION ACCION AFIRMATIVA ------------
const opinionSelect = document.getElementById("opinion_accion_afirmativa");
const opinioContainer = document.getElementById(
  "opinion_accion_afirmativa_container"
);
const opinionInput = document.getElementById("completa_opinion");

opinionSelect.addEventListener("change", function () {
  if (opinionSelect.value === "si" || opinionSelect.value === "no") {
    opinioContainer.style.display = "block";
    opinionInput.setAttribute("required", "required");
  } else {
    opinioContainer.style.display = "none";
    opinionInput.removeAttribute("required");
    opinionInput.value = "";
  }
});

// ------------ ACREDITAR DISCAPACIDAD ------------
const acreditarSelect = document.getElementById("acreditar_discapacidad");
const acreditarContainer = document.getElementById(
  "acreditar_discapacidad_container"
);

acreditarSelect.addEventListener("change", function () {
  if (acreditarSelect.value === "si") {
    acreditarContainer.style.display = "block";
  }
  if (acreditarSelect.value === "no") {
    acreditarContainer.style.display = "none";
  }
});
