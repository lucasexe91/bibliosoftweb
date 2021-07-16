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
                location.reload();
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

    //borra un comentario por id
    function borrarcomentario(commentID) {
        fetch('api/borrarcomentario/'+commentID,{
            method: 'DELETE',
            mode: 'cors'
        }) 
        .then( response =>{ 
            if (response.status == 200)
            {
                alert('El comentario fue eliminado');
                window.reload();
            }else{
                alert('El comentario no pudo ser eliminado');
            }
        })
        .catch(exception => console.log(exception));
    }

    //carga los comentarios por id de un libro.
    function cargarcomentarios(){
        fetch('api/getcommentsbybook/'+idlibro,{
            method: 'GET',
            mode: 'cors',
            headers: {'Content-Type':'application/json'},
            body: JSON.stringify(idlibro)
        })
        .then( response =>{
            if (response.status==200){
                return response.json();
                
            }else{
                alert('No se pudieron cargar los comentarios, intente mas tarde');
            }
        })
        .catch(exception => console.log(exception));
    }