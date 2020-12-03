"use strict";
let app = new Vue({
    el: '#vue-comment',
    data: {
        comentarios: [],
        admin: ''  
    },
    methods : {
        deleteComentario(id , comentarios){
            fetch('api/comentarios/' + id, {
                "method": "DELETE",
            })
            .then(response => {getComentarios(producto)})
            .catch(error => console.log(error))
            this.$delete(comentarios);
        },
    }
});


function getComentarios() {
    fetch("api/comentarios" )
    .then(response => response.json())
    .then(comment => app.comentarios = comment)
    .catch(error => console.log(error));
}


getComentarios();

document.querySelector("#form-comment").addEventListener('submit', addComentario);

function addComentario(e) {
    e.preventDefault();
    
    let comentarios = {
        id_usuario: document.querySelector("input[name=input_user]").value,  
        texto: document.querySelector("textarea[name=comentario]").value,
        puntaje: document.querySelector("select[name=puntaje]").value,
        id_cerveza: document.querySelector("input[name=id_cerveza]").value
    }
    fetch('api/comentarios', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},       
        body: JSON.stringify(comentarios) 
     })
     
     .then(response => response.json())
        .then(comment => app.comentarioss.push(comment))
        .catch(error => console.log(error));
    }
    