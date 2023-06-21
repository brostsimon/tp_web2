{include file="templatesABM/headerABM.tpl"}

<h2>opciones</h2>

<table>

    <thead>
        <th>nombre</th>
        <th>descripcion</th>
        <th>img_opcion</th>
        <th>precio</th>

    </thead>
    {foreach $opciones as $opcion }
    <tr>
        <td>{$opcion->nombre}</td>
        <td>{$opcion->descripcion}</td>
        <td>{$opcion->img_opcion}</td>
        <td>{$opcion->precio}</td>
        <td><button><a href="modificar_opcion/{$opcion->id_opcion}">modificar</a></button></td>
        <td><button><a href="borrar_opcion/{$opcion->id_opcion}">borrar</a></button></td>
    </tr>
    {/foreach}
</table>

{if isset($mensaje)}
{$mensaje}
{/if}


<div class="formulario">

<h2>agregar </h2>
<form action="agregar_opcionABM" method="get">
        
        
            <label>nombre de opcion</label>
            <input type="text" name="nombre" placeholder="ingrese nombre de la opcion" required>
        
        
            <label>descripcion</label>
            <input type="text" name="descripcion" placeholder="descripcion" required>
        
        
            <label>link de imagen</label>
            <input type="text" name="img_opcion" placeholder="ingrese link de imagen" required>
        
        
            <label>precio</label>
            <input type="number" name="precio" step="any" placeholder="precio" required>
        
        
            <label>clase</label>
            <select name="clase" required>
                <option value=""></option>
                {foreach $carta as $item}
                <option value="{$item->id_carta}">{$item->clase}</option>
                {/foreach}
            </select>
        
    <button type="submit">agregar</button>
</form>

</div>

{include file="templates/footer.tpl"}