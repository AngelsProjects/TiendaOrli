$(document).ready(function () {
    $("#loginForm").bind("submit", function () {
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            beforeSend: function () {
                $("#loginForm button[type=submit]").html("Confirmando...");
                $("#loginForm button[type=submit]").attr("disabled", "disabled");
            },
            success: function (response) {
                if (response.estado === "true") {
                    swal({
                        title: "Iniciando sesion!",
                        type: "success",
                        text: "Redireccionando",
                        timer: 5000,
                        showConfirmButton: false,
                        showLoaderOnConfirm: true
                    }, function () {
                        window.location.href = "start.php";
                    });
                } else {
                    swal({
                        title: "Oops...",
                        type: "error",
                        text: "Usuario o contrasena incorrectos!",
                        timer: 5000,
                        showConfirmButton: false
                    });
                }
                $("#loginForm button[type=submit]").html("Iniciar sesion");
                $("#loginForm button[type=submit]").removeAttr("disabled");
            }, error: function () {
                swal({
                    title: "Oops...",
                    type: "error",
                    text: "Usuario o contrasena incorrectos!",
                    timer: 5000,
                    showConfirmButton: false
                });
                $("#loginForm button[type=submit]").html("Iniciar sesion");
                $("#loginForm button[type=submit]").removeAttr("disabled");
            }
        });
        return false;
    });
});