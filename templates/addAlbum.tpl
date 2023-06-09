{include file="header.tpl"}
<div class="content">
    <form id="addAlbum" method="get">
        <input type="text" id="title_album" placeholder="titulo del album" required/>
        <input type="text" id="year_release" placeholder="Año de lanzamiento" required/>
        <input type="text" id="img_cover" placeholder="url libre a imagen"/>
        <input type="submit" action="addAlbum()" name="Agregar">
    </form>
</div>
{include file="footer.tpl"}