{include file="header.tpl"}
<div class="content">
<ul>
    <p>Album: {$titulo_album}</p>
    <p>Año: {$year_release}</p>
    {foreach $songs as $song}
        <li>Titulo de la cancion numero {$song->id_song}: {$song->title_song}</li><br>
    {/foreach}
</ul>
</div>
{include file="footer.tpl"}
