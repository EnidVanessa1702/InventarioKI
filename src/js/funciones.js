function validarFormVacio(formulario) {
    datos = $('#' + formulario).serialize();
    d = datos.split('&');
    vacios = 0;
    for (i = 0; i < d.length; i++) {
        controles = d[i].split("=");
        if (controles[1] == "A" || controles[1] == "") {
            vacios++;
            var formPasswordToggleInput = document.getElementById(controles[0]);
            formPasswordToggleInput.style.cssText = 'border-color: red';
        }
    }
    return vacios;
}

function validarFormVacioTable(formulario) {
    datos = $('#' + formulario).serialize();
    d = datos.split('&');
    vacios = 0;
    for (i = 0; i < d.length; i++) {
        controles = d[i].split("=");
        if (controles[1] == "A" || controles[1] == "") {
            vacios++;
            var formPasswordToggleInput = document.getElementById(controles[0]);
        }
    }
    return vacios;
}