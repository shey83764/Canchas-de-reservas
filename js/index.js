let inp_nombre_usuario = document.getElementById('usuario_C');

inp_nombre_usuario.addEventListener("change", verificarNombreUsuario);

function verificarNombreUsuario() {
    //obtenemos el valor del nombre de usuario
    let nombre_usuario = inp_nombre_usuario.value;
    
    //consulta asincronica
    fetch('verificacion.php', {
        method: 'POST',
        body: JSON.stringify({ 'usuario_C': nombre_usuario })
    })
    //el valor que vuelve del php es verdadero o falso
    .then(response => response.text())
    .then(data => {
        //informamos al usuario
        document.getElementById('msj').innerHTML = data
    });
}