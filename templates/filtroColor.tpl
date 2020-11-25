<form method= "GET" action="filtroColor" class="form">
        <h1>Cervezas disponibles por color: </h1>
            <select name="colorParaFiltrar">
                {foreach from=$colour item=colorFiltr}
                    {if $colorTipo->id_color == $cerveza->id_color}
                         <option value="{$colorFiltr->id_color}" selected>{$colorFiltr->nombre}</option>    
                    {else}
                        <option value="{$colorFiltr->id_color}">{$colorFiltr->nombre}</option>
                    {/if}
                {/foreach}          
            </select>
        <button type="submit" class="btn btn-primary" id="filtrarPedidos">Filtrar</button>
</form>
