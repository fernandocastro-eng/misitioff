window.addEventListener("load", iniciarf);
function iniciarf() {
    vcosto = document.getElementById("costo");
    vporcentaje = document.getElementById("porcentaje");
    vimage = document.getElementById("imagen");

    vcosto.addEventListener("input", mostrarpventa);
    vporcentaje.addEventListener("input", mostrarpventa);
    vimage.addEventListener("change", mostrarImagen);
}

function calcularPorcentaje(costo, porcentaje) {
    let TantoTotal = parseFloat(costo) * (parseFloat(porcentaje) / 100);
    return parseFloat(costo) + TantoTotal;
}

function mostrarpventa() {
    let pventaInput = document.getElementById("pventa");
    if (vcosto.value != "" && vporcentaje.value != "") {
        let resultado = calcularPorcentaje(vcosto.value, vporcentaje.value);
        pventaInput.value = resultado.toFixed(2);
    } else {
        pventaInput.value = "";
    }
}

function mostrarImagen() {
    let verimagen = document.querySelector('img');
    let archivo = vimage.files[0];
    
    if (archivo) {
        let leerarchivo = new FileReader();
        leerarchivo.onload = function(e) {
            verimagen.src = e.target.result;
        };
        leerarchivo.readAsDataURL(archivo);
    } else {
        verimagen.src = "";
    }
}