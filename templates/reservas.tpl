{include file="header.tpl" }
<article class="contenedor-reservas">

    <figure class="img-reserva">
        <img src="imagenes/reserva.jpg" alt="">
        <img src="imagenes/reserva2.jpg" alt="">
    </figure>

    <section class="contenedor-form">

        <h1>Reserva</h1>
        <p>Consultar por reservas</p>
        <p>Único turno: todos los días a las 21:30 hs.</p>


        <form class="reservas">

            <p>
                <label>Nombre y apellido</label><br>
                <input class="items-form" type="text" name="Nombre y Apellido" placeholder="Nombre y Apellido">
            </p>
            <p>Lugares</p>
            <select class="items-form">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>

            <p>Fecha</p>
            <input class="items-form" type="date">
            <p>
                <label>Telefono</label><br>
                <input class="items-form" type="number" name="Telefono" placeholder="Teléfono">
            </p>
            <p>
                <label>Email</label><br>
                <input class="items-form" type="email" name="Email" placeholder="Email">
            </p>
            <p>
                <label>Comentario</label><br>
                <textarea class="items-form" name="Comentario" placeholder="Deja tu comentario..." cols="30" rows="10"></textarea>
            </p>
            <input class="items-form" type="submit" id="submit" class="form-button" name="" value="Enviar">


        </form>
    </section>


</article>
{include file="footer.tpl" }