{include file="header.tpl"}
<div class="content">
    <h4>En esta página accederás a la discografia de...</h4>
    <h2>LOS ROLLING STONES</h2>
    {if !isset($username)}
        <p>Inicie sesion para acceder a información de la banda</p>
        <a href="{BASE_URL}login">Login</a>
    {else}
        <p>¡Hola {$username}!</p>
    {/if}
</div>
{include file="footer.tpl"}