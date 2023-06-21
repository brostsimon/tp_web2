{include 'header.tpl'}
<div class="formulario">
    <form action="verify" method="POST">
        <h2>{$titulo}</h2>

        
            <label>Usuario</label>
            <input type="text" name="username" placeholder="Ingrese nombre">
        

        
            <label>Password</label>
            <input type="password" name="password" placeholder="Password">
        

        {if $error}
        <div>
            {$error}
        </div>
        {/if}

        <button type="submit">Ingresar</button>
    </form>

</div>
{include 'footer.tpl'}
