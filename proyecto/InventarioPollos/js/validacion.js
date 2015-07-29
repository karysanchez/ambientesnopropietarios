//alert("llamada al archivo JS exitoso");
document.getElementById("myForm").reset();

function validacion() {
    var user = document.getElementById("nombre").value;
    var letras = /^[a-zA-Z]+$/;

    var mail = document.getElementById("email").value;
    var expresa = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    var tel = document.getElementById("telefono").value;
    var numeros = /^[0-9]+$/;

    var direc = document.getElementById("direccion").value;
    var usua = document.getElementById("usuario").value;
    var contra = document.getElementById("contrasena").value;
    var password = /^([a-z]+[0-9]+)|([0-9]+[a-z]+)/i;

    var otra = document.getElementById("otracontrasena").value;


    if (user == "" || !letras.test(user)) {
        $('#errorN').fadeIn();
        return false;
    } else {
        if (mail == "" || !expresa.test(mail)) {
            $('#errorN').fadeOut();
            $('#errorE').fadeIn();
            return false;
        } else {
            if (tel == "" || !numeros.test(tel)) {
                $('#errorE').fadeOut();
                $('#errorT').fadeIn();
                return false;
            } else {
                if (direc == "") {
                    $('#errorT').fadeOut();
                    $('#errorD').fadeIn();
                    return false;
                } else {
                    if (usua == "" || !letras.test(usua)) {
                        $('#errorD').fadeOut();
                        $('#errorUs').fadeIn();
                        return false;
                    } else {
                        if (contra == "" || !password.test(contra)) {
                            $('#errorUs').fadeOut();
                            $('#errorC1').fadeIn();
                            return false;
                        } else {
                            if (otra == "" || otra != contra) {
                                $('#errorC1').fadeOut();
                                $('#errorC2').fadeIn();
                                return false;
                            }
                        }
                    }
                }
            }
        }
    }


}