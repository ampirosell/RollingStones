{include file="header.tpl"}
<div class="content">
    <h1> Agrega una canción a un album</h1>
    <form action="addS" method="post">
        <label for="songName" >Titulo de la canción</label><br>
        <input type="text" name="songName" placeholder="Inserte nombre de canción"><br><br>
        <select name="albumId">
            {foreach from=$select  item=$item}
                <option value="{$item->id_album}">{$item->titulo_album} </option>
            {/foreach}
        </select>
        <button type="submit">Agregar</button>
    </form>
</div>
{include file="footer.tpl" }