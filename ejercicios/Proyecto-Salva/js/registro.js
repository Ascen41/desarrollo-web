function validar() {
    resultado = true;
    if (!validar_nombre()) {
        resultado = false;
    }
    if (!validar_apellido()) {
        resultado = false;
    }
    if (!validar_email()) {
        resultado = false;
    }
    if (!validar_password()) {
        resultado = false;
    }
    if (!validar_telefono()) {
        resultado = false;
    }
    if (!validar_date()) {
        resultado = false;
    }
    if (!validar_radio()) {
        resultado = false;
    }
    if (!validar_list()) {
        resultado = false;
    }
    if (!validar_checkbox()) {
        resultado = false;
    }
    return resultado;
}

function validar_nombre() {
    var result = true;
    var nom = document.getElementById("nombre").value;
    if (nom != "" && !(/^\s+$/.test(nom))) {
        document.getElementById("error_nombre").style.display = "none";
        document.getElementById("nombre").style.border = "2px solid green";
    } else {
        document.getElementById("error_nombre").style.display = "block";
        document.getElementById("nombre").style.border = "3px solid red";
        result = false;
    }
    return result;
}

function validar_apellido() {
    var resul = true;
    var apellido = document.getElementById("apellido").value;
    if (apellido != "" && !(/^\s+$/.test(apellido))) {
        document.getElementById("error_apellido").style.display = "none";
        document.getElementById("apellido").style.border = "2px solid green";
    } else {
        document.getElementById("error_apellido").style.display = "block";
        document.getElementById("apellido").style.border = "3px solid red";
        resul = false;
    }
    return resul;
}

function validar_email() {
    var resu = true;
    var correo = document.getElementById("email").value;
    if ((/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/.test(correo))) {
        document.getElementById("error_email").style.display = "none";
        document.getElementById("email").style.border = "2px solid green";
    } else {
        document.getElementById("error_email").style.display = "block";
        document.getElementById("email").style.border = "3px solid red";
        resul = false;
    }
    return resu;
}

function validar_password() {
    var res = true;
    var contrasenya = document.getElementById("contrasena").value;
    if (contrasenya.length >= 8) {
        var mayuscula = false;
        var minuscula = false;
        var numero = false;

        for (i = 0; i < contrasenya.length; i++) {
            if (contrasenya.charCodeAt(i) >= 65 && contrasenya.charCodeAt(i) <= 90) {
                mayuscula = true;
            } else if (contrasenya.charCodeAt(i) >= 97 && contrasenya.charCodeAt(i) <= 122) {
                minuscula = true;
            } else if (contrasenya.charCodeAt(i) >= 48 && contrasenya.charCodeAt(i) <= 57) {
                numero = true;
            }
        }
        if (mayuscula && minuscula && numero) {
            document.getElementById("error_password").style.display = "none";
            document.getElementById("contrasena").style.border = "2px solid green";
            res = true;
        } else {
            document.getElementById("error_password").style.display = "block";
            document.getElementById("contrasena").style.border = "3px solid red";
            res = false;
        }

    } else {
        document.getElementById("error_password").style.display = "block";
        document.getElementById("contrasena").style.border = "3px solid red";
        res = false;
    }
    return res;
}

function validar_telefono() {
    var resultad = true;
    var valor = document.getElementById("telefono").value;
    if (!(/^\+\d{2,3}\s\d{3}\-\d{2}\-\d{2}\-\d{2}$/.test(valor))) {
        resultad = false;
        document.getElementById("error_telefono").innerHTML = "*Formato incorrecto, se requiere +xx xxx-xx-xx-xx*";
        document.getElementById("error_telefono").style.display = "block";
        document.getElementById("telefono").style.border = "3px solid red";
    } else {
        document.getElementById("error_telefono").style.display = "none";
        document.getElementById("telefono").style.border = "1px solid green";
    }
    return resultad;
}

function validar_date() {
    var re = true;
    var data = document.getElementById("date").value;
    if (data != "" && !(/^\s+$/.test(data))) {
        document.getElementById("error_date").style.display = "none";
        document.getElementById("date").style.border = "2px solid green";
    } else {
        document.getElementById("error_date").style.display = "block";
        document.getElementById("date").style.border = "3px solid red";
        re = false;
    }
    return re;
}

function validar_list() {
    var select = false;
    var lista = document.getElementById("seleccion");
    var posicion = lista.selectedIndex;
    var opcionsele = lista.options[posicion];
    if (posicion != 0) {
        select = true;
        document.getElementById("error_selec").style.display = 'none';
        document.getElementById("seleccion").style.border = "1px solid green";
    } else {
        document.getElementById("error_selec").style.display = 'block';
        document.getElementById("seleccion").style.border = "3px solid red";
    }
    return select;
}

function validar_radio() {
    var seleccionado = false;
    var elementos = document.getElementsByName('sexo');
    for (var i = 0; i < elementos.length; i++) {

        if (elementos[i].checked) {
            seleccionado = true;
            document.getElementById("error_radio").style.display = 'none';
            break;
        }
    }
    if (!seleccionado) {
        document.getElementById("error_radio").style.display = 'block';
    }
    return seleccionado;
}

function validar_checkbox() {
    var seleccion = false;
    var elementos = document.getElementById('check');
    for (i = 0; i < elementos.length; i++) {
        if (elementos[i].checked) {
            seleccion = true;
            document.getElementById("error_checkbox").style.display = 'none';
            break;
        }
        if (!seleccion) {
            document.getElementById("error_checkbox").style.display = 'block';
        }
    }
    return seleccion;
}