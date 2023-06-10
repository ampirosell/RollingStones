{include file="header.tpl"}
<div class="content">
    <h2>Está seguro que quiere eliminar el album numero {$id}?</h2>
    <h3>AVISO: se eliminarán también las canciones del album.</h3>
    <a href="{BASE_URL}deleteAlbumConfirm/{$id}">Sí, eliminar.</a>
    <a href="{BASE_URL}home">Cancelar</a>
</div>
{include file="footer.tpl"}