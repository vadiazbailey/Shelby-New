{if $loggedIn==true}
<form method="POST" action="insertBeer" class="agregar-producto">
<label>Agregue el Cerveza que desee</label>
<p>
    Cerveza:
    <input class="cerveza" type="text" name="cerveza" value="">
</p>
<p>
    Volumen:
    <input class="volumen" type="number" name="volumen" value="">
</p>
<p>
    Graduacion alcoholica:
    <input class="graduacion" type="number" name="graduacion" value="">
</p>
<p>
    Precio:
    <input class="precio" type="number" name="precio" value="">

</p>
<p>
    Cantidad:
    <input type="cantidad" type="number" name="cantidad" value="">

</p>
<p>
    Color:
  
    <select name="color">
        {foreach from=$colour item=color }
            <option value="{$color->id_color}">{$color->nombre}</option>
            
        {/foreach}
    </select>

</p>
<button type="submit" class="enviarDatos">Insertar cerveza</button>
</form>
{/if}