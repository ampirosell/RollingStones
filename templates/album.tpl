{include file="header.tpl"}
<div class="content">
    <p>Para el album '<b>{$album->titulo_album}</b>' se tiene la siguiente informacion:</p> 
    <p>Este album fue lanzado en el año: <b>{$album->year_release}</b></p>
    <img alt="tapa del disco del album" src='{$album->img_cover}'>
        {*podemos poner las canciones aca*}
</div>
{include file="footer.tpl"}