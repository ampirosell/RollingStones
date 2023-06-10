<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>{$page}</title>
            <link rel="stylesheet" href="{BASE_URL}css\style.css">
        </head>
        <body>
            <header class="navbar">
                <h1 class="page">{$page}</h1>
                <ul>
                    <li><a href='{BASE_URL}home'>Home</a></li>
                    <li><a href='{BASE_URL}albums'>Albums</a></li>
                    <li><a href='{BASE_URL}songs'>Canciones</a></li>
                    {if isset($username)}
                        <li><a href='{BASE_URL}addAlbum'>Agregar album nuevo</a></li>
                        <li><a href='{BASE_URL}addSong'>Agregar cancion en album</a></li>
                        <li><a href='{BASE_URL}sobre'>Sobre nosotras</a></li>
                        <li><a href='{BASE_URL}logout'>LogOut {$username}</a></li>
                    {else}
                        <li><a href='{BASE_URL}sobre'>Sobre nosotras</a></li>
                        <li><a href='{BASE_URL}login'>Login</a></li>
                    {/if}
                </ul>
            </header>