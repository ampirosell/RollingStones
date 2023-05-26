{include file="header.tpl"}
{include file="login.tpl"}
<div class="content">
    <ul>
        {foreach $albums as $album}
            <li><a href="/album/{$album->id}">{$album->titulo_album}</a></li>
            <li>{$album->year_release}</li>
            <li>{$album->img_cover}</li>
        {/foreach}
    </ul>
</div>
{include file="footer.tpl"}    