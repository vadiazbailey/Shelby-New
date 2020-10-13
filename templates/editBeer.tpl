{include file="header.tpl" }
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
            <input class="id_color" type="text" name="color" value="{$cerveza->nombre}">
            </p>

       <input id="id_cerveza" name="id_cerveza" type="hidden" value="{$cerveza->id_cerveza}">
        <button type="submit" class="enviarDatos">Modificar</button>
    </form>

{include file="footer.tpl" }