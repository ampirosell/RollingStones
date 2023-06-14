{include file="header.tpl"}
<div class="content">
<form method=POST action="{BASE_URL}updateA/{$album->id_album}">
    <h3> Estas por editar el album: "{$album->titulo_album}" </h3>
    <label for="titulo_album">Titulo del album:</label>
    <input type="text" name="titulo_album" value="{$album->titulo_album}" /><br><br>
    <label for="year_release">Año de lanzamiento:</label>
    <input type="number" name="year_release" value="{$album->year_release}"/><br><br>
    <label for="img_cover">Link libre a portada del album:</label>
    <input type="text" name="img_cover" value="{$album->img_cover}"/><br><br>
    <button type="submit">Editar</button>
</form>
</div>
{include file="footer.tpl"}