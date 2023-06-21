
{include file='templatesABM/headerABM.tpl'}

<h2>modificar opcion</h2>
<form action="modificar_opcion" method="get">

    <input type="hidden" name="id_opcion" value="{$opcion->id_opcion}">
    
    <label>nombre de opcion</label>
    <input type="text" name="nombre" value="{$opcion->nombre}" placeholder="ingrese nombre de la opcion" required>
    
    <label>descripcion</label>
    <input type="text" name="descripcion" value="{$opcion->descripcion}" placeholder="descripcion" required>
    
    <label>link de imagen</label>
    <input type="text" name="img_opcion" value="{$opcion->img_opcion}" placeholder="ingrese link de imagen" required>
    
    <label>precio</label>
    <input type="number" name="precio"  value="{$opcion->precio}" step="any" placeholder="precio" required>

    <label>clase</label>
    <select name="clase" required>
        <option value=""></option>
        {foreach $carta as $item}
        <option value="{$item->id_carta}">{$item->clase}</option>
        {/foreach}
    </select>

    <button type="submit">modificar</button>
</form>

{include file="templates/footer.tpl"}
