<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-08 01:53:45
  from 'C:\xampp\htdocs\Shelby\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7e55090d8061_69525017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c130c98424f241cfb1ea91ee8d278f02a51500c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Shelby\\templates\\home.tpl',
      1 => 1602110515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7e55090d8061_69525017 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--       Scroll de imagenes          -->

    <div class="contenedor-imagenes">


        <div class="slider">
            <ul>
                <li><img src="imagenes/index.png" alt="index" /></li>
                <li><img src="imagenes/cerveza.jpg" alt="index2" /></li>
                <li><img src="imagenes/publicidad.jpg" alt="" srcset=""></li>
                <li><img src="imagenes/ceveza3.jpg" alt="index4" /></li>
            </ul>
        </div>
    </div>

    <article class="contenedor-quienes-somos">

        <hr>

        <h1 >¿Quiénes somos?</h1>





        <section class="contenedor-historia">



            <div class="historia1">
                Shelby Beer es una cervecería artesanal tandilense que empezó su producción a principio 2014. El
                proyecto nació en un contexto de auge cervecero a nivel nacional y más aún local. Con un grupo
                societario con amplia experiencia en la dinámica y manejo de
                bares, pubs y discotecas, el motor de la iniciativa fue la pasión por la cerveza. Deseosos por
                aventurarnos a descubrir todas sus bondades, nos atrevimos a dar el paso final que separa el pensar del
                hacer y conformar una empresa.
                Las incansables ganas de trabajar en algo que nos motivaba hicieron que nos metiéramos de lleno en
                la cultura cervecera. Así fue que comenzamos a capacitarnos asistiendo a cursos y eventos tanto dentro
                como fuera del país, a conversar
                con homebrewers y brewmasters de fabricantes ya establecidos, quienes con gentileza y espíritu de
                colaboración compartieron sus conocimientos y experiencia con la empresa permitiéndonos acortar la curva
                de aprendizaje, al tiempo que comenzamos
                a cocinar nuestras primeras cervezas.
            </div>

    


            <div class="historia2">
                La mística cervecera y el entusiasmo que tenemos por la elaboración experimental hicieron que este grupo
                de emprendedores eligiera la producción propia como forma de vida. Somos una sociedad de apasionados por
                la Auténtica Cerveza Artesanal que traslada
                a nuestras cervecerías el mismo concepto entusiasta de siempre: acercar al consumidor la mayor cantidad
                y variedad de cervezas artesanales, de la más alta calidad y cuidadoso proceso de elaboración para
                cumplir con todas las exigencias
                y preferencias de tomabilidad.
                <figure class="dibujo">
                    <img src="imagenes/dibujo.png">
                </figure>
            </div>

        </section>


    </article>

    <hr>

    <figure class="ima-historia">
        <img src="imagenes/fabrica.jpg" alt="" srcset="">
        <img src="imagenes/bar-cerveceria.jpg" alt="" srcset="">
    </figure>

    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
