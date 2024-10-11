<?php

const API_URL = "https://whenisthenextmcufilm.com/api";
#Inicializar nueva sesioón en cURL; ch = cURL HANDLE

$result = file_get_contents(API_URL);

$data = json_decode($result, true);


//var_dump($data);

?>

<head>
    <title>La próxima película de Marvel</title>
    <meta name="description" content="La proxima pelicula de Marvel"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    />
</head>

<main>
    <section>
        <img src="<?= $data["poster_url"]; ?>" width="300" alt="Poster de <?= $data["title"]; ?>"
            style="border-radius: 16px"/>
    </section>
    
    <hgroup>
        <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> días</h3>
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
        <p>La siguiente es: <?= $data["following_production"]["title"]; ?></p>
    </hgroup>
</main>


<style>
    :root{
        background-color: lightsteelblue;
    }

    body{
        display: grid;
        place-content: center;
        color: white;
    }

    img {
        margin: 0 auto;
    }

    section{
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup{
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
</style>