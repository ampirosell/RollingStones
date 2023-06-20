{include file="header.tpl"}
<div class="content albums">
    <ul>
        {foreach $albums as $album}
            <div class='card'>
                <ol><p>Album numero {$album->id_album}</p></ol>
                <ol><a href="album/{$album->id_album}">{$album->titulo_album}</a></ol>
                <ol>{$album->year_release}</ol>
                <ol><img class="img cover" src="{$album->img_cover}" alt="portada del album {$album->titulo_album}"></ol>
            </div>
        {/foreach}
    </ul>
</div>
{include file="footer.tpl"}    