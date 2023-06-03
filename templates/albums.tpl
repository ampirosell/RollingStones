{include file="header.tpl"}
<div class="content">
    <ul>
        {foreach $albums as $album}
            <li><p>Album numero {$album->id_album}</p></li>
            <li><a href="album/{$album->id_album}">{$album->titulo_album}</a></li>
            <li>{$album->year_release}</li>
            <li><img src="{$album->img_cover}" alt="portada del album {$album->titulo_album}"></li>
        {/foreach}
    </ul>
</div>
{include file="footer.tpl"}    