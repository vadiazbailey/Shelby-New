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
<<<<<<< HEAD
            {if $usuario->admin eq 0}
                    <td><a>No administrador</a></td>
                    <td><button><a href="updatePermiso/{$usuario->id_usuario}" >Hacer administrador</a></td>
                    <td><button><a href="deleteUsuario/{$usuario->id_usuario}" >Eliminar</a></button></td>
                {else}
                    <td><a>Administrador</a></td>
                    <td><button><a href="updatePermiso/{$usuario->id_usuario}" >Eliminar permiso</a></button></td>
                    <td><button><a href="deleteUsuario/{$usuario->id_usuario}" >Eliminar</a></button></td>
=======
            {if $usuario->admnin eq 0}
                    <td><a>Registrado</a></td>
                    <td><a href="updatePermiso/{$usuario->id_usuario}" >Hacer administrador</a></td>
                    <td><a href="deleteUsuario/{$usuario->id_usuario}" >Eliminar</a></td>
                {else}
                    <td><a>Administrador</a></td>
                    <td><a href="updatePermiso/{$usuario->id_usuario}">Eliminar permiso</a></td>
                    <td><a href="deleteUsuario/{$usuario->id_usuario}">Eliminar</a></td>
>>>>>>> 0dea8e61b2d30e8cbf761a3a5a764183c44091c2
            {/if}                  
        </tr>
    {/foreach}
    </table
{include file="footer.tpl"}