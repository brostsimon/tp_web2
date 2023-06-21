{include file='templatesABM/headerABM.tpl'}

<h2> modificar carta </h2>
<form action="modificar_carta" method="get">
    
    <input type="hidden" name="id_carta" value="{$carta->id_carta}">
    
    <label>clase</label>
    <input type="text" name="clase" value="{$carta->clase}" placeholder="ingrese clase" required>
    
    <label>link de imagen</label>
    <input type="text" name="img" value="{$carta->img}" placeholder="ingrese link de imagen" required>
    <button type="submit">modificar</button>
</form>

{include file="templates/footer.tpl"}