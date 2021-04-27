<?php

//Milestone 1: Stampiamo i dischi solo con l’utilizzo di PHP, 
//che stampa direttamente i dischi in pagina: 
//al caricamento della pagina ci saranno tutti i dischi.

include 'database.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <title>DISCHI with PHP</title>
    </head>
    <body>
    <header>
        <div class="container">
            <img src="img/Spotify_logo.png" alt="logo" />
                <div class="filter">
                    <select id="genre-filter">
                        <option value="">Generi musicali</option>
                    </select>
                </div>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="card-container">

                    <?php foreach ($database as $album) { ?>
                        <div class="cd">
                            <img src="<?php echo $album['poster'] ?>" alt="">
                            <h4>
                                <?php echo $album['title'] ?>
                            </h4>
                            <span class="author">
                                <?php echo $album['author'] ?>
                            </span>
                            <span class="year">
                                <?php echo $album['year'] ?>
                            </span>
                        </div>
                        <?php
                    } ?>
                    
                </div>
            </div>
        </main>
        
    </body>
</html>