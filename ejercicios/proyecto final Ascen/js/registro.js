function minombre() {
    var res = false;
    var nombre = document.getElementById("lnombre").value;
    if (nombre != "" && !(/^\s+$/.test(nombre))) {
        res = true;
    } else {
        document.getElementById("nomerror").style.display = "block";
    }
    return res;
}

function miapellido() {
    var res = false;
    var apellido = document.getElementById("lapellidos").value;
    if (apellido != "" && !(/^\s+$/.test(apellido))) {
        res = true;
    } else {
        document.getElementById("aperror").style.display = "block";
    }
    return res;
}

function mitelefono() {
    var res = true;
    var numero = document.getElementById("ltelefono").value;
    if (!(/^\+\d{2,3}\s\d{3}\-\d{2}\-\d{2}\-\d{2}$/.test(numero))) {
        res = false;
        document.getElementById("telerror").style.display = "block";
    } else {
        res = true;
    }
    return res;
}

function micumple() {
    var res = false;
    var data = document.getElementById("lnat").value;
    if (data != "" && !(/^\s+$/.test(data))) {
        res = true
    } else {
        document.getElementById("daterror").style.display = "block";
    }
    return res;
}

function migenero() {
    res = false;
    opciones = document.getElementsByName("sexo");
    cantidad = opciones.length;
    for (var i = 0; i < cantidad; i++) {
        if (opciones[i].checked) {
            res = true;
            break;
        } else {
            document.getElementById("generror").style = "color:red; font-size:10px;display:block";
            res = false;
        }
    }
    return res;
}

function miemail() {
    var res = false;
    var correo = document.getElementById("correo").value;
    if ((/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/.test(correo))) {
        res = true;
    } else {
        document.getElementById("errormail").style.display = "block";
    }
    return res;
}

function mipassword() {
    var res = false;
    var password = document.getElementById("pass").value;
    if (password.length >= 8) {
        var mayusculas = false;
        var minusculas = false;
        var numero = false;

        for (i = 0; i < password.length; i++) {


            if (password.charCodeAt(i) >= 65 && contraseña.charCodeAt(i) <= 90) {
                mayusculas = true;
            } else if (password.charCodeAt(i) >= 97 && contrasenya.charCodeAt(i) <= 122) {
                minusculas = true;
            } else if (password.charCodeAt(i) >= 48 && contraseña.charCodeAt(i) <= 57) {
                numero = true;
            }
        }
        if (mayusculas && minusculas && numero) {
            res = true;
        } else {
            document.getElementById("errorpass").style.display = "block";
        }

    } else {
        document.getElementById("errorpass").style.display = "block";
    }
    return res;
}

function sutelefono() {
    var res = true;
    var numero = document.getElementById("otelefono").value;
    if (!(/^\+\d{2,3}\s\d{3}\-\d{2}\-\d{2}\-\d{2}$/.test(numero))) {
        res = false;
        document.getElementById("telrror").style.display = "block";
    } else {
        res = true;
    }
    return res;
}

function miaceptar() {
    var res = false;
    var caja = document.getElementById("valido");
    for (i = 0; i < caja.length; i++) {
        if (caja[i].checked) {
            res = true;
            break;
        } else {
            document.getElementById("errorval").style.display = 'block';
        }
    }
    return res;
}

function validar() {

    minombre();
    miapellido();
    mitelefono();
    micumple();
    migenero();
    miemail();
    mipassword();
    sutelefono();
    miaceptar();

    if (minombre() && miapelido() && mitelefono() && micumple() && migenero() && miemail() && mipassword() && sutelefono() && miaceptar()) {
        return true;
    } else {
        return false;
    }
}