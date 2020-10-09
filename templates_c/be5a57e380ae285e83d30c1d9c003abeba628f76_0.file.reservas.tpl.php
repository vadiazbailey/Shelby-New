<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-09 01:46:03
  from 'C:\xampp\htdocs\tpe-web2\Shelby-New\templates\reservas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7fa4bb4c6838_25265438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be5a57e380ae285e83d30c1d9c003abeba628f76' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\Shelby-New\\templates\\reservas.tpl',
      1 => 1602199921,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7fa4bb4c6838_25265438 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
                    <input class="items-form" type="email" name="Email" placeholder="Email" >
                </p>
                <p>
                    <label>Comentario</label><br>
                    <textarea class="items-form" name="Comentario" placeholder="Deja tu comentario..." cols="30" rows="10"></textarea>
                </p>
                <input class="items-form" type="submit" id="submit" class="form-button" name="" value="Enviar">


            </form>
        </section>

    </article>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
