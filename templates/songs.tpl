{include file="header.tpl"}
<h1>Canciones de los Rolling Stones</h1>
<ul>
    {foreach $songs as $song}
        <li><a href="/album/{$song.id}">{$song.title}</a></li>
    {/foreach}
</ul>
{include file="footer.tpl"}
