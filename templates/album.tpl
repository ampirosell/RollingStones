{include file="header.tpl"}
<div class="content">
    <p>Para el album '{$salbum}' se tiene la siguiente informacion:</p> {*u otra cosa qsy*}
    <a href="/album/{$album->id}">{$album->titulo_album}</a>
    <p>Este album fue lanzado en el año: {$album->year_release}</p>
    <img alt="tapa del disco del album" src='{$album->img_cover}'>
{include file="footer.tpl"}