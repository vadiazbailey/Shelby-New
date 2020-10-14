{include file="header.tpl" }
<form method="POST" action="mostrarColorActualizado" class="agregar-producto">
        <label>Edita el color de la cerveza seleccionada: </label>
        <p>
            Estilo:
            <input class="color" type="text" name="nombre" value="{$nombre->nombre}">
        </p>
        <p>
            <input name="id_color" type="text" value="{$color->id_color}">
        </p>
        <button type="submit" class="enviarDatos">Modificar</button>
    </form>

{include file="footer.tpl" }