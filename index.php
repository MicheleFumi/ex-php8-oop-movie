<?php

class Movie
{

    public $title;
    public $director;
    public $year;

    function __construct($_title, $_director, $_year)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
    }

    public function setMovie()
    {
        echo "$this->title è stato girato da $this->director, nel $this->year";
    }
}
$movie1 = new Movie("Ritorno al futuro (Back to the Future)", "Robert Zemeckis", 1985);
$movie2 = new Movie("Il Signore degli Anelli: La Compagnia dell'Anello", "Peter Jackson", 2001);
var_dump($movie1)
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
    <?php $movie1->setMovie();
    echo "<br>";
    $movie2->setMovie();
    ?>
</body>

</html>