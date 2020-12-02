{include file="header.tpl"}
    <table>
        <thead>
            <td>Mail</td>
            <td>Actualizar Permiso</td>
            <td>Eliminar</td>      
        </thead>
    {foreach  from=$usuarios item=usuario}
        <tr>
            <td>{$usuario->mail}</td>  
            {if $usuario->admnin eq 0}
                    <td><a>Registrado</a></td>
                    <td><a href="updatePermiso/{$usuario->id_usuario}" >Hacer administrador</a></td>
                    <td><a href="deleteUsuario/{$usuario->id_usuario}" >Eliminar</a></td>
                {else}
                    <td><a>Administrador</a></td>
                    <td><a href="updatePermiso/{$usuario->id_usuario}">Eliminar permiso</a></td>
                    <td><a href="deleteUsuario/{$usuario->id_usuario}">Eliminar</a></td>
            {/if}                  
        </tr>
    {/foreach}
    </table
{include file="footer.tpl"}