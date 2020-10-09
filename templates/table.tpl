{include file="header.tpl" }
{include file="cervezas.tpl" }
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
                    </tr>
                    <tr> 
                    <td>{$cerveza->volumen}</td>
                    </tr>
                    <tr> 
                    <td>{$cerveza->graduacion_alcoholica}</td>
                    </tr>
                {/foreach}
                <tbody id="tabla" class="tbody"></tbody>
                

            </table>

            <form method="POST" action="insertBeer"class="agregar-producto">
                <label>Agregue el producto que desee</label>
                <p> Cerveza:
                    <input type="text" id="cervezas" value="">
                </p>

                <p>Volumen:
                    <input type="number" id="snack" value="">
                </p>
                <p>
                Graduacion alcoholica:
                    <input type="number" id="precio" value="">
                </p>
                <p>
                    Precio:
                    <input type="text" id="buscador" value="">
                   
                </p>
                <p>
                    Cantidad:
                    <input type="text" id="buscador" value="">
                    
                </p>

                <p>
                    Color:
                    <input type="text" id="buscador" value="">
                </p>
                
                <button id="btn-enviar" type="button">Enviar</button>
                <button id="btn-borrar" type="button">Borrar</button>
                

         
                
            </form>




            <figure>
                <a href="#menu-cervezas"><img src="imagenes/menu.png" alt=""></a>
            </figure>


        </aside>
    </article>


    {include file="footer.tpl" }