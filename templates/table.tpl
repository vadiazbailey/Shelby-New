{include file="header.tpl" }
<aside id="descripcion" class="descripcion-cervezas">
    <table>
        <thead>
            <tr>
                <th>Cerveza</th>
                <th>Volumen</th>
                <th>Graduacion alcoholica</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Color</th>
            </tr>
        </thead>
        {foreach from=$cervezas item=cerveza}
            <tr>
                <td>{$cerveza->estilo}</td>
                <td>{$cerveza->volumen}</td>
                <td>{$cerveza->graduacion_alcoholica}</td>
                <td>{$cerveza->precio}</td>
                <td>{$cerveza->cantidad}</td>
                <td>{$cerveza->nombre} </td>
                {if $loggedIn==true}
                    <td><button type="submit" class="enviarDatos"><a href='editBeer/{$cerveza->id_cerveza}'>Editar</a></button></td>
                    <td><button type="submit" class="enviarDatos"><a href='deleteBeer/{$cerveza->id_cerveza}'>Borrar</a></button></td>
                </tr>
                {/if}
        {/foreach}
        <tbody id="tabla" class="tbody"></tbody>


    </table>
    
    {include file="insertBeer.tpl" }
</aside>
</article>

{include file="footer.tpl" }