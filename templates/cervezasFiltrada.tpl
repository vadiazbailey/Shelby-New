{include file="header.tpl" }
<table>
    <thead>
        <tr>
             <th>Cerveza</th>
             <th>Cantidad</th>
             <th>Graduacion Alcoholica</th>
        </tr>
    </thead>
        {foreach from=$colorFiltro item=cerveza}
            <tr>
                <td>{$cerveza->estilo}</td>
                <td>{$cerveza->cantidad}</td>
                <td>{$cerveza->graduacion_alcoholica}</td>
            </tr>
        {/foreach}
        <tbody id="tabla" class="tbody"></tbody>

</table>
{include file="footer.tpl"}