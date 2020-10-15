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