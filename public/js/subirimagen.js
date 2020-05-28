function validarImagen(obj) {
    var uploadFile = obj.files[0];

    if (!window.FileReader) {
        alert("El navegador no soporta la lectura de archivos");
        return;
    }

    if (!/\.(jpg|png|gif)$/i.test(uploadFile.name)) {
        return false;
    } else {
        var img = new Image();
        img.onload = function() {
            if (uploadFile.size > 20000) {
                return false;
            } else {
                return true;
            }
        };
    }
}

function readImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $("#blah").attr("src", e.target.result); // Renderizamos la imagen
        };
        reader.readAsDataURL(input.files[0]);
    }
}
