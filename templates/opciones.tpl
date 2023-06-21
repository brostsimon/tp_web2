{include file="header.tpl"}

<h2>todas las opciones</h2>

<table>

{foreach $opciones as $op}

        <tr>
          <td> <img src="{$op->img_opcion}" alt='imagen'></td>
          <td><button><a href="ver_detalle/{$op->id_opcion}">ver {$op->carta}</a></button></td>
        </tr>    
{/foreach}    
</table>

{include file='footer.tpl'}
