//alert("llamada al archivo JS exitoso");
document.getElementById("myForm").reset();

function validacion() {
    var user = document.getElementById("nombre").value;
    var letras = /^[a-zA-Z]+$/;

    var usua = document.getElementById("usuario").value;
    var contra = document.getElementById("contrasena").value;
    var password = /^([a-z]+[0-9]+)|([0-9]+[a-z]+)/i;

    var otra = document.getElementById("otracontrasena").value;


    if (user == "" || !letras.test(user)) {
        $('#errorN').fadeIn();
        return false;
    } else {
        if (usua == "" || !letras.test(usua)) {
            $('#errorN').fadeOut();
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
