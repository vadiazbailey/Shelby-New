<table>
    <thead>
        <tr>
             <th>Cerveza</th>
             <th>Cantidad</th>
        </tr>
    </thead>
        {foreach from=$colorFiltro item=cerveza}
            <tr>
                <td>{$cerveza->estilo}</td>
                <td>{$cerveza->cantidad}</td>
            </tr>
        {/foreach}
        <tbody id="tabla" class="tbody"></tbody>
</table>