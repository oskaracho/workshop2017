$(document).ready(function() {



    var email = document.getElementById("emaill1");

    email.addEventListener("keyup", function (event) {
        if (email.validity.typeMismatch) {
            email.setCustomValidity("¡Yo esperaba una dirección de correo, cariño!");
        } else {
            email.setCustomValidity("");
        }
    });

});
