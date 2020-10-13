{include file="header.tpl" }

<aside id="descripcion" class="descripcion-cervezas">
    <table>
        <thead>
            <tr>
                <th>Color</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        {foreach from=$colour item=c}
            <tr>
                <td>{$c->nombre}</td>
    
                <td><button><a href='editColour/{$colour->id_colour}'></a>Editar</button></td>
                <td><button><a href='deleteColour/{$colour->id_colour}'></a>Borrar</button></td>
            </tr>
        {/foreach}
        <tbody id="tabla" class="tbody"></tbody>


    </table>

    <form method="POST" action="insertColour" class="agregar-producto">
        <label>Pedido</label>
        <p> Color:
            <input name="nombre" type="text" value="">
        </p>
        <button type="submit" class="enviarDatos">Insertar Color</button>
    </form>
    {include file="footer.tpl" }