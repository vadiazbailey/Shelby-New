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
                {if $loggedIn==true}
                <td><button><a href='editColour/{$c->id_color}'>Editar</a></button></td>
                <td><button><a href='deleteColour/{$c->id_color}'>Borrar</a></button></td>
            </tr>
             {/if}
        {/foreach}
        <tbody id="tabla" class="tbody"></tbody>
    </table>
    
    {include file="filtroColor.tpl"}
    {include file="insertColour.tpl"}
    </aside>
    {include file="footer.tpl"}