'use strict';

document.getElementById("comentarbtn").addEventListener("click", () => {comentar(recibircomentario())});

function comentar(data) {
    console.log('entre a la funcion');
    console.log(data);
    fetch("api/comentar",{
        method: 'POST',
        headers: {'Content-Type':'application/json'},
        mode: 'cors',
        body: JSON.stringify(data)
    }).then(response =>{
        if (response.status==200){
            console.log('VAMO CARAJO');
        }else{
            console.log('LPM :(');
        }
    }).catch(exception => console.log(exception));
}

function recibircomentario(){
   let username = document.querySelector("#username").innerHTML;
   let idlibro = document.querySelector("#idlibro").innerHTML;
   let comentario = document.getElementById("comentario").value;
   let calificacion = document.getElementById("calificacion").value;
   let data = {
       usuario: username,
       id_libro: idlibro,
       comentario: comentario,
       calificacion: calificacion
   }
   return data;
}