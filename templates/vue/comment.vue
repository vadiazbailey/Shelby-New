
{literal}
<section >
    <div id="vue-comment">  
        <table class="comment-tabla"> 
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Comentario</th>
                    <th>Puntaje</th>
                    <th>id_comentario</th>
                    <th>id_cerveza</th>
                    <th v-if="admin == 'true'">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="comentario in comentarios">     
                    <td>{{ comentario.id_usuario }}</td>
                    <td>{{ comentario.texto }}</td>
                    <td>{{ comentario.puntaje}}</td>
                    <td>{{ comentario.id_comentario}}</td>
                    <td>{{ comentario.id_cerveza}}</td>
                    <td v-if="admin == 'true'">
                        <button v-on:click="eliminar"> Eliminar</button>
                    </td> 
                </tr>
            </tbody id="tabla">
        </table>
        
        
    </div> 
</section>  
{/literal}