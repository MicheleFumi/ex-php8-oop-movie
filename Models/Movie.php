<?php


class Movie
{

    public $title;
    public $director;
    public $year;
    protected Genre $genre;
    function __construct($_title, $_director, $_year, Genre $_genre)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->genre = $_genre;
    }
    public function getGenres()
    {
        return implode(", ", $this->genre->getGenres());
    }
}
