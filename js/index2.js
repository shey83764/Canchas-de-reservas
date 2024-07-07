//buscando el obj boton 
let fecha=document.getElementById('fecha')

//agrego un evento y le digo que funcion ejecuta
fecha.addEventListener("change", buscar )

//declaro funcion
function buscar(){
    let fecha = document.getElementById('fecha').value
    console.log(fecha)

    fetch('veri_hora.php', {
        method: 'POST',
        body: JSON.stringify(
        {
            'fecha':fecha
        })
    })

    .then(function(data){

        return data.text();
    })
    .then(respuesta => { 

        //console.log(myJson);
        document.getElementById('hora').innerHTML=respuesta 
    });
}