{include file="header.tpl"}
<div class="content">
    <div class="mensaje">{$msg}</div>
<form method="post" action="verify">
    <label for="username">Username:</label> <br>
    <input type="text" name="username" id='username' placeholder="usuario"> <br>
    <label for="password">Password:</label> <br>
    <input type="password" name="password" id='password' placeholder="contraseña" required> <br><br>
    <input type="submit" value="Ingresar">
</form>
</div>
{include file="footer.tpl"}