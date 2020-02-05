function minombre() {
    var valor = document.getElementById("lnombre").value;

    if (valor.length >= 1 && !(/^\s+$/.test(valor))) {
        document.getElementById("nomerror").style.display = "none";
        console.log("nombre Entra true");
        return true;
    } else {
        document.getElementById("nomerror").style.display = "block";
        console.log("nombre Entra false");
        return false;
    }
}

function miapellido() {
    var valor = document.getElementById("lapellidos").value;


    if (valor.length >= 1 && !(/^\s+$/.test(valor))) {
        document.getElementById("aperror").style.display = "none";
        console.log("nombre Entra true");
        return true;
    } else {
        document.getElementById("aperror").style.display = "block";
        console.log("nombre Entra false");
        return false;
    }
}

function midireccion() {
    var valor = document.getElementById("ldireccion").value;
    if (isNaN(valor) && (valor.length >= 1) && !(/^\s+$/.test(valor))) {
        document.getElementById("direrror").style.display = "none";
        console.log("nombre Entra true");
        return true;
    } else {
        document.getElementById("dierror").style.display = "block";
        return false;
    }
}

function mitelefono() {
    var valor = document.getElementById("ltelefono").nodeValue;
    if (!/^\+\d{2}\s\d{3}-\d{2}-\d{2}-\d{2}$/.test(valor)) {
        document.getElementById("telerror").style.display = "none";
        console.log("Entra true");
        return true;
    } else {
        document.getElementById("telerror").style.display = "block";
        console.log("Entra false");
        return false;
    }
}

function micumple() {
    var RegExPattern = /^\d{1,2}\/\d{1,2}\/\d{2,4}$/;
    if ((valor.match(RegExPattern)) && (valor != '')) {
        return true;
    } else {
        console.log("Entra false");
        return false;
    }
}

function migenero() {
    var seleccionado = false;
    var elementos = document.getElementsByName("sexo")
    for (i = 0; i < elementos.length; i++) {
        if (elementos[i].checked) {
            seleccionado = true;
            document.getElementById("error_radio").style.dysplay = "none";
            break;
        }
    }
    if (!seleccionado) {
        document.getElementById("error_radio")
            .style.dysplay = "block";
    }
    return seleccionado;
}

function miprofesion() {
    var seleccionado = false;
    var lista = document.getElementById("lsel");
    var indiceseleccionado = lista.selectedIndex;
    if (indiceseleccionado != 0) {
        seleccionado = true;
        document.getElementById("error_profesion").style.display = "none";
    } else {
        document.getElementById("error_profesion").style.display = "block";
    }
    return seleccionado;
}

function sutelefono() {
    var valor = document.getElementById("otelefono").nodeValue;
    if (!/^\+\d{2}\s\d{3}-\d{2}-\d{2}-\d{2}$/.test(valor)) {
        document.getElementById("telerror2").style.display = "none";
        console.log("Entra true");
        return true;
    } else {
        document.getElementById("telerror2").style.display = "block";
        console.log("Entra false");
        return false;
    }
}

function miaceptar() {
    var seleccionado = false;
    if (document.getElementById("laceptar").checked) {
        seleccionado = true;
    } else {
        alert("Debes aceptar las condiciones");
    }
    return seleccionado
}

function validar() {

    minombre();
    miapellido();
    midireccion();
    mitelefono();
    micumple();
    migenero();
    miprofesion();
    sudireccion();
    sutelefono()
    miaceptar()

    if (minombre() && miapelido() && midirecciion()() && mitelefono() && micumple() && migenero() && miprofesion() && sudireccion() && sutelefono() && miaceptar()) {
        return true;
    } else {
        return false;
    }
}