{if $loggedIn==true}
<form method="POST" action="insertColour" class="agregar-producto">
<label>Inserte un Color: </label>
<p> Color:
    <input name="nombre" type="text" value="">
</p>
<button type="submit" class="enviarDatos">Insertar Color</button>
</form>
{/if}
