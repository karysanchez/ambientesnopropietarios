//$(document).ready(function () {
//
//    $("#myForm").validate({
//        rules: {
//            nombre: {
//                required: true,
//                minlength: 5,
//                maxlength: 10,
//            },
//            usuario: {
//                required: true,
//                minlength: 5,
//                remote: {
//                    url: 'usuariovalido.php',
//                    type: 'POST',
//                    data: {
//                        usuario: function () {
//                            return $('#usuario').val();
//                        },
//                    }
//                }
//            },
//            contrasena: {
//                required: true,
//                minlength: 6
//            },
//            otracontrasena: {
//                required: true,
//                minlength: 6,
//                equalTo: "#contrasena"
//            }
//        },
//        messages: {
//            nombre: {
//                required: "Campo obligatorio",
//                minlength: "El nombre debe contener 'más de 5 caracteres",
//                maxlength: "El nombre no debe contener más de 10 caracteres"
//            },
//            usuario: {
//                required: "Introducir un usuario",
//                minlength: "El usuario debe tener por lo menos 5 caracteres",
//                remote: "ya existe el usuario"
//            },
//            contrasena: {
//                required: "Requiere una contraseña",
//                minlength: "La contraseña debe tener por lo menos numeros y letras caracteres"
//            },
//            otracontrasena: {
//                required: "Debe confirmar la contraseña",
//                minlength: "La contraseña debe tener por lo menos numeros y letras caracteres",
//                equalTo: "La contraseña no coincide con la ingresada"
//            }
//        }
//    });
//
//    $("#btn").on("click", function (ev) {
//        ev.preventDefault();
//
//        if ($("#myform").valid()) {
//
//            $.ajax({
//                url: './registro.php',
//                type: 'post',
//                data: {
//                    nombre: $("#nombre").val(),
//                    usuario: $("#usuario").val(),
//                    contrasena: $("#contrasena").val(),
//                    otracontrasena: $("#otracontrasena").val()
//                }
//            })
//                    .done(function (msg) {
//                        $("#mensaje").html(msg);
//                        $("#ventana-modal").modal('hide');
//                    })
//                    .fail(function (jHttp, textStatus, errorThrown) {
//                        $("#mensaje").html("Error: " + textStatus + ". " + errorThrown);
//                    })
//                    .always(function () {
//                        console.log("complete");
//                    });
//        }
//    })
//
//    $('#myForm').on('hidden.bs.modal', function (e) {
//        $("#myform")[0].reset();
//    })
//});