{include file="header.tpl" }

<aside  id="descripcion" class="descripcion-cervezas">
            <table>
                <thead>
                    <tr>
                        <th>Color</th>
                        <th></th>
                    </tr>
                </thead>
                {foreach from=$colour item=c}
                    <tr> 
                    <td>{$c->nombre}</td>
                    
                  {*  <td><button><a href='edit/{$cerveza->id_cerveza}'>Editar</a></button></td>
                    <td><button><a href='eliminar/{$cerveza->id_cerveza}'>Borrar</a></button></td>
                    </tr>*}
                {/foreach}
                <tbody id="tabla" class="tbody"></tbody>
                

            </table>

            <form method="POST" action="insertColour" class="agregar-producto">
                <label>Pedido</label>
                <p> Color:
                    <input class="nombre" name="nombre" type="text" value="">
                </p>
                <button type="submit" class="enviarDatos">Insertar Color</button>
            </form>
{include file="footer.tpl" }