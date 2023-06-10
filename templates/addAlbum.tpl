{include file="header.tpl"}
<div class="content">
    <form action="addA" method="post">
        <input type="text" name="title_album" placeholder="titulo del album" required/><br><br>
        <input type="number" name="year_release" placeholder="Año de lanzamiento" required/><br><br>
        <input type="text" name="img_cover" placeholder="url libre a imagen"/><br><br>
        <input type="submit" name="Agregar">
    </form>
</div>
{include file="footer.tpl"}