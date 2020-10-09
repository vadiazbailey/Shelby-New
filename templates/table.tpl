{include file="header.tpl" }

        <aside  id="descripcion" class="descripcion-cervezas">
            <table>
                <thead>
                    <tr>
                        <th>Cerveza</th>
                        <th>Volumen</th>
                        <th>Graduacion alcoholica</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th></th>
                        

                    </tr>
                </thead>
                {foreach from=$cervezas item=cerveza}
                    <tr> 
                    <td>{$cerveza->estilo}</td>
                    <td>{$cerveza->volumen}</td>
                    <td>{$cerveza->graduacion_alcoholica}</td>
                    <td>{$cerveza->precio}</td>
                    <td>{$cerveza->cantidad}</td>
                    <td><button><a href='edit/{$cerveza->id_cerveza}'>Editar</a></button></td>
                    <td><button><a href='eliminar/{$cerveza->id_cerveza}'>Borrar</a></button></td>
                    </tr>
                {/foreach}
                <tbody id="tabla" class="tbody"></tbody>
                

            </table>

            <form method="POST" action="insertBeer" class="agregar-producto">
                <label>Agregue el producto que desee</label>
                <p> Cerveza:
                    <input type="text" name="cerveza" value="">
                </p

                <p>Volumen:
                    <input type="number" name="volumen" value="">
                </p>
                <p>
                Graduacion alcoholica:
                    <input type="number" name="graduacion" value="">
                </p>
                <p>
                    Precio:
                    <input type="number" name="precio" value="">
                   
                </p>
                <p>
                    Cantidad:
                    <input type="number" name="cantidad" value="">
                    
                </p>

                <p>
                    Color:
                    <select name="color">
                 {foreach from=$colores item=color }
                    <option value="{$color->id_color}">{$color->nombre}</option>
                 {/foreach}
                </select>
                
                </p>


                
                <button id="btn-enviar" type="button">Enviar</button>
                <button id="btn-borrar" type="button">Borrar</button>
                

         
                
            </form>




            <figure>
                <a href="#menu-cervezas"><img src="imagenes/menu.png" alt=""></a>
            </figure>


        </aside>
    </article>

{include file="cervezas.tpl" }
    {include file="footer.tpl" }