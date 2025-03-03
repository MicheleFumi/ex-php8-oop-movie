<?php
require_once './Movie.php';
include_once './database.php';
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
    <header>

    </header>
    <main>
        <div class="container py-3">
            <div class="row">
                <div class="col col-12 d-flex gap-4 align-items-stretch">
                    <?php foreach ($database as $movie) {

                    ?>
                        <!-- card movie1 -->
                        <div class="card shadow rounded-3 border-0" style="width: 18rem; height: auto;">
                            <div class="position-relative">
                                <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                                    class="card-img-top rounded-top-3"
                                    alt="...">
                            </div>


                            <div class="card-body">
                                <h5 class="card-title"><?php echo $movie->name ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $movie->originalName ?></h6>
                                <p class="card-text"><?php echo $movie->year . " - " . $movie->director ?></p>
                                <?php echo $movie->isAvailable() ?>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>