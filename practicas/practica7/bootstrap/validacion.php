
<?php
/* CONEXION CON LA BASE DE DATOS */
$conn = new mysqli($host, $usuario, $contrasena, $bdd);
if ($conn->connect_error)
    die($conn->connect_error);
?>

<html>
    <head>
        <title>An Example Form</title>
    
        <script>

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

                return ""
            }

            function validarApellido(valor) {
                if (valor == "")
                    return "Ingrese el apellido.\n"

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

                return ""
            }

            function validarDepartamento(valor) {
                if (isNaN(valor))
                    return "El Departamento debe ser un número.\n"
                else if (valor < 1 || valor > 50)
                    return "El numero de departamento debe estar entre 1 y 50.\n"

                return ""
            }

        </script>
    </head>
    <body>
        <table border="0" cellpadding="2" cellspacing="5" bgcolor="#eeeeee">
            <th colspan="2" align="center">VALIDACION FORMULARIO</th>
            <form>
                <tr>
                    <td>Nombre</td>
                    <td>
                        <input type="text" maxlength="32" name="nombre">
                    </td>
                </tr>
                <tr>
                    <td>Apellido</td>
                    <td>
                        <input type="text" maxlength="32" name="surname">
                    </td>
                </tr>
                <tr>
                    <td>Fecha nacimiento</td>
                    <td>
                        <input type="text" maxlength="16" name="username">
                    </td>
                </tr>
                <tr>
                    <td>Direccion</td>
                    <td>
                        <input type="text" maxlength="12" name="password">
                    </td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td>
                        <input type="text" maxlength="3" name="age">
                    </td>
                </tr>
                <tr>
                    <td>Estado Civil</td>
                    <td>
                        <input type="text" maxlength="64" name="email">
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>Departamento</td>
                    <td>
                        <input type="text" maxlength="64" name="email">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Signup">
                    </td>
                </tr>
            </form>
        </table>
    </body>
</html>