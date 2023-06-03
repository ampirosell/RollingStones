{include file="header.tpl"}
<div class="content">
<ul>
    {foreach $songs as $song}
        <li>Titulo: {$song->title_song}</li>
        <li>Año: {$song->year_release}</li><br>
    {/foreach}
</ul>
</div>
{include file="footer.tpl"}
