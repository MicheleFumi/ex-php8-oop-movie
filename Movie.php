<?php
class Movie
{
    public $name;
    public $originalName;
    public $year;
    public $director;
    public $genre;
    public $isAvailable;

    function __construct(string $_name, string $_originalName, int $_year, string $_director, string $_genre, bool $_isAvailable)
    {
        $this->name = $_name;
        $this->originalName = $_originalName;
        $this->year = $_year;
        $this->director = $_director;
        $this->genre = $_genre;
        $this->isAvailable = $_isAvailable;
    }

    public function isAvailable()
    {
        if ($this->isAvailable) {
            return  '<button type="button" class="btn btn-primary">Acquista o Noleggia</button>';
        } else {
            return '<span class="badge bg-danger">Non disponibile</span>';
        }
    }
}
