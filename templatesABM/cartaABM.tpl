{include file= 'templatesABM/headerABM.tpl'}

<h2>carta</h2>

<table>

    <thead>
        <th>clase</th>
        <th>link de imagen</th>
    </thead>
    {foreach $arreglo as $arr }
    <tr>
        <td>{$arr->clase}</td>
        <td>{$arr->img}</td>
        <td><button><a href="modificar_carta/{$arr->id_carta}">modificar</a></button></td>
        <td><button><a href="borrar_carta/{$arr->id_carta}">borrar</a></button></td>
    </tr>
    {/foreach}
</table>

{if isset ($mensaje)}
 {$mensaje}
{/if}


<h2>agregar </h2>
<form action="agregar_carta" method="get">

    <label>clase</label>
    <input type="text" name="clase" placeholder="ingrese clase" required>
    
    <label>link de imagen</label>
    <input type="text" name="img" placeholder="ingrese link de imagen" required>
    
    <button type="submit">agregar</button>
</form>

{include file="templates/footer.tpl"}