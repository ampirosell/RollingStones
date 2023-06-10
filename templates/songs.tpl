{include file="header.tpl"}
<div class="content">
<ul>
    <h2>{$title_album}</h2>
    <p>Año de lanzamiento: {$year_release}</p>
    {foreach $songs as $song}
        <li>Titulo de la cancion numero {$song->id_song}: {$song->title_song}</li><br>
    {/foreach}
</ul>
{if isset($username) && $username=='admin'}
    <a href="{BASE_URL}deleteA/{$id_album}"> Eliminar </a>   
{/if}
</div>
{include file="footer.tpl"}
