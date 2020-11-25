{include file="header.tpl" }
{if $loggedIn == true}
<form method="POST" action="mostrarCervezaActualizada" class="agregar-producto">
        <label>Edita la cerveza seleccionada: </label>
           <p>
            Estilo:
            <input class="cerveza" type="text" name="estilo" value="{$cerveza->estilo}">
            </p>
            <p>
            Volumen:
            <input class="cerveza" type="text" name="volumen" value="{$cerveza->volumen}">
            </p>
            <p>
            Graduacion Alcoholica:
            <input class="cerveza" type="text" name="graduacion_alcoholica" value="{$cerveza->graduacion_alcoholica}">
            </p>
            <p>
            Precio:
            <input class="cerveza" type="text" name="precio" value="{$cerveza->precio}">
            </p>
            <p>
            Cantidad:
            <input class="cerveza" type="text" name="cantidad" value="{$cerveza->cantidad}">
            </p>
            <p>
            Color:
            
            <select name="color">
            
            {foreach from=$colors item=colorTipo}
                {if $colorTipo->id_color == $cerveza->id_color}
                    <option value="{$colorTipo->id_color}" selected>{$colorTipo->nombre}</option>    
                    {else}
                    <option value="{$colorTipo->id_color}">{$colorTipo->nombre}</option>
                    
                {/if}
            {/foreach}
            </select>
            </p>
            {if $loggedIn==true}
                
                <input id="id_cerveza" name="id_cerveza" type="hidden" value="{$cerveza->id_cerveza}">
                 <button type="submit" class="enviarDatos">Modificar</button>
        {/if}

    </form>
{/if}
{include file="footer.tpl" }