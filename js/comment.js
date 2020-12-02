"use strict";
alert("hola");
let app = new Vue({
    el: '#vue-comment',
    data: {
        comentarios: [],
        admin: ''  
    }
});


document.addEventListener('DOMContentLoaded', () => {
    getComentarios();

    document.querySelector('#form-comment').addEventListener('submit', e => {
        // evita el envio del form default
        e.preventDefault();

        addComentario();
    });

});

function getComentarios($id_cerveza) {
    fetch('api/comentarios')
        .then(response => response.json())
        .then(comentario => app.comentarios = comentario)
        .catch(error => console.log(error));
}

function addComentario() {
    console.log("entre");

    const comentario = {
        id_usuario: document.querySelector("input[name=id_usuario]").value,  
        texto:  document.querySelector("textarea[name=comentario]").value,
        puntaje:  document.querySelector("select[name=puntaje]").value,
        id_cerveza: document.querySelector("input[name=id_cerveza]").value  
    }

    fetch('api/comentarios', {
        method: 'POST',
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(comentario)
    })
        .then(response => response.json())
        .then(comentario=> app.comentarios.push(comentario))
        .catch(error => console.log(error));

}






/*
// CARGA INICIAL
document.addEventListener('DOMContentLoaded', () => {
    
    getComentarios(id_cerveza);
    document.querySelector('#form-comentario').addEventListener('submit', e => {   
    // Evita el envio del formulario por default
    e.preventDefault();
    addComentario();
});
});

// GET COMENTARIOS 
function getComentarios(id_cerveza) {
    fetch('api/comentarios/' + id_cerveza)
    .then(response => response.json())    
    .then(comentario => render = comentario)  
    .catch(error => console.log(error));
}

// ADD COMENTARIO
function addComentario(){
    //e.preventDefault();
    console.log("hola")
    const comentario = {
        texto:  document.querySelector("textarea[name=comentario]").value,
        puntaje:  document.querySelector("input[name=puntaje]").value,
        id_usuario:  document.querySelector("input[name=id_usuario]").value,
        id_cerveza:  document.querySelector("input[name=id_pedido]").value
    }
    fetch('api/comentarios', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify(comentario)
    })
    .then(response => response.json())
    .then(comentario => console.log(comentario))
    .catch(error => console.log(error));

}

function renderComentario($id_cerveza){
    const comentario
}
*/