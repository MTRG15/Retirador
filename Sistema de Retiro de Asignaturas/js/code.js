
function validandoForms() {
    var x = document.forms["info"]["nombre"].value;
    if (x == "") {
        alert("Debe colocar su nombre");
        document.getElementById("txtNombre").focus();
        return false;
    }
    x = document.forms["info"]["apellido"].value;
    if (x == "") {
        alert("Debe colocar su apellido");
        document.getElementById("txtApellido").focus();
        return false;
    }
    x = document.forms["info"]["cedula"].value;
    if (x == "") {
        alert("Debe colocar su cedula");
        document.getElementById("txtCedula").focus();
        return false;
    }
    x = document.forms["info"]["carrera"].value;
    if (x == "") {
        alert("Debe colocar la carrera que cursa");
        document.getElementById("txtCarrera").focus();
        return false;
    }
    x = document.forms["info"]["semestre"].value;
    if (x == "") {
        alert("Debe colocar el semestre con mas materias inscritas");
        document.getElementById("txtSemestre").focus();
        return false;
    }

    x = document.forms["asig"]["nombreA"].value;
    if (x == "") {
        alert("Debe colocar el nombre de la asignatura a retirar");
        document.getElementById("txtNombreA").focus();
        return false;
    }
    x = document.forms["asig"]["codigo"].value;
    if (x == "") {
        alert("Debe colocar el codigo de la asignatura a retirar");
        document.getElementById("txtCodigo").focus();
        return false;
    }
    x = document.forms["asig"]["unidades"].value;
    if (x == "") {
        alert("Debe colocar el numero de unidades de credito de la asignatura a retirar");
        document.getElementById("txtUnidades").focus();
        return false;
    }
     x = document.forms["asig"]["motivo"].value;
    if (x == "") {
        alert("Debe colocar el motivo de retiro");
        document.getElementById("txtMotivo").focus();
        return false;
    }
}