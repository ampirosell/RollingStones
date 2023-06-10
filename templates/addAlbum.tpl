{include file="header.tpl"}
<div class="content">
    <form action="addA" method="post">
        <label for="title_album" >Titulo del album</label><br>
        <input type="text" name="title_album" placeholder="titulo del album" required/><br>
        <label for="year_release">Año de lanzamiento</label><br>
        <input type="number" name="year_release" placeholder="Año de lanzamiento" required/><br>
        <label for="img_cover">Url libre a imagen de portada</label><br>
        <input type="text" name="img_cover" placeholder="url libre a imagen"/><br><br>
        <input type="submit" name="Agregar">
    </form>
</div>
{include file="footer.tpl"}