'use strict';

document.getElementById("comentarbtn").addEventListener("click", () => {comentar(recibircomentario())});

    //Post del Json para comentario nuevo
    function comentar(data) {
        fetch("api/comentar",{
            method: 'POST',
            headers: {'Content-Type':'application/json'},
            mode: 'cors',
            body: JSON.stringify(data)
        }).then(response =>{
            if (response.status==200){
                alert('Su comentario ha sido publicado');
            }else{
                alert('No se ha podido comentar');
            }
        }).catch(exception => console.log(exception));
    }

    //Json de un comentario nuevo
    function recibircomentario(){
        let username = document.querySelector("#username").innerHTML;
        let idlibro = document.querySelector("#idlibro").innerHTML;
        let comentario = document.getElementById("comentario").value;
        let calificacion = document.getElementById("nota").value;
        
        let data = {
            "usuario": username,
            "id_libro": idlibro,
            "comentario": comentario,
            "calificacion": calificacion
        }

        return data;

    }

    function borrarcomentario(commentID) {
        fetch('api/borrarcomentario/'+commentID,{
            method: 'DELETE',
            mode: 'cors'
        }) 
        .then( response =>{ 
            if (response.status == 200)
            {
                alert('El comentario fue eliminado');
            }else{
                alert('El comentario no pudo ser eliminado');
            }
        })
        .catch(exception => console.log(exception));
    }