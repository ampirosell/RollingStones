{include file="header.tpl"}
<div class="content">
    <h2>Bienvenidos y bienvenidas</h2>
    <h4>a la discografia de...</h4>
    <h2>LOS ROLLING STONES</h2>
    {if !isset($username)}
    <p>Inicie sesion para acceder a información de la banda</p>
    <a href="login">Login</a>
    {else}
        <p>Qué hay de nuevo {$username}?</p>
    {/if}
</div>
{include file="footer.tpl"}