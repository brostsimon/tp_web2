{include file="header.tpl"}

<h2>{$opcion->carta}</h2>

<div>
  <img src="{$opcion->img_opcion}" alt='imagen'>

<h2>{$opcion->nombre}</h2>
  
  
  <h3>descripcion:</h3>

  <p>{$opcion->descripcion}</p>

  <h3>precio:</h3>      
          
 <strong> $ {$opcion->precio}</strong>     
         
    
</div>

{include file='footer.tpl'}