<?php


class Movie
{

    public $title;
    public $director;
    public $year;
    public $genre;
    function __construct($_title, $_director, $_year, Genre $_genre)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->genre = $_genre;
    }
    public function setMovie()
    {
        echo "$this->title è stato girato da $this->director, nel $this->year. Come genere è $this->genre";
    }
}
