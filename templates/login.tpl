{include file="header.tpl"}
<div class="content">
    <div class="mensaje">{$msg}</div>
<form method="post" action="verify">
    <input type="text" name="username" id='username' placeholder="usuario">
    <input type="password" name="password" id='password' placeholder="contraseña" required>
    <input type="submit" value="Ingresar">
</form>
</div>
{include file="footer.tpl"}