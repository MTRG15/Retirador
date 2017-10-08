
function validandoForms() {
    var mens = document.getElementById("mensaje");
    var x = document.forms["info"]["nombre"].value;
    if (x === "") {
        mens.innerHTML = "Debe colocar su nombre";
        document.getElementById("txtNombre").focus();
        return false;
    }
    x = document.forms["info"]["apellido"].value;
    if (x === "") {
        mens.innerHTML = "Debe colocar su apellido";
        document.getElementById("txtApellido").focus();
        return false;
    }
    x = document.forms["info"]["cedula"].value;
    if (x === "") {
        mens.innerHTML = "Debe colocar su cédula";
        document.getElementById("txtCedula").focus();
        return false;
    }
    x = document.forms["info"]["carrera"].value;
    if (x === "") {
        mens.innerHTML = "Debe colocar su carrera";
        document.getElementById("txtCarrera").focus();
        return false;
    }
    x = document.forms["info"]["semestre"].value;
    if (x === "") {
        mens.innerHTML = "Indique el máximo número de unidades a cursar";
        document.getElementById("txtSemestre").focus();
        return false;
    }

    x = document.getElementById("txtNombreA").value;
    if (x === "") {
        mens.innerHTML = "Indique el nombre de la asignatura";
        document.getElementById("txtNombreA").focus();
        return false;
    }
    x = document.getElementById("txtCodigo").value;
    if (x === "") {
        mens.innerHTML = "Indique el código de la asignatura";
        document.getElementById("txtCodigo").focus();
        return false;
    }
    x = document.getElementById("txtUnidades").value;
    if (x === "") {
        mens.innerHTML = "Indique el número de uc de la asignatura";
        document.getElementById("txtUnidades").focus();
        return false;
    }
}