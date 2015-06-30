
function validar(form) {
    msg_error = ""

    msg_error += validarNombre(form.nombre.value)
    msg_error += validarApellido(form.apellido.value)
    msg_error += validarFechanacimiento(form.fechanacimiento.value)
    msg_error += validarDireccion(form.direccion.value)
    msg_error += validarTelefono(form.telefono.value)
    msg_error += validarEstadocivil(form.estadocivil.value)
    msg_error += validarDepartamento(form.departamento.value)

    if (msg_error == "")
        return true;
    else {
        var mensaje = msg_error

        document.getElementById("text").innerHTML = mensaje
        return false
    }
}

function validarNombre(valor) {
    if (valor == "")
        return "Ingrese el nombre.\n"
    else if (!valor.match(/^[a-zA-Z]*$/))
        return "Ingrese solo letras"

    return ""
}

function validarApellido(valor) {
    if (valor == "")
        return "Ingrese el apellido.\n"
    else if (!valor.match(/^[a-zA-Z]*$/))
        return "Ingrese solo letras"

    return ""
}

function validarFechanacimiento(valor) {
    if (valor == "")
        return "Ingrese la fecha.\n"

    return ""
}

function validarDireccion(valor) {
    if (valor == "")
        return "Ingrese la direccion.\n"
    else if (!valor.match(/^[a-zA-Z]*$/))
        return "Ingrese solo letras"

    return ""
}

function validarTelefono(valor) {
    if (isNaN(valor))
        return "El telefono debe ser un número.\n"
    else if (valor.length < 7 || valor.length > 10)
        return "El Numero debe contener entre 7 y 10 caracteres.\n"
    return ""
}

function validarEstadocivil(valor) {
    if (valor == "")
        return "Ingrese su estado civil.\n"
    else if (!valor.match(/^[a-zA-Z]*$/))
        return "Ingrese solo letras"

    return ""
}

function validarDepartamento(valor) {
    if (isNaN(valor))
        return "El Departamento debe ser un número.\n"
    else if (valor < 1 || valor > 50)
        return "El numero de departamento debe estar entre 1 y 50.\n"

    return ""

}



