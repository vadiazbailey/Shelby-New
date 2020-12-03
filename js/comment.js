"use strict";
let app = new Vue({
    el: '#vue-comment',
    data: {
        comentarios: [],
        admin: ''  
    },
    methods: {        
        remove: function(id_comentario){
            deleteComentario(id_comentario);
        }
    }
});

document.addEventListener('DOMContentLoaded', () => {
    //let id_cerveza = document.querySelector("input[name=id_cerveza]").value;
    
    getComentarios();
    document.querySelector('#form-comment').addEventListener('submit', e => {   
    
    
    e.preventDefault();
    addComentario();
});
});

   
function getComentarios() {
    fetch('api/comentarios')
    .then(response => response.json())
    .then(comment => app.comentarios = comment)
    .catch(error => console.log(error));
}



function addComentario() {
    //e.preventDefault();
    
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

    function deleteComentario(id_comentario) {
        let id_cerveza = document.querySelector("input[name=id_cerveza]").value;
        fetch('api/comentario/' + id_comentario, {
            method: 'DELETE',
            headers: {"Content-Type": "application/json"},
        })
        .then(response => {
            getComentarios(id_cerveza); 
        })
        .catch(error => console.log(error));
    }
    