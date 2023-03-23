// Función para realizar el envío
function realizarEnvio() {
    var l1;
    l1 = document.getElementById("lugarEnvio").value;

    var lugarEnvio = document.getElementById("lugarEnvio").value;
    // guardar la información de envío en la base de datos
    // mostrar mensaje de éxito
    alert("El envío se realizará por servientrega a la ruta especificada: " + " " + l1);
    closeModal(); // cerrar la ventana modal
}