$(document).ready(function() {

    $("#modal").validate({
        rules: {
            nombre: {
                required: true,
                minlength: 2,
                maxlength: 10
            },
            email: {
                required: true,
                email: true
            },
            mensajes: {
                required: true,
                minlength: 5,
                maxlength: 100
            }

        },
        messages: {
            nombre: {
                required: "Campo obligatorio",
                minlength: "El nombre debe contener 'más de 2 caracteres",
                maxlength: "El nombre no debe contener más de 5 caracteres"
            },
            mensajes: {
                required: "Campo obligatorio",
                minlength: "El mensaje debe contener más de 5 caracteres",
                maxlength: "El mensaje no debe contener más de 100 caracteres"
            },
            noticias: "Acepte los mensajes"


        }});

    $("#guardar").on("click", function() {

        if ($("#modal").valid()) {

            $.ajax({
                url: 'rpc/rpc.php',
                type: 'POST',
                data: {
                    nombre: $("#nombre").val(),
                    email: $("#email").val(),
                    mensajes: $("#mensajes").val()

                }
            })
                    .done(function(msg) {
                $("#mensaje").html(msg);
                $("#modal").modal('hide');
            })
                    .fail(function(jHttp, textStatus, errorThrown) {
                $("#mensaje").html("Error: " + textStatus + ". " + errorThrown);
            })
                    .always(function() {
                console.log("complete");
            });
        }
    })

    $('#modal').on('hidden.bs.modal', function(e) {
        $("#modal")[0].reset();
    })
});


//$(document).ready(function ()
//{
//
//    $("#btn").on("click", function (ev) {
//        ev.preventDefault();
//        $.ajax({
//            url: 'rpc/rpc.php',
//            type: 'post',
//            data: {
//                nombre: $("#nombre").val()
//            },
//        })
//                .done(function (msg) {
//                    $("#mensaje").html(msg);
//                })
//                .fail(function (jHttp, textStatus, errorThrown) {
//                    $("#mensaje").html("Error: " + textStatus + "." + errorThrown);
//                })
//                .always(function () {
//                    console.log("complete");
//                });
//    })
//});

