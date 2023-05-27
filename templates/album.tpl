{include file="header.tpl"}
<div class="content">
    <div id="album_info">
    <p>Para el album '{$album->titulo_album}' se tiene la siguiente informacion:</p> {*u otra cosa qsy*}
    <p>Este album fue lanzado en el año: {$album->year_release}</p>
    <img alt="tapa del disco del album" src='{$album->img_cover}'>
        {*podemos poner las canciones aca*}
    </div>
</div>
{include file="footer.tpl"}