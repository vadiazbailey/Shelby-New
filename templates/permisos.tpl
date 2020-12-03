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
            {if $usuario->admin eq 0}
                    <td><a>No administrador</a></td>
                    <td><button><a href="updatePermiso/{$usuario->id_usuario}" >Hacer administrador</a></td>
                    <td><button><a href="deleteUsuario/{$usuario->id_usuario}" >Eliminar</a></button></td>
                {else}
                    <td><a>Administrador</a></td>
                    <td><button><a href="updatePermiso/{$usuario->id_usuario}" >Eliminar permiso</a></button></td>
                    <td><button><a href="deleteUsuario/{$usuario->id_usuario}" >Eliminar</a></button></td>
            {/if}                  
        </tr>
    {/foreach}
    </table
{include file="footer.tpl"}