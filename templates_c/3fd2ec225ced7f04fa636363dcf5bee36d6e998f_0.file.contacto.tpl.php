<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-09 00:39:44
  from 'C:\xampp\htdocs\Shelby\templates\contacto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7f95308d63d0_28165026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fd2ec225ced7f04fa636363dcf5bee36d6e998f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Shelby\\templates\\contacto.tpl',
      1 => 1601653375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7f95308d63d0_28165026 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<article class="contenedor-contacto">
        <section class="contacto">
            <ul class="lista-contacto">
                
                <h1>Tenemos diversas vías de contacto para que uses la que resulte más cómoda:</h1>
               
                <li class="li-contacto"><img src="imagenes/ubicacion.png" alt="logo ubicacion">  9 de julio 807</li>
                <li class="li-contacto"><img src="imagenes/telefono.png" alt="logo telefono">  2494578323</li>
                <li class="li-contacto"><img src="imagenes/mail.png" alt="logo email">  ShelbyBeer@gmail.com</li>

            </ul>

        </section>
        <section class="ubicacion">
            <iframe class="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3172.8091491908403!2d-59.138737284955944!3d-37.32334821391224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95911f90219ff281%3A0x43205ef5753cdaf6!2s9%20de%20Julio%20807%2C%20Tandil%2C%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1588376203191!5m2!1ses-419!2sar"
                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>

        </section>

    </article>

    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
