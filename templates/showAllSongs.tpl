{include file="header.tpl"}
<div class="content">
    {foreach $songs as $song}
        <h3 class="card-title"><a href="{BASE_URL}song/{$song->id_song}">{$song->title_song}</a></h3>
        <p>Es la cancion numero {$song->id_song} del album numero
        <a href="{BASE_URL}album/{$song->id_album}">{$song->id_album}</a></p><br>
    {/foreach}
</div>
{include file="footer.tpl"}