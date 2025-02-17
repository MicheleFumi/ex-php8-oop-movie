<?php


class Genre
{
    protected $genre;
    public function __construct($_genre)
    {
        $this->genre = $_genre;
    }
    public function getgenres()
    {
        return $this->genre;
    }
}
