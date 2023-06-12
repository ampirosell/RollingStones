{include file="header.tpl"}
<div class="content">
    <h3 class="card-title">Nombre de la cancion: {$song->title_song}</h3>
    <p class="card-text">Cancion numero {$song->id_song} en el orden de todas las canciones de los Rolling Stones, album numero <a href="{BASE_URL}album/{$song->id_album}">{$song->id_album}</a></p>
    {if isset($username)}
        <a href="{BASE_URL}deleteS/{$song->id_song}"> Eliminar </a>   
    {/if}
</div>
{include file="footer.tpl"}