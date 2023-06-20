{include file="header.tpl"}
<div class="content">
<ul>
    <h2>{$title_album}</h2>
    <p>Año de lanzamiento: {$year_release}</p>
    {foreach $songs as $song}
        <div class='card'>
            <ol>Titulo de la canción numero {$song->id_song}: <a href="{BASE_URL}song/{$song->id_song}">{$song->title_song}</a></ol><br>
        </div>
    {/foreach}
</ul>
{if isset($username)}
    <a href="{BASE_URL}deleteA/{$id_album}">Eliminar</a>   <br><br>
    <a href="{BASE_URL}editA/{$id_album}">Editar</a>
{/if}
</div>
{include file="footer.tpl"}
