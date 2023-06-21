{include file="header.tpl"}

<h1>clasificacion</h1>
<div class="portada">
{foreach $carta as $item}

        <div class="itemportada">
            <img src="{$item->img}" alt='imagen'>
            <button> <a href="clase/{$item->id_carta}" >ver {$item->clase}</a></button>
        </div>

{/foreach} 
</div>   
{include file='footer.tpl'}