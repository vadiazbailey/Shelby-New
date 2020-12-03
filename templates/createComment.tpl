{include file="header.tpl" }
<div class="container">
                <form class="form-comment" id="form-comment" action="insert" method="POST">
                    <p>¡Queremos escuchar tu opinion!</p>
                    <div class="form-group">
                        <label for="user">Usuario</label>
                        <input class="form-control" id="user" name="input_user" aria-describedby="emailHelp">
                       
                    </div>
                    <div class="form-group">
                    <textarea name="comentario" rows="10" cols="50">Write something here</textarea>
                    </div>
                    <div>
                    <label>Puntaje</label>
                    <select name="puntaje">
                    <option value="value1">1</option> 
                    <option value="value2">2</option>
                    <option value="value3">3</option>
                    <option value="value3">4</option>
                    <option value="value3">5</option>
                    </select>
                    </div>
                  
                    <input id="id_cerveza" name="id_cerveza" type="hidden" value="{$cerveza->id_cerveza}">
                   
                    <input id="id_comentario" name="id_comentario" type="hidden" value="{$comentario->id_comentario}">
                    <button type="submit">Agregar</button>
                    </form>
 </div>
 <div>
 {include file="./vue/comment.vue"}
 </div>
<script src="./js/comment.js"></script>
{include file="footer.tpl" }