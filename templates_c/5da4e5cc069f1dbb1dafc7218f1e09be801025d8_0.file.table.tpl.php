<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-09 01:57:17
  from 'C:\xampp\htdocs\Shelby\templates\table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7fa75d3d95a1_28462617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5da4e5cc069f1dbb1dafc7218f1e09be801025d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Shelby\\templates\\table.tpl',
      1 => 1602201433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:cervezas.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7fa75d3d95a1_28462617 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:cervezas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <aside  id="descripcion" class="descripcion-cervezas">
            <table>
                <thead>
                    <tr>
                        <th>Cerveza</th>
                        <th>Volumen</th>
                        <th>Graduacion alcoholica</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th></th>
                        

                    </tr>
                </thead>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cervezas']->value, 'cerveza');
$_smarty_tpl->tpl_vars['cerveza']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cerveza']->value) {
$_smarty_tpl->tpl_vars['cerveza']->do_else = false;
?>
                    <tr> 
                    <td><?php echo $_smarty_tpl->tpl_vars['cerveza']->value->estilo;?>
</td>
                    </tr>
                    <tr> 
                    <td><?php echo $_smarty_tpl->tpl_vars['cerveza']->value->volumen;?>
</td>
                    </tr>
                    <tr> 
                    <td><?php echo $_smarty_tpl->tpl_vars['cerveza']->value->graduacion_alcoholica;?>
</td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <tbody id="tabla" class="tbody"></tbody>
                

            </table>

            <form method="POST" action="insertBeer"class="agregar-producto">
                <label>Agregue el producto que desee</label>
                <p> Cerveza:
                    <input type="text" id="cervezas" value="">
                </p>

                <p>Volumen:
                    <input type="number" id="snack" value="">
                </p>
                <p>
                Graduacion alcoholica:
                    <input type="number" id="precio" value="">
                </p>
                <p>
                    Precio:
                    <input type="text" id="buscador" value="">
                   
                </p>
                <p>
                    Cantidad:
                    <input type="text" id="buscador" value="">
                    
                </p>

                <p>
                    Color:
                    <input type="text" id="buscador" value="">
                </p>
                
                <button id="btn-enviar" type="button">Enviar</button>
                <button id="btn-borrar" type="button">Borrar</button>
                

         
                
            </form>




            <figure>
                <a href="#menu-cervezas"><img src="imagenes/menu.png" alt=""></a>
            </figure>


        </aside>
    </article>


    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
