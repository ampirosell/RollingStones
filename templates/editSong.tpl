{include file="header.tpl"}
<div class="content">
<form method=POST action="{BASE_URL}updateS/{$song->id_song}">
    <h3> Estas por editar la cancion " {$song->title_song} " del Album:  {$album->titulo_album} </h3>
    <input type="text" name="title_song" value="{$song->title_song}" >
    <select name="albumId">
        {foreach from=$TodosLosAlbums  item=$UnAlbum}
            <option value="{$UnAlbum->id_album}">{$UnAlbum->titulo_album} </option>
        {/foreach}
    </select>
    <button type="submit">Editar</button>
</form>
</div>
{include file="footer.tpl"}