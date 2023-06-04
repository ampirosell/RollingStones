<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>{$page}</title>
            <link href="css\style.css" rel="stylesheet">
        </head>
        <body>
            <header class="navbar">
                <h1 class="page">{$page}</h1>
                <ul>
                    <li><a href='{BASE_URL}home'>Home</a></li>
                    <li><a href='{BASE_URL}albums'>Albums</a></li>
                    <li><a href='{BASE_URL}sobre'>Sobre</a></li>
                    <li><a href='{BASE_URL}login'>Login</a></li>
                    {if isset($username)}
                    <li><a href='{BASE_URL}login'>LOGOUT {$username}</a></li>
                    {/if}
                </ul>
            </header>