<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-10 22:14:32
  from 'C:\xampp\htdocs\Shelby\templates\tablaColor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f821628a347d2_01608184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92931d356134a6f88bf2cb6ccf5745f389e3ad8d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Shelby\\templates\\tablaColor.tpl',
      1 => 1602360869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f821628a347d2_01608184 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<aside  id="descripcion" class="descripcion-cervezas">
            <table>
                <thead>
                    <tr>
                        <th>Color</th>
                        <th></th>
                    </tr>
                </thead>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['colour']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                    <tr> 
                    <td><?php echo $_smarty_tpl->tpl_vars['c']->value->nombre;?>
</td>
                    
                                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <tbody id="tabla" class="tbody"></tbody>
                

            </table>

            <form method="POST" action="insertColour" class="agregar-producto">
                <label>Agregue el producto que desee</label>
                <p> Color:
                    <input type="text" name="nombre" value="">
                </p>
                <button type="submit" class="enviarDatos">Insertar Color</button>
            </form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
