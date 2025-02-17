<?php

require_once './Models/Movie.php';
require_once './Models/Genre.php';
include_once './Database/Database.php';
/* var_dump($_POST['genre']); */
/* var_dump($_POST);
 */

/* var_dump($movie1); */

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
</head>

<body>


    <!doctype html>
    <html lang="en">

    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    </head>

    <body>
        <div class="container">

            <?php
            foreach ($movies as $movie) {
            ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $movie->title ?></h5>
                        <h6 class="card-subtle mb-2 text-muted"> <?php echo $movie->director ?></h6>
                        <p class="card-text"><?php echo $movie->year ?></p>
                        <p class="card-text"><?php echo $movie->getGenres(); ?></p>
                    </div>
                </div>
            <?php
            }
            ?>


        </div>


    </body>

    </html>